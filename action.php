
<?php  


$pass = 'Qwertypassword2998'; // пароль в базе данных

$truePass = 'Qwertypassword2998'; // пароль от пользователя

echo '<br>';

echo 'Ваш хеш: ' . md5($pass);
echo '<br><br>';
echo 'Ваш хеш: ' . md5($truePass);

echo '<br><br>';



if (md5($pass) == md5($truePass))

	{echo 'Пароль в базе данных и пароль введеный пользователем совпадают!<br><br>';
echo 'Здравствуйте ' . htmlspecialchars($_POST['name']);
}

else {

	echo 'Не правильно введен пароль!';
}
echo '<br>';





//Вам echo (int)$_POST['age'];  лет.




?>