<?php
get_header();
?>
<?php
if (isset($_POST['btn_reg'])) {
    $error = array();
    $alert = array();
    #chuẩn hóa fullname
    if (empty($_POST['fullname'])) {
        $error['fullname'] = "Không để trống họ và tên";
    } else {
        $fullname = $_POST['fullname'];
    }
    #kiểm tra giới tính
    if (empty($_POST['gender'])) {
        $error['gender'] = "bạn cần chọn giới tính";
    } else {
        $gender = $_POST['gender'];
    }
    #chuẩn hóa username
    if (empty($_POST['username'])) {
        $error['username'] = "không để trống tên đăng nhập";
    } else {
        if (!strlen($_POST['username']) > 6 && !strlen($_POST['username']) < 32) {
            $error['username'] = "tên đăng nhập phải lớn hơn 6 ký tự và nhỏ hơn 32 ký tự";
        } else {
            $partten = "/^[A-Za-z0-9_\.]{6,32}$/";
            if (!preg_match($partten, $_POST['username'])) {
                $error['username'] = "username sử dụng ký tự, chữ số,dấu chấm, dấu gạch dưới và có 6->32 ký tự";
            } else {
                $username = $_POST['username'];
            }
        }
    }
    #chuẩn hóa email
    if (empty($_POST['email'])) {
        $error['email'] = "không để trống email";
    } else {
        $partten = "/^[A-Za-z0-9_.]{2,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/";
        if (!preg_match($partten, $_POST['email'])) {
            $error['email'] = "email không đúng định dạng";
        } else {
            $email = $_POST['email'];
        }
    }

    #chuẩn hóa password
    if (empty($_POST['password'])) {
        $error['password'] = "không để trống mật khẩu";
    } else {
        $partten = "/^([A-Z]){1}([\w_\!@#$%^&*()]+){5,31}$/";
        if (!preg_match($partten, $_POST['password'])) {
            $error['password'] = "mật khẩu không đúng định dạng";
        }else{
            $password = md5($_POST['password']);
        }
    }
    #kết luận 
    if (empty($error)) {
        echo "dữ liệu đã ok";
        // $sql = "INSERT INTO `tbl_users`(`fullname`,`email`,`password`,`username`,`gender`)"
        //     . "VALUES('{$fullname}','{$email}','{$password}','{$username}','{$gender}')";
        // if (mysqli_query($conn, $sql)) {
        //     $alert['success'] = "thêm dữ liệu thành công";
        //     redirect("?mod=users&act=main");
        // } else {
        //     echo "lỗi". $sql . mysqli_error($conn);
        // }


        $data = array(
            'fullname' => $fullname,
            'email' => $email,
            'password' => $password,
            'username' => $username,
            'gender' => $gender
        );
        $id_insert = db_insert('tbl_users', $data);
        echo $id_insert;
        redirect("?mod=users&act=main");
    }
    // show_array($error);
}
?>
<div id="content">
    <h1>Thêm mới</h1>
    <?php
    if (!empty($alert['success'])) {
    ?>
        <p class="success"><?php echo $alert['success'] ?></p>
    <?php
    }
    ?>
    <form action="" method="POST">
        <label for="fullname">Họ và tên</label>
        <input type="text" name="fullname" id="fullname" value="<?php echo set_value('fullname'); ?>">
        <!-- //set_value(): ô nhập liệu "return $fullname mà $fullname = $_POST['fullname'] -->
        <?php echo form_error('fullname') ?>

        <label for="username">Tên đăng nhập</label>
        <input type="text" id="username" name="username" value="<?php echo set_value('username') ?>">
        <?php echo form_error('username') ?>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php echo set_value('email')?>">
        <?php echo form_error('email') ?>


        <label for="password">Mật khẩu</label>
        <input type="password" id="password" name="password" value="">
        <?php echo form_error('password') ?>

        <select name="gender" id="gender">
            <option value="">Chọn giới tính</option>
            <option value="male">Nam</option>
            <option value="female">Nữ</option>
        </select>
        <?php
        echo form_error('gender');
        ?>

        <input type="submit" value="Đăng ký" name="btn_reg">
    </form>
</div>