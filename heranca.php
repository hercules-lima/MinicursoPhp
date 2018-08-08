<?php  
class Documento{

	private $numero;


	public function getNumero(){
		return $this->numero;
	}

	public function setNumero($n){
		$this->numero = $n;
	}
}

class CPF extends Documento{
	public function validarCPF(){
		$numeroCPF = $this->getNumero();
		return true; 
	}
}

$doc = new CPF();
$doc ->setNumero("111111111-44");
var_dump($doc->validarCPF());

echo "</br>";
echo $doc->getNumero();

?>