<?php
// напишем функцию, которая бы добавляла
// к строке слово checked
function add_label(&$data_str){
  $data_str .= "checked";
}
$str = "<input type=radio name=article ";
  // пусть имеется такая строка
echo $str ."<br>"; 
    // выведет элемент формы –
    // не отмеченную радио кнопку
add_label($str);             
    // вызовем функцию
echo $str ."><br>"; 
    // это выведет уже отмеченную
    // радио кнопку
?>