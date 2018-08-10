/* Проверка стандарта
Используя конструкцию if..else, напишите код, который будет спрашивать: «Каково «официальное» название JavaScript?».
Если посетитель вводит «ECMAScript», то выводить «Верно!», если что-то другое – выводить «Не знаете? «ECMAScript»!».

var
	name = prompt("Каково \"официальное\" название JavaScript", "companyName");
if (name == "ECMAScript") {
	alert ("Верно");
	}
	else {
		alert ("Не знаете? \"ECMAScript\"!");
		}
*/

/*Получить знак числа
Используя конструкцию if..else, напишите код, который получает значение prompt, а затем выводит alert:
    1, если значение больше нуля,
    -1, если значение меньше нуля,
    0, если значение равно нулю.

var
	value = prompt("Input number", "");
if (value > 0) {
	alert ("1");
	}
	else {
		if (value < 0) { alert("-1");}
		else {
		alert ("0");}
		}
*/

/* Проверка логина
Напишите код, который будет спрашивать логин (prompt).
Если посетитель вводит «Админ», то спрашивать пароль, если нажал отмена (escape) – выводить «Вход отменён», если вводит что-то другое – «Я вас не знаю».
Пароль проверять так. Если введён пароль «Чёрный Властелин», то выводить «Добро пожаловать!», иначе – «Пароль неверен», при отмене – «Вход отменён».
 */

/*  var
	userName, userPass = "";
userName = prompt("Кто пришел?", "");
if (userName == "Админ") {
	userPass = prompt("Пароль?", "");
	if (userPass == "Чёрный Властелин") {
		alert("Добро пожаловать!")
	}
	else {
		if (userPass == null) {
			alert("Вход отменен");
		}
			else {
				alert("Пароль неверен")
			}
	}
}
	else {
		if (userName == null) {
			alert("Вход отменен");
		}
			else {
				alert("Я вас не знаю")
			}
	}
  */
  
/* Перепишите 'if' в '?'

Перепишите if с использованием оператора '?':

if (a + b < 4) {
  result = 'Мало';
} else {
  result = 'Много';
}  
 
 
 result = (a + b < 4) ? 'Мало' : 'Много';
  */ 
  
/* Перепишите 'if..else' в '?'
Перепишите if..else с использованием нескольких операторов '?'.
Для читаемости – оформляйте код в несколько строк.

var message;

if (login == 'Вася') {
  message = 'Привет';
} else if (login == 'Директор') {
  message = 'Здравствуйте';
} else if (login == '') {
  message = 'Нет логина';
} else {
  message = '';
} 

var message = (login == 'Вася') ? 'Привет' :
	(login == 'Директор') ? 'Здравствуйте' :
		(login == '') ? 'Нет логина' : '';
		
*/

/* Проверка if внутри диапазона
Напишите условие if для проверки того факта, что переменная age находится между 14 и 90 включительно.
«Включительно» означает, что концы промежутка включены, то есть age может быть равна 14 или 90.
 
 
 if (age >= 14 && age <= 90 ) {
	 alert("hello");
 }
 */
 
 
/* Проверка if вне диапазона
Напишите условие if для проверки того факта, что age НЕ находится между 14 и 90 включительно.
Сделайте два варианта условия: первый с использованием оператора НЕ !, второй – без этого оператора.

if (age !>14 && !<90 ) {
	alert("hello");
}

if (age <= 14 && age >=90) {
	alert("hello");
}
 */

/*  
"" + 1 + 0 - строковое 10
"" - 1 + 0 - числовое -1
true + false - числовое 1
6 / "3" - числовое, результат деления
"2" * "3" - числовое результат умножения
4 + 5 + "px" - строковое 9px
"$" + 4 + 5 - строковое $45
"4" - 2 - числовое 2
"4px" - 2 - NaN
7 / 0 - infinity
"  -9\n" + 5 - строковое " -9\n5"
"  -9\n" - 5 - числовое -14
5 && 2 - числовое 2
2 && 5 - числовое 5
5 || 0 - числовое 5
0 || 5 - числовое 5
null + 1 - числовое 1
undefined + 1 - NaN
null == "\n0\n" - логическое false
+null == +"\n0\n" - логическое true
 */
 
/* Выведите чётные числа
При помощи цикла for выведите чётные числа от 2 до 10. 

for (var i = 2; i <= 10; i++) {
	if (i%2 == 0) {
		alert(i);
	}
}
*/

/* Замените for на while
Перепишите код, заменив цикл for на while, без изменения поведения цикла.

for (var i = 0; i < 3; i++) {
  alert( "номер " + i + "!" );
}

var i=0;
while (i<3) {
	alert( "номер " + i + "!" );
	i++;
} */

/* 
Повторять цикл, пока ввод неверен
Напишите цикл, который предлагает prompt ввести число, большее 100. Если посетитель ввёл другое число – попросить ввести ещё раз, и так далее.
Цикл должен спрашивать число пока либо посетитель не введёт число, большее 100, либо не нажмёт кнопку Cancel (ESC).
Предполагается, что посетитель вводит только числа. Предусматривать обработку нечисловых строк в этой задаче необязательно.
 
var value = 0;
while (true) {
	value = +prompt("Введите число, больше 100", "");
	if (!value || value > 100) break;
}

або 

var num;
do {
  num = prompt("Введите число больше 100?", 0);
} while (num <= 100 && num != null);
*/

/* Вывести простые числа
Натуральное число, большее 1, называется простым, если оно ни на что не делится, кроме себя и 1.
Другими словами, n>1 – простое, если при делении на любое число от 2 до n-1 есть остаток.
Создайте код, который выводит все простые числа из интервала от 2 до 10. Результат должен быть: 2,3,5,7.
P.S. Код также должен легко модифицироваться для любых других интервалов.

var 
	intMin = 2;
	intMax = 10;

	nextPrime:
	for (var i = intMin; i < intMax; i++) {
		for (var j = 2; j < i-1; j++) {
			if (i % j == 0) continue nextPrime;
		}
		alert(i);
	}
 */

/* Напишите "if", аналогичный "switch"
Напишите if..else, соответствующий следующему switch:

switch (browser) {
  case 'IE':
    alert( 'О, да у вас IE!' );
    break;

  case 'Chrome':
  case 'Firefox':
  case 'Safari':
  case 'Opera':
    alert( 'Да, и эти браузеры мы поддерживаем' );
    break;

  default:
    alert( 'Мы надеемся, что и в вашем браузере все ок!' );
} 


var browser = prompt("Який у Вас браузер?", "");

if (browser == "IE") {
	alert("О, да у вас IE!");
}	else if (browser == ("Chrome" || "Firefox" || "Safari" || "Opera")) {
			alert ("Да, и єти браузері мі поддерживаем");
		} else {
			alert( 'Мы надеемся, что и в вашем браузере все ок!' );
			}
*/

/* Переписать if'ы в switch
Перепишите код с использованием одной конструкции switch:

var a = +prompt('a?', '');

if (a == 0) {
  alert( 0 );
}
if (a == 1) {
  alert( 1 );
}

if (a == 2 || a == 3) {
  alert( '2,3' );
}

 
var a = +prompt('a?', '');
switch (a) {
	case 0:
		alert(0);
		break;
	case 1:
		alert(1);
		break;
	case 2:
	case 3:
		alert("2, 3");
		break;
	default:
		alert("!!!");
}
*/


/* Перепишите функцию, используя оператор '?' или '||'
Следующая функция возвращает true, если параметр age больше 18. В ином случае она задаёт вопрос confirm и возвращает его результат.

function checkAge(age) {
  if (age > 18) {
    return true;
  } else {
    return confirm('Родители разрешили?');
  }
}

Перепишите функцию, чтобы она делала то же самое, но без if, в одну строку. Сделайте два варианта функции checkAge:

    Используя оператор '?'
    Используя оператор ||

function checkAge(age) {
	return (age > 18) ? true : confirm('Parents are allowed?');
}

function checkAge(age) {
	return (age > 18) || confirm('Parents are allowed?');
} */


/* Функция min
Задача «Hello World» для функций :)
Напишите функцию min(a,b), которая возвращает меньшее из чисел a,b.

Пример вызовов:

min(2, 5) == 2
min(3, -1) == -1
min(1, 1) == 1

function definitionMin (a, b) {
	if (a < b) {
		return a;
	}
	return b;
}

function definitionMin (a, b) {
	return (a < b) ? a : b;
} */


/* Функция pow(x,n)
Напишите функцию pow(x,n), которая возвращает x в степени n. Иначе говоря, умножает x на себя n раз и возвращает результат.

pow(3, 2) = 3 * 3 = 9
pow(3, 3) = 3 * 3 * 3 = 27
pow(1, 100) = 1 * 1 * ...*1 = 1

Создайте страницу, которая запрашивает x и n, а затем выводит результат pow(x,n).
P.S. В этой задаче функция обязана поддерживать только натуральные значения n, т.е. целые от 1 и выше.

function pow(x, n) {
var result = x;	
	for (var i = 1; i < n; i++) {
		result *= x;
	}
	return result;
}

var value = +prompt("Введіть число...", "");
var power = +prompt("та його ступінь", "");

if (power <= 1) {
  alert("Степень " + power + " не поддерживается, введите целую степень, большую 1");
} else {
	alert(pow(value, power));
}
 */
 
/* "use strict";

 var age = prompt('Сколько вам лет?');

var sayHi;

if (age >= 18) {
  sayHi = function() {
    alert( 'Прошу Вас!' );
  }
} else {
  sayHi = function() {
    alert( 'До 18 нельзя' );
  }
sayHi();
} */


/* Вычислить сумму чисел до данного
Напишите функцию sumTo(n), которая для данного n вычисляет сумму чисел от 1 до n, например:

sumTo(1) = 1
sumTo(2) = 2 + 1 = 3
sumTo(3) = 3 + 2 + 1 = 6
sumTo(4) = 4 + 3 + 2 + 1 = 10
...
sumTo(100) = 100 + 99 + ... + 2 + 1 = 5050

Сделайте три варианта решения:

    С использованием цикла.
    Через рекурсию, т.к. sumTo(n) = n + sumTo(n-1) для n > 1.
    С использованием формулы для суммы арифметической прогрессии.

Пример работы вашей функции:

function sumTo(n) { //... ваш код ...  }

alert( sumTo(100) ); // 5050

Какой вариант решения самый быстрый? Самый медленный? Почему?

Можно ли при помощи рекурсии посчитать sumTo(100000)? Если нет, то почему?
 */

/*Решение с использованием цикла:

var value = +prompt("Введіть число");

function sumTo(x) {
	var result = 0;
	for (var i = 1; i <= x; i++) {
		result += i;
	}
	return result;
}

alert(sumTo(value));
 */

/* Решение через рекурсию:
var value = +prompt("Введіть число");

function sumTo(x) {
	if (x != 1) {
		return x + sumTo(x - 1);
	} else {
		return x;
	}
}

alert(sumTo(value));
 */


/* Решение с использованием формулы для суммы арифметической прогрессии

var value = +prompt("Введіть число");

function sumTo(x) {
	var result = x * (x + 1) / 2;
	return result;
}

alert(sumTo(value));
 */

 
/* Вычислить факториал
Факториа́л числа – это число, умноженное на «себя минус один», затем на «себя минус два» и так далее, до единицы. Обозначается n!

Определение факториала можно записать как:

n! = n * (n - 1) * (n - 2) * ...*1

Примеры значений для разных n:

1! = 1
2! = 2 * 1 = 2
3! = 3 * 2 * 1 = 6
4! = 4 * 3 * 2 * 1 = 24
5! = 5 * 4 * 3 * 2 * 1 = 120

Задача – написать функцию factorial(n), которая возвращает факториал числа n!, используя рекурсивный вызов.

alert( factorial(5) ); // 120

Подсказка: обратите внимание, что n! можно записать как n * (n-1)!. Например: 3! = 3*2! = 3*2*1! = 6


var value = +prompt("Input number");

function factorial(x) {
	if (x != 1) {
		return x * factorial(x - 1);
	} else {
		return x;
	}
}

alert (factorial(value));
*/


/* Числа Фибоначчи
Последовательность чисел Фибоначчи имеет формулу Fn = Fn-1 + Fn-2. То есть, следующее число получается как сумма двух предыдущих.
Первые два числа равны 1, затем 2(1+1), затем 3(1+2), 5(2+3) и так далее: 1, 1, 2, 3, 5, 8, 13, 21....
Числа Фибоначчи тесно связаны с золотым сечением и множеством природных явлений вокруг нас.
Напишите функцию fib(n), которая возвращает n-е число Фибоначчи. Пример работы:

function fib(n) { // ваш код  }

alert( fib(3) ); // 2
alert( fib(7) ); // 13
alert( fib(77)); // 5527939700884757

Все запуски функций из примера выше должны срабатывать быстро.

 
var value = +prompt("Input number for Fibonachi");

function fib(n) {
	return n <= 1 ? n : fib(n - 1) + fib(n - 2);
}

alert (fib(value));
*/

//Код для вычисления в цикле
/* 
var value = +prompt("Input number for Fibonachi");

function fib(n) {
  var a = 1,
    b = 1;
  for (var i = 3; i <= n; i++) {
    var c = a + b;
    a = b;
    b = c;
  }
  return b;
}

alert (fib(value));
 */
//P.S. Этот подход к вычислению называется динамическое программирование снизу-вверх.

/* Сделать первый символ заглавным
Напишите функцию ucFirst(str), которая возвращает строку str с заглавным первым символом, например:

ucFirst("вася") == "Вася";
ucFirst("") == ""; // нет ошибок при пустой строке

P.S. В JavaScript нет встроенного метода для этого. Создайте функцию, используя toUpperCase() и charAt().

 
function usFirst(str) {
	var newStr = str.charAt(0);
	newStr = newStr.toUpperCase();
	for( var i = 1; i < str.length; i++) {
		newStr += str[i];
	}
	return newStr;
}

function  usFirst1(str) {
	if ( !str ) return str;
	return str[0].toUpperCase() + str.slice(1);
}

var value = prompt("You name?");
alert ( usFirst1(value) );
*/

/* Проверьте спам
Напишите функцию checkSpam(str), которая возвращает true, если строка str содержит „viagra“ или „XXX“, а иначе false.

Функция должна быть нечувствительна к регистру:

checkSpam('buy ViAgRA now') == true
checkSpam('free xxxxx') == true
checkSpam("innocent rabbit") == false


function checkSpam(str) {
	var newStr = str.toLowerCase();
	
	return !!( ~newStr.indexOf("xxx") || ~newStr.indexOf("viagra") );
}

var value = prompt("Input adult text");
alert ( checkSpam(value) );
*/

/* Усечение строки
Создайте функцию truncate(str, maxlength), которая проверяет длину строки str, и если она превосходит maxlength – заменяет конец str на "...",
так чтобы ее длина стала равна maxlength.
Результатом функции должна быть (при необходимости) усечённая строка.

Например:

truncate("Вот, что мне хотелось бы сказать на эту тему:", 20) = "Вот, что мне хоте..."

truncate("Всем привет!", 20) = "Всем привет!"

Эта функция имеет применение в жизни. Она используется, чтобы усекать слишком длинные темы сообщений.

function truncate(str, len) {
	if ( str.length > len ) {
		return str.slice(0, len - 3) + "...";
	}
	return str;
}

var text = prompt( "Input text" );
var length = prompt( "Input length" );
alert( truncate( text, length ) );
*/



/* Первый объект
Мини-задача на синтаксис объектов. Напишите код, по строке на каждое действие.

    Создайте пустой объект user.
    Добавьте свойство name со значением Вася.
    Добавьте свойство surname со значением Петров.
    Поменяйте значение name на Сергей.
    Удалите свойство name из объекта.

var user {};

	user.name = "Вася";
	user.surname = "Петров";
	user.name = "Сергей";
	delete user.name;
 */


/* Определите, пуст ли объект
Создайте функцию isEmpty(obj), которая возвращает true, если в объекте нет свойств и false – если хоть одно свойство есть.
Работать должно так:

function isEmpty(obj) {
	var counter = 0;
	
	for ( var key in obj ) {
		counter++;
	}
	
	if ( counter != 0 ) return false;
	return true;
}

function isEmpty1(obj) {
  for (var key in obj) {
    return false;
  }
  return true;
}

var schedule = {};

alert( isEmpty(schedule) ); // true

schedule["8:30"] = "подъём";

alert( isEmpty(schedule) ); // false 
*/

/* Сумма свойств
Есть объект salaries с зарплатами. Напишите код, который выведет сумму всех зарплат.
Если объект пустой, то результат должен быть 0.

Например:

"use strict";

var salaries = {
  "Вася": 100,
  "Петя": 300,
  "Даша": 250
};

//... ваш код выведет 650

P.S. Сверху стоит use strict, чтобы не забыть объявить переменные.

"use strict";

var salaries = {
  "Вася": 100,
  "Петя": 300,
  "Даша": 250
};

function calcSalary( obj ) {
	var salary = 0;
	
	for ( var key in obj ) {
		salary += obj[key];
	}
	return salary;
}

alert( calcSalary( salaries ) );
 */
 
/* Свойство с наибольшим значением
Есть объект salaries с зарплатами. Напишите код, который выведет имя сотрудника, у которого самая большая зарплата.
Если объект пустой, то пусть он выводит «нет сотрудников».

Например:

"use strict";

var salaries = {
  "Вася": 100,
  "Петя": 300,
  "Даша": 250
};

if (isEmpty( salaries ) ) alert( "нет сотрудников" );
else bigSalary( salaries );

function isEmpty(obj) {
  for (var key in obj) {
    return false;
  }
  return true;
}

function bigSalary( obj ) {
	var big = 0, bigName = "";
	for ( var key in obj ) {
		if ( obj[key] > big ) {
			big = obj[key];
			bigName = key;
		}
	}
	alert( "У " + bigName + " найбільша зарплатня - " + big);
	return big;
}
*/



/* Умножьте численные свойства на 2

Создайте функцию multiplyNumeric, которая получает объект и умножает все численные свойства на 2. Например:

// до вызова
var menu = {
  width: 200,
  height: 300,
  title: "My menu"
};

multiplyNumeric(menu);

// после вызова
menu = {
  width: 400,
  height: 600,
  title: "My menu"
};

P.S. Для проверки на число используйте функцию:

function isNumeric(n) {
  return !isNaN(parseFloat(n)) && isFinite(n)
}


var menu = {
  width: 200,
  height: 300,
  title: "My menu"
};

function isNumeric(n) {
  return !isNaN(parseFloat(n)) && isFinite(n);
}

function multiplyNumeric(obj) {
  for (var key in obj) {
    if (isNumeric(obj[key])) {
      obj[key] *= 2;
    }
  }
}

multiplyNumeric(menu);

alert( "menu width=" + menu.width + " height=" + menu.height + " title=" + menu.title );
*/



/* Получить последний элемент массива

Как получить последний элемент из произвольного массива?
У нас есть массив goods. Сколько в нем элементов – не знаем, но можем прочитать из goods.length.
Напишите код для получения последнего элемента goods.


var
	goods = [1, 2, 3],
	lastElementArray = goods.length;

	alert( goods[lastElementArray - 1] );
 */
 
 
/* Добавить новый элемент в массив

Как добавить элемент в конец произвольного массива?
У нас есть массив goods. Напишите код для добавления в его конец значения «Компьютер».




var
	goods = ["Monitor", "Mouse"];
	
	goods.push("Computer");				//так
	goods[goods.length] = "Компьютер";	//або так
	
	alert(goods);
 */
 
 
 
