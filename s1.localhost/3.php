<?php
session_start(); // инициализируем сессию
$test = "Переменная сессии";
$_SESSION['test']= $test; 
// регистрируем переменную $test.
// если register_globals=on, 
// то можно использовать 
// session_register('test');
    
print_r($_SESSION); 
// выводим все глобальные переменные 

echo session_id(); 
// выводим идентификатор сессии

echo "<hr>";
session_unset(); 
// уничтожаем все глобальные 
// переменные сессии
print_r($_SESSION);
echo session_id();
echo "<hr>";
session_destroy(); // уничтожаем сессию
print_r($_SESSION);
echo session_id();
?>