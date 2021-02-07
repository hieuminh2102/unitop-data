<?php
//Thêm phần tử có key xác định
$info = array(
    'id' => 1,
    'fullname' => 'Đỗ Hiếu Minh',
    'email' => 'hieuminh2102@gmail.com'
);
echo '<pre>';
print_r($info);
echo '</pre>';

//Lưu trữ thêm số điện thoại
// Số điện thoại : tel, phonenumber
$info['phone'] = '0988859692';
echo '<pre>';
print_r($info);
echo '</pre>';

// Thêm phần tử có key mặc định
$list_prime = array(2, 3,5, 7,9);
echo '<pre>';
print_r($list_prime);
echo '</pre>';

$list_prime[] = 11; //key mặc định để trống, nó sẽ thêm vào phần tử cuối cùng
echo '<pre>';
print_r($list_prime);
echo '</pre>';