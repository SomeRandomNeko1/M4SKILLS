<?php
    session_start();
    $naam = $_POST['naam'];
    $email = $_POST['email'];

    $_SESSION['naam'] = $naam;
    $_SESSION['email'] = $email;    

    echo "Naam:" . $naam . "<br>";
    echo "Email:" . $email . "<br>";

    header("Location: sessions.php");
?>