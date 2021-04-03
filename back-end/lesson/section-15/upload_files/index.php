<?php
require 'lib/data.php';
if (isset($_FILES['file'])) {
    show_array($_FILES);
    
    //thư mục chứa file upload
    $upload_dir = 'uploads/';
    // đường dẫn của file sau khi upload
    $upload_file = $upload_dir . $_FILES['file']['name'];
    if (move_uploaded_file($_FILES['file']['tmp_name'], $upload_file)) {
        echo 'upload file thành công';
        echo "<a href='$upload_file'>Download{$_FILES['file']['name']}</a>";
    } else {
        echo 'upload không thành công';
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