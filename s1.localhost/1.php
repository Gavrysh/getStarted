<?php
	$conn = mysql_connect("localhost", "SeGa","bdoZY3") or die("Невозможно установить соединение: ". mysql_error());
	echo "Соединение установлено";
	if ( mysql_select_db("book") ) {  //выбираем базу данных для работы
		echo "Вибрана база \"book\"";

		$list_f = mysql_list_fields ("book","Artifacts",$conn);  // получаем список полей в таблице
		$n = mysql_num_fields($list_f);  // число строк в результате предыдущего запроса (т.е. сколько всего полей в таблице Artifacts) 
		
		echo "<form method=post action=insert.php>";  // создаем форму для ввода данных
		echo "&nbsp;<TABLE BORDER=0 CELLSPACING=0 width=50% ><tr><TD  BGCOLOR='#005533' align=center><font color='#FFFFFF'><b> Add new row in $table_name</b></font></td></tr><tr><td></td></tr></TABLE>";
		echo "<table border=0 CELLSPACING=1 cellpadding=0 width=50% >";
		
		// для каждого поля получаем его тип, имя, длину и флаги
		for($i=0;$i<$n; $i++){
			$type = mysql_field_type($list_f, $i);
			$name_f = mysql_field_name($list_f,$i);
			$len = mysql_field_len($list_f, $i);
			$flags_str =  mysql_field_flags ($list_f, $i);
			// из строки флагов делаем массив, где каждый элемент массива - флаг поля
			$flags = explode(" ", $flags_str); 
			foreach ($flags as $f){
				if ($f == 'auto_increment')
					$key = $name_f; // запоминаем имя автоинкремента
			}
			// для каждого поля, не являющегося автоинкрементом, в зависимости от его типа выводим подходящий элемент формы
			if ($key <> $name_f){ 
				echo "<tr><td align=right bgcolor='#C2E3B6'><font size=2><b>&nbsp;". $name_f ."</b></font></td>";
				switch ($type){
					case "string":
						$w = $len/5;
						echo "<td><input type=text name=\"$name_f\" size = $w ></td>";
					break;
					case "int": 
						$w =  $len/4;
						echo "<td><input type=text name=\"$name_f\" size = $w ></td>";
					break;  
					case "blob":
						echo "<td><textarea rows=6 cols=60 name=\"$name_f\"></textarea></td>";
					break;   
				} 
			}
			echo "</tr>";
		}
		echo "</table>";
		echo "<input type=submit name='add' value='Add'>";
		echo "</form>";
	}
	else
		echo "Невдача при виборі бази!"
?>