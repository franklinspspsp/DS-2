<?php
class DataSource
{
	private $cadenaConexion;
	private $conexion;

	/**
	 * Metodo contructor para iniciar nuestra conexion con la base de datos.
	 **/
	public function __construct(){
		try{
			$this->cadenaConexion = "mysql:host=localhost;dbname=bdbiblioteca";
			$this->conexion = new PDO($this->cadenaConexion,"root","");
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	/**
	 * Metodo que nos permitira traer un registro de nuestra base de datos.
	 * Usamos PDO en PHP.
	 * @param $sql Sentencia SQL.
	 * @param $values Arreglo de bindValues de PDO para la consulta SQL.
	 * @return $tabla_datos Registros de nuestra base de datos de 0 a N.
	 * */
	public function ejecutarConsulta($sql = "",$values = array()){
		if($sql != ""){
			$consulta = $this->conexion->prepare($sql);
			$consulta->execute($values);
			$tabla_datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
			return $tabla_datos;
		}else{
			return 0;
		}
	}

	/**
	 * Metodo que nos permitira obtener un entero de las tablas afectadas, 0 indica que no
	 * paso nada.
	 * Usamos PDO en PHP.
	 * @param $sql Sentencia SQL.
	 * @param $values Arreglo de bindValues de PDO para la consulta SQL.
	 * @return $numero_tablas_afectadas Numero entero de las tablas afectadas de 0 a N.
	 * */
	public function ejecutarActualizacion($sql = "",$values = array()){
		if($sql != ""){
			$consulta = $this->conexion->prepare($sql);
			$consulta->execute($values);
			$numero_tablas_afectadas = $consulta->rowCount();
			return $numero_tablas_afectadas;
		}else{
			return 0;
		}
	}
}
?>