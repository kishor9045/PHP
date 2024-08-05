<?php
$servername = "localhost";
$username = "kishor132";
$password = "kishor.s9037844"; // No password
$database = "mydata";

$conn = new mysqli_connect($servername, $username, $password, $database);
// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection successful";
}
// $object->property
$conn->close();
?>