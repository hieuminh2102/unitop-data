
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
            <input type="text" name="username" id="username" value="<?php echo set_value('username') /*if(!empty($username)) echo $username; */?>" placeholder="Username">
            <?php echo form_error('username') ?>
            <!-- <p class="error"> <?php if (isset($error['username'])) echo $error['username']  ?></p> -->


            <input type="password" name="password" id="password" value="" placeholder="Password">
            <?php  echo form_error('password'); ?>
            <!-- <p class="error"> <?php if (isset($error['password'])) echo $error['password'] ?></p> -->

            <input type="submit" name="btn-login" id="btn-login" value="Đăng nhập">
            <?php /* echo form_error('account'); làm sao để sử dụng đc hàm này*/?>
            <p class="error">
                <?php if(isset($error['account'])) echo $error['account']; ?>
            </p>

            <input type="checkbox" name="remember-me" id="remember-me">
            <label for="remember-me">Ghi nhớ đăng nhập</label>
        </form>

        <a href="" id="lost-pass">Quên mật khẩu</a>
        <a href="?mod=users&controller=index&action=sign_up" id="lost-pass">Đăng kí tài khoản</a>

    </div>
</body>

</html>