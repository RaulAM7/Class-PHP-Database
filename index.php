<?php

 $servername = "localhost";
 $username = "raul";
 $password = "student2024";
 $database = "Imperial_Database";

// CREATE
class MySQL
{
    public static function connect ($servername, $username, $password, $database)
    {
        $new_connect = mysqli_connect($servername, $username, $password, $database);
        return  $new_connect;
        
    }
    public static function checkConnection($conn)
    {
        if ($conn->connect_error) {
            die("Connection Failed!" . $conn->connect_error);
        }
        echo "Connected successfully" . PHP_EOL;
    }
    static public function query_insertInto($table, $conn)
    {
        $sql = "
        INSERT INTO ". 
        $table. 
        " (planet_id, planet_name, region, population, discovered_date) 
        VALUES 
        (15, 'Neptuno', 'Core Worlds', 0, '1999-01-01')
        ";
        if ($conn->query($sql)) {
            echo "New record created sucessfully" . PHP_EOL;
        } else {
            echo "New Error: " . $sql . $conn->error . PHP_EOL;
        }
        echo "Distroying connection". PHP_EOL;
        $conn->close();
    }
    static public function selectFrom($conn, $column, $table, $whereConditional, $whereValue)
    {
        $sql =  "
            SELECT " . $column .
            " FROM " . $table .
            " WHERE " . $whereConditional . ">" . $whereValue;

        $result = $conn->query($sql);

        if ($result->num_rows > 0)
        {
            while ($row = $result->fetch_assoc())
            {
                foreach($row as $key => $value) {
                    print_r($row). PHP_EOL;
                }
            }
        } else {
            echo '0 results';
        }
        echo "Distroying connection" . PHP_EOL;
        $conn->close();
    }
    static public function updateSet($conn, $table, $column, $newValue, $whereConditional, $whereValue)
    {
        $sql = "
                UPDATE " . $table . 
                 " SET " .$column. "="."'{$newValue}'".  
                 " WHERE ". $whereConditional. "=". $whereValue;
        
        if ($conn->query($sql)) 
        {
            echo 'The number of affected rows is: '. $conn->affected_rows ."". PHP_EOL;
            echo "Record updated succesfully" . PHP_EOL;
        } 
        else 
        {
            echo " Error updating error: " . $conn->error;
        }
        echo "Distroying connection" . PHP_EOL;
        $conn->close();
    }
    static public function delete($conn, $table, $whereConditional, $whereValue)
    {
    
        $sql = "
                 DELETE FROM ". $table.
                " WHERE ". $whereConditional. "=". $whereValue;
    
        if ($conn->query($sql)) 
        {
            echo 'The number of affected rows is: ' . $conn->affected_rows . "" . PHP_EOL;
            echo "Record deleted successfully";
        } else 
        {
            echo "Error deleting record: " . $conn->error;
        }
        $conn->close();
    }
}
// Create connection
$conn = MySQL::connect($servername, $username, $password, $database);
MySQL::checkConnection($conn);

// CRUD Operations (Create, Read (All, One), Update, Delete)

// Create Data
//MySQL::query_insertInto( 'Planets', $conn0);

// Reading ALL Data from a table
$conn = MySQL::connect($servername, $username, $password, $database);
MySQL::checkConnection($conn);
MySQL::selectFrom($conn, '*', 'Planets', 'planet_id', 15).PHP_EOL;

// Update Data
$conn = MySQL::connect($servername, $username, $password, $database);
MySQL::checkConnection($conn);
MySQL::updateSet($conn, 'Planets', 'region', 'Outer Rim', 'planet_id', 15);

// Deleting Data
$conn = MySQL::connect($servername, $username, $password, $database);
MySQL::checkConnection($conn);
MySQL::delete($conn, 'Ships', 'ship_id', 11);

