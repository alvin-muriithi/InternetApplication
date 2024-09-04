<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First Web Page</title>
</head>
<body>
    <h1>This is my first web page</h1>

	<?php
	require_once 'load.php';
	print $Obj -> user_age("Tom", 2005);

	?>
	
</body>
</html>