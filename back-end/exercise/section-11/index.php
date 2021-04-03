<?php
require 'lib/data.php';
require 'lib/validation-11.php';
if (isset($_POST['btn_reg'])) {
    $error = array();
    #chuẩn hóa fullname
    if (empty($_POST['fullname'])) {
        $error['fullname'] = "Không để trống họ và tên";
    } else {
        $fullname = $_POST['fullname'];
    }
    #chuẩn hóa username
    if (empty($_POST['username'])) {
        $error['username'] = "Không để trống tên đăng nhập";
    } else {
        if (!(strlen($_POST['username']) >= 6 && strlen($_POST['username']) <= 32))
            $error['username'] = "tên đăng nhập phải từ 6 đến 32 ký tự";
        else {
            if (!is_username($_POST['username'])) {
                $error['username'] = "username cho phép sử dụng ký tự, chữ số, dấu chấm gạch dưới, 6 đến 32 ký tự";
            } else {
                $username = $_POST['username'];
            }
        }
    }
    #chuẩn hóa password
    if (empty($_POST['password'])) {
        $error['password'] = "Không để trống mật khẩu";
    } else {
        if (!is_password($_POST['password'])) {
            $error['password'] = "password sử dụng chữ cái, chữ số, ký tự đặc biệt, bắt đầ ký tự viết hoa, và có từ 6 đến 32 ký tự";
        } else {
            $password = md5($_POST['password']);
            echo $password;
        }
    }
    #chuẩn hóa phonenumber
    if (empty($_POST['phonenumber'])) {
        $error['phonenumber'] = "Không để trống số điện thoại";
    } else {
        if (!is_phone_number($_POST['phonenumber'])) {
            $error['phonenumber'] = "phone number không đúng định dạng";
        } else {
            $phonenumber = $_POST['phonenumber'];
        }
    }
    #kết luận
    if(empty($error)){ // không có 1 lỗi nào nó mới show_array @@!
        $info = array(
            'fullname' => $fullname,
            'username' => $username,
            'password' => $password,
            'phonenumber' => $phonenumber
        );
        show_array($info);
    }
}
?>
<html>
    <head>
        <title>Form đăng ký</title>
    </head>
    <body>
        <style>
            label{
                display: block;
                margin-top: 15px;
            }
            input[type="text"], input[type="password"]{
                display: block;
                padding: 5px 10px;
                border: 1px solid #b3aeae;
            }
            #btn_reg{
                margin-top: 20px;
                padding: 5px 20px;
                border: 1px solid #333;
                background: #000;
                color: #fff;
                cursor: pointer;
            }
            .error{color: #f00; font-style: italic;}
        </style>
        <h2>Form đăng ký</h2>
        <form action="" method="POST">
            <label for="fullname">Họ và tên</label>
            <input id="fullname" type="text" name="fullname" value="<?php echo set_value('fullname'); ?>">
            <?php echo form_error('fullname'); ?>

            <label for="username">Tên đăng nhập</label>
            <input id="username" type="text" name="username" value="<?php echo set_value('username'); ?>">
            <?php echo form_error('username'); ?>

            <label for="password">Mật khẩu</label>
            <input id="password" type="password" name="password" value="">
            <?php echo form_error('password'); ?>

            <label for="phonenumber">Số điện thoại</label>
            <input id="phonenumber" type="text" name="phonenumber" value="<?php echo set_value('phonenumber'); ?>">
            <?php echo form_error('phonenumber'); ?>

            <input id="btn_reg" type="submit" name="btn_reg" value="Đăng ký">
        </form>
    </body>
</html>
