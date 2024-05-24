
<?php
// Include the necessary classes
require 'Card.php';
require 'Person.php';

// Instantiate Card objects with image URLs, prices, and stock
$card1 = new Card("Hearts", "Ace", 10, "images/ace_of_hearts.png", 5);
$card2 = new Card("Diamonds", "10", 15, "images/10_of_diamonds.png", 3);
$card3 = new Card("Clubs", "King", 20, "images/king_of_clubs.png", 2);

// Instantiate Person objects
$person1 = new Person("Salah", "Taibi", 23);
$person2 = new Person("Fouad", "Taibi", 20);
$person3 = new Person("Sofiane", "Taibi", 18);

// Assign cards to persons
$person1->setCard($card1);
$person2->setCard($card2);
$person3->setCard($card3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Card and Person Example</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Person and Card Association Example</h1>
    <div class="container">
        <?php
        // Print the details of each person with their associated card
        function displayPersonCard($person) {
            echo '<div class="person-card">';
            echo '<h2>' . $person->getFullName() . '</h2>';
            echo '<p>Age: ' . $person->getAge() . '</p>';
            if ($person->getCard()) {
                echo '<img src="' . $person->getCard()->getImageUrl() . '" alt="' . $person->getCardDetails() . '">';
                echo '<p>Card: ' . $person->getCard()->getCardDetails() . '</p>';
                echo '<p>Price: $' . $person->getCard()->getPrice() . '</p>';
                echo '<p>Stock: ' . $person->getCard()->getStock() . '</p>';
            }
            echo '</div>';
        }

        displayPersonCard($person1);
        displayPersonCard($person2);
        displayPersonCard($person3);
        ?>
    </div>
</body>
</html>
