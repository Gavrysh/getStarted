<?php

$result = mail ("veri.test@i.ua","Анкета з сайту","Сповіщення (тіло листа)");

if ($result) {
	echo "<p>Сповіщення відправлено успішно!</p>";
}
else {
	echo "<p>Сповіщення НЕ відправлено!</p>";
}
?>