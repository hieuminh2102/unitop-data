<?php

$info = array(
    'id' => 1,
    'fullname' => 'Đỗ Hiếu Minh',
    'email' => 'hieuminh2102@gmail.com'
);
echo "<pre>";
print_r($info);
echo "</pre>";

$info['fullname'] = "Đỗ Minh Hiếu";
echo "<pre>";
print_r($info);
echo "</pre>";