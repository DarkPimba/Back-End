<?php



	final class Filha{

		public function printWello(){
			echo "Ola, Mundo";
		}

	}

	class Pai{
		public function mostrarBay(){
			echo "tchal, mundo";
		}
	}

	$pai = new Pai;
	$pai->mostrarBay();

	$filha = new Filha;
	$filha->printWello();



?>