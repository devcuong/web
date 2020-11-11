<?php
include 'web/class/phpmailer/src/PHPMailer.php';
include 'web/class/phpmailer/src/SMTP.php';
include 'web/class/phpmailer/src/POP3.php';
include 'web/class/phpmailer/src/OAuth.php';
include 'web/class/phpmailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class Mail
{
    function sendMail($mailAddress, $privateCode){
        $mail = new PHPMailer(true);
        $isSend = false;
        try {
            //Server seedings
            $mail->SMTPDebug = 2;
            $mail->isSMTP();
            
            // Set mailer to use SMTP
            $mail->Host = 'smtp.zoho.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'viettxt@zoho.com';
            $mail->Password = '159987!!@#';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;
            
            // Recipients
            $mail->CharSet = 'UTF-8';
            $mail->setFrom('viettxt@zoho.com','Cường from Review Trường');
            $mail->addAddress($mailAddress);
            
            // Content
            $mail->isHTML(false);
            $mail->Subject = "Xin chào đây là mail gửi private code";
            $mail->Body = "đây là private code: ".$privateCode;
            $mail->AltBody = '';
            
            // GUI
            $mail->send();
            
            //echo "Message has been send";
            $isSend = true;
            
        } catch (Exception $e) {
            //echo $e;
            $isSend = false;
        }
        return $isSend;
    }
}
?>