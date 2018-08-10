<?php
$file = "task.php"; 
/* файл, который будет обрабатывать
сгенерированную этим скриптом форму */

function Ask_names(){ 
   // функция генерирует форму для
   // ввода названий элементов ввода

global $file; 
   //объявляем, что хотим использовать эту
   // переменную, заданную вне функции
if (isset($_GET["types"])){
  $st = '<form action="'.$file.'">';
  foreach ($_GET["types"] as $k => $type){
/* перебираем все типы элементов, 
   которые нужно создать */
  
  $num = $_GET["numbers"][$type]; 
     // сколько элементов каждого типа нужно
  for ($i=1;$i<=$num;$i++){ 
     // создаем $num строк для ввода
    $st.= "Введите имя $i-го элемента типа $type: ";
    $st.= "<input type=text name=names[$type][]><br>";
  }
  // сохраняем тип и число необходимых 
  // элементов ввода этого типа
  $st.= "<input type=hidden name=types[] value=$type>";
  $st.= "<input type=hidden name=numbers[] value=$num><br>";
}
  $st .= "<input type=submit name=send value=send></form>";
return $st; 
   // в переменной $st содержится код формы
   // для запроса имен
} else echo "Select type";
}
echo Ask_names(); 
   // вызываем функцию и выводим
   // результаты ее работы
?>