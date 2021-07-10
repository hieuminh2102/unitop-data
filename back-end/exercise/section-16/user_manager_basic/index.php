<?php
session_start();
ob_start();

//data
require 'data/users.php';
//function
require 'lib/data.php';
require 'lib/users.php';
require 'lib/url.php';
require 'lib/template.php';
require 'lib/validation.php';
?>

<?php


$page = !empty($_GET['page'])?$_GET['page']:'home';
$path = "pages/{$page}.php";

// kiem tra login (khi user co tinh vao he thong khi chua login)
if(!is_login() && $page != 'login'){
    redirect('?page=login');
}

if(file_exists($path)){
    require $path;
}else{
    require 'inc/404.php';
}
?>

<?php
?>