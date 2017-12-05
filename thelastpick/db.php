<?php

$servername = "localhost";
$username = "id3800351_krishna";
$password = "Krishna12345";
$db = "id3800351_ecomm";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>