<?php
$act = $_GET['act'];
$mod = $_GET['mod'];
$cat_id = $_GET['cat_id'];

echo "Module: {$mod}<br>Cat_id:{$cat_id}<br> Action:{$act}";
?>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <a href="?mod=product&act=detail&cat_id=1">Sản phẩm</a>
      
    </body>
</html>