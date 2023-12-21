<?php 

session_start();

$nom = ($_POST['nom']);
$prenom = ($_POST['prenom']);
$mail = ($_POST['email']);
$subject = ($_POST['sujet']);
$message = ($_POST['message']);
$headers = 'From: '.$nom.'<'.$mail.'>'."\r\n";
$headers .= 'Reply-to: <'.$mail.'>'."\r\n";

$to = 'ebene.olia@hotmail.fr';

?>
<?php

if($_POST['captcha']==$_SESSION['captcha']){
mail($to, $subject, $message, $headers);
echo 'Votre message a bien été envoyé';	
	
}else{
echo 'Le captcha entré est invalide. <a href="../index.php#contact">Recommencez</a>';	
}
?>