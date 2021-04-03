<?php
if (isset($_POST['btn-add'])) {
    $error = array();
    if (empty($_POST['post-title'])) {
        $error['post-title'] = "không để trống tiêu đề bài viết";
    } else {
        $post_title = $_POST['post-title'];
    }
    if (empty($_POST['post-content'])) {
        $error['post-content'] = "không để trống chi tiết bài viết";
    } else {
        $post_detail = $_POST['post-content'];
    }
        //thư mục chứa file upload
        $upload_dir = 'pages/uploads/';
        // đường dẫn của file sau khi upload
        $upload_file = $upload_dir . basename($_FILES['file']['name']);

        //1-xử lý upload đúng file ảnh(định dạng png, jpg, gif, jpeg)
        $type_allow = array('png', 'jpg', 'gif', 'jpeg');
        $type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
        // echo $type;
        if (!in_array(strtolower($type), $type_allow)) {
            $error['file_type'] = "chỉ được upload file có đuôi png, jpg, gif, jpeg";
        } else {
            #2- upload file có kích thước cho phép(20Mb = 20971520)
            $file_size = $_FILES['file']['size'];
            if ($file_size > 20971520) {
                $error['file_size'] = "chỉ được upload file bé hơn 20Mb";
            }
            #3- kiểm tra trùng file trên hệ thống
            if (file_exists($upload_file)) {
                //Xử lý đổi tên file tự động
                # tạo file mới
                // tên file . đuôi file
                $file_name = pathinfo($_FILES['file']['name'], PATHINFO_FILENAME);
                $new_file_name = $file_name . "- Copy.";
                $new_upload_file = $upload_dir . $new_file_name . $type;
                $k = 1;
                while (file_exists($new_upload_file)) {
                    $new_file_name = $file_name . " - Copy({$k})";
                    $k++;
                    $new_upload_file = $upload_dir . $new_file_name . $type;
                }
                $upload_file = $new_upload_file;
                // $error['file_exists'] = " file đã tồn tại trên hệ thống";
            }
        }
    if (empty($error)) {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
            echo "upload file thành công";
            echo "<a href='$upload_file'> download: {$_FILES['file']['name']}</a>";
            echo "<img src='{$upload_file}'/>";
            echo $upload_file;
        }
    } else {
        echo "<pre>";
        print_r($error);
        echo "<pre>";
    }
}
// ===========================================================



?>
<div id="content">
    <h2>Form nhập liệu thông tin bài viết</h2>
    <form enctype="multipart/form-data" action="" method="post">
        <label for="post-title">Tiêu đề bài viết</label>
        <input type="text" name="post-title" id="post-title">

        <label for="post-excerpt">Mô tả ngắn</label>
        <input type="text" name="post-excerpt" id="post-excerpt">

        <label for="post-content">Chi tiết bài viết</label>
        <textarea class="ckeditor" name="post-content" id="post-content" cols="30" rows="10"></textarea>

        <label for="picture">Ảnh đại diện</label>
        <input type="file" name="file" id="picture">
        <input type="submit" name="btn-add" value="Add info">
    </form>
    <div class="post-detail">
        <?php if (isset($post_title)) echo $post_title;   ?>
        <?php if (isset($post_detail)) echo $post_detail;   ?>
    </div>
</div>