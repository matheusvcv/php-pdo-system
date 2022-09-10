<?php

$caminhoBanco = __DIR__ . '/banco.sqlite';

$pdo = New PDO('sqlite:' . $caminhoBanco);

echo "Conectei";

?>