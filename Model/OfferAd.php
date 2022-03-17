<?php
require "../Controller/Manager.php";

class Offer extends Manager
{
    private $id_offer;
    private $id_ad;

    // SET
    function setId_offer($x)
    {
        if ($x < 0)
        {$this->id_offer = 1;}
        else {$this->id_offer = $x;}
    }
    function setId_ad($x)
    {
        if ($x < 0)
        {$this->id_ad = 1;}
        else {$this->id_ad = $x;}
    }

    // GET
    function getId_offer()
    { return $this->id_offer; }
    function getId_ad()
    { return $this->id_ad; }
    
}