<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

function send_mail($send_to_email, $send_to_fullname, $subject, $content, $option = array())
{
    //Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
    global $config_email;
    if(!empty($option)){
        $addAttachment = $option['addAttachment'];
        $addCC = $option['addCC'];
    }
    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = $config_email['host'];                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = $config_email['username'];                     //SMTP username
        $mail->Password   = $config_email['password'];;                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = $config_email['port'];                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
        $mail->CharSet = 'UTF-8';
        //Recipients
        $mail->setFrom($config_email['username'], $config_email['fullname']);
        $mail->addAddress($send_to_email, $send_to_fullname);     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        $mail->addReplyTo($config_email['username'], $config_email['fullname']);
        $mail->addCC($addCC);
        // $mail->addBCC('bcc@example.com');

        //Attachments
        $mail->addAttachment($addAttachment);         //Add attachments
        // $mail->addAttachment('thumb-5.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $content;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        return true;
    } catch (Exception $e) {
        echo "Email không được gửi. chi tiết lỗi: {$mail->ErrorInfo}";
    }
}
