<?php
class Libro
{
    private $codlibro;
    private $titulo;
    private $editorial;
    private $anio;

    public function setCodLibro($codlibro)
    {
        $this->codlibro = $codlibro;
    }

    public function getCodLibro()
    {
        return $this->codlibro;
    }

    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setEditorial($editorial)
    {
        $this->editorial = $editorial;
    }

    public function getEditorial()
    {
        return $this->editorial;
    }

    public function setAnio($anio)
    {
        $this->anio = $anio;
    }

    public function getAnio()
    {
        return $this->anio;
    }
}
?>