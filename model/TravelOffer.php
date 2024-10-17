<?php

echo "Le script PHP fonctionne";

class offreDeStage {
private $title;
private $destination;
private $departureDate;
private $returnDate;
private $price;
private $availability;
private $category;

public function __construct($title, $destination, $departureDate, $returnDate, $price, $availability, $category) {
$this->title = $title;
$this->destination = $destination;
$this->departureDate = $departureDate;
$this->returnDate = $returnDate;
$this->price = $price;
$this->availability = $availability;
$this->category = $category;
}

// Getters
public function getTitle() {
return $this->title;
}

public function getDestination() {
return $this->destination;
}

public function getDepartureDate() {
return $this->departureDate;
}

public function getReturnDate() {
return $this->returnDate;
}

public function getPrice() {
return $this->price;
}

public function getAvailability() {
return $this->availability;
}

public function getCategory() {
return $this->category;
}

// Setters
public function setTitle($title) {
$this->title = $title;
}

public function setDestination($destination) {
$this->destination = $destination;
}

public function setDepartureDate($departureDate) {
$this->departureDate = $departureDate;
}

public function setReturnDate($returnDate) {
$this->returnDate = $returnDate;
}

public function setPrice($price) {
$this->price = $price;
}

public function setAvailability($availability) {
$this->availability = $availability;
}

public function setCategory($category) {
$this->category = $category;
}

public function show() {
    echo " la fonction fonctionne bien";
echo "<table border='1'>";
    echo "<tr>
        <th>Title</th>
        <td>{$this->getTitle()}</td>
    </tr>";
    echo "<tr>
        <th>Destination</th>
        <td>{$this->getDestination()}</td>
    </tr>";
    echo "<tr>
        <th>Departure Date</th>
        <td>{$this->getDepartureDate()}</td>
    </tr>";
    echo "<tr>
        <th>Return Date</th>
        <td>{$this->getReturnDate()}</td>
    </tr>";
    echo "<tr>
        <th>Price</th>
        <td>{$this->getPrice()}</td>
    </tr>";
    echo "<tr>
        <th>Availability</th>
        <td>" . ($this->getAvailability() ? 'Available' : 'Not Available') . "</td>
    </tr>";
    echo "<tr>
        <th>Category</th>
        <td>{$this->getCategory()}</td>
    </tr>";
    echo "</table>";
}
}
?>