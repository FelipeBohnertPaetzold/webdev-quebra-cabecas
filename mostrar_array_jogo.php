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

