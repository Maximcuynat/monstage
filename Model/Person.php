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


    //==================================================
    // SET
    function setId_pers($x)
    {
        if ($x < 0)
        {$this->id_pers = 1;}
        else {$this->id_pers = $x;}
    }
    function setMail($x)
    {
        if ($x == "")
        {$this->mail = "none";}
        else {$this->mail = $x;}
    }
    function setPwd($x)
    {
        if ($x == "")
        {$this->pwd = "none";}
        else {$this->pwd = $x;}
    }
    function setFname($x)
    {
        if ($x == "")
        {$this->fname = "none";}
        else {$this->fname = $x;}
    }
    function setLname($x)
    {
        if ($x == "")
        {$this->lname = "none";}
        else {$this->lname = $x;}
    }
    function setId_ad($x)
    {
        if ($x < 0)
        {$this->id_ad = 1;}
        else {$this->id_ad = $x;}
    }

    // GET
    function getId_pers() { return $this->id_pers; }
    function getMail() { return $this->mail; }
    function getPwd() { return $this->pwd; }
    function getFname() { return $this->fname; }
    function getLname() { return $this->lname; }
    function getId_ad() { return $this->id_ad; }
}