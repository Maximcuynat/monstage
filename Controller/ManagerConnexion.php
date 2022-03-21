<?php
require "../Model/Person.php";

class ManagerConnexion
{
    Person $prs; // ??????
    public function checkIfExist($mail, $password)
    {
        $prs = new Person();
        $prs->setMail($mail);
        $prs->setPwd($password);
        // SELECT ID_Person FROM person WHERE Mail="lea.laborde@viacesi.fr" AND Pwd="cesi123";
        $prs->selectIdConnexion();
        
        /*
         * Vérifier que la personne existe,
         * Si elle existe, on return, id
         * Sinon, On renvoie un message d'erreur.
         */
    }
}
?>