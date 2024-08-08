<?php
$servername = "localhost";
$username = "username";
$password = "password";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die ("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE myDB";

if (mysqli_query($conn, $sql)) {
    echo "Database successfully created.";
}
else {
    echo "Error creating database: " . mysqli_error($conn);
}

mysqli_close($conn);