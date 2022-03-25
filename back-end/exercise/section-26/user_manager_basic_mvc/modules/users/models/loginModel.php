<?php
// cách 1 nếu sửu dụng cách này thì $list_users = db_fetch_array("SELECT * FROM `tbl_users`);
// function check_login($username, $password)
// {
//     global $list_user;
//     // show_array($list_user);
//     foreach ($list_user as $user) {
//         if (($username == $user['username']) && (md5($password) == $user['password'])) {
//             return true;
//         }
//     }
//     return false;
// }
# cach 2: Hàm kiểm tra đã đăng nhập với tài khoản và mật khẩu đã cho trên database chưa?
function check_login($username, $password) {
    $list_users = db_num_rows("SELECT * FROM `tbl_users` WHERE `username` = '{$username}' AND `password` = '{$password}'");
    if($list_users > 0){
        return true;
    }else{     
        return false;    
    }
}

#hàm hiển thị tên nếu đăng nhập thành công
#lấy Một fullname khi đăng nhập thành công
//phải sử dụng db_fetch_row (return về array) và lấy 1 bản ghi với điều kiện where là bắt buộc
// hàm implode la hàm biến mảng thành chuỗi => $fullname là chuỗi => dùng echo
function name_login($username, $password){
    $list_users = db_fetch_row("SELECT `tbl_users`.`fullname` FROM `tbl_users` WHERE `username` = '{$username}' AND `password` ='{$password}'");
    $fullname = implode("," , $list_users);
    return $fullname;
}

