<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "cricket_clubs";

// Create connection
$mysqli = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully<br>";
?>