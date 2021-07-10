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
                <?php echo info_user('id'); ?>
                <p>Xin chao<strong><?php if(is_login()) echo user_login(); ?></strong><a href="?page=logout">Thoat</a></p>
            </div>
            <ul id="main-menu">
                <li><a href="?page=home">Trang chủ</a></li>
                <li><a href="?page=about">Giới thiệu</a></li>
                <li><a href="?page=news">Tin tức</a></li>
                <li><a href="?page=product">Sản phẩm</a></li>
                <li><a href="?page=contact">Liên hệ</a></li>
                <li><a href="?page=course">Khóa học</a></li>
            </ul>
        </div>
        <!-- end header -->