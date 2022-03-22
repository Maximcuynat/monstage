<?php
require "../Model/Person.php"; // il arrive pas à l'ouvrir
require_once "Manager.php";

class ManagerConnexion extends Manager
{
    private Person $prs;
    
    public function checkIfExist($mail, $password)
    {
        // Connexion à la BDD
        $this->getBdd();
        // SELECT ID_Person FROM person WHERE Mail="lea.laborde@viacesi.fr" AND Pwd="cesi123";
        return $this->selectIdConnexion('Person', $mail, $password);
    }
    public function getUserInfo($id)
    {
        $this->getBdd();
        return $this->selectById('Person', 'Person', 'ID_Perso', $id, "*");
    }
}
?>