<?php
session_start();

$_SESSION["naam"] = "Li hong";

header("Location: /");
?>