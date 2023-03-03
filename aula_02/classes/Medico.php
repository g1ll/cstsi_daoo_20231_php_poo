<?php
namespace classes;

class Medico extends Pessoa{

	private $crm, $especialidade;

	public function __construct(string $nome,int $crm, string $especialidade)
	{
		$this->nome = $nome;
		$this->crm = $crm;
		$this->especialidade = $especialidade;
	}

	public function getCRM(){
		return $this->crm;
	}

	public function __toString()
	{
		$className = self::class;
		return 	"\n===Dados de $className ==="
			. "\nNome: $this->nome"
			. ($this->idade ? "\nIdade: $this->idade" : "")
			. "\nEspecialidade: $this->especialidade"
			. "\nCRM: $this->crm\n";
	}
}