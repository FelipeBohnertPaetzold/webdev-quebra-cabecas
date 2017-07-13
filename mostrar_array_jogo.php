<?php
require_once './retorna_array_inicial.php';

$jogo = $mesa;
$atual = [];

$errors = 0;

if (!file_exists("./data/atual.json")) {
    $array = [];
    for ($l = 0; $l < 6; $l++) {
        $linha = [];
        for ($c = 0; $c < 8; $c++) {
            $linha[] = '';
        }
        $array[] = $linha;
    }
    file_put_contents('./data/atual.json', json_encode($array));
}

if(!file_exists('./data/embaralhado.json')) {
    shuffle($jogo);
    file_put_contents('./data/embaralhado.json', json_encode($jogo));
}

$embaralhado = json_decode(file_get_contents('./data/embaralhado.json'));
$atual = json_decode(file_get_contents('./data/atual.json'));

function validaMovimento($linha_origem, $linha_destino, $coluna_origem, $coluna_destino)
{
    if ($linha_origem > 5 || $linha_origem < 0 || $linha_destino > 5 || $linha_origem < 0) {
        return false;
    }
    if ($coluna_origem > 7 || $coluna_origem < 0 || $coluna_destino > 7 || $coluna_destino < 0) {
        return false;
    }

    $embaralhado = json_decode(file_get_contents('./data/embaralhado.json'));
    $nome_peca = $embaralhado[$linha_origem][$coluna_origem];
    $peca = 1;

    for ($l = 0; $l < 6; $l ++) {
        for ($c = 0; $c < 8; $c ++) {
            if ($l == $linha_origem && $c == $coluna_origem && $embaralhado[$l][$c] == '') {

                return false;
            }
            if ($l == $linha_destino && $c == $coluna_destino && $peca != $nome_peca) {
                return false;
            }
        }
    }

    return true;
}

if ($_GET) {

    $linha_destino = $_GET['linha_destino'];
    $coluna_destino = $_GET['coluna_destino'];
    $linha_origem = $_GET['linha_origem'];
    $coluna_origem = $_GET['coluna_origem'];

    $valido = validaMovimento($linha_origem, $linha_destino, $coluna_origem, $coluna_destino);

    if (!$valido) {
        if (!file_exists('data/errors.txt')) {
            file_put_contents('data/errors.txt', '');
        } else {
            $errors = file_get_contents('data/errors.txt');
        }
        $errors ++;
        file_put_contents('data/errors.txt', $errors);
    } else {
        $atual[$linha_destino][$coluna_destino] = $embaralhado[$linha_origem][$coluna_origem];
        $embaralhado[$linha_origem][$coluna_origem] = '';
        file_put_contents('./data/embaralhado.json', json_encode($embaralhado));
        file_put_contents('./data/atual.json', json_encode($atual));
    }

}

if (file_exists('data/errors.txt')) {
    $errors = file_get_contents('data/errors.txt');
} else {
    $errors = 0;
}