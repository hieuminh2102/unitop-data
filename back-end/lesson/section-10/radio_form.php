<?php
if (isset($_POST['btn_reg'])) {
    echo "<pre>";
    print_r($_POST);
    echo "<pre>";
    $show_gender = array(
        'male' => 'Nam',
        'female' => 'Nữ'
    );

    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
        echo $show_gender[$gender];
    } else {
        echo "bạn chưa chọn giới tính";
    }
}
?>
<html>
    <head>
        <title>Lấy dữ liệu form từ radio button</title>
    </head>
    <body>
        <h1>Đăng ký</h1>
        <form action="" method="POST">
            <input type="radio" name="gender" value="male" id="male">
            <label for="male">Nam</label><br>
            <input type="radio" name="gender" value="female" id="female">
            <label for="female">Nữ</label><br><br>
            <input type="submit" name="btn_reg" value="Register">
        </form>
    </body>
</html>

