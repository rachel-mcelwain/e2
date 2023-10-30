<?php

session_start();

$pick = $_POST['pick'];

$element = elementMove();

if ($pick == 'rock' && $element == 'scissors') {
    $winner = 'You Win!';

} else if ($pick == 'paper' && $element == 'rock') {
    $winner = 'You Win!';

} else if ($pick == 'scissors' && $element == 'paper') {
    $winner = 'You Win!';

} else if ($pick == $element) {
    $winner = 'There was a tie!';

} else {
    $winner = 'You Lose';
}

function elementMove()
{
    $moves = ['rock', 'paper', 'scissors'];
    return $moves[rand(0, 2)];
}

$_SESSION['results'] = [
    'winner' => $winner,
    'element' => $element,
    'pick' => $pick
];

header('Location: index.php');



