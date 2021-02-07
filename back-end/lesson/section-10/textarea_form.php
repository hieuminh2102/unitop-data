<?php
if (isset($_POST['btn_add'])) {
    if (empty($_POST['post_detail'])) {
        echo "bạn cần nhập thông tin bài viết ";
    } else {
        $post_detail = $_POST['post_detail'];
        echo $post_detail;
    }
}
?>
<html>
    <head>
        <title>Lấy dữ liệu form từ textarea</title>
    </head>
    <body>
        <h1>Thêm bài viết</h1>
        <form action="" method="POST">
            <label>Chi tiết</label><br>
            <textarea name="post_detail" cols="50" rows="15"></textarea><br><br>
            <input type="submit" name="btn_add" value="Thêm bài viết">
        </form>
    </body>
</html>