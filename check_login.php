<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "aqi";
$conn = mysqli_connect($host, $user, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$email = $_POST["email"];
$passwords = $_POST["passwords"];

$sql = "SELECT * FROM registers WHERE email='$email' AND passwords='$passwords'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
echo "valid";
} else {
echo "invalid";
}

mysqli_close($conn);
?>