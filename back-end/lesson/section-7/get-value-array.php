<?php

$info = array(
    'id' => 1,
    'fullname' => 'Đỗ Hiếu Minh',
    'email' => 'hieuminh2102@gmail.com'
);

$list_prime = array(2, 3,5, 7,9);

//Lấy fullname
$fullname = $info['fullname'];
echo $fullname;

//Lấy số nguyên tố đầu tiên
echo $list_prime['0']; 

//đổ dữ liệu vào html
?>
<html>
    <head>
        <title>Lấy dữ liệu</title>
    </head>
    <body>
        <p>Id: <strong><?php echo $info['id'];?></strong></p>
        <p>Họ và tên: <strong><?php echo $info['fullname'];?></strong></p>
        <p>Email: <strong><?php echo $info['email'];?></strong></p>
    </body>
</html>