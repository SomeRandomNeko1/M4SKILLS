<?php
declare(strict_types=1);
session_start();
require_once "connectPDO.php";

echo 'Gegevens aanmaken' . '</br>';
var_dump($_SESSION['user']);

$naam = $_SESSION['user']['naam'];
$email = $_SESSION['user']['email'];
$telefoon = $_SESSION['user']['telefoon'];

$conn = db_connect();
$insertQuery = "INSERT INTO prog-week6 (naam, email, telefoonnummer) VALUES ('$naam', '$email', '$telefoon')";
$conn->exec($insertQuery);

