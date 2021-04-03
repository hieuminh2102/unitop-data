<?php
session_start();
if (isset($_COOKIE['is_login'])) {
    echo "Cookie: {$_COOKIE['user_login']}";
}
echo "<br>TRANG CHỦ <br>";
if (!isset($_SESSION['is_login'])) {
    header("Location: login.php");
} else {
    echo "Session: {$_SESSION['user_login']}";
}
?>
<br>
<a href="logout.php">Đăng xuất</a>