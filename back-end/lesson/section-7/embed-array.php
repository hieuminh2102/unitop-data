<?php
$list_prime = array(2, 3, 5, 7, 9);
$list_user = array(
    1000 => array(
        'id' => 1000,
        'fullname' => 'đỗ minh hiếu',
        'email' => 'hieuminh@gmail.com'
    ),
    1268 => array(
        'id' => 1268,
        'fullname' => 'đăng ngọc anh',
        'email' => 'dangngocanh@gmail.com'
    )
);

function show_array($data) {
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}
?>
<html>
    <head>
        <title>Nhúng dữ liệu mảng lên html</title>
    </head>
    <body>
        <h1>Danh sah sách số nguyên tố</h1>
        <table border="1">
            <thead>
                <tr>
                    <th align="center" width="50">Stt</th>
                    <th align="center" width="200">Số nguyên tố</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $temp = 0;
                foreach ($list_prime as $item) {
//                    echo $item;
                    $temp ++;
                    ?>
                    <tr>
                        <td align="center"><?php echo $temp; ?></td>
                        <td align="center"><?php echo $item; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <h1>Danh sách thành viên</h1>
        <?php if (!empty($list_user)) {
            ?>
            <table border="1">
                <thead>
                    <tr>
                        <th align="center">Stt</th>
                        <th align="center">Id</th>
                        <th>Họ và tên</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $temp = 0;
                    foreach ($list_user as $user) {
                        $temp ++;
//                    show_array($user);
                        ?>
                        <tr>
                            <td align="center" width="50"><?php echo $temp; ?></td>
                            <td align="center" width="50"><?php echo $user['id']; ?></td>
                            <td width="200"><?php echo $user['fullname'] ?></td>
                            <td width="200"><?php echo $user['email'] ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
            <?php
        } else {
            ?>
            <p>Không tồn tại dữ liệu</p>
            <?php
        }
        ?>
    </body>
</html>
