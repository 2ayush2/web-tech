<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'Student';

// Create_Connection
$conn = mysqli_connect($servername, $username, $password);

// Check_Connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database if it doesn't exist
$sqlCreateDatabase = "CREATE DATABASE IF NOT EXISTS $dbname";
if (mysqli_query($conn, $sqlCreateDatabase)) {
    echo "Database created successfully or already exists<br>";
} else {
    echo "Error creating database: " . mysqli_error($conn) . "<br>";
}

// Select the database
if (!mysqli_select_db($conn, $dbname)) {
    die("Failed to select database: " . mysqli_error($conn));
}

// SQL to create table
$sql = "CREATE TABLE IF NOT EXISTS table1 (
    ID int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Firstname VARCHAR(255),
    Lastname VARCHAR(255),
    Gender TINYINT(1),
    Semester int,
    Symbol VARCHAR(255),
    Batch int
)";

// Check if the table creation query was successful
if (mysqli_query($conn, $sql)) {
    echo "Table created successfully or already exists<br>";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "<br>";
}

// Close the connection
mysqli_close($conn);
?>