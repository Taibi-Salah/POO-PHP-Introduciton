
<?php
// Define a simple class for a Person
class Person {
    // Properties
    private $firstName;
    private $lastName;
    private $age;
    private $card; // Add a card property

    // Constructor
    public function __construct($firstName, $lastName, $age) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    // Method to get the full name
    public function getFullName() {
        return $this->firstName . ' ' . $this->lastName;
    }

    // Method to get the age
    public function getAge() {
        return $this->age;
    }

    // Method to set a new age
    public function setAge($age) {
        if($age > 0) {
            $this->age = $age;
        } else {
            echo "Age must be a positive number.";
        }
    }

    // Method to set a new first name
    public function setName($firstName) {
        if(!empty($firstName)) {
            $this->firstName = $firstName;
        } else {
            echo "First name cannot be empty.";
        }
    }

    // Method to assign a card to the person
    public function setCard($card) {
        $this->card = $card;
    }

    // Method to get the assigned card
    public function getCard() {
        return $this->card;
    }

    // Method to get the card details as a string
    public function getCardDetails() {
        if ($this->card) {
            return $this->card->getCardDetails();
        } else {
            return 'No card assigned';
        }
    }

    // Method to print person details
    public function printDetails() {
        echo "Name: " . $this->getFullName() . "<br>";
        echo "Age: " . $this->getAge() . "<br>";
        if ($this->card) {
            echo "Card: " . $this->card->getCardDetails() . "<br>";
        }
    }
}
?>
