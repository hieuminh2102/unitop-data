<?php
// hàm kiểm tra username, email có trùng trong hẹ thống không
function isseted_user($username, $email)
{
    //nếu bản ghi > 0 <=> đã tồn tại username và email rồi(mời nhâp email và username khác)
    $list_users = db_num_rows("SELECT * FROM `tbl_users` WHERE `username` = '{$username}' OR `email` = '{$email}' ");
    if ($list_users > 0) {
        return true;
    } else {
        return false;
    }
}
// hàm thêm tài khoản đã đăng ky vào database
function insert_user($user = array()){
    db_insert('tbl_users', $user); 
}