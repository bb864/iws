<?php

$servername = "us-cdbr-iron-east-05.cleardb.net";
$username = "be9f3fe40ffe9f";
$password = "c526a77a";
$db = "id3800351_ecomm";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
