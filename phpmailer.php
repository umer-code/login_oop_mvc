<?php
require "PHPMailer/PHPMailerAutoload.php";
function sendEmail($fromEmail, $fromName, $recepientEmail, $recepientName, $subject, $body){
   try {
       $mail = new PHPMailer(true);
       $mail->isSMTP();
       $mail->Host = 'smtp.googlemail.com';  //gmail SMTP server
       $mail->SMTPAuth = true;
       $mail->Username = 'umermughaluetian@gmail.com';   //username
       $mail->Password = 'Pinkfloyd123.';   //password
       $mail->SMTPSecure = 'ssl';
       $mail->Port = 465;
       $mail->setFrom($fromEmail, $fromName);
       $mail->addAddress($recepientEmail, $recepientName);
       $mail->isHTML(true);
       $mail->Subject = $subject;
       $mail->Body = $body;
       if($mail->send()){
          return "Message sent successfully";
        }
   } catch (Throwable $th) {
       var_dump($th);
       return "Failed to send message";
   }
}
    $userName = "ALi";
    $code     = rand();
    $code     = password_hash($code, PASSWORD_DEFAULT);
    $url = "http://" . $_SERVER['SERVER_NAME'] . "/emailConfirmation/confirm.php?confirmation=" . $code;
    echo sendEmail('umermughaluetian@gmail.com','admin','immumermughal@gmail.com','user','confirmation','<p> Hi ' . $userName . ' please confirm your email click on the below link</p> <p><a href="'. $url .'">Confirm email</a></p><p> OR copy an paste this link '. $url .'</p>');

?>
<html>
    <head>
        <title>PHPMailer</title>
    </head>
    <body>
    </body>
    
</html>