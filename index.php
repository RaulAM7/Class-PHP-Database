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
// Write the query
/*
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
*/

// OTRA FORMA DE CREAR REGISTROS EN UNA DB

/*
$sql1 = "
INSERT INTO 
Planets 
(planet_id, planet_name, region, population, discovered_date) 
VALUES 
(11, 'Planeta Tierra', 'Core Worlds', 7000000000, '1999-01-01')
"
;
if ($conn->query($sql1))
{
    echo "New record created sucessfully".PHP_EOL;
}
else
{
    echo "New Error: ". $sql . $conn->error.PHP_EOL;
}
*/

// Reading Data

