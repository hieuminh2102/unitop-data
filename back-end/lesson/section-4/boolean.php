<?php

$a = 10;
if ($a % 2 == 0) {
    echo "$a là số chẵn";
}

function checkEven($n) {
    if ($n % 2 == 0) {
        return true;
    }
    return false;
}

checkEven(4);
