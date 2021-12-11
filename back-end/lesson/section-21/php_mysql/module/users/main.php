<?php
get_header();
?>
<?php
// $sql = "SELECT * FROM `tbl_users`";
// $result = mysqli_query($conn, $sql);
// $list_users = array();
// $num_row = mysqli_num_rows($result);
// if ($num_row > 0) {
//     while ($row = mysqli_fetch_assoc($result)) {
//         $list_users[] = $row;
//     }
// }
$list_users = db_fetch_array("SELECT * FROM `tbl_users`");
$num_row = db_num_rows("SELECT * FROM `tbl_users`");
// show_array($list_users);
foreach($list_users as &$user){
    $user['url_update'] = "?mod=users&act=update&id={$user['user_id']}";
    $user['url_delete'] = "?mod=users&act=delete&id={$user['user_id']}";
}
unset($user);
?>
<style>
    .table_data thead tr td {
        font-weight: bold;
        border-bottom: 2px solid #333;
    }

    .table_data tr td {
        border-bottom: 1px solid #333;
        padding: 8px 15px;
    }
</style>
<div id="content">
    <a class="add_new" href="?mod=users&act=add">Thêm mới</a>
    <h1>Danh sách thành viên</h1>
    <?php
    if (!empty($list_users)) {
    ?>
        <table class="table_data">
            <thead>
                <tr>
                    <td>Stt</td>
                    <td>Id</td>
                    <td>Fullname</td>
                    <td>Username</td>
                    <td>Email</td>
                    <td>Giới tính</td>
                    <td>Thao tác</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $temp = 0;
                foreach ($list_users as $user) {
                $temp++;
                ?>
                    <tr>
                        <td><?php echo $temp;?></td>
                        <td><?php echo $user['user_id'];?></td>
                        <td><?php echo $user['fullname'];?></td>
                        <td><?php echo $user['username'];?></td>
                        <td><?php echo $user['email'];?></td>
                        <td><?php echo show_gender($user['gender']);?></td>
                        <td>
                            <a href="<?php echo $user['url_update']?>">Sửa</a> |
                            <a href="<?php echo $user['url_delete']?>">Xóa</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <p class="num_rows">Có <?php echo $num_row?> thành viên trong hệ thống</p>
    <?php
    }
    ?>
</div>