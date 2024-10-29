<?php

$servername = "localhost";
$username = "raul";
$password = "student2024";
$database = "Class_PHP_DB";


try 
{
    $conn = new mysqli($servername, $username, $password, $database);
    if ($conn->connect_error)
    {
        throw new Exception('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }
} catch(Exception $e)
    {
        echo 'Caught exception: '. $e->getMessage().PHP_EOL;
}
