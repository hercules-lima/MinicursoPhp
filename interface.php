<?php

interface Veiculo{
	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);
}

class Civic implements Veiculo{
	public function acelerar($velocidade){
		echo " o veículo acelerou até ".$velocidade . "Km/h";
	}
	public function frenar($velocidade){
		echo " o veículo frenou até ".$velocidade . "Km/h";
	}
	public function trocarMarcha($marcha){
		echo " o veículo engatou a marcha ".$marcha;
	}
}


interface Pessoa{
	public func
}
$carro = new Civic();
$carro->trocarMarcha(1);
$carro->acelerar(200);












?>