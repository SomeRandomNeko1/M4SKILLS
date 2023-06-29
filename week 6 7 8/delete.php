<?php
declare(strict_types=1);
session_start();
require_once "connectPDO.php";

$conn = db_connect();

if (isset($_POST['delete_button'])) {
    $deleteQuery = "DELETE FROM `prog-week6` LIMIT 1";
    $conn->exec($deleteQuery);

    echo "First row deleted successfully!";
}
?>
