<?php
include 'ILibro.php';
include 'DataSource.php';
include 'Libro.php';

class LibroDAO implements ILibro
{
    public function Listar(){
		$data_source = new DataSource();
		$data_table = $data_source->ejecutarConsulta("SELECT codlibro,titulo,editorial,anio FROM tlibro");
		$libro = null;
		$libros = array();

        foreach ($data_table as $clave => $valor) {
            $libro = new Libro();
            $libro->setCodLibro($data_table[$clave]["codlibro"]);
            $libro->setTitulo($data_table[$clave]["titulo"]);
            $libro->setEditorial($data_table[$clave]["editorial"]);
            $libro->setAnio($data_table[$clave]["anio"]);
            array_push($libros, $libro);
        }
        return $libros;
    }

    public function Agregar($libro){
        $data_source = new DataSource();

        $sql = "INSERT INTO tlibro (codlibro,titulo,editorial,anio) VALUES (:codlibro,:titulo,:editorial,:anio)";

        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':codlibro' => $libro->getCodLibro(),
            ':titulo' => $libro->getTitulo(),
            ':editorial' => $libro->getEditorial(),
            ':anio' => $libro->getAnio()
        ));
        return $resultado;
    }

    public function Actualizar(Libro $libro)
    {
        $data_source = new DataSource();

        $sql = "UPDATE tlibro SET titulo = :titulo, editorial = :editorial, anio = :anio WHERE codlibro = :codlibro";

        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':codlibro' => $libro->getCodLibro(),
            ':titulo' => $libro->getTitulo(),
            ':editorial' => $libro->getEditorial(),
            ':anio' => $libro->getAnio()
        ));
        return $resultado;
    }

    public function Eliminar($codlibro)
    {
        $data_source = new DataSource();
        $sql = "DELETE FROM tlibro WHERE codlibro = :codlibro";
        $resultado = $data_source->ejecutarActualizacion($sql, array(
            ':codlibro' => $codlibro
        ));
        return $resultado;
    }
}
?>