
<?php
// Define a class for a Card
class Card {
    // Properties
    private $suit;
    private $value;
    private $price;
    private $imageUrl; // Add an image URL property
    private $stock;

    // Constructor
    public function __construct($suit, $value, $price, $imageUrl, $stock) {
        $this->suit = $suit;
        $this->value = $value;
        $this->price = $price;
        $this->imageUrl = $imageUrl;
        $this->stock = $stock;
    }

    // Method to get the suit
    public function getSuit() {
        return $this->suit;
    }

    // Method to get the value
    public function getValue() {
        return $this->value;
    }

    // Method to get the price
    public function getPrice() {
        return $this->price;
    }

    // Method to get the image URL
    public function getImageUrl() {
        return $this->imageUrl;
    }

    // Method to get the stock
    public function getStock() {
        return $this->stock;
    }

    // Method to get the card details as a string
    public function getCardDetails() {
        return $this->value . ' of ' . $this->suit;
    }

    // Method to print the card details
    public function printCardDetails() {
        echo '<div>';
        echo '<img src="' . $this->getImageUrl() . '" alt="' . $this->getCardDetails() . '" style="width:100px;height:150px;"><br>';
        echo $this->getCardDetails() . "<br>";
        echo 'Price: $' . $this->getPrice() . "<br>";
        echo 'Stock: ' . $this->getStock() . "<br>";
        echo '</div>';
    }
}
?>
