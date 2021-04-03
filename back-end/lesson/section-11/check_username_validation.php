<?php
require 'lib/validation.php';
if (isset($_POST['btn_login'])) {
    $error = array(); //phất cờ
    if (empty($_POST['username'])) {
        //hạ cờ
        $error['username'] = "Không để trống tên đăng nhập";
    } else {
        if (!(strlen($_POST['username']) >= 6 && strlen($_POST['username']) <= 32)) {
            $error['username'] = "username yêu cầu từ 6 đến 32 ký tự";
        } else {
            if (!is_username($_POST['username'])) {
                $error['username'] = "username cho phép sử dụng ký tự, chữ số, dấu chấm gạch dưới, 6 đến 32 ký tự";
            } else {
                $username = $_POST['username'];
                echo $username;
            }
        }
    }
    if (empty($_POST['password'])) {
        //hạ cờ
        $error['password'] = "Không để trống mật khẩu";
    } else {
        $password = $_POST['password'];
    }
    //kết luận
    if (empty($error)) {
        //xử lý không có lỗi
        echo "Username: {$username} <br> Password: {$password}";
    } else {
        echo "<pre>";
        print_r($error);
        echo "<pre>";
    }
}
?>
<html>

<head>
    <title>Chuẩn hóa dữ liệu form đăng nhập</title>
</head>

<body>
    <h1>Form đăng nhập</h1>
    <style>
        label {
            display: block;
            padding: 8px 0px;
        }

        input {
            display: block
        }

        #btn_login {
            margin-top: 20px;
        }

        p {
            color: red;
        }
    </style>
    <form action="" method="POST">
        <label for="username">Tên đăng nhập</label>
        <input type="text" name="username" id="username" value="<?php if (!empty($username)) echo $username; ?>">
        <p class="error"><?php if (!empty($error['username'])) echo $error['username']; ?></p>
        <label for="password">Mật khẩu</label>
        <input type="password" name="password" id="password">
        <?php if (!empty($error['password'])) echo "<p class='error'> {$error['password']} </p>" ?>
        <input type="submit" id="btn_login" name="btn_login" value="login">
    </form>
</body>

</html>