<?php
get_header();
$id = (int)$_GET['id'];

?>
<?php
if (isset($_POST['btn_update'])) {
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
    #kết luận 
    if (empty($error)) {
        // echo "dữ liệu đã ok";
        // $sql = "UPDATE `tbl_users` SET `fullname`='{$fullname}',`gender`='{$gender}' WHERE `user_id`={$id}";
        // if (mysqli_query($conn, $sql)) {
        //     $alert['success'] = "cập nhật dữ liệu thành công";
        // } else {
        //     echo "lỗi" . $sql . mysqli_error($conn);
        // }
        $data = array(
            'fullname' => $fullname,
            'gender' => $gender
        );
        db_update('tbl_users', $data, "`user_id`={$id}");
    }
    // show_array($error);
}
//xuất dữ liệu ra
// $sql = "SELECT * FROM `tbl_users` WHERE `user_id`={$id}";
// $result = mysqli_query($conn, $sql);
// $item = mysqli_fetch_array($result);
// show_array($item);
$item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `user_id`={$id}")
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
        <input type="text" name="fullname" id="fullname" value="<?php if(!empty($item['fullname'])) echo $item['fullname']?>">
        <!-- //set_value(): ô nhập liệu "return $fullname mà $fullname = $_POST['fullname'] -->
        <?php echo form_error('fullname') ?>

        <select name="gender" id="gender">
            <option value="">Chọn giới tính</option>
            <option <?php if(isset($item['gender']) && $item['gender'] == 'male') echo "selected='selected'"?> value="male">Nam</option>
            <option <?php if(isset($item['gender']) && $item['gender'] == 'female') echo "selected='selected'"?> value="female">Nữ</option>
        </select>
        <?php
        echo form_error('gender');
        ?>

        <input type="submit" value="Cập nhật" name="btn_update" id="btn_update">
    </form>
</div>