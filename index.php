<?php
$msg = "";

if (isset($_POST['submit'])) {
    require 'phpmailer/PHPMailerAutoLoad.php';

    function sendemail($to, $from, $fromName, $body, $attach) {
        $mail = new PHPMailer();
        $mail ->setfrom($from, $fromName);
        $mail ->address($to);
        $mail-> addAttachment($attachment);
        $mail->Subject = 'Contact Form - Email';
        $mail->body = $body;
        $mail->isHTML(false);

        return $mail->send();
    }
    $name = $_POST['UserName'];
    $email = $_POST['email'];
    $body = $_POST ['body'];
    $file = "attachment/" .basename($_FILES['attachment']['name']);
    if (move_uploaded_file($_FILES['attachment']['temporyname']. $file)) {
if (sendemail(to 'samuelmunyiri34@gmail.com', $email, $name, $body, $file))
$msg = 'emial sent'
else 
$msg = 'Email Failed';
    }
    else {
        $msg = "Please chech your attachment"'
    }

}