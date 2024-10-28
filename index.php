<?php

$servername = "localhost";
$username = "raul";
$password = "student2024";
$database = "Imperial_Database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error)
{
    die("Connection Failed!". $conn->connect_error);
}
echo "Connected successfully".PHP_EOL;


// CRUD Operations (Create, Read (All, One), Update, Delete)

// CREATE

function query_insertInto($table, $conn)
{
    global $conn;
    $sql = "
    INSERT INTO ". 
    $table. 
    " (planet_id, planet_name, region, population, discovered_date) 
VALUES 
(13, 'Jupiter', 'Core Worlds', 1, '1999-01-01')
";
    if ($conn->query($sql)) {
        echo "New record created sucessfully" . PHP_EOL;
    } else {
        echo "New Error: " . $sql . $conn->error . PHP_EOL;
    }
}

query_insertInto("Planets", $conn);


// Reading Data

