<?php
require_once '/xampp/htdocs/backoffice_esprit/etude_de_cas/model/TravelOffer.php';
$offer1 = new offreDeStage("Summer Trip", "Spain", "2024-07-15", "2024-07-30", 1200, true, "Aventure");
$offer1->setPrice(1300);
$offer1->setTitle("Winter Trip");
$offer1->show();
?>