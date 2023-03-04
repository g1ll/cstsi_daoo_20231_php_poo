<?php 

namespace Daoo\Aula03\controller\api;

abstract class Controller{

	protected $model;

	public abstract function index();

	protected function setHeader(){
		header("Content-Type:application/json;charset=utf-8'");
	}

	protected function validatePostRequest(array $fields):bool{
		foreach($fields as $field)
			if(!isset($_POST[$field]))
				return false;
		return true;
	}
}