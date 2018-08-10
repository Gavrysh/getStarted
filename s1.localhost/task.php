<?php
print_r($_GET); echo "<br>";
arsort ($_GET); 
    // сортируем массив в обратном порядке,
    // сохраняя ключи
print_r($_GET); echo "<br>";
$ordered_names = array_keys($_GET); 
    // составляем новый массив
foreach($ordered_names as $key => $val)
echo "$key :$val <br>"; 
    // выводим элементы нового массива
?>