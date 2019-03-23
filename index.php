
<!DOCTYPE html>
<html>
<head>
	<title> First page on php </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

	<body><p>




<?php

$branch = "Add branch";
$users ["Trestol",
		"Pupkin",
		"Wertic",
		"Cosmos"];

		foreach ($users as $user) {

			echo $user;
			echo $branch;
		
		}


?>

</p>
</body>
</html>

