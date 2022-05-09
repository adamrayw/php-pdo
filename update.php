<?php

$pdo = require_once 'connect.php';

$publisher = [
    'publisher_id' => 1,
    'name' => 'McGraw-Hill Education',
];

$sql = 'UPDATE publishers SET name = :name WHERE publisher_id = :publisher_id';

// prepare the statement
$statement = $pdo->prepare($sql);

// bind params
$statement->bindParam(':publisher_id', $publisher['publisher_id'], PDO::PARAM_INT);
$statement->bindParam(':name', $publisher['name']);

// execute the UPDATE statement
if ($statement->execute()) {
    echo 'The publisher was updated.';
}