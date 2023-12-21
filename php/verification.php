<?php 

session_start();

$nom = ($_POST['nom']);
$prenom = ($_POST['prenom']);
$mail = ($_POST['email']);
$subject = ($_POST['sujet']);
$message = ($_POST['message']);
$headers = 'From: '.$nom.'<'.$mail.'>'."\r\n";
$headers .= 'Reply-to: <'.$mail.'>'."\r\n";

$to = 'benedicte.gady@sts-sio-caen.fr';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
</head>

<body>

<?php

if($_POST['captcha']==$_SESSION['captcha']){
mail($to, $subject, $message, $headers);
echo 'Votre message a bien été envoyé';	
	
}else{
echo 'Le captcha entré est invalide. <a href="../index.php#contact">Recommencez</a>';	
	
}



?>


</body>
</html>


