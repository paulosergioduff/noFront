<?php


class testRecebeAtributo{
	
	protected $controle; // Controla a quantidade máximade vezes que o loop será executado.
	private $seletor; // Evita confução com nome de variáveis de outros possíveis loops ($x ou $i)

	public $valores; // Armazena array recebida para uso posterior

	public function testRecebeAtributo(){
		$this->seletor = 0; // Por algum motivo que não quero investigar, a condicional for nñao está se comportando como eu esperava. Por isso estou usando while
			while ($this->seletor < $this->controle) { 
				echo "<p>Executando...".$this->valores[$this->seletor]."";
				$this->seletor++;
			}


	}
	public function setControle($controle){
			$this->valores = $controle;
			$controle = count($controle);
			$this->controle = $controle;
	}
}




?>