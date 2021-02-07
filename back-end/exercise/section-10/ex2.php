<?php
if (isset($_POST['btn_reg'])) {
    $name = $_POST['name'];
    echo $name;
    if (empty($_POST['username'])) {
        echo "không để trống tên đăng nhập";
    } else {
        $username = $_POST['username'];
        echo $username;
    }
    if (empty($_POST['password'])) {
        echo "không để trống mật khẩu";
    } else {
        $password = $_POST['password'];
        echo $password;
    }
    if (empty($_POST['email'])) {
        echo "không để trống email";
    } else {
        $email = $_POST['email'];
        echo $email;
    }
    if (empty($_POST['phonenumber'])) {
        echo "không để trống số điện thoại";
    } else {
        $phonenumber = $_POST['phonenumber'];
        echo $phonenumber;
    }
    if (empty($_POST['gender'])) {
        echo "bạn chưa chọn giới tính";
    } else {
        $gender = $_POST['gender'];
        echo $gender;
    }
}
?>
<html>
    <head>
        <title>Lấy dữ liệu form đăng ký</title>
    </head>
    <body>
        <style>
            label{display: block;  padding: 8px 0px;}
            input{display: block;}
            #btn_reg,select{margin-top: 20px;}
            
        </style>
        <h1>Đăng ký tài khoản</h1>
        <form action="" method="POST">
            <label for="name">Họ và tên</label>
            <input type="text" name="name" id="name">
            <label for="username">Tên đăng nhập</label>
            <input type="text" name="username" id="username">
            <label for="password">Mật khẩu</label>
            <input type="password" name="password" id="password">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="phonenumber">Số điện thoại</label>
            <input type="text" name="phonenumber" id="phonenumber">
            <!--            <label>Chọn giới tính</label>
                        <input type="radio" name="gender" value="male" id="male">
                        <label for="male">Nam</label>
                        <input type="radio" name="gender" value="female" id="female">
                        <label for="female">Nữ</label>-->
            <select name="gender">
                <option value="">--Chọn giới tính--</option>
                <option value="male">Nam</option>
                <option value="female">Nữ</option>
            </select>
            <input type="submit" id="btn_reg" name="btn_reg" value="Đăng ký">
        </form>
    </body>
</html>
