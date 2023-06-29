<?php
session_start();
echo "Je hebt de volgende gegevens op de afhandelingspagina opgeslagen: <br>";
echo "Naam: " . $_SESSION['naam'] . "<br>";
echo "Email: " . $_SESSION['email'] . "<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/Prog-P4/SD1M4SKILLS/Week5/afhandeling.php" method="post">
        <div>
            <label>Name:</label>
            <input type="text" name="naam" required>
            <label>Email:</label>
            <input type="email" name="email" required><br>
        </div>
        <button type="submit">Submit</button>
    </form>
</body>
</html>