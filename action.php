
<?php  


$name = 'Михаил'; // пароль в базе данных

$truePass = 12345; // пароль от пользователя

echo '<br>';

echo 'Ваш хеш имени: ' . md5($name);
echo '<br><br>';
echo 'Ваш хеш пароля: ' . md5($pass);

echo '<br><br>';



if (md5($name)) == $name

	{echo 'Пароль в базе данных и пароль введеный пользователем совпадают!<br><br>';
echo 'Здравствуйте ' . htmlspecialchars($_POST['name']);
echo '<br><br>';
echo 'Ваш пароль: ' . (int)$_POST['pass'];
}

else {

	echo 'Не правильно введен пароль!';
}
echo '<br>';










?>