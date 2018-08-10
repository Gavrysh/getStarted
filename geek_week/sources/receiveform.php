<?php
if(count($_POST) > 0){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$text = $_POST['text'];

	// логика обработки формы
    echo "Ваш запрос принят!";
	  
	var_dump($_POST);
}
