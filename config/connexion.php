<?php 

$servername = "localhost";
$username = "root";
$password = "NEWPASS";

//CREATE CONNECTION
$conn = new mysqli($servername, $username, $password);

//CHECK CONNECTION
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//CREATE DATABASE
$sql = "CREATE DATABASE subskill";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully\n";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();

//NEW CONNECTION
$dbname = "subskill";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//USE DATABSE
$sql_use = "USE subskill";
if ($conn->query($sql_use) === TRUE) {
    echo "Use database successfully\n";
} else {
    echo "Error to use database:" . $conn->error;
}

//CREATE TABLE
$sql_table = "CREATE TABLE job (
Date VARCHAR(60) NOT NULL,
Titre Varchar(180) NOT NULL,
Lieu VARCHAR(180) NOT NULL,
Contrat VARCHAR(180) NOT NULL,
Metier VARCHAR(180) NOT NULL,
Entreprise VARCHAR(180) NOT NULL,
Reference VARCHAR(180) NOT NULL,
Description VARCHAR(500) NOT NULL
)";

if ($conn->query($sql_table) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>