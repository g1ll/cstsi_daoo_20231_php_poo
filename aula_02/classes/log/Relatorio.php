<?php 

namespace classes\log;

use classes\Pessoa;

class Relatorio {

	private $listaPessoas = [];

	public function add(Pessoa $pessoa)
	{
		$this->listaPessoas[]=$pessoa;
	}
	
	public function log(Pessoa $pessoa)
	{
		echo "\nlog: ".$pessoa;
	}

	public function imprime(){
		echo "\n### RELATORIO ###\n";
		foreach ($this->listaPessoas as $pessoa) 
			$this->log($pessoa);
		echo "\n#############\n";
	}
}