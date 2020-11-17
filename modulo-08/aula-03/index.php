<?php

	$pdo = new PDO('mysql:host=localhost;dbname=modulo_08','root','');

	$id = 3;

	$sql = $pdo->prepare("UPDATE `clientes` SET nome='mario',sobrenome='jujuju' WHERE id=$id");

	if($sql->execute()){
		echo 'meu cliente foi atualizado com sucesso';
	}

?>