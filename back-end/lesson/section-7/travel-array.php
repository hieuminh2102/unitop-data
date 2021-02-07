<?php

$list_users = array(
    1 => array(
        'id' => 1,
        'fullname' => 'đỗ minh hiếu',
        'email' => 'hieuminh2102@gmail.com'
    ),
    2 => array(
        'id' => 2,
        'fullname' => 'Lam trường',
        'email' => 'lamtruong@gmail.com'
    )
);
echo "<pre>";
print_r($list_users);
echo "</pre>";
foreach ($list_users as $item) {
    echo "<pre>";
    print_r($item);
    echo "</pre>/";
//    echo $item['id']."<br>";
//    echo $item['fullname']."<br>";
//    echo $item['email']."<br>";
    echo "<br>======================<br>";
}
echo "====================";
//duyệt mảng một chiều
//$list_prime = array(2,3,5,7);
//
//$t = 0;
//foreach ($list_prime as $key => $item){
//    echo "{$key} => {$item}"."<br>";
//    $t += $item;
//}
//echo "Tổng t= {$t}";


