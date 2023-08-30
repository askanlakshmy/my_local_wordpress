<?php

if(isset($_POST["submit"])){
    require 'PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $name=$_POST["name"];
    $email=$_POST["email"];
    $mail->SMTPDebug = 4;                               // Enable verbose debug output
    
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'lakshmy@neilpateldigital.in';                 // SMTP username
    $mail->Password = 'Askan39meenu123';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    
    $mail->setFrom('test', 'Mailer');
    $mail->addAddress('lakshmy.askan@gmail.com');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');
    
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML
    
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form id="myForm" action="test.php" method="post">
			<h2>Send an Email</h2>

			<label>Name</label>
			<input id="name" name="name" type="text" placeholder="Enter Name">
			<br><br>

			<label>Email</label>
			<input id="email" name="email" type="text" placeholder="Enter Email">
			<br><br>
			<input type="submit" name="submit" value="Send An Email">
		</form>
</body>
</html>