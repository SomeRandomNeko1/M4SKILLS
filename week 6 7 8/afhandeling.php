<?php
    session_start();
    $naam = $_POST['naam'];
    $email = $_POST['email'];

    $_SESSION['naam'] = $naam;
    $_SESSION['email'] = $email;    

    echo "Naam:" . $naam . "<br>";
    echo "Email:" . $email . "<br>";

    header("Location: /Prog-P4/SD1M4SKILLS/Week5/sessions.php");
?>