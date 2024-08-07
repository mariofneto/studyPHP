<?php

function somar2numeros($num1, $num2)
{
    $result = $num1 + $num2;
    echo "A soma dos valores é igual a " . $result;
}

function parOuImpar($num1)
{
    if ($num1 % 2 == 0) {
        echo "O numero " . $num1 . " é par";
    } else {
        echo "O numero " . $num1 . " é impar";
    }
}

somar2numeros(35, 25.6);
parOuImpar(11);
