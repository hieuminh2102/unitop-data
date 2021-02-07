<?php
$a = 30;
$b= 10;
function sum(){
    global $a, $b;
    return $a + $b;
}
echo sum();

function  difference(){
    return $GLOBALS['a'] - $GLOBALS['b'];
}
echo difference();

