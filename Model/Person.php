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

    function selectByRole($role)
    {
        $rqt1 = "SELECT ID_Pers FROM Person NATURAL JOIN Pers_Role NATURAL JOIN projet_web.Role WHERE Role = '".$role."';";
        if (!$result = $this->getBdd()->query($rqt1)) 
        { echo "erreur de requête : $rqt1\n"; die; }
        $tab_id = [];
        foreach ($result as $i=>$ligne)
        {
            array_push($tab_id, $ligne['ID_Pers']);
        }
        $result->closeCursor();
        
        
        $rqt = "SELECT Fname, Lname, City, Class FROM Address NATURAL JOIN Person NATURAL JOIN Pers_Class NATURAL JOIN Class WHERE ID_Pers = ?;";
    }

    function createPerson($mail, $pwd, $fname, $lname, $id_ad)
    {
        $rqt = "INSERT INTO Person (Mail, Pwd, Fname, Lname, ID_Ad) VALUES (?, ?, ?, ?, ?);";
        $query = $this->getBdd()->prepare($rqt);
        $query->execute(array($mail, $pwd, $fname, $lname, $id_ad));
    }

    function createPersonV2($mail, $pwd, $fname, $lname, $id_ad)
    {
        $values = ['mail' => $mail, 'pwd' => $pwd, 'fname' => $fname, 'lname' => $lname, 'id_ad' => $id_ad];
        $this->addValueTable('Person', $values);
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