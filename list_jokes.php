<?php
try {
	$sql = "SELECT * FROM joke";
	$result = $pdo->query($sql);
} catch (PDOException $e) {
	$error = 'Ошибка при извлечении шуток: ' . $e->getMessage(); 
	include 'error.html.php';
	exit();
}

while ($row = $result->fetch()) {
	$jokesList[] = $row['id'];
	$jokesList[] = $row['joketext'];
	$jokesList[] = $row['jokedate']; 
}

var_dump($jokesList);