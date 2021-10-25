<?php
interface IAutor
{
	public function Listar();
	public function Agregar(Autor $autor);
	public function Actualizar(Autor $autor);
	public function Eliminar($codautor);
}
?>