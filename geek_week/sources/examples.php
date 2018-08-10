<h1>Это простой HTML</h1>
<?php
$name = "Geekbrains";
$position = "student";

$sum_string = $name . " " . $position;

echo "Hello, $sum_string!";
$name = 100500;

/* 
многострочный комментарий
 */

// однострочный комментарий

# тоже однострочный комментарий
 
$a = 4;
$b = 5;
echo $a + $b . '<br>'; // сложение
echo $a * $b . '<br>'; // умножение
echo $a - $b . '<br>'; // вычитание
echo $a / $b . '<br>'; // деление
echo $b % $a . '<br>'; // остаток от деления

$a += $b;

$a = 0;
echo $a++; // Постинкремент
echo ++$a; // Преинкремент
echo $a--; // Постдекремент
echo --$a; // Предекремент

$a = 4;
$b = "4";

var_dump($a == $b); // Сравнение по значению
var_dump($a === $b); // Сравнение по значению и типу
?>

<pre>
<?
$users = [];
$users[0] = [
   'name' => 'Alex',
   'email' => 'alex@example.com'
];
$users[1] = [
   'name' => 'George',
   'email' => 'george@domain.ru',
   'additionalData' => 'Всем привет!'
];
$users[3] = [
   'name' => 'Michael',
   'email' => 'mich@test.com'
];

var_dump($users[0]['name']);

?>
</pre>