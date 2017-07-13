<?php

function getArrayInicial()
{
    $array = [];
    $peca = 0;
    for ($l = 0; $l < 6; $l++) {
        $linha = [];
        for ($c = 0; $c < 8; $c++) {
            $peca ++;
            $linha[] = $peca;
        }
        $array[] = $linha;
    }

    return $array;
}

$mesa = getArrayInicial();