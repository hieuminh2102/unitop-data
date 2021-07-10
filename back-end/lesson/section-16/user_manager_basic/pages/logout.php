<?php
echo "dang xuat";
// xu ly logout
unset($_SESSION['is_login']);
unset($_SESSION['user_login']);
redirect('?page=login');
?>