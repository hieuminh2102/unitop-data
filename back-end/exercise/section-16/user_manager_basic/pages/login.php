<?php

use function GuzzleHttp\Psr7\str;

if (isset($_POST['btn-login'])) {
    $error = array();
    if (empty($_POST['username'])) {
        $error['username'] = "khong de trong ten dang nhap";
    } else {
        if (!(strlen($_POST['username']) > 6 && strlen($_POST['username']) < 32)) {
            $error['username'] = "username yeu cau tu 6 den 32 ky tu";
        } else {
            if (!is_username($_POST['username']))
                $error['username'] = "username cho phep su dung ky tu, chu so, dau gach duoi, 6-32 ky tu";
            else {
                $username = $_POST['username'];
            }
        }
    }
    if (empty($_POST['password'])) {
        $error['password'] = "khong de trong mat khau";
    } else {
        if (is_password($_POST['password'])) {
            $password = $_POST['password'];
        } else {
            $error['password'] = "mat khau ban vua nhap khong dung dinh dang";
        }
    }
    //ket luan
    if (empty($error)) {
        // xu ly login
        if (check_login($username, $password)) {
            if (isset($_POST['remember-me'])) {
                setcookie('is_login', true, time() + 3600);
                setcookie('username', $username, time() + 3600);
            }
            echo "Dang nhap thanh cong";
            //luu tru phien dang nhap
            $_SESSION['is_login'] = true;
            $_SESSION['user_login'] = $username;
            //chuyen huong vao trong he thong
            redirect("?mod=home&controller=index&action=index");
        } else {
            $error['account'] = "Ten dang nhap va mat khau khong dung dinh dang";
        }
    }
}
?>


<html>

<head>
    <title>Trang đăng nhập</title>
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/login.css">
</head>

<body>
    <style>
        #lost-pass {
            display: block;
        }
    </style>
    <div id="wp-form-login">
        <h1 id="page-title">Đăng nhập</h1>
        <form id="form-login" action="" method="post">
            <input type="text" name="username" id="username" value="<?php echo set_value('username'); ?>" placeholder="Username">
            <?php echo form_error('username'); ?>
            <input type="password" name="password" id="password" value="" placeholder="Password">
            <?php echo form_error('password'); ?>

            <input type="submit" name="btn-login" id="btn-login" value="Đăng nhập">
            <?php echo form_error('account');
            ?>
            <input type="checkbox" name="remember-me" id="remember-me">
            <label for="remember-me">Ghi nhớ đăng nhập</label>
        </form>

        <a href="" id="lost-pass">Quên mật khẩu</a>
    </div>
</body>

</html>