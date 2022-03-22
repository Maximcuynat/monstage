<?php
require "Manager.php";
require '../Model/Offer.php';
require '../Model/OfferAd.php';
require '../Model/Company.php';
require '../Model/OfferClass.php';

class ManagerOffer extends Manager
{
    private Offer $off;
    private OfferAd $off_ad;
    private Company $cmp;
    private OfferClass $off_class;

    public function addOffer($post, $skill, $duration, $remu, $nb_place, $company, $tb_ad, $tb_class)
    {
        $this->getBdd();

        // TB Offer
        $off = new Offer();
        $off->setPost($post);
        $off->setSkill($skill);
        $off->setDuration($duration);
        $off->setDate('NOW()');
        $off->setRemu($remu);
        $off->setNb_place($nb_place);

        // TB Company
        $cmp = new Company();
        $id_cmp = $cmp->selectIdCmp($company);
        $off->setId_cmp($id_cmp);

        $id_offer = $off->createOffer();
        $values = ['post' => "'".$off->getPost()."'", 'skill' => "'".$off->getSkill()."'", 'duration' => $off->getDuration(), 'date' => $off->getDate(), 'remu' => $off->getRemu(), 'nb_place' => $off->getNb_place(), 'id_cmp' => $off->getId_cmp()];
        $id_offer = $this->addValueTable('Offer', 'Offer', $values);

        // TB Offer_Ad
        $off_ad = new OfferAd();
        $off_ad->setId_offer($id_offer);
        foreach ($tb_ad as $city)
        {
            $off_ad->setCity($city);
            $id_ad = $off_ad->selectIdAdd();
            $off_ad->setId_ad($id_ad);
            $values = ['id_offer' => $off_ad->getId_offer(), 'id_ad' => $off_ad->getId_ad()];
            $this->addValueTable('Offer_Ad', 'OfferAd', $values);
        }

        // TB Offer_Class
        $off_class = new OfferClass();
        $off_class->setId_offer($id_offer);
        foreach ($tb_class as $class)
        {
            $off_class->setClass($class);
            $values = ['id_offer' => $off_class->getId_offer(), 'class' => "'".$off_class->getClass()."'"];
            $this->addValueTable('offer_class', 'OfferClass', $values);
        }
    }

    public function suppOffer($id_offer)
    {
        $this->getBdd();

        // TB Offer_Class
        $off_class = new OfferClass();
        $off_class->setId_offer($id_offer);
        $IdValues = ['$id_offer' => $off_class->getId_offer()];
        $this->deleteFromTable('Offer_class', $IdValues);

        // TB Offer_Ad
        $off_ad = new OfferAd();
        $off_ad->setId_offer($id_offer);
        $IdValues = ['$id_offer' => $off_ad->getId_offer()];
        $off_ad->deleteOfferAd();

        // TB Offer
        $off = new Offer();
        $off->setId_offer($id_offer);
        $IdValues = ['$id_offer' => $off->getId_offer()];
        $this->deleteFromTable('Offer', $IdValues);
    }
}

?>