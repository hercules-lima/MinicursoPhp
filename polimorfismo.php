<?php
class Animal{
	public function falar(){
		return "som";
	}

	public function mover(){
		return "Anda";
	}
}

class Cachorro extends Animal{

	public function falar(){
		return "O cachorro late.";
	}

}

class Gato extends Animal{
	public function falar(){
		return "O gato mia.";
	}}

class Passaro extends Animal{
	public function falar(){
		return "O passaro canta.";
	}
	public function mover(){
		return "voa e " .parent::mover();
	}
}

$pluto = new Cachorro();

echo $pluto->falar() ."</br>";
echo $pluto->mover() ."</br>";
echo "-----------------------------<br>";

$garfield = new Gato();

echo $garfield->falar() ."</br>";
echo $garfield->mover() ."</br>";
echo "-----------------------------<br>";

$frajola = new Passaro();

echo $frajola->falar() ."</br>";
echo $frajola->mover() ."</br>";
echo "-----------------------------<br>";

















?>