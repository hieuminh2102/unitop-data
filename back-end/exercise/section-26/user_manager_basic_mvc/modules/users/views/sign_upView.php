<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/css/reset.css" rel="stylesheet" type="text/css" />
    <link href="public/css/sign_up.css" rel="stylesheet" type="text/css" />
    <title>Đăng kí tài khoản</title>
</head>

<body>
    <div id="wp-form-reg">
        <h1 class="page-title">ĐĂNG KÍ TÀI KHOẢN</h1>
        <form id="form_reg" method="POST">
            <input type="text" name="fullname" id="fullname" placeholder="Họ và tên">
            <?php if (!empty($error['fullname'])) { ?>
                <p class="error"> <?php echo $error['fullname'] ?> </p>
            <?php } ?>
            <input type="text" name="username" id="username" placeholder="Tên đăng nhập">
            <?php if (!empty($error['username'])) { ?>
                <p class="error"> <?php echo $error['username'] ?> </p>
            <?php } ?>
            <input type="email" name="email" id="email" placeholder="Email">
            <?php if (!empty($error['email'])) { ?>
                <p class="error"> <?php echo $error['email'] ?> </p>
            <?php } ?>
            <input type="password" name="password" id="password" placeholder="Mật khẩu">
            <?php if (!empty($error['password'])) { ?>
                <p class="error"> <?php echo $error['password'] ?> </p>
            <?php } ?>
            <select name="gender" id="gender">
                <option value="">Chọn giới tính</option>
                <option value="male">Nam</option>
                <option value="female">Nữ</option>
            </select>
            <?php
            if (!empty($error['gender'])) { ?>
                <p class="error"> <?php echo $error['gender'] ?> </p>
            <?php } ?>
            <input id="btn_reg" type="submit" name="btn-reg" value="Đăng kí" />
            <p class="success"><?php if (isset($error['isseted'])) echo $error['isseted'] ?></p>
            <p class="success"> <?php if (isset($success)) echo $success ?> </p>
        </form>
        <?php
        // if (isset($_POST['btn-reg'])) {
            // echo 'đã click đăng ky ';
        // }
        ?>
        <a id="login" href="?mod=users&controller=index&action=login" id="login">Đăng nhập</a>
    </div>
</body>

</html>