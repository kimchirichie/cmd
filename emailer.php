<?php
require_once('PHPMailer/class.phpmailer.php');
include("PHPMailer/class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();

$mail->IsSMTP(); // telling the class to use SMTP
$mail->SMTPDebug  = 2;                      // enables SMTP debug information (for testing)
                                            // 1 = errors and messages
                                            // 2 = messages only
$mail->SMTPAuth   = true;                   // enable SMTP authentication
$mail->SMTPSecure = "tls";                  // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";       // sets GMAIL as the SMTP server
$mail->Port       = 587;                    // set the SMTP port for the GMAIL server
$mail->Username   = "admin@clickmd.ca";  	// GMAIL username
$mail->Password   = "mdVideo10";            // GMAIL password

$mail->SetFrom('admin@clickmd.ca', 'ClickMD Support');
$mail->AddReplyTo($_POST['email'],$_POST['name']);
$mail->Subject    = $_POST['subject'];
$mail->Body       = $_POST['message'];
$mail->AddAddress('admin@clickmd.ca', $_POST['name']);

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
  die();
} else {
	$mail->ClearAllRecipients();
	$mail->ClearReplyTos();
	$mail->Subject    = 'Your email has been received';
	$mail->Body       = 'Your email has been recieved by ClickMD team. Please allow a 1-2 business days to contact you.';
	$mail->AddAddress($_POST['email'], $_POST['name']);
}

if (!$mail->Send()){
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  header("Location: /?sent=true");
}


?>