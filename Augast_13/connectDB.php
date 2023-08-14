<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Products";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) { //This checks if there was an error while connecting to the database.
    die("Connection failed: " . $conn->connect_error);  //If there was a connection error, this line stops the script and displays an error message.
}

?>