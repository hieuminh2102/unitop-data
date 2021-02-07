<?php

#Hàm trả dữ liệu trong nội bộ hàm

function show_array($data) {
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}

//function sum($a, $b) {
//    $t = $a + $b; //code xử lý
//    echo $t; //Giá trị trả về
//}

#Hàm trả dữ liệu thông qua return

function sum($a, $b) {
    $t = $a + $b; //code xử lý
    return $t; //Giá trị trả về
}
$t = sum(5, 7);
echo $t;
