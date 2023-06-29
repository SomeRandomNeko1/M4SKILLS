<?php
declare(strict_types=1);
session_start();
require_once "connectPDO.php";

echo 'Gegevens aanmaken' . '</br>';
var_dump($_SESSION['inputs']);

$naam = $_SESSION['inputs'][1];
$email = $_SESSION['inputs'][0];
$telefoon = $_SESSION['inputs'][2];

$conn = db_connect();
$insertQuery = "INSERT INTO `prog-week6` (`user`, `email`, `telefoonnummer`) VALUES ('$naam', '$email', '$telefoon')";
$conn->exec($insertQuery);
