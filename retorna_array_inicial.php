<?php

function getArrayInicial()
{
    $array = [];
    $peca = 1;
    for ($l = 0; $l < 6; $l++) {
        $linha = [];
        for ($c = 0; $c < 8; $c++) {
            $linha[] = $peca;
            $peca ++;
        }
        $array[] = $linha;
    }

    return $array;
}

$mesa = getArrayInicial();