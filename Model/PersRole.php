<?php
require "../Controller/Manager.php";

class PersRole extends Manager
{
    private $id_pers;
    private $id_role;

    //==================================================
    // SET
    function setId_pers($x)
    {
        if ($x < 0)
        {$this->id_pers = 1;}
        else {$this->id_pers = $x;}
    }
    function setRole($x)
    {
        if ($x < 0)
        {$this->id_role = 1;}
        else {$this->id_role = $x;}
    }

    // GET
    function getId_pers() { return $this->id_pers; }
    function getId_role() { return $this->id_role; }
}