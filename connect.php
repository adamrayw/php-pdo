<?php

// reqire the config file
require 'config.php';

// function for reusable connection
function connect($host, $db, $user, $pass)
{
    // connect to the database
    $dsn = "mysql:host=$host;dbname=$db;charset=utf8";

    try {
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if ($pdo) {
            echo 'Connected to the $db database successfully!';
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

return connect($host, $db, $user, $pass);