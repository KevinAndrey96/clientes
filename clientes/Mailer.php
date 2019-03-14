<?php
require 'PHPMAILER/PHPMailerAutoload.php';
//Remitente
$Host="mshyja.co";
$From="no-responder@mshyja.co"
$Password="8jXQufprYbPJ";
$Business="MSHYJA"M
$Web="https://mshyja.co";
//8jXQufprYbPJ
//Mensaje
$Subject="Reestablecimiento de clave";
$Message=$_GET["Message"];
$To=$_GET["To"];

//TEST de POST
/*
echo $Host;
echo $From;
echo $Password;
echo $Business;
echo $Web;
echo $Subject;
echo $Message;
echo $To;
*/

//Ajax para realizar petición
/*
$.post("Mailer.php",
{
    Host : "mail.xxx.com",
	From : "xxx@xxx.com",
	Password : "xxx",
	Business : "xxx",
	Web : "https://xxx.com",
	Subject : "xxx",
	Message : "xxx",
	To : "xxx@xxx.com"
});
*/
	$mail = new PHPMailer;
	$mail->isSMTP();
	$mail->SMTPDebug = 0;
	$mail->Debugoutput = 'html';
	$mail->Host = $Host;
	$mail->CharSet = 'UTF-8';
	//$mail->Port = 465;
	//$mail->SMTPSecure = 'ssl';
	$mail->SMTPSecure = 'tls';
	$mail->Port = 587; // 465 is for ssl
	$mail->SMTPAuth = true;
	$mail->Username = $From;
	$mail->Password = $Password;
	$mail->setFrom($From, $Business);
	$mail->addAddress($To, $Business);
	//$mail->addAddress($To2, $Business2);
	$mail->Subject = $Subject;
	$mail->Body = $Message;
	$mail->IsHTML(true);
	$mail->Timeout = 10;

	$mail->SMTPOptions = array(
		'ssl' => array(
		'verify_peer' => false,
		'verify_peer_name' => false,
		'allow_self_signed' => true
	)
	);

	if (!$mail->send())
	{
		echo "<script>window.alert('Se ha producido un error por favor intentelo de nuevo 1')</script>";
		header ("Location: $Web");
		echo "Mailer Error: " . $mail->ErrorInfo;
		echo "<script type='text/javascript'>window.location='$Web';</script>";
	}
?>
<script type="text/javascript">
	window.location.href="<?=$Web?>";
</script>