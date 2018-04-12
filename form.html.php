<?php
//require_once 'list_jokes.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jokes List</title>
	<style type="text/css"> 
		textarea { 
			display: block; 
			width: 100%; 
		} 
	</style> 

</head>
<body>
	<form action="?" method="post">

		<div class="form-group"> 
			<label for="joketext">Введите сюда свою шутку:</label> 
			<textarea id="joketext" name="joketext" class="form-control" rows="3"> 
			</textarea> 
		</div> 
		<div>
			<input class="btn btn-success" type="submit" value="Добавить">
		</div> 

	</form>
</body>
</html>