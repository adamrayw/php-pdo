<?php

// reqire the config file
require 'config.php';

// function for reusable connection
function connect($host, $db, $user, $pass)
{
    // connect to the database
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8";

    try {
        // create new PDO object
        $pdo = new PDO($dsn, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

        // return the PDO object
        return $pdo;
    } catch (PDOException $e) {
        die($e->getMessage());
    }
}

return connect($host, $db, $user, $pass);