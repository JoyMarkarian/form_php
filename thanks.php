<!DOCTYPE html>
<html>
<head>
	<title>Formulaire de contact</title>
</head>
<body>
	<?php
		$user_name = $_POST['user_name'];
		$user_email = $_POST['user_email'];
		$user_phone = $_POST['user_phone'];
		$user_subject = $_POST['user_subject'];
		$user_message = $_POST['user_message'];

		$to = 'votre@email.com';
		$subject = 'Nouveau message de ' . $user_name . ' - ' . $user_subject;
		$message = 'Nom : ' . $user_name . "\r\n";
		$message .= 'Courriel : ' . $user_email . "\r\n";
		$message .= 'Téléphone : ' . $user_phone . "\r\n";
		$message .= 'Sujet : ' . $user_subject . "\r\n";
		$message .= 'Message : ' . $user_message . "\r\n";

		mail($to, $subject, $message);

		echo 'Merci ' . $user_name . ' de nous avoir contacté à propos de "' . $user_subject . '".<br>';
		echo 'Un de nos conseillers vous contactera soit à l’adresse ' . $user_email . ' ou par téléphone au ' . $user_phone . ' dans les plus brefs délais pour traiter votre demande : <br>';
		echo $user_message;
	?>
</body>
</html>
