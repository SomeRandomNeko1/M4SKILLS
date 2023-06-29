<?php
declare(strict_types=1);
require_once "connect.php";

/*
 * db_connect maakt een connectie met de database
 * en je krijgt een variabele terug met de connectiegegevens
 *
 */
function db_connect(): object
{
    global $servername;
    global $username;
    global $password;
    global $dbname;

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
//        echo "Fout bij het maken van de connection: " . $e->getMessage();
        /*
         * In plaats van echo gaan we nu gebruik maken van die
         */
        die ("Fout bij het maken van de connection: " . $e->getMessage());
    }
    return $conn;
}