<?php

//+ Create an array of three elements - rock, paper, scissors
$moves = ['Rock', 'Paper', 'Scissors'];

//+ For Player A and B randomly assign an element
$playerA = $moves[rand(0, 2)];
$playerB = $moves[rand(0, 2)];

//+ Compare the two choices 
if ($playerA == 'Rock' && $playerB == 'Scissors') {
    $winner = 'Player A';

} elseif ($playerA == 'Paper' && $playerB == 'Rock') {
        $winner = 'Player A';

} elseif ($playerA == 'Scissors' && $playerB == 'Paper') {
        $winner = 'Player A';

} elseif ($playerA == $playerB) {
    //+ If the same element is chosen then there is a tie
        $winner = 'There was a tie';

} else {
    //+ Announce winner
    $winner = 'Player B';
}

require 'index-view.php';

</html>