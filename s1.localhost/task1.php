<?php
// Создаем классы Статей и Личностей. Статья имеет заголовок, автора и описание. Личность имеет имя, фамилию и e-mail
class Article {
  var $title;
  var $author;
  var $description;

// метод, который присваивает значения атрибутам класса
  function Article(	$t="Название отсутствует",
					$a="Автор отсутствует",
					$d="Описание отсутствует"){
	$this->title = $t;
	$this->author = $a;
	$this->description = $d;
  }
  
//метод для отображения экземпляров класса
  function show(){
	$art = "<h2>$this->title</h2><font size=-1>$this->description</font><p>Автор:$this->author</p>";
    echo $art;
  }
}

// Определение класса Личностей
class Person {
	var $first_name;
	var $last_name;
	var $email;

//метод, который присваивает значения атрибутам класса
	function Person($t="Имя не введено",
					$a="Фамилия не введена",
					$d="Email не указан"){
    $this->first_name = $t;
    $this->last_name = $a;
    $this->email = $d;
  }

//метод для отображения экземпляров класса
  function show(){
    $art = "<h2>$this->first_name</h2><font size=-1>$this->last_name</font><p>e-mail:$this->email</p>";
    echo $art;
  }
}

// Далее следует собственно создание и отображение экземпляров выбранного класса
if (isset($_GET["art_create"])){ //Если была выбрана статья
  $art = new Article; // создаем представителя класса статей
  $art_vars = get_class_vars(get_class($art)); //какие аргументы этого класса нужно задать
  Make_form($art,$art_vars,"art_create"); //вызов функции создания формы
  if (isset($_GET["create_real"])){ Show_($art_vars); }
  // если данные этой формы отправлены, то вызываем функцию показа
}

//то же самое, если была выбрана личность
if (isset($_GET["pers_create"])){
  $art = new Person;
  $art_vars = get_class_vars(get_class($art));
  Make_form($art,$art_vars,"pers_create");
  if (isset($_GET["create_real"])){ Show_($art_vars); }
}

// функция создания формы
function Make_form($art,$art_vars,$glob){
  $str = "<form>";   // html код формы записывается
                     // в строку $str
//перебираем список переменных класса объекта $art
  foreach ($art_vars as $var_name => $var_value){
    $str .="$var_name<input type=text name=$var_name><br>";
//создаем элемент формы с именем свойства класса
  }
  $str .= "<input type=hidden name=$glob>"; // чтобы не забыть, что мы создаем
  $str .= "<input type=submit name=create_real
    value='Create and Show'></form>";
echo "$str";   // выводим форму
}

// функция показа объекта
function Show_($art_vars){
  global $art; //используется глобальное имя объекта
  $k = count($art_vars); //число свойств класса (переменных в форме)
  $p=0; //вспомогательная переменная
  foreach ($art_vars as $name => $value){
    $p++;
      if ($_GET["$name"]=="") $val= $art->$name;
      else $val = $_GET["$name"];
      if ($p<>$k) $par .='"'. $val.'",';
      else $par .='"'. $val.'"';
  }
  $const=get_class($art);
  $par = '$art->'.$const ."(" .$par.");";
// теперь $par представляет собой php-код для вызова
  // метода класса $art, изначально
  // записанного в $par
  // например,
  // $art->Person('Vasia','Petrov','vas@intuit.ru');
  eval($par); // функция eval выполняет код, содержащийся в $par
  $art->show();
}
?>