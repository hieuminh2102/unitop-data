<?php

use function GuzzleHttp\Promise\queue;

require('db/connect.php');
if (isset($_POST['btn_add_comment'])) {
    setcookie('user_login', 'admin', time()+3600);
    setcookie('is_login', true, time()+3600);

    $username = $_POST['username'];
    $content = htmlentities($_POST['content']);
    // echo $content;
    if (!empty($username) && !empty($content)) {
        $sql = "INSERT INTO `tbl_comment` (`username`, `content`) VALUE ('$username','$content')";
        $result = mysqli_query($conn, $sql);
        if (!$result) {
            echo mysqli_error($conn);
        } else {
            echo "bạn đã comment thành công";
        }
    }
}

$sql = "SELECT * FROM `tbl_comment`";
$result = mysqli_query($conn, $sql);
$list_comment = array();

while ($row = mysqli_fetch_assoc($result)) {
    $list_comment[] = $row;
}

// if(is_array($list_comment)){
//     echo "<pre>";
//     print_r($list_comment);
//     echo "</pre>";
// }
?>
<html>

<head>
    <title>Lỗi bảo mật XSS</title>
</head>

<body>
    <style>
        p {
            font-weight: bold;
        }

        span {
            font-weight: 100;
        }
    </style>
    <h1>Bình luận</h1>
    <form action="" method="POST">
        <label for="username">Tên đăng nhập</label><br>
        <input type="text" name="username" id="username"><br>
        <label for="content">Nội dung bình luận</label><br>
        <textarea name="content" id="content" cols="50" rows="10"></textarea><br><br>
        <input type="submit" name="btn_add_comment" value="Bình luận">
    </form>
    <?php if (!empty($list_comment)) {
        foreach ($list_comment as $item) {
    ?>
            <p><?php echo $item['username'].":";?> <span><?php echo $item['content']?></span></p>
    <?php
        }
    }
    ?>
</body>

</html>