<?php 

namespace classes\traits;

use Exception;

trait IMC
{
	protected $imc;

	public function calcImc()
	{
		try{
			if (
				is_numeric($this->altura)
				&& is_numeric($this->peso)
			) {
				$this->imc = $this->peso / $this->altura ** 2;
			} else {
				throw new Exception("\nIMC $this->nome: Erro, informe peso e altura\n");
			}
		}catch(\Exception $error){
			echo $error->getMessage();
		}
	}
}