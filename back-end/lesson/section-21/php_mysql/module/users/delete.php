<?php
    $id = (int)$_GET['id'];
    // $sql = "DELETE FROM `tbl_users` WHERE `user_id` = {$id}";
    // if(mysqli_query($conn, $sql)){
    //     echo "đã xóa dữ liệu thành công";
    //     redirect("?mod=users&act=main");
    // }

    db_delete("tbl_users","`user_id`={$id}");
    redirect("?mod=users&act=main");
?>