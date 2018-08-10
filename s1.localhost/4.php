<?php 
	session_start();
	if ($_SESSION['count'] == TRUE) {
		$_SESSION['count'] = 1;
	}
	else {
		$_SESSION['count'] = $_SESSION['count'] + 1;
	}
	echo $_SESSION['count'];
?>
