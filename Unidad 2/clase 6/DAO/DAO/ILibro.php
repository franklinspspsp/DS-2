<?php
interface ILibro
{
    public function Listar();
    public function Agregar(Libro $libro);
    public function Actualizar(Libro $libro);
    public function Eliminar($codlibro);
}
?>