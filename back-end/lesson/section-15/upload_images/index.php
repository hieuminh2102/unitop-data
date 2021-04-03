<?php
require 'lib/data.php';
if (isset($_FILES['file'])) {
    //thư mục chứa file upload
    $upload_dir = 'uploads/';
    // đường dẫn của file sau khi upload
    $upload_file = $upload_dir . $_FILES['file']['name'];

    //1-xử lý upload đúng file ảnh(định dạng png, jpg, gif, jpeg)
    $type_allow = array('png', 'jpg', 'gif', 'jpeg');
    $type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    // echo $type;
    $error = array();
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
            $new_file_name = $file_name."- Copy.";
            $new_upload_file = $upload_dir.$new_file_name.$type;
            $k = 1;
            while(file_exists($new_upload_file)){
                $new_file_name = $file_name." - Copy({$k})";
                $k++;
                $new_upload_file = $upload_dir.$new_file_name.$type;
            }
            $upload_file = $new_upload_file;
            // $error['file_exists'] = " file đã tồn tại trên hệ thống";
        }
    }

    if (empty($error)) {
        //true => sẽ upload file lên server
        if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
            echo "upload file thành công";
            echo "<a href='$upload_file'> download: {$_FILES['file']['name']}</a>";
            echo "<img src='{$upload_file}'/>";
            echo $upload_file;
        }
    } else {
        show_array($error);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file lên server với php</title>
</head>

<body>
    <h1>Upload file</h1>
    <form enctype="multipart/form-data" action="" method="post">
        <input type="file" name="file" /> <br> <br>
        <input type="submit" value="Upload file">
    </form>
</body>

</html>