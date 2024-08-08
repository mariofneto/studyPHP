<?php

$name = 'Mário';

function person()
{
    global $name;
    echo $name;
}

person();
