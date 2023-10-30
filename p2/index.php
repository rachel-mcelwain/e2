<?php

session_start();

if(isset($_SESSION['results'])) {
    $winner = $_SESSION['results']['winner'];
    $element = $_SESSION['results']['element'];
    $pick = $_SESSION['results']['pick'];

}

require 'index-view.php';