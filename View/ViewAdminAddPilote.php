<!DOCTYPE php>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ajouter un pilote</title>
	</head>
	<body>
		<form action="ViewAdminAddPiloteMessage.php" method="POST">
			<input type="text" name="Fname" placeholder="First name">
			<input type="text" name="Lname" placeholder="Last name">
			<input type="mail" name="mail" placeholder="E mail">
			<input type="password" name="password" placeholder="Password">
			<input type="text" name="city" list="cityList" placeholder="Centers" id="AjouterCenter">
			<datalist id="cityList">
				<option value="Aix-enProvence"></option>
				<option value="Marseille"></option>
				<?php
					// On a besoins des adresse disponibles
				?>
			</datalist>
			<input type="submit" value="Create">
			
		</form>
		<button id="AjouterCenterList">Add center</button>
		<button id="AjouterCenterList">Del center</button>
	</body>
	<script type="text/javascript" src="../assets/js/jquery/jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="../assets/js/Admin.js"></script>
</html>