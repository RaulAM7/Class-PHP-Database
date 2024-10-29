<?php

$GLOBALS['X'] = 'x';

print_r($GLOBALS);

require 'index.php';

$conn = MySQL::connect($servername, $username, $password, 'Imperial_Database');
MySQL::checkConnection($conn);
MySQL::selectFrom($conn, '*', 'Planets', 'planet_id', 15) . PHP_EOL;