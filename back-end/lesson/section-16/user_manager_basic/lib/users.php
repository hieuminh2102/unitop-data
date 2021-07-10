<?php
function check_login($username, $password)
{
    global $list_user;
    // show_array($list_user);
    foreach ($list_user as $user) {
        if (($username == $user['username']) && (md5($password) == $user['password'])) {
            return true;
        }
    }
    return false;
}
//tra ve true neu da login
function is_login()
{
    if (isset($_SESSION['is_login']))
        return true;
    return false;
}
// tra ve username cua nguoi login
function user_login()
{
    if (!empty($_SESSION['user_login'])) {
        return $_SESSION['user_login'];
    }
    return false;
}
function info_user($field){
    global $list_user;
    if(isset($_SESSION['is_login'])){
        foreach($list_user as $user){
            if($_SESSION['user_login'] == $user['username']){
                if(array_key_exists($field, $user)){
                    return $user[$field];
                }
            }
        }
    }
    return false;
}