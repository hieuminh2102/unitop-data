<?php

function show_array($data) {
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
}

show_array($_POST);
//show_array($_SERVER);
if (isset($_POST['btn_login'])) {
    $info_user = array(
        'username' => 'admin',
        'password' => 'admin!@#',
    );
    $error = array();
    if (empty($_POST['username'])) {
        $error['username'] = "Không được để trống tên đăng nhập";
    } else {
        $username = $_POST['username'];
    }
    if (empty($_POST['password'])) {
        $error['password'] = "Ko được để trống mật khẩu";
    } else {
        $password = $_POST['password'];
    }
    if (empty($error)) {//đã nhập dữ liệu
        //Kiểm tra login
        if (($username == $info_user['username']) && ($password == $info_user['password'])) {
            //xử lý login
            $redirect_to = $_POST['redirect_to'];
//            echo $redirect_to;
            header("location: $redirect_to");
        } else {
            $error['login'] = "Tên đăng nhập hoặc mật khẩu không đúng";
        }
    }
    if (!empty($error)) {
        show_array($error);
    }
}
?>

<html>
    <head>
        <title>Nhận dữ liệu form từ hidden field</title>
    </head>
    <body>
        <form action="" method="POST">
            Username: <input type="text" name="username"> <br>
            Password: <input type="password" name="password"> <br>
            <input type="hidden" name="redirect_to" value="cart.php"> 
            <input type="submit" name="btn_login" value="Login">
        </form>
    </body>
</html>