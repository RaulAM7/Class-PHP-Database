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
echo "Connected successfully";


