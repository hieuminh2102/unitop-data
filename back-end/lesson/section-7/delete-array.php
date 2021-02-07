<?php
//Xóa phần tử mảng đa chiều
$list_users = array(
    1 => array (
        'id' => 1,
        'fullname' => 'đỗ minh hiếu',
        'email' => 'hieuminh2102@gmail.com'
    ),
    2 => array(
        'id' => 2,
        'fullname' => 'Lam trường',
        'email' => 'lamtruong@gmail.com',
        'website' => 'unitop.vnn'
    )
);
echo '<pre>';
print_r($list_users);
echo '</pre>';

//Xóa thông tin của lam trường
unset($list_users[2]['website']);

echo '<pre>';
print_r($list_users);
echo '</pre>';

echo "================";
$info = array(
    'id' => 1,
    'fullname' => 'Đỗ Hiếu Minh',
    'email' => 'hieuminh2102@gmail.com',
    'website' => 'unitop.vn'
);
//echo '<pre>';
//print_r($info);
//echo '</pre>';
//xóa phần tử mảng 1 chiều
unset($info['website']);
//echo '<pre>';
//print_r($info);
//echo '</pre>';