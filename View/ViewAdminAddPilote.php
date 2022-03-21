<!DOCTYPE php>
<html>
	<?php
	require_once "header.php";
	?>
	<body>
		<form action="ViewAdminAddPiloteMessage.php" method="POST">
			<div class="Cadre_form">
				<input type="text" name="Fname" placeholder="First name"><br>
				<input type="text" name="Lname" placeholder="Last name"><br>
				<input type="mail" name="mail" placeholder="E mail"><br>
				<input type="password" name="password" placeholder="Password"><br>
				<input type="text" name="city" list="cityList" placeholder="Centers" id="AjouterCenter"><br>
				<button id="AjouterCenterList">Add center</button>
				<button id="AjouterCenterList">Del center</button>
				<datalist id="cityList">
					<option value="Aix-enProvence"></option>
					<option value="Marseille"></option>
					<?php
						// On a besoins des adresse disponibles
						// API ?
					?>
				</datalist>
				<input type="submit" value="Create">
			</div>
		</form>
	</body>
	<?php
	require_once "footer.php";
	?>
</html>