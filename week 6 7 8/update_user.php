<?php
declare(strict_types=1);
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update User Text</title>
</head>
<body>
    <form action="update.php" method="POST">
        <label for="user_input">User Input:</label>
        <input type="text" name="user_input" id="user_input">
        <br>
        <button type="submit">Update User Text</button>
    </form>
</body>
</html>
