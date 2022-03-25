<?php
require 'db/connect.php';
require 'db/config.php';
require 'db/database.php';

require 'lib/data.php';
require 'lib/template.php';
require 'lib/validation.php';
require 'lib/url.php';
require 'lib/users.php';
require 'lib/pagging.php';
?>

<?php
db_connect($config);
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