<?php
    require_once(__DIR__ . "/../model/config.php");
//Logout a User
    unset($_SESSION["authenticated"]); //set authenticated to false
    
    session_destroy(); //kill the session
    header("Location: " . $path . "index.php"); //redirect to index.php
    
    