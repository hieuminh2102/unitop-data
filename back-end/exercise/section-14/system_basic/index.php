<?php
require 'data/post.php';
require 'data/product.php';

require 'lib/template.php';
require 'lib/data.php';

require 'config/email.php';
require 'lib/email/email.php';
get_header();
?>

<?php
$page = !empty($_GET['page'])?$_GET['page']:'home';
$path = "pages/{$page}.php";
if(file_exists($path)){
    require $path;
}else{
    require 'inc/404.php';
}
?>

<?php
get_footer();
?>