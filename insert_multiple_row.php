<?php

$pdo = require_once 'connect.php';

// data to insert
$names = [
    'Penguin/Random House',
    'Hachette Book Group',
    'Simon & Schuster',
    'Harper Collins'
];

// SQL Statements with named placeholder "name"
$sql = 'INSERT INTO publishers(name) VALUES(:name)';

// prepare the statement
$statement = $pdo->prepare($sql);

foreach ($names as $name) {
    $statement->execute([
        ':name' => $name
    ]);
}