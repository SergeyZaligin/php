<?php
require_once 'list_jokes.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jokes List</title>
</head>
<body>
	<p>
		<?php foreach($jokesList as $joke) : ?>
			<p><?php echo htmlspecialchars($joke, ENT_QUOTES, 'UTF-8');  ?></p>
		<?php endforeach; ?> 
	</p>
</body>
</html>