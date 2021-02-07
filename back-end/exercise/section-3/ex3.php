<?php
#Bước 1: Xây dựng giao diện
#Bước 2: Chuẩn bị dữ liệu => tạo biến
#Bước 3: Đổ dữ liệu php lên html

$fullname = "Đỗ Minh Hiếu";
$username = "Mr.T";
$email = "hieuminh2102@gmail.com";
?>
<html>
    <head>
        <title>BÀi tập phần 3</title>
    </head>
    <body>
        <h1>Thông tin cá nhân</h1>
        <p>Họ và tên: <strong><?php echo $fullname?></strong></p>
        <p>Username: <strong><?php echo $username; ?></strong></p>
        <p>Email: <strong><?php echo $email ?></strong></p>
    </body>
</html>
