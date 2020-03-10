<?php

class Producto extends DBAbstractModel {
	
	public $id;
	public $tipo;
	public $subtipo;
	public $modelo;
    public $variacion;
    public $titulo;
    public $dibujo;
    public $colores;
    public $tipo_lana;
    public $imagen;
	function __construct() {
		$this->db_name = 'galmacarpet';
		
	}
	public function get($id='') {
		if($id != ''){
			$this->query = "
			SELECT id,tipo,subtipo,modelo,variacion,titulo,dibujo,colores,tipo_lana,imagen
			FROM catalogo
			WHERE id = '$id'
			";
			$this->get_results_from_query();
		}
		else{
			$this->query = "
			SELECT id,tipo,subtipo,modelo,variacion,titulo,dibujo,colores,tipo_lana,imagen
			FROM catalogo";
			$this->get_results_from_query();
		}
		if(count($this->rows) == 1):
			foreach ($this->rows[0] as $propiedad=>$valor):
				$this->$propiedad = $valor;
			endforeach;
		endif;
	}
	public function set($data=array()) {
		//como el id es autoincrementable, nunca se repetirá... no hace falta comprobar si existe
				foreach ($data as $campo=>$valor):
					$$campo = $valor;
				endforeach;
				$this->query = "
				INSERT INTO catalogo
				(tipo,subtipo,modelo,variacion,titulo,dibujo,colores,tipo_lana,imagen)
				VALUES
				('$tipo', '$subtipo', '$modelo', '$variacion', '$titulo', '$dibujo', '$colores', '$tipo_lana', '$imagen')
				";
				$this->execute_single_query();
				if($this->error=="")//si no hay error
					$this->msg = 'Producto agregado exitosamente';
				
	}
	public function edit($data=array()) {
		foreach ($data as $campo=>$valor):
			$$campo = $valor;
		endforeach;
		$this->query = "
			UPDATE catalogo
			SET tipo='$tipo',
			subtipo='$subtipo',
            modelo='$modelo',
            variacion='$variacion',
            titulo='$titulo',
            dibujo='$dibujo',
            colores='$colores',
            tipo_lana='$tipo_lana',
            imagen='$imagen'
			WHERE id = '$id'
		";
		//echo $this->query;
		$this->execute_single_query();
		if($this->error=="")//si no hay error
			$this->msg = 'Producto modificado exitosamente';
		}
	public function delete($id='') {
		$this->query = "
		DELETE FROM catalogo
		WHERE id = '$id'
		";
		$this->execute_single_query();
		if($this->error=="")//si no hay error
			$this->msg = 'Producto eliminado exitosamente';
	}
	function __destruct() {
		//unset($this);
	}
}
?>