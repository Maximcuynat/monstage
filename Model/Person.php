<?php
require "../Controller/Manager.php";

class Person extends Manager
{
    private $ID_Person;
    private $Mail;
    private $Pwd;
    private $Fname;
    private $Lname;
    private $ID_Ad;
    
    
    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $data)
    {
        foreach($data as $key => $value)
        {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method))
                $this->$method($value);
        }
    }

    public function setNoPil($NoPil)
    {
        $NoPil = (int) $NoPil;
        if($NoPil > 0)
            $this->_NoPil = $NoPil;
    }

    /*

    function selectByRole($role)
    {
        $rqt1 = "SELECT ID_Pers FROM Person NATURAL JOIN Pers_Role NATURAL JOIN projet_web.Role WHERE Role = '".$role."';";
        if (!$result = $this->getBdd()->query($rqt1)) 
        { 
            echo "erreur de requête : $rqt1\n";
            die;
        }
        $tab_id = [];
        foreach ($result as $i=>$ligne)
        {
            array_push($tab_id, $ligne['ID_Pers']);
        }

        $result->closeCursor();
        $rqt = "SELECT Fname, Lname, City, Class FROM Address NATURAL JOIN Person NATURAL JOIN Pers_Class NATURAL JOIN Class WHERE ID_Pers = ?;";
    }

    public function selectIdConnexion()
    {
        $this->getBdd();
        $var = [];
        // SELECT ID_Person FROM person WHERE Mail="lea.laborde@viacesi.fr" AND Pwd="cesi123";
        $req = self::$_bdd->prepare("SELECT ID_Person FROM Person WHERE Mail = '".$this->getMail()."' AND Pwd='".$this->getPwd()."';"); // Error
        $req->execute();
        $data = $req->fetch(PDO::FETCH_ASSOC);
        return $data;
        $req->closeCursor();
    }

    function createPerson($mail, $pwd, $fname, $lname, $id_ad)
    {
        $rqt = "INSERT INTO Person (Mail, Pwd, Fname, Lname, ID_Ad) VALUES (?, ?, ?, ?, ?);";
        $query = $this->getBdd()->prepare($rqt);
        $query->execute(array($mail, $pwd, $fname, $lname, $id_ad));
    }

    function createPersonV2($mail, $pwd, $fname, $lname, $id_ad)
    {
        $this->getBdd();
        $values = ['mail' => "'".$mail."'", 'pwd' => "'".$pwd."'", 'fname' => "'".$fname."'", 'lname' => "'".$lname."'", 'id_ad' => $id_ad];
        $this->addValueTable('Person', $values);
    }

    function deletePerson($id_pers)
    {
        $this->getBdd();
        $IdValues = ['$id_pers' => $id_pers];
        return $this->deleteFromTable('Person', $IdValues);
    }
    */




    //==================================================
    // SET
    public function setID_Person($x)
    {
        if ($x < 0)
            $this->id_pers = "none";
        else 
            $this->id_pers = $x;
    }
    public function setMail($x)
    {
        if ($x == "")
            $this->mail = "none";
        else 
            $this->mail = $x;
    }
    public function setPwd($x)
    {
        if ($x == "")
            $this->pwd = "none";
        else 
            $this->pwd = $x;
    }
    public function setFname($x)
    {
        if ($x == "")
            $this->fname = "none";  
        else 
            $this->fname = $x;
    }
    public function setLname($x)
    {
        if ($x == "")
            $this->lname = "none";
        else
            $this->lname = $x;
    }
    public function setID_Ad($x)
    {
        if ($x < 0)
            $this->id_ad = 1;
        else
            $this->id_ad = $x;
    }

    // GET
    public function getID_Person() 
    {
        return $this->id_pers;
    }
    public function getMail() 
    { 
        return $this->mail;
    }
    public function getPwd() 
    { 
        return $this->pwd;
    }
    public function getFname() 
    { 
        return $this->fname;
    }
    public function getLname() 
    { 
        return $this->lname;
    }
    public function getID_Ad() 
    { 
        return $this->id_ad;
    }
}