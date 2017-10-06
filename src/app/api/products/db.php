<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
$servername = "localhost";
$username = "admin";
$password = "abc123";
$dbname = "practice";
$conn = new mysqli($servername, $username, $password, $dbname);
?>
