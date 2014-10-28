<?php
require_once(__DIR_ . "/../model/database.php");
//this is my comments
$connection = new mysqli($host, $username, $password);
//enter comment here
if($connection->connect_error) {
    die("Error: " . $connection->connect_error);
}
$exists = $connection->select_db($database);
//and here
if (!$exists) {
    $query = $connection->query("CREATE DATABASE  $database");
    
    if($query) {
    echo "Successfully created database: " . $database;
    }
    //also here
}
else {
    echo "Database already exists.";
}
   $query = $connection->query("CREATE");
   //and here
   $connection->close();