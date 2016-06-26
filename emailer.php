<?php
require_once('PHPMailer/class.phpmailer.php');
include("PHPMailer/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

// $body             = file_get_contents('contents.html');
// $body             = eregi_replace("[\]",'',$body);

$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "mail.yourdomain.com"; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 587;                   // set the SMTP port for the GMAIL server
$mail->Username   = "clickmdbot@gmail.com";  // GMAIL username
$mail->Password   = "temppassword12";            // GMAIL password

$mail->SetFrom('clickmdbot@gmail.com', 'ClickMD Support');

$mail->AddReplyTo($_POST['email'],$_POST['name']);

$mail->Subject    = $_POST['subject'];
$mail->Body       = $_POST['message'];

// $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

// $mail->MsgHTML($body);

$address = $_POST['email'];
$mail->AddAddress($address, $_POST['name']);

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  // echo "Message sent!";
  header("Location: /?sent=true");
}

?>