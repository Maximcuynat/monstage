<?php 
ini_set( 'display_errors', 1 ); //fonction php pour voir les erreurs
error_reporting( E_ALL ); //
$from = "expéditeur";
$to = "destinataire";
$subject = "objet";
$message = "contenu du mail";
$headers = "From:" . $from;:// on peut le personnaliser pour envoyer une page html
mail($to,$subject,$message, $headers);
