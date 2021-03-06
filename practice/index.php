<?php
error_reporting(-1);
ini_set('display_errors','On');
header('Content-Type: text/html; charset=utf-8');

echo '<h2>Найти сумму цифр числа</h2><hr>';
echo '<p>Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.<br>
По желанию можете сделать проверку на корректность введения данных пользователем.<p><hr>';
$arr = array(
	'123',
	'123123',
	'0123',
	'98765'
	);
foreach ($arr as $key => $value) {
	$sum = 0;
	$str = $arr[$key];
	echo $arr[$key].'<br>';
	for($i=0; $i<strlen($str); $i++) {
		$sum+=$str[$i];
	}
	echo 'Sum = '.$sum.'<br>';
}
echo '<hr>';

echo '<h2>Проверить количество вхождения цифры в число</h2>';
echo '<p>Вам нужно разработать программу, которая считала бы количество вхождений какой-нибуть выбранной вами цифры в выбранном вами числе.<br>Например: цифра 5 в числе 442158755745 встречается 4 раза</p>';
// За допомогою регулярки
$arr = array(
	'123',
	'123123',
	'0123',
	'98765'
	);
foreach ($arr as $key => $value) {
	echo $arr[$key].'<br>';
	preg_match_all('#[1]#u', $arr[$key], $mt);
	echo '<pre>'.print_r($mt, 1).'</pre>';
	if (count($mt)) {
		echo 'Кількість входжень - '.count($mt[0]).'<br><hr>';
	}
}
// Звичайний for
$tmp = '442158755745';
$sr = '5';
$count = 0;
for($i=0; $i<strlen($tmp); $i++) {
	if($sr == $tmp[$i]) {
		$count++;
	}
}
echo 'Кількість символу '.$sr.' у рядку '.$tmp.' дорівнює - <b>'.$count.'</b></br><hr>';

echo '<h2>Найти сумму чисел, которые делятся на 5</h2>';
echo 'Разработайте программу, которая из чисел 20 .. 45 находила те, которые делятся на 5 и найдите сумму этих чисел. Рекомендую использовать функцию fmod для определения "делится число" или "не делится".<br>';
$min_n = 20;
$max_n = 45;
$num = 5;
$sum = 0;
for($i=$min_n; $i<=$max_n; $i++) {
	if(!($i%$num)) {
		echo 'Число - '.$i.'<br>';
		$sum+=$i;
	}
}
echo 'Сума чисел дорівнює '.$sum.'<br><hr>';

echo '<h2>Найти максимальное и минимльное значение массива</h2>';
echo '<p>Ваше задание создать массив, наполнить его случайными значениями (функция rand), найти максимальное и минимальное значение и поменять их местами.</p>';

$arr = array();
$maxLen = 1000;
$minLen = 10;

for($i=0; $i<$maxLen; $i++) {
    $arr[$i] = rand($minLen, $maxLen);
}
$min = $arr[0];
$max = $arr[0];
foreach($arr as $value) {
    if($value > $max) {
        $max = $value;
    }
    if($min > $value) {
        $min = $value;
    }
}
echo 'Max = '.$max.'<br>Min = '.$min.'<hr>';

/*---------- Зробити програмою по конвертації температури з перевіркою вводу від користувача за допомогою регулярки ------
$celsius = ($fahrenheit - 32) * 5 / 9; */

echo '<h2>Температура по Фарингейту</h2>';

$celsius = 30;
while ($celsius >= 0) {
    $fahrenheit = round(($celsius*9/5)+32, 2);
    echo $celsius.'&deg по цельсію, це '.$fahrenheit.'&deg по фарінгейту<br>';
    $celsius = $celsius - 1;
}


//-------------------------------------------------------------------------------------------------------------------//

