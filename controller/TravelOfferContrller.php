<?php
require_once("../model/TravelOffer.php");
class TravelOfferController {
    public function showTravelOffer($offer) {
        $offer->show();
    }
}
?>