<?php
#B1: Kiểm tra submit form
#B2: Lấy dữ liệu
if(isset($_POST['btn_login'])){
    if(empty($_POST['username'])){
        echo "Không được để trống tên đăng nhập";
    } else {
        $username = $_POST['username'];
        echo $username;
    }
    
}
?>
<html>
    <head>
        <title>Lấy dữ liệu form từ textbox</title>
    </head>
    <body>
        <form action="" method="POST">
            Username: <input type="text" name="username"> <br>
            Password: <input type="password" name="password"> <br>
            <input type="submit" name="btn_login" value="Login">
        </form>
    </body>
</html>
