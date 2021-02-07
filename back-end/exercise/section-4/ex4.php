<?php

$list_user = array(
    1 => array (
        'id' => 1,
        'name' => 'Do Hieu Minh',
        'age' => 26
    ),
    2 => array (
       'id' => 2,
        'name' => 'le tien anh',
        'age' => 22,
    )
);
echo '<pre>';
print_r($list_user);
echo '</pre>';
$list_item = array(
    1 => array (
        'id' => 1,
        'name_item' => 'iphone 6',
        'price' => 200 
    ),
    2 => array (
       'id' => 2,
        'name_item' => 'samsung galaxy',
        'price' => 190
    )
);
echo '<pre>';
print_r($list_item);
echo '</pre>';

$name = 'Hiếu';
$birth = 1995;
$weight = 60;

?>
<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <p>Tôi là <strong><?php echo "$name"; ?></strong>, sinh năm <strong><?php echo $birth; ?></strong>, cân nặng <strong><?php echo "$weight kg"; ?></strong></p>
    </body>
</html>
