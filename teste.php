<?php

$names = ['Mário', 'Odila', 'Davi', 'Julia', 'Murilo'];

for ($i = 0; $i < count($names); $i++) {
    if ($names[$i] === 'Julia') {
        break;
    }
    echo "NOME - $i => $names[$i]\n";
}
