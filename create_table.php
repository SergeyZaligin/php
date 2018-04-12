<?php
try {
	$sql = "CREATE TABLE IF NOT EXISTS joke ("
	. "id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY , "
	. "jokename TEXT NOT NULL, "
	. "jokedate DATE NOT NULL "
	. ") DEFAULT CHARACTER SET utf8 ENGINE=innoDB";
	$pdo->exec($sql);
} catch (PDOException $e) {
	$output = "Ошибка при создании таблицы " . $e->getMessage();
	include 'output.html.php';
	exit();
}