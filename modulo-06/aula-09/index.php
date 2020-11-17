<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>aula-09</title>
</head>
<body>
	<?php
		/*
		if (isset($_GET['acao'])) {
		
			$nome = $_GET['nome'];
			$email = $_GET['email'];

			echo $nome;
			echo '<br />';
			echo $email;
		}*/

		if (isset($_POST['acao'])) {
		
			$nome = $_POST['nome'];
			$email = $_POST['email'];

			echo $nome;
			echo '<br />';
			echo $email;
		}
	?>
	<form method="post">
		<input type="text" name="nome" />
		<input type="text" name="email" />
		<input type="submit" name="acao" value="Enviar!" />
	</form>

</body>
</html>