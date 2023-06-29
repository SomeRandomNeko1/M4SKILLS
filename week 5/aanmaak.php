<?php
declare(strict_types=1);
session_start();
include_once "connectPDO.php";

echo 'Gegevens aanmaken' . '</br>';
db_connect();

if (isset($_SESSION['error'])) {
    foreach ($_SESSION['error'] as $error) {
        echo $error . "<br>";
    }
}

if (isset($_SESSION['inputs'])) {
    foreach ($_SESSION['inputs'] as $key => $input) {
        echo $key . ": " . $input . "<br>";
    }
}