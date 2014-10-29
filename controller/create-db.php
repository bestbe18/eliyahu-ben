<?php
    require_once(__DIR__ . "/../model/database.php");

    $connection = new mysqli($host, $username, $password);

  if($connection->connect_error) {
    die("Error: " . $connection->connect_error);
}

     $exists = $connection->select_db($database);

    if (!$exists) {
         $query = $connection->query("CREATE DATABASE  $database");
         //I created a Database when it doesn't exist.
    
    if($query) {
         echo "Successfully created database: " . $database;
         //This echo tells us that the database has been created.
    }
    }
    else {
        //This else is only going to happen when the database is this.
         echo "Database already exists.";
        //Once the database exists, this echo tells us that it exists.
    }
 
 
     $connection->close();