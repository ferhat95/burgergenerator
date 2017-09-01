<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "burgergenerator";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO kunden (vorname, nachname, email)
VALUES ('vorname1', 'vorname2', 'bsp@email.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
