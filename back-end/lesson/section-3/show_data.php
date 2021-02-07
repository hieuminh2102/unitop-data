<?php
//============================
//Xuất dữ liệu trong php
//============================
#xuất dữ liệu echo
$a = 10;
$b = 15;
echo 'Giá trị của a là: ' . $a; // nối chuỗi và biến dùng dấu chấm
echo "Giá trị của b là: {$b}"; //phải là dấu nháy kép khi đưa biến vào chuỗi

#xuất dữ liệu print_r
$my_array = array('A', 'b', 'c');
//echo $my_array; không dùng echo để xuất dữ liệu mảng
echo "<pre>";
print_r($my_array);
echo "</pre>";
?>
<html>
    <head>
        <title>Cú pháp viết php</title>
    </head>
    <style>
        h1 {
            color: red;
        }
    </style>
    <body>
        <h1>Xin chào tôi là <?php echo "Đỗ Minh Hiếu" ?></h1>
    </body>
</html>


