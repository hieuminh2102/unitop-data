<?php

#1 Tạo biến lưu trữ danh sách thành viên
$list_user = array();

$listUser = array();

#2 Tạo biến lưu trữ danh sách sản phẩm
$list_product = array();

$listProduct = array();

#3 Hiển thị thông ti cá nhân(các thông tin lưu trữ ở dạng biến)
// Tôi là Hiếu , sinh năm 1995, cân nặng 60kg
$lastname = "Hiếu";
$birthday = "21/02/1995";
$weight = "60kg";
?>
<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <p>Tôi là <strong><?php echo $lastname;?></strong>, sinh năm<strong><?php echo $birthday;?></strong>, cân nặng <strong><?php echo $weight;?></strong> </p>
    </body>
</html>




