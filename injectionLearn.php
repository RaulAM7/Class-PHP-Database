<?php

echo 'asdaosjbdiahjsdbiasijkdvhasd'.PHP_EOL;


// 0.- SQL based on 1=1 is always True

// Code base
$txtUserId = getRequestString("UserId");
$txtSQL = "SELECT * FROM Users WHERE UserId = " + $txtUserId;

// Si le metes 105 OR 1=1

// La query se convierte en SELECT * FROM Users WHERE UserId = 105 OR 1=1;
// SELECT UserId, Name, Password FROM Users WHERE UserId = 105 or 1=1;




// 1.- SQL Injection based on = is always true 

// Code base
$uName = getRequestString("username");
$uPass = getRequestString("userpassword");

$sql = 'SELECT * FROM Users WHERE Name ="' + $uName + '" AND Pass ="' + $uPass + '"';

// La query original es SELECT * FROM Users WHERE Name ="John Doe" AND Pass ="myPass"

// Pero si metes en Username y password = " or ""="

// La query se transforma en:
// SELECT * FROM Users WHERE Name ="" or ""="" AND Pass ="" or ""=""
// The SQL above is valid and will return all rows from the "Users" table, since OR ""="" is always TRUE.





// 2.- SQL Injection based on Batched SQL Statements
/*
Most databases support batched SQL statement.

A batch of SQL statements is a group of two or more SQL statements, separated by semicolons.

The SQL statement below will return all rows from the "Users" table, then delete the "Suppliers" table.
*/


// Code base

$txtUserId = getRequestString("UserId");
$txtSQL = "SELECT * FROM Users WHERE UserId = " + $txtUserId;

// SI le metemos un useID = 105; DROP TABLE Suppliers

// La query se transforma en SELECT * FROM Users WHERE UserId = 105; DROP TABLE Suppliers;


/*
.
.
.
MÁS EJEMPLOS DE SQL INJECTION

*/





// ¿Cómo prepararnos para no sufrir ante SQL Injections?

// Barrera 0.- Prepared Statements

/*
Using Prepared Statements
Prepared statements are a feature used to execute the same (or similar) SQL statements repeatedly with high efficiency. 
They also help prevent SQL injection by separating SQL logic from data.

Benefits of Prepared Statements:

-Security: Prevents SQL injection by using parameterized queries.
-Performance: Prepares the SQL statement once and executes it multiple times with different parameters.
*/


// Ejemplo de 