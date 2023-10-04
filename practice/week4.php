<?php 

//echo "Hello from week4.php";

$cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

shuffle($cards);

$playerCards = [];
$computerCards = [];

foreach($cards as $index => $player){
    if($player % 2 == 0){
        continue;
    }
    $playerCards[] = $player;
}

foreach ($cards as $index => $computer){
    if($computer %2 == 1) {
        continue;
    }
    $computerCards[] = $computer;
}

var_dump($playerCards); 
var_dump($computerCards);