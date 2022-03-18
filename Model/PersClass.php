<?php
require "../Controller/Manager.php";

class PersClass extends Manager
{
    private $id_pers;
    private $class;

    function createPersClass($id_pers, $class)
    {
        $values = ['id_pers' => $id_pers, 'class' => $class];
        $this->addValueTable('Pers_Class', $values);
    }





    // SET
    function setId_pers($x)
    {
        if ($x < 0)
        {$this->id_pers = 1;}
        else {$this->id_pers = $x;}
    }
    function setClass($x)
    {
        if ($x == "")
        {$this->class = "none";}
        else {$this->class = $x;}
    }

    // GET
    function getId_pers()
    { return $this->id_pers; }
    function getClass()
    { return $this->class; }
    
}