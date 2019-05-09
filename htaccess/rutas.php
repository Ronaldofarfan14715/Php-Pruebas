<?php

$view = $_GET['url'];

switch ($view) {
    case 'link':
        include 'link.php';
        break;

    case 'home':
        include 'home.php';
}

?>