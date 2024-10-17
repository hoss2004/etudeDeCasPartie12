<?php
require_once '../../model/TravelOffer.php';
require_once '../../controller/TravelOfferContrller.php';
echo "Formulaire soumis avec succès";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
echo "Méthode POST détectée";
$title = $_POST['title'];
$destination = $_POST['destination'];
$departureDate = $_POST['date'];
$returnDate = $_POST['return'];
$price = $_POST['price'];
$availability = isset($_POST['availibility']);
$category = $_POST['categorie'];
echo "Données reçues: ", $title, " ", $destination, " ", $departureDate, " ", $returnDate, " ", $price, " ", $category;
$offer1 = new offreDeStage($title, $destination, $departureDate, $returnDate, $price, $availability, $category);

var_dump($offer1);

$controller = new TravelOfferController();
$controller->showTravelOffer($offer1);
echo "Affichage du tableau";
}
else echo "erreur /////////////";
?>