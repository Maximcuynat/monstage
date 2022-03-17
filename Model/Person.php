<?php
require "../Controller/Manager.php";

class Person extends Manager
{
    private $id_pers;
    private $mail;
    private $pwd;
    private $fname;
    private $lname;
    private $id_ad;

    function selectPilot()
    {
        $rqt = "SELECT Fname, Lname, City, Class FROM Address NATURAL JOIN Person NATURAL JOIN Pers_Class NATURAL JOIN Class;";
    }

    function createPilot($mail, $pwd, $fname, $lname, $id_ad)
    {
        $rqt = "INSERT INTO Person (Mail, Pwd, Fname, Lname, ID_Ad) VALUES (?, ?, ?, ?, ?);";
        $query = $this->getBdd()->prepare($rqt);
        $query->execute(array($mail, $pwd, $fname, $lname, $id_ad));
    }
}