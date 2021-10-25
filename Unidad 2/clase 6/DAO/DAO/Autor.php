<?php
class Autor
{
	private $codautor;
	private $apellidos;
	private $nombres;
	private $nacionalidad;

	public function setCodAutor($codautor){
		$this->codautor = $codautor;
	}

	public function getCodAutor(){
		return $this->codautor;
	}

	public function setApellidos($apellidos){
		$this->apellidos = $apellidos;
	}

	public function getApellidos(){
		return $this->apellidos;
	}

	public function setNombres($nombres){
		$this->nombres = $nombres;
	}

	public function getNombres(){
		return $this->nombres;
	}

	public function setNacionalidad($nacionalidad){
		$this->nacionalidad = $nacionalidad;
	}

	public function getNacionalidad(){
		return $this->nacionalidad;
	}

	public function setProfesion($profesion){
		$this->profesion = $profesion;
	}

	public function getProfesion(){
		return $this->profesion;
	}
}
?>