<?php
require_once './retorna_array_inicial.php';

$jogo = $mesa;
$atual = [];

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

if ($_GET) {
    $atual[$_GET['linha_destino']][$_GET['coluna_destino']] = $embaralhado[$_GET['linha_origem']][$_GET['coluna_origem']];
    $embaralhado[$_GET['linha_origem']][$_GET['coluna_origem']] = '';
    file_put_contents('./data/embaralhado.json', json_encode($embaralhado));
    file_put_contents('./data/atual.json', json_encode($atual));
}