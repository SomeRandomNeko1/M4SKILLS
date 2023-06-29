<?php
declare(strict_types=1);
session_start();
require_once "connectPDO.php";

$conn = db_connect();

// Get the user input
$userInput = $_POST['user_input'];

// Update the user's text
$updateQuery = "UPDATE `prog-week6` SET user = :userText";
$stmt = $conn->prepare($updateQuery);
$stmt->bindValue(':userText', $userInput);
$stmt->execute();

echo "User text updated successfully!";
?>
