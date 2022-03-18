<?php
require "../Controller/Manager.php";

class AdCmp extends Manager
{
    private $id_cmp;
    private $id_ad;

    function createAdCmp($id_cmp, $id_ad)
    {
        $values = ['id_cmp' => $id_cmp, 'id_ad' => $id_ad];
        $this->addValueTable('cmp_ad', $values);
    }












    // SET
    function setId_cmp($id)
    {
        if($id < 0)
        {$this->id_cmp = 1;}
        else {$this->id_cmp = $id;}
    }
    function setId_ad($id)
    {
        if($id < 0)
        {$this->id_ad = 1;}
        else {$this->id_ad = $id;}
    }

    // GET
    function getId_cmp()
    {
        return $this->id_cmp;
    }
    function getId_ad()
    {
        return $this->id_ad;
    }
}