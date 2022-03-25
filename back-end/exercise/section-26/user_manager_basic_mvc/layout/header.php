<html>

<head>
    <title>Hệ thống điều hướng cơ bản</title>
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" href="public/css/style.css">
</head>

<body>
    <div id="wrapper">
        <div id="header">
            <a href="" id="logo">Unitop</a>
            <div id="user-login">
                <?php /*  echo info_user('id');*/ ?>
                <p>Xin chao
                    <strong><?php  if(is_login()) echo $_SESSION['name_login']  ?></strong><a href="?mod=users&controller=index&action=log_out">Thoat</a>
                </p>
            </div>
            <ul id="main-menu">
                <li><a href="?">Trang chủ</a></li>
                <li><a href="?mod=page&controller=index&action=about">Giới thiệu</a></li>
                <li><a href="?mod=news&controller=index&action=news">Tin tức</a></li>
                <li><a href="?mod=product&controller=index&action=index">Sản phẩm</a></li>
                <li><a href="?mod=page&controller=index&action=contact">Liên hệ</a></li>
                <li><a href="?mod=news&controller=index&action=course">Khóa học</a></li>
            </ul>
        </div>
        <!-- end header -->