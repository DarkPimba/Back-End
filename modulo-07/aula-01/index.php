<?php



	
	class Pessoa{
		//objeto pessoa

		private $nome = 'Junin';
		private $idade = '17';
		private $peso = '52kg';

		public function crescer(){
			echo 'estou crescendo';
			$this->comer();
		}

		private function comer(){
			echo 'estou comendo';
		}

	}

	//instanciar
	$pessoa = new Pessoa;

	$pessoa->crescer();
	

?>