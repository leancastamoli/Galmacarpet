<?php

class Inicio extends DBAbstractModel {
	
	public $id;
	public $usuario;
	public $correo;
	public $tipo;
	public $contraseña;
	function __construct() {
		$this->db_name = 'id13348079_galmacarpet';
		
	}
	public function get($id='') {
		if($id != ''){
			$this->query = "
			SELECT id,usuario,correo,tipo,contraseña
			FROM users
			WHERE id = '$id'
			";
			$this->get_results_from_query();
		}
		else{
			$this->query = "
			SELECT id,usuario,correo,tipo,contraseña
			FROM users";
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
				INSERT INTO users
				(usuario,correo,tipo,contraseña)
				VALUES
				('$usuario', '$correo', '$tipo', '$contraseña')
				";
				$this->execute_single_query();
				if($this->error=="")//si no hay error
					$this->msg = $usuario.' '.$correo.' agregado exitosamente';
				
	}
	public function edit($data=array()) {
		foreach ($data as $campo=>$valor):
			$$campo = $valor;
		endforeach;
		$this->query = "
			UPDATE users
			SET usuario='$usuario',
			correo='$correo',
			tipo='$tipo',
			contraseña='$contraseña'
			WHERE id = '$id'
		";
		//echo $this->query;
		$this->execute_single_query();
		if($this->error=="")//si no hay error
			$this->msg = $usuario.' '.$correo.' modificado exitosamente';
		}
	public function delete($id='') {
		$this->query = "
		DELETE FROM users
		WHERE id = '$id'
		";
		$this->execute_single_query();
		if($this->error=="")//si no hay error
			$this->msg = 'Alumno '.$id.' eliminado exitosamente';
	}
	function __destruct() {
		//unset($this);
	}
}
?>