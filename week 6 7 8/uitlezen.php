<?php
declare(strict_types=1);
session_start();
require_once "connectPDO.php";

echo 'Gegevens uitlezen' . '</br>';
$conn = db_connect();

$selectVoorbeeld = "SELECT username FROM accounts";
$results = $conn->query($selectVoorbeeld);
$results->setFetchMode(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    echo "Paginanaam {$row['username']}</br>";
}

?>