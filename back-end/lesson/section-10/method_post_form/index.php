<?php

function show_array($data) {
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "<pre>";
    }
}

show_array($_POST);
show_array($_SERVER);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo "username: {$username}  - password: {$password}";
}
?>

<html>
    <head>
        <title>Truyền dữ liệu form với phương thức POST</title>
    </head>
    <body>
        <form action="" method="POST">
            Name: <input type="text" name="username"> <br>
            Password: <input type="password" name="password"> <br>
            <input type="submit" name="btn_login" value="Login">
        </form>
    </body>
</html>