<?php
//  Thông tin user
//  Họ và tên => fullname
//  tên đăng nhập => username
//  mật khẩu => password
//  email => email
//  id => id
$list_user = array(
    1 => array(
        'id' => 1,
        'fullname' => 'đỗ minh hiếu',
        'username' => 'hieuguru',
        'password' => md5('Hieu!@#'),
        'email' => 'hieudo.trial@gmail.com'
    ),
    2 => array(
        'id' => 2,
        'fullname' => 'đỗ bích ngọc',
        'username' => 'ngocdodo',
        'password' => md5('Ngoc!@#'),
        'email' => 'ngocngoc@gmail.com'
    ),
    3 => array(
        'id' => 3,
        'fullname' => 'bùi nguyên duy',
        'username' => 'duynguyen',
        'password' => md5('Duy!@#'),
        'email' => 'duynguyen@gmail.com'
    )
);
?>