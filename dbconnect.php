<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "stitch_me";

session_start();
// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>