<?php

class Pessoa{
	public $nome;

	public function falar(){
		return "O nome do professor é " .$this->nome;
	}
}

$pessoa = new Pessoa();
$pessoa->nome = "Ailton Trindade da Silva";
echo ($pessoa->falar());   

?>