<?php
// test git commit 1 chút
session_start();
ob_start();
#dữ liệu
require 'data/pages.php';
require 'data/products.php';
#thư viện hàm
require 'lib/pages.php';
require 'lib/product.php';
require 'lib/number.php';
require 'lib/data.php';
require 'lib/template.php';
require 'lib/cart.php';
require 'lib/url.php';

?>

<?php
$mod = !empty($_GET['mod'])?$_GET['mod']:'home';
$act = !empty($_GET['act'])?$_GET['act']:'main';
$path = "module/{$mod}/{$act}.php";
if(file_exists($path)){
    require $path;
}else{
    require 'inc/404.php';
}
?>

<?php
get_footer();
?>