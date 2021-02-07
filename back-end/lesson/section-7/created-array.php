<?php

# Tạo mảng rỗng
$error = array();
$error['username'] = 'Bạn không được để trống tên đăng nhập';

# Tạo mảng với key mặc định
$list_odd = array(2, 1, 4, 9, 10);

# Tạo mảng với giá trị xác định
# user: họ tên, email, id
$info = array(
    'id' => 1, 
    'username' => 'do minh hieu', 
    'email' => 'hieuminh2102@gmail.com');

echo "<pre>";
print_r($error);
echo "</pre>";
