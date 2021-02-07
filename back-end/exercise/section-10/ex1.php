<?php
// Lấy dữ liệu form đăng nhập bao gồm:tên đăng nhập, mật khẩu
if (isset($_POST['btn_login'])) {
    if (empty($_POST['username'])) {
        echo "không để trống tên đăng nhập";
    } else {
        $username = $_POST['username'];
        echo "username là: " . $username;
    }
    if (empty($_POST['password'])) {
        echo 'không được để trống mật khẩu';
    } else {
        $password = $_POST['password'];
        echo "password là: " . $password;
    }
}
?>
<html>
    <head>
        <title>Lấy dữ liệu form đăng nhập</title>
    </head>
    <body>
        <h1>Form đăng nhập</h1>
        <style>
           label{display: block; padding: 8px 0px;}
           input{display: block}
           #btn_login{margin-top: 20px;}
        </style>
        <form action="" method="POST">
            <label for="username">Tên đăng nhập</label>
            <input type="text" name="username" id="username">
            <label for="password">Mật khẩu</label>
            <input type="password" name="password" id="password">
            <input type="submit" id="btn_login" name="btn_login" value="login">
        </form>
    </body>
</html>

