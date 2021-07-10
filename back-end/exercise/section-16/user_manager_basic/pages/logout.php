<?php
echo "dang xuat";
setcookie('is_login', true, time()-3600);
setcookie('username', $_POST['username'], time()-3600);

// xu ly logout
unset($_SESSION['is_login']);
unset($_SESSION['user_login']);
redirect('?page=login');
?>