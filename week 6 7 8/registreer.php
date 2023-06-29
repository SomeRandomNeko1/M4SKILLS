<?php
declare(strict_types=1);
session_start();
require_once "valideer.php";

$errors = [];
$inputs = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isValidEmail($_POST['email']) == true) {
        array_push($inputs, $_POST['email']);
    } else {
        array_push($errors, 'Geen geldig email adres');
    }

    if (!isset($_POST['user']) || isNotValidString($_POST['user']) == true) {
        array_push($errors, 'Gebruikersnaam is verplicht');
    } else {
        array_push($inputs, $_POST['user']);
    }

    if (isValidNumeric($_POST['telefoon']) == true) {
        array_push($inputs, $_POST['telefoon']);
    } else {
        array_push($errors, 'Alleen cijfers zijn toegestaan');
    }
}

if (count($errors) > 0) {
    $_SESSION['error'] = $errors;
    header('Location: registratieformulier.php');
    exit();
} else {
    $_SESSION['inputs'] = $inputs;
    header('Location: insert.php');
    exit();
}
?>
