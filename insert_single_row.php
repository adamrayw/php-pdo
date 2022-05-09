<?php

$pdo = require_once 'connect.php';

// insert single record
$name = 'John';

// SQL Statement with named placeholder "name"
$sql = 'INSERT INTO publishers(name) VALUES(:name)';

// prepare the statement
$statement = $pdo->prepare($sql);

$statement->execute([
    ':name' => $name
]);

$publisher_id = $pdo->lastInsertId();

echo 'The publisher id ' . $publisher_id . ' was created.';