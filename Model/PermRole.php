<?php
require "../Controller/Manager.php";

class PermRole extends Manager
{
    private $id_perm;
    private $id_role;

    // SET
    function setId_perm($x)
    {
        if ($x < 0)
        {$this->id_perm = 1;}
        else {$this->id_perm = $x;}
    }
    function setId_role($x)
    {
        if ($x < 0)
        {$this->id_role = 1;}
        else {$this->id_role = $x;}
    }

    // GET
    function getId_perm()
    { return $this->id_perm; }
    function getId_role()
    { return $this->id_role; }
    
}