<?php

# if 
#Kiểm tra số chẵn
//$a = 10;
//if($a % 2 == 0){
//    echo "{$a} là số chẵn";
//}
# if .. else
//$a = 9;
//if($a % 2 == 0){
//    echo "{$a} là số chẵn";
//} else {
//    echo "{$a} là số lẻ";
//}
# if elseif else
//$point = 7;
//if($point < 4){
//    echo "F";
//}elseif($point < 5.5){
//    echo "D";
//}elseif($point < 7){
//    echo "C";
//}elseif($point < 8.5){
//    echo "B";
//}else{
//    echo "A";   
//}
# Cấu trúc điều khiển lồng nhau
$point = 10;
if (($point >= 0) && ($point <= 10)) {
    if ($point < 4) {
        echo "F";
    } elseif ($point < 5.5) {
        echo "D";
    } elseif ($point < 7) {
        echo "C";
    } elseif ($point < 8.5) {
        echo "B";
    } else {
        echo "A";
    }
} else {
    echo 'dữ liệu bạn nhập vào không hợp lệ';
}
?>

