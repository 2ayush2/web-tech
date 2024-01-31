<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'Student';

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection error: " . mysqli_connect_error());
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

// SQL to create table 'Class'
$sqlClass = "CREATE TABLE IF NOT EXISTS Class (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255)
)";

if (mysqli_query($conn, $sqlClass)) {
    echo "Table 'Class' created successfully<br>";
} else {
    echo "Error creating table 'Class': " . mysqli_error($conn) . "<br>";
}

// SQL to create table 'Batch'
$sqlBatch = "CREATE TABLE IF NOT EXISTS Batch (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(255)
)";

if (mysqli_query($conn, $sqlBatch)) {
    echo "Table 'Batch' created successfully<br>";
} else {
    echo "Error creating table 'Batch': " . mysqli_error($conn) . "<br>";
}

// Close connection
mysqli_close($conn);
?>