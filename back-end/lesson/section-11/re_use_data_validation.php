<?php
require 'lib/validation.php';
if (isset($_POST['btn_reg'])) {
    $error = array(); //phất cờ
    
    if(empty($_POST['fullname'])){
        $error['fullname'] = "bạn cần nhập họ và tên";
    } else {
        $fullname = $_POST['fullname'];
    }
    
    if(empty($_POST['gender'])){
        $error['gender'] = "bạn cần chọn giới tính";
    } else {
        $gender = $_POST['gender'];
    }
    
    //kết luận
    if (empty($error)) {
        //xử lý không có lỗi
        echo "";
    }
}
?>
<html>
    <head>
        <title>Chuẩn hóa dữ liệu form đăng nhập</title>
    </head>
    <body>
        <h1>Form đăng ký</h1>
        <style>
            label{display: block; padding: 8px 0px;}
            input{display: block}
            #btn_reg{margin-top: 20px;}
            p{color: red;}
        </style>
        <form action="" method="POST">
            <label for="fullname">Họ và tên</label>
            <input type="text" name="fullname" id="fullname" value="<?php echo set_value('fullname');?>">
            <?php echo form_error('fullname');?>
            <label>Giới tính</label>
            <select name="gender">
                <option value="">--chọn--</option>
                <option <?php if(!empty($gender) && $gender == 'male') echo "selected='selected'"; ?> value="male">Nam</option>
                <option <?php if(!empty($gender) && $gender == 'female') echo "selected='selected'";?> value="female">Nữ</option>
            </select>
            <?php echo form_error('gender');?>
            <input type="submit" name="btn_reg" value="Register">
        </form>
    </body>
</html>

