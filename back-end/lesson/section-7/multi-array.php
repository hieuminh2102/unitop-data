<?php
$list_users = array(
    1 => array (
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
echo '<pre>';
print_r($list_users);
echo '</pre>';
echo "====================<br>";
// Thêm phần tử cho mảng đa chiều
//id :3
//fullname : bích phương
//email: bichphuong@gmail.com
//Cách 1
$list_users[3] = array(
    'id' => 3,
    'fullname' => 'Bùi Bích Phương',
    'email' => 'bichphuong@gmail.com'
);
echo '<pre>';
print_r($list_users);
echo '</pre>';
//Cách 2
//$list_users[3]['id'] = 3;
//$list_users[3]['fullname'] = 'mai ngọc';
//$list_users[3]['email'] = 'maingoc@gmail.com';
//
//echo '<pre>';
//print_r($list_users);
//echo '</pre>';

echo "====================<br>";
//Lấy phần tử của mảng đa chiều
$info = $list_users[3];
echo '<pre>';
print_r($info);
echo '</pre>';

echo $info['id']."<br>";
echo $list_users[3]['email'];