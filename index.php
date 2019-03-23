
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


$str = 'Пароль';
echo '<br>';
echo md5($str);
echo '<br>';

if (md5($str) === '5ebe553e01799a927b1d045924bbd4fd')
	{echo "Проверка пройдена!<br>";
}


?>

</p>
</body>
</html>

