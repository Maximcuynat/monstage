<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ajouter un pilote</title>
</head>
<body>
	<form actions="ViewAdminAddPiloteMessage.php">
		<input type="text" name="Fname" placeholder="First name">
		<input type="text" name="Lname" placeholder="Last name">
		<input type="mail" name="mail" placeholder="E mail">
		<input type="password" name="password" placeholder="Password">
		<input type="text" name="city" list="cityList">
		<datalist>
			<?php
				// Ajouter le code pour récupérer les centre
			?>
		</datalist>
		<button>Add center</button>
	</form>
</body>
</html>