<?php
require "../Controller/Manager.php";

class Company extends Manager
{
    private $id_cmp;
    private $Name;
    private $Domain;
    private $Number_intern;

    function createCompany($id_cmp, $Name, $Domain, $Number_intern)
    {
        $this->getBdd();
        $values = ['id_cmp' => $id_cmp, 'Name' => $Name, 'Domain' => $Domain, 'Number_intern' => $Number_intern];
        $this->addValueTable('Company', $values);
    }




    // SET
    function setId_cmp($id)
    {
        if($id < 0)
        {$this->id_cmp = 1;}
        else {$this->id_cmp = $id;}
    }
    function setName($x)
    {
        if($x == "")
        {$this->Name = "NONE";}
        else {$this->Name = $x;}
    }
    function setDomain($x)
    {
        if($x == "")
        {$this->Domain = "NONE";}
        else {$this->Domain = $x;}
    }
    function setNumber_intern($x)
    {
        if($x < 0)
        {$this->Number_intern = 0;}
        else {$this->Number_intern = $x;}
    }

    // GET
    function getId_cmp()
    {
        return $this->id_cmp;
    }
    function getName()
    {
        return $this->Name;
    }
    function getDomain()
    {
        return $this->Domain;
    }
    function getNumber_intern()
    {
        return $this->Number_intern;
    }
}