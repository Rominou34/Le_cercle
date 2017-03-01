<?php

function redirect_to($url)
{
  header("Location: $url");
}

/*
	********************************************************************************************
	CONFIGURATION
	********************************************************************************************
*/
// destinataire est votre adresse mail. Pour envoyer à plusieurs à la fois, séparez-les par une virgule
$destinataire = 'arnaud.romain34@gmail.com';
// copie ? (envoie une copie au visiteur)
$copie = 'oui';
// Messages de confirmation du mail
$message_envoye = "Votre message nous est bien parvenu !";
$message_non_envoye = "L'envoi du mail a échoué, veuillez réessayer SVP.";
// Message d'erreur du formulaire
$message_formulaire_invalide = "Vérifiez que tous les champs soient bien remplis et que l'email soit sans erreur.";
/*
	********************************************************************************************
	FIN DE LA CONFIGURATION
	********************************************************************************************
*/
/*
 * cette fonction sert à nettoyer et enregistrer un texte
 */
function Rec($text)
{
	$text = htmlspecialchars(trim($text), ENT_QUOTES);
	if (1 === get_magic_quotes_gpc())
	{
		$text = stripslashes($text);
	}
	$text = nl2br($text);
	return $text;
};
/*
 * Cette fonction sert à vérifier la syntaxe d'un email
 */
function IsEmail($email)
{
	$value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
	return (($value === 0) || ($value === false)) ? false : true;
}
// formulaire envoyé, on récupère tous les champs.
$nom     = (isset($_POST['nom']))     ? Rec($_POST['nom'])     : '';
$email   = (isset($_POST['email']))   ? Rec($_POST['email'])   : '';
$objet   = (isset($_POST['objet']))   ? Rec($_POST['objet'])   : '';
$message = (isset($_POST['message'])) ? Rec($_POST['message']) : '';
// On va vérifier les variables et l'email ...
$email = (IsEmail($email)) ? $email : ''; // soit l'email est vide si erroné, soit il vaut l'email entré
if (($nom != '') && ($email != '') && ($message != ''))
{
	// les 4 variables sont remplies, on génère puis envoie le mail
	$headers  = 'From:'.$nom.' <'.$email.'>' . "\r\n";
	//$headers .= 'Reply-To: '.$email. "\r\n" ;
	//$headers .= 'X-Mailer:PHP/'.phpversion();
	// envoyer une copie au visiteur ?
	if ($copie)
	{
		$cible = $destinataire.';'.$email;
	}
	else
	{
		$cible = $destinataire;
	};
	// Remplacement de certains caractères spéciaux
	$message = str_replace("&#039;","'",$message);
	$message = str_replace("&#8217;","'",$message);
	$message = str_replace("&quot;",'"',$message);
	$message = str_replace('&lt;br&gt;','',$message);
	$message = str_replace('&lt;br /&gt;','',$message);
	$message = str_replace("&lt;","&lt;",$message);
	$message = str_replace("&gt;","&gt;",$message);
	$message = str_replace("&amp;","&",$message);
	// Envoi du mail
	$num_emails = 0;
	$tmp = explode(';', $cible);
	foreach($tmp as $email_destinataire)
	{
		if (mail($email_destinataire, $objet, $message, $headers))
			$num_emails++;
	}
	if ((($copie) && ($num_emails == 2)) || (($copie == false) && ($num_emails == 1)))
	{
    redirect_to('index.php?alert=envoye');
	}
	else
	{
    redirect_to('index.php?alert=non_envoye');
	};
} else {
	// une des 3 variables (ou plus) est vide ...
  redirect_to('index.php?alert=invalide');
}
?>
