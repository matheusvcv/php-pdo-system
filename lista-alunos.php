<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$databasePath = __DIR__ . '/banco.sqlite';
$pdo = New PDO('sqlite:' . $databasePath);

$statement = $pdo->query('SELECT * FROM students;');

$studentDataList = $statement-> fetchAll(PDO::FETCH_ASSOC);
$studentList = [];

foreach ($studentDataList as $studentData){

	$studentList[] = New Student($studentData['id'], $studentData['name'], New \DateTimeImmutable($studentData['birth_date']));

}


var_dump($studentList);











