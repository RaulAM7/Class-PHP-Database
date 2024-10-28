<?php

$servername = "localhost";
$username = "raul";
$password = "student2024";
$database = "Imperial_Database";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn)
{
    die("Connection Failed!". mysqli_connect_error());
}
echo "Connected successfully".PHP_EOL;


// CRUD Operations (Create, Read (All, One), Update, Delete)

// Create
// Write the query
$sql0 = "
INSERT INTO 
Ships 
(ship_id, ship_name, ship_type, capacity, in_service) 
VALUES 
(13, 'El Corsario Verde', 'Starfighter', 10, 'Independent')
";

// Executing the query
if (mysqli_query($conn, $sql0)){
    echo 'New record created successfully'.PHP_EOL;
} else {
    echo 'ERROR'. mysqli_error($conn)-PHP_EOL;
}



