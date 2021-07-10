<?php
function is_username($username)
{
    $partern = "/^[A-Za-z0-9_\.]{6,32}$/";
    if (!preg_match($partern, $username, $matchs))
        return false;
    return true;
}
function is_password($password)
{
    $partern = "/^([A-Z]){1}([\w_\!@#$%^&*()]+){5,31}$/";
    if (preg_match($partern, $password, $matchs))
        return true;
    return false;
}
function form_error($label_field)
{
    global $error;
    if (!empty($error[$label_field])) {
        return "<p class='error'>{$error[$label_field]}</p>";
    }
}
function set_value($label_field)
{
    global $$label_field;
    if (!empty($$label_field))
        return $$label_field;
}
