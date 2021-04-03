<?php
$send_to_email = 'denvatrang2102@gmail.com';
$send_to_fullname = 'Do Minh Hieu';
$subject = 'Test hàm send mail';
$content = 'Gửi mail cho bạn Hiếu đẹp trai';
$option = array(
    'addAttachment' => 'thumb-5.jpg', 
    'addCC' => 'hieuminh2102@gmail.com'
);
send_mail($send_to_email, $send_to_fullname, $subject, $content, $option);
?>
<div id="content">
    <h1>Trang chủ</h1>
</div>