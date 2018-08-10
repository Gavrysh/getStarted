<?php
session_start();  // создаем новую сессию или восстанавливаем текущую
echo session_id(); // выводим идентификатор сессии
?>
<html>
<head><title>My home page</title></head>
... // домашняя страничка
</html>
<?php
echo session_name();  // выводим имя текущей сессии. В данном случае это PHPSESSID 
?>