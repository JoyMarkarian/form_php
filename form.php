<!DOCTYPE html>
<html>
<head>
	<title>Formulaire de contact</title>
</head>
<body>
	<h1>Contactez-nous</h1>
	<?php
		$errors = [];
		$name = "";
		$email = "";
		$phone = "";
		$subject = "";
		$message = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST["user_name"])) {
				$errors["name"] = "Le nom est obligatoire.";
			} else {
				$name = test_input($_POST["user_name"]);
			}
			if (empty($_POST["user_email"])) {
				$errors["email"] = "L'e-mail est obligatoire.";
			} else {
				$email = test_input($_POST["user_email"]);
				// Vérification que l'e-mail est au bon format
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					$errors["email"] = "Le format de l'e-mail est invalide.";
				}
			}
			if (empty($_POST["user_phone"])) {
				$errors["phone"] = "Le téléphone est obligatoire.";
			} else {
				$phone = test_input($_POST["user_phone"]);
			}
			
			if (empty($_POST["user_message"])) {
				$errors["message"] = "Le message est obligatoire.";
			} else {
				$message = test_input($_POST["user_message"]);
			}

			if (empty($errors)) {
				header('Location: thanks.php');
				exit;
			}
		}

	?>
	<form action="thanks.php" method="post">
		<div>
			<label for="nom">Nom :</label>
			<input type="text" id="nom" name="user_name" required>
		</div>
		<div>
			<label for="courriel">Courriel :</label>
			<input type="email" id="courriel" name="user_email" required>
		</div>
		<div>
			<label for="telephone">Téléphone :</label>
			<input type="tel" id="telephone" name="user_phone" required>
		</div>
		<div>
			<label for="sujet">Sujet :</label>
			<select id="sujet" name="user_subject">
				<option value="service_client">Service client</option>
				<option value="demande_info">Demande d'information</option>
				<option value="autre">Autre</option>
			</select>
		</div>
		<div>
			<label for="message">Message :</label>
			<textarea id="message" name="user_message" required></textarea>
		</div>
		<div class="button">
			<button type="submit">Envoyer votre message</button>
		</div>
	</form>
</body>
</html>