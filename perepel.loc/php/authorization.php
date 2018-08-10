<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="css/style.css" type="text/css" rel="stylesheet">
<title>Проєкт сайту Perepel.loc</title>
</head>
<body>
	<h1>Perepel.loc</h1>
	<?php
		$authorization = false;		

		if ( $_REQUEST["userLogin"] == NULL || $_REQUEST["userLogin"] == "" ) {
			echo "Ім'я користувача не повинно бути пустим!" . "</br>";
			$authorization = false;
		} else {
			$userLogin = $_REQUEST["userLogin"];
			$authorization = true;
		}
		if ( $_REQUEST["userPassword"] == NULL || $_REQUEST["userPassword"] == "" ) {
			echo "Пароль користувача не повинен бути пустим" . "</br>";
			$authorization = false;
		} else {
			$userPassword = $_REQUEST["userPassword"];
			$authorization = true;
		}

		if ( $authorization ) {
			echo "Вітаю Вас з успішною авторизацією на сайті!!!" . "</br>";
		}
		else {
			echo "Ви не авторизовані на цьому сайті!" . "</br>";
		}
		$conn = mysqli_connect('localhost', 'root', 'Y7dteK5WKC98BPh3');
		if ( !$conn ) {
			die("Помилка під'єднання до " . mysqli_connect_errno() . mysqli_connect_error());
		}
		echo 'Соединение установлено... ' . mysqli_get_host_info($conn) . "\n";
		
		
		
		
 		$db = mysqli_select_db($conn, 'perepel');
		$sql = "INSERT into users (usersLogin, usersPassword) VALUES ('$userLogin', '$userPassword')";
		if ( $rs = mysqli_query($conn, $sql) ) {
			printf ( "%d строк вставлено.\n", mysqli_affected_rows($conn) );
		} else {
			echo "Помилка виконання запиту.";
		}

		mysqli_close($conn);
	?>
</body>
</html>