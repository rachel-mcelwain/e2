<?php

//+ Create an array of three elements - rock, paper, scissors
//+ For Player A choose one of the elements 
//+ For Player B - randomly assign one element 
//+ Compare the two choices 
//+ If rock is chosen over scissors - that is the winner 
//+ If paper is chosen over rock - that player is the winner
//+ If scissors is chosen over paper - that player is the winner
//+ If the same element is chosen then the two players go again
//+ Repeat the comparision 
//+ Announce winner

$moves = '[Rock', 'Paper', 'Scissors'];

$playerA = $moves[rand(0, 2)];
$playerB = $moves[rand(0, 2)];

var_dump($moves);

//if ($playerA == 'Rock') {
    //$playerB = 'Scissors'; 
    
//} elseif ($playerA == 'Paper') {
      //  $playerB = 'Rock';

//} elseif ($playerA == 'Scissors') {
      //  $playerB = 'Paper';
//} elseif ($playerA == $playerB) {
   // var_dump()
//}
//}


require 'index-view.php';