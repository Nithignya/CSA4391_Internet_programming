<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "checkn";
$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "INSERT INTO reg1 (username, password) VALUES ('$username', '$password')";
if ($conn->query($sql) === TRUE) {
    echo "Registration successful";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>