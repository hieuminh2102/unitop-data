<?php

function form_error($label_field){
    global $error;
    if(!empty($error[$label_field])){
        return "<p class='error'>{$error[$label_field]}</p>";
    }
}

function is_username($username) {
    $partern = "/^[A-Za-z0-9_\.]{6,32}$/";
    if (!preg_match($partern, $username, $matchs))
        return FALSE;
    return true;
}

function is_password($password) {
    $partten = "/^([A-Z]){1}([\w_\!@#$%^&*()]+){5,31}$/";
    if (preg_match($partten, $password, $matchs))
        return TRUE;
    return FALSE;
}

function is_phone_number($number) {
    $partten = "/^(05|09|07|08|03[2|3|4|5|6|7|8|9])+([0-9]{8})$/";
    if (preg_match($partten, $number, $matchs))
        return TRUE;
    return FALSE;
}

function set_value($label_field){
    global $$label_field;
    if(!empty($$label_field)){
        return $$label_field;
    }
}



