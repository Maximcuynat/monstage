<?php
require "../Controller/Manager.php";

class Person extends Manager
{
    private $id_cmp;
    private $value;

    function setId_cmp($x)
    {
        if ($x < 0)
        {$this->id_cmp = 1;}
        else {$this->id_cmp = $x;}
    }
    function setValue($x)
    {
        if ($x < 0 && $x > 10)
        {$this->value = 0;}
        else {$this->value = $x;}
    }

    function getId_cmp()
    { return $this->id_cmp; }
    function getValue()
    { return $this->value; }
}