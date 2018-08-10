<span class="head4">Категории программ:</span>
<table>
<?php

//Создание соединения с данными 
		
  $conn = odbc_connect
  ('Driver={Microsoft Access Driver (*.mdb)}; DBQ=c:\inetpub\wwwroot\PHPTutorial\Ecommerce\databases\ecommerce.mdb','','');
		
//Формирование оператора SQL SELECT 
		
  $sql = "SELECT DISTINCT ItemType FROM Products ORDER BY ItemType";
  
//Выполнение оператора SQL и создание множества записей 
		
  $rs = odbc_exec($conn, $sql);
  
//Цикл по множеству записей и вывод необходимых записей 

 while($row = odbc_fetch_array($rs)) 
	
	{
echo "<tr style=\"color:seagreen; line-height:8pt; font-size:9pt\"
			onMouseOver=\"this.style.backgroundColor='lightgreen'; 
			this.style.color='darkgreen'; this.style.cursor='hand'\"
			onMouseOut=\"this.style.backgroundColor='white'; 
			this.style.color='seagreen'\"
			
			onClick=\"location.href='search.php?Category=$row[ItemType]'\">
			
			<td>$row[ItemType]</td>
		</tr>";
		
		}

//Закрытие соединения с базой данных 

odbc_close($conn);

?>
</table>