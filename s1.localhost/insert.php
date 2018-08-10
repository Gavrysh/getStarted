<?php
	$conn = mysql_connect("localhost", "SeGa","bdoZY3");  // устанавливаем соединение
	$database = "book";
	$table_name = "Artifacts";
	mysql_select_db($database); // выбираем базу данных

	$list_f = mysql_list_fields($database,$table_name);  // получаем список полей в таблице
	$n = mysql_num_fields($list_f); // число строк в результате предыдущего запроса составим один запрос сразу для всех полей таблицы

	$sql = "INSERT INTO $table_name SET "; // начинаем создавать запрос, перебираем все поля таблицы
	
	for($i=0;$i<$n; $i++){
		$name_f = mysql_field_name ($list_f,$i); // вычисляем имя поля
		$value = $_POST[$name_f]; // вычисляем значение поля
		$j = $i + 1;
		$sql = $sql . $name_f." = '$value'"; // дописываем в строку $sql пару имя=значение
		if ($j <> $n) $sql = $sql . ", "; // если поле не последнее в списке, то ставим запятую
	}
// перед тем как записывать что-то в базу, можно посмотреть, какой запрос получился echo $sql; 
	$result = mysql_query($sql,$conn); // отправляем запрос 

// выводим сообщение успешно ли выполнен запрос
	if (!$result) echo " Can't add ($table_name) "; 
    else echo "Success!<br>";
?>