<?php

$servername = "localhost";
$usernameDb = "";
$passwordDb = "";
$db = 'vacation';

// Create connection
$conn = new mysqli($servername, $usernameDb, $passwordDb, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

