<!DOCTYPE html>
<html>
<head>
	<title>Formulaire de contact</title>
</head>
<body>
	<h1>Contactez-nous</h1>
	<form action="thanks.php" method="post">
		<div>
			<label for="nom">Nom :</label>
			<input type="text" id="nom" name="user_name">
		</div>
		<div>
			<label for="courriel">Courriel :</label>
			<input type="email" id="courriel" name="user_email">
		</div>
		<div>
			<label for="telephone">Téléphone :</label>
			<input type="tel" id="telephone" name="user_phone">
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
			<textarea id="message" name="user_message"></textarea>
		</div>
		<div class="button">
			<button type="submit">Envoyer votre message</button>
		</div>
	</form>
</body>
</html>
