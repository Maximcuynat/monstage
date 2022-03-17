<?php
require "../Controller/Manager.php";

class Opinion extends Manager
{
    private $com;

    // SET
    function setCom($x)
    {
        if ($x == "")
        {$this->com = "none";}
        else {$this->com = $x;}
    }

    // GET
    function getCom()
    { return $this->com; }
    
}