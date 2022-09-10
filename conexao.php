<?php

$databasePath = __DIR__ . '/banco.sqlite';

$pdo = New PDO('sqlite:' . $databasePath);

echo "Conectei";

$pdo-> exec('CREATE TABLE students (id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT);');

?>