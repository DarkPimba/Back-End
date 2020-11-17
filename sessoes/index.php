<?php

	session_start();

	setcookie('nome','Junin',time() - (60*60*24),'/');

	echo $_COOKIE['nome'];

	session_destroy();

?>