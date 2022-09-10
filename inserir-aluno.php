<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = New PDO('sqlite:' . $databasePath);

$student = New Student(null, 'Matheus Viana', new DateTimeImmutable('1997-12-01'));

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->name()}', '{$student->birthDate()-> format('Y-m-d')}');";

var_dump($pdo->exec($sqlInsert));

?>
