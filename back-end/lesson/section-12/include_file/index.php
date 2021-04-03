<?php
require 'inc/header.php';
require 'lib/data.php';
?>
<div id="content">
    HOME
    <?php 
    $data = array(1,2,3);
    show_array($data);
    ?>
</div>
<?php
require 'inc/footer.php';
?>
