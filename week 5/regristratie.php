<?php
declare(strict_types=1);
session_start();
require_once "valideer.php";

$errors = [];
$inputs = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isValidEmail($_POST['email']) == true) {
    } else {
        array_push($errors, 'Geen geldig email adres');
    }

    if (isNotValidString($_POST['user']) == true) {
        array_push($errors, 'Gebruikersnaam is verplicht');
    }

    if (isValidNumeric($_POST['number']) == true) {
        $inputs['number'] = $_POST['number'];
    } else {
        array_push($errors, 'Alleen cijfers zijn toegestaan');
        $inputs['number'] = $_POST['number'];
    }
}

if (count($errors) > 0) {
    $_SESSION['error'] = $errors;
    header('Location: registratieformulier.php');
    exit();
} else {
    $_SESSION['inputs'] = $inputs;
    header('Location: aanmaken.php');
    exit();
}