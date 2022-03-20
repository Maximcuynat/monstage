<?php
require '../Model/Offer.php';
require '../Model/OfferAd.php';
require '../Model/Company.php';

class ManagerOffer
{
    private Offer $off;
    private OfferAd $off_ad;
    private Company $cmp;

    public function addOffer($post, $skill, $duration, $remu, $nb_place, $company, $tb_ad)
    {
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

        // TB Offer_Ad
        $off_ad = new OfferAd();
        foreach ($tb_ad as $city)
        {
            $off_ad->setCity($city);
            $id_ad = $off_ad->selectIdAdd();
            $off_ad->setId_ad($id_ad);
            $off_ad->setId_offer($id_offer);
            $off_ad->createOfferAd();
        }
    }

    /*
    Data : [compétences – localité(s) – entreprise – durée du stage 
    – base de rémunération – date de l'offre 
    - nombre de places offertes aux étudiants].
    
    */
}

?>