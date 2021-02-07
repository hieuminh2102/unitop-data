<?php

$x = 9;
$y = 3;

function checkEven($x){
    if($x % 2 == 0){
        return TRUE;
    } return FALSE;
}
if(!checkEven(9)){
    echo "Đây là số lẻ";
}
?>
