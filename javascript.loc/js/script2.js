/* Создание массива

Задача из 5 шагов-строк:

    Создайте массив styles с элементами «Джаз», «Блюз».
    Добавьте в конец значение «Рок-н-Ролл»
    Замените предпоследнее значение с конца на «Классика». Код замены предпоследнего значения должен работать для массивов любой длины.
    Удалите первое значение массива и выведите его alert.
    Добавьте в начало значения «Рэп» и «Регги».

Массив в результате каждого шага:

Джаз, Блюз
Джаз, Блюз, Рок-н-Ролл
Джаз, Классика, Рок-н-Ролл
Классика, Рок-н-Ролл
Рэп, Регги, Классика, Рок-н-Ролл


var styles = ["Джаз", "Блюз"];
styles.push("Рок-н-Ролл");
styles[styles.length - 2] = "Классика";
alert( styles.shift() );
styles.unshift("Рэп", "Регги ");

*/



/* Получить случайное значение из массива

Напишите код для вывода alert случайного значения из массива:

var arr = ["Яблоко", "Апельсин", "Груша", "Лимон"];

P.S. Код для генерации случайного целого от min to max включительно:

var rand = min + Math.floor(Math.random() * (max + 1 - min));



var arr = ["Яблоко", "Апельсин", "Груша", "Лимон"];
var min = 0, max = arr.length;
var rand = min + Math.floor(Math.random() * (max + 1 - min));

alert( arr[rand] );

*/


/*
Создайте калькулятор для введённых значений

Напишите код, который:

    Запрашивает по очереди значения при помощи prompt и сохраняет их в массиве.
    Заканчивает ввод, как только посетитель введёт пустую строку, не число или нажмёт «Отмена».
    При этом ноль 0 не должен заканчивать ввод, это разрешённое число.
    Выводит сумму всех значений массива


// 1-й варіант (свій)
var sumArray = 0, value = 0, calcArray = [];

 do {
	value  = prompt( "Введіть число" );
	calcArray.push( value );
 } while ( (value != null) && (value != "") && ( typeof( value ) !== "number" )  );
	
	alert( calcArray );
	
	for ( var i = 0; i < calcArray.length; i++ ) {
		sumArray += +calcArray[i];
	}
	
	alert( sumArray );
	
//або так (2-й варіант)
	
var numbers = [];

while (true) {

  var value = prompt("Введите число", 0);

  if (value === "" || value === null || isNaN(value)) break;

  numbers.push(+value);
}

var sum = 0;
for (var i = 0; i < numbers.length; i++) {
  sum += numbers[i];
}

alert( sum );

*/


/* Поиск в массиве

Создайте функцию find(arr, value), которая ищет в массиве arr значение value и возвращает его номер, если найдено, или -1, если не найдено.

Например:

arr = ["test", 2, 1.5, false];

find(arr, "test"); // 0
find(arr, 2); // 1
find(arr, 1.5); // 2

find(arr, 0); // -1
 */
 
/* var arr = ["test", 2, 1.5, false];

alert( find(arr, "test") ); // 0
alert( find(arr, 2) ); // 1
alert( find(arr, 1.5) ); // 2
alert( find(arr, 0) ); // -1 */

//свій варіант
/* function find( fArr, value ) {
	var position = -1;
	for ( var i = 0; i < fArr.length; i++ ) {
		if ( value === fArr[i] ) {
			position = i;
		}
	}
	return position;
} */

//інший
/* function find(array, value) {

  for (var i = 0; i < array.length; i++) {
    if (array[i] == value) return i;
  }

  return -1;
}

Однако, в нем ошибка, т.к. сравнение == не различает 0 и false.

Поэтому лучше использовать ===. Кроме того, в современном стандарте JavaScript существует встроенная функция Array#indexOf, которая работает именно таким образом. Имеет смысл ей воспользоваться, если браузер ее поддерживает.

function find(array, value) {
  if (array.indexOf) { // если метод существует
    return array.indexOf(value);
  }

  for (var i = 0; i < array.length; i++) {
    if (array[i] === value) return i;
  }

  return -1;
}

var arr = ["a", -1, 2, "b"];

var index = find(arr, 2);

alert( index );

… Но еще лучшим вариантом было бы определить find по-разному в зависимости от поддержки браузером метода indexOf:

// создаем пустой массив и проверяем поддерживается ли indexOf
if ([].indexOf) {

  var find = function(array, value) {
    return array.indexOf(value);
  }

} else {
  var find = function(array, value) {
    for (var i = 0; i < array.length; i++) {
      if (array[i] === value) return i;
    }

    return -1;
  }

}

Этот способ – лучше всего, т.к. не требует при каждом запуске find проверять поддержку indexOf.
 */
 
 
/* Фильтр диапазона

Создайте функцию filterRange(arr, a, b), которая принимает массив чисел arr и возвращает новый массив, 
который содержит только числа из arr из диапазона от a до b. То есть, проверка имеет вид a ≤ arr[i] ≤ b. 
Функция не должна менять arr.

Пример работы:

var arr = [5, 4, 3, 8, 0];

var filtered = filterRange(arr, 3, 5);
// теперь filtered = [5, 4, 3]
// arr не изменился
 */

 
/* var arr = [5, 4, 3, 8, 0];

var filtered = filterRange(arr, 3, 5);

alert( filtered );

function filterRange ( array, min, max ) {
	result = [];
	
	for ( var i = 0; i < array.length; i++ ) {
		if ( (array[i] >= min) && (array[i] <= max) ) {
			result.push( array[i] );
		}
	}
	
	return result;
} */


/* Решето Эратосфена

Целое число, большее 1, называется простым, если оно не делится нацело ни на какое другое, кроме себя и 1.

Древний алгоритм «Решето Эратосфена» для поиска всех простых чисел до n выглядит так:

    Создать список последовательных чисел от 2 до n: 2, 3, 4, ..., n.
    Пусть p=2, это первое простое число.
    Зачеркнуть все последующие числа в списке с разницей в p, т.е. 2*p, 3*p, 4*p и т.д. В случае p=2 это будут 4,6,8....
    Поменять значение p на первое не зачеркнутое число после p.
    Повторить шаги 3-4 пока p2 < n.
    Все оставшиеся не зачеркнутыми числа – простые.

Реализуйте «Решето Эратосфена» в JavaScript, используя массив.

Найдите все простые числа до 100 и выведите их сумму.


//свій варіант
var 
	lastElement, p = 2,
	sumArray = 0;
	arrEratosfen = [];

	lastElement = prompt("Input last number");
	
	for ( var i = 2; i < lastElement; i++) {
		arrEratosfen[i] = true;
	}
	
	do {
		
		for ( i = p*2; i < lastElement; i += p ) {
			arrEratosfen[i] = false;
		}
		
		for ( i = p + 1; i < lastElement; i++ ) {
			if ( arrEratosfen[i] ) break;
		}
		
		p = i;
		
	} while ( p*p < lastElement );
	
	for ( i = 0; i < arrEratosfen.length; i++ ) {
		if ( arrEratosfen[i] ) sumArray += i;
	}
	
	alert( arrEratosfen );
	alert( sumArray );
	
	
//інший варіант
Их сумма равна 1060.

// шаг 1
var arr = [];

for (var i = 2; i < 100; i++) {
  arr[i] = true
}

// шаг 2
var p = 2;

do {
  // шаг 3
  for (i = 2 * p; i < 100; i += p) {
    arr[i] = false;
  }

  // шаг 4
  for (i = p + 1; i < 100; i++) {
    if (arr[i]) break;
  }

  p = i;
} while (p * p < 100); // шаг 5

// шаг 6 (готово)
// посчитать сумму
var sum = 0;
for (i = 0; i < arr.length; i++) {
  if (arr[i]) {
    sum += i;
  }
}

alert( sum );
 */

 
/* Подмассив наибольшей суммы
На входе массив чисел, например: arr = [1, -2, 3, 4, -9, 6].
Задача – найти непрерывный подмассив arr, сумма элементов которого максимальна.
Ваша функция должна возвращать только эту сумму.

Например:
getMaxSubSum([-1, 2, 3, -9]) = 5 (сумма выделенных)
getMaxSubSum([2, -1, 2, 3, -9]) = 6
getMaxSubSum([-1, 2, 3, -9, 11]) = 11
getMaxSubSum([-2, -1, 1, 2]) = 3
getMaxSubSum([100, -9, 2, -3, 5]) = 100
getMaxSubSum([1, 2, 3]) = 6 (неотрицательные - берем всех)

Если все элементы отрицательные, то не берём ни одного элемента и считаем сумму равной нулю:

getMaxSubSum([-1, -2, -3]) = 0

Постарайтесь придумать решение, которое работает за O(n2), а лучше за O(n) операций.

 */
 
/*  function getMaxSubSum ( arr ) {
	var maxSum = 0;
		sumFixedStart = 0;
	
	for ( var i = 0; i < arr.length; i++ ) {
		sumFixedStart += arr[i];
		maxSum = Math.max( maxSum, sumFixedStart );
		if ( sumFixedStart < 0 ) sumFixedStart = 0;
	}
	
	return maxSum;
}

alert( getMaxSubSum([-1, 2, 3, -9]) ); // 5
alert( getMaxSubSum([-1, 2, 3, -9, 11]) ); // 11
alert( getMaxSubSum([-2, -1, 1, 2]) ); // 3
alert( getMaxSubSum([1, 2, 3]) ); // 6
alert( getMaxSubSum([100, -9, 2, -3, 5]) ); // 100


 */
 
/* Добавить класс в строку
В объекте есть свойство className, которое содержит список «классов» – слов, разделенных пробелом:

var obj = {
  className: 'open menu'
}

Создайте функцию addClass(obj, cls), которая добавляет в список класс cls, но только если его там еще нет:

addClass(obj, 'new'); // obj.className='open menu new'
addClass(obj, 'open'); // без изменений (класс уже существует)
addClass(obj, 'me'); // obj.className='open menu new me'

alert( obj.className ); // "open menu new me"

P.S. Ваша функция не должна добавлять лишних пробелов.
 */
 
var obj = {
  className: 'open menu'
}

function addClass ( obj, cls ) {
var arr = obj.className.split( ' ' );

	for ( var i = 0; i < arr.length; i++ ) {
		var present = false;
		if ( arr[i] == cls ) {
			present = true;
		}
	}
alert ( present );
return present;	
	
}

addClass(obj, 'new'); // obj.className='open menu new'
addClass(obj, 'open'); // без изменений (класс уже существует)
addClass(obj, 'me'); // obj.className='open menu new me'

//alert( obj.className ); // "open menu new me"
