<?php
include 'IAutor.php';
include 'DataSource.php';
include 'Autor.php';

class AutorDAO implements IAutor
{
	public function Listar(){
		$data_source = new DataSource();
		$data_table = $data_source->ejecutarConsulta("SELECT codautor,apellidos,nombres,nacionalidad,profesion FROM tautor");
		$autor = null;
		$autores = array();

		foreach ($data_table as $clave=>$valor) {
			$autor = new Autor();
			$autor->setCodAutor( $data_table[$clave]["codautor"] );
			$autor->setApellidos( $data_table[$clave]["apellidos"] );
			$autor->setNombres( $data_table[$clave]["nombres"] );
			$autor->setNacionalidad( $data_table[$clave]["nacionalidad"] );
			$autor->setProfesion( $data_table[$clave]["profesion"] );
			array_push($autores, $autor);
		}
		return $autores;
	}

	public function Agregar(Autor $autor){
		$data_source = new DataSource();

		$sql = "INSERT INTO tautor VALUES (:codautor,:apellidos,:nombres,:nacionalidad,:profesion)";

		$resultado = $data_source->ejecutarActualizacion($sql,array(
			':codautor'=>$autor->getCodAutor(),
			':apellidos'=>$autor->getApellidos(),
			':nombres'=>$autor->getNombres(),
			':nacionalidad'=>$autor->getNacionalidad(),
			':profesion'=>$autor->getProfesion()
			)
		);
		return $resultado;
	}

	public function Actualizar(Autor $autor){
		$data_source = new DataSource();
		$sql = "UPDATE tautor SET apellidos = :apellidos, nombres = :nombres, nacionalidad = :nacionalidad, profesion = :profesion
				WHERE codautor = :codautor";
		$resultado = $data_source->ejecutarActualizacion($sql,array(
			':apellidos'=>$autor->getApellidos(),
			':nombres'=> $autor->getNombres(),
			':nacionalidad'=>$autor->getNacionalidad(),
			':codautor'=>$autor->getCodAutor(),
			':profesion'=>$autor->getProfesion()
			)
		);
		return $resultado;
	}

	public function Eliminar($codautor){
		$data_source = new DataSource();
		$resultado = $data_source->ejecutarActualizacion("DELETE FROM tautor WHERE codautor = :codautor",
			array(':codautor'=>$codautor));
		return $resultado;
	}
}
?>