<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aqi";

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$passwords = $_POST['passwords'];

$sql = "INSERT INTO aqi_register (firstname,lastname,email, passwords) VALUES ('$firstname','$lastname','$email','$passwords')";
$result = mysqli_query($conn, $sql); 
if ($result) {
    echo "valid";
    } else {
    echo "invalid";
    
    }
    mysqli_close($conn);
?>
