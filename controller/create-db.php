<?php
    require_once(__DIR__ . "/../model/database.php");
    //this text defines the DIR model.

    $connection = new mysqli($host, $username, $password);
    //the $connection defines the username and password and host.

  if($connection->connect_error) {
    die("Error: " . $connection->connect_error);
    //this text defines an error that makes the connection go off.
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
    $query = $connection->query("CREATE TABLE posts ("
            . "id int(11) NOT NULL AUTO INCREMENT,"
            . "title varchar(255) NOT NULL,"
            . "post text NOT NULL,"
            . "PRIMARY KEY (id))");
 

     $connection->close();