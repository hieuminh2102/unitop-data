<?php
require 'db/connect.php';
if(isset($_POST['btn_login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM `tbl_users` WHERE `username` = '".mysqli_real_escape_string($conn,$username)."' AND `password` = '".mysqli_real_escape_string($conn,$password)."' ";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
        echo "Bạn được phép đăng nhập";
    }else{
        echo "thông tin đăng nhập không hợp lệ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Đăng nhập tài khoản</h1>
    <form action="" method="post">
        <label for="">Tên đăng nhập</label><br>
        <input type="text" name="username" id="username"><br>
        <label for="">Mật khẩu</label><br>
        <input type="password" name="password" id="pasword"><br>
        <input type="submit" name="btn_login" value="Đăng nhập">
    </form>
</body>

</html>