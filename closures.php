<?php

$person = function ($name) {
    return "teste {$name}";
};

var_dump($person('Mário'));
