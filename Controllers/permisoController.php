<?php namespace Controllers;

use Models\Permiso as Permiso;
use Models\User as User;
use Models\App as App;

	class permisoController{
		private $permiso;
		private $user;
		private $app;

		public function __construct(){
			$this->permiso = new Permiso();
			$this->user = new User();
			$this->app = new App();

		}

		public function index(){
		  $datos = $this->permiso->listar();
		  return $datos;
		}
		public function listarUser(){
			$datos = $this->user->listar();
			return $datos;
		}			
		public function listarApp(){
			$datos = $this->app->listar();
			return $datos;
		}	
	
		public function crear(){
			if($_POST){	
				$this->permiso->set("User_ID", $_POST['User']);
				$this->permiso->set("App_ID", $_POST['App']);
				$this->permiso->add();
				//echo "control: " . $promedio;
				header("Location: " . URL . "permiso");
			}	
		}

		
		public function eliminar($id){

			if(!$_POST){
				$this->permiso->set("id", $id);
				$datos = $this->permiso->view();
				return $datos;
			}else{
				$this->permiso->set("id", $id);
				$this->permiso->delete();
				header("Location: " . URL . "permiso");	
			}

		}

		public function ver($id){
			$this->permiso->set("id",$id);
			$datos = $this->permiso->view();
			return $datos;
		}
		public function buscar(){
			//echo "User_ID: " . $this->User_ID;
			if($_POST['User'] == ""){
				header("Location: " . URL . "permiso");	
			}else{
				$this->permiso->set("User_ID",$_POST['User']);
				$datos = $this->permiso->bus();
				return $datos;
			}
		}


		public function editar($id){
				if(!$_POST){
					$this->permiso->set("id", $id);
					$datos = $this->permiso->view();
					return $datos;
				}else{
					$this->permiso->set("id", $_POST['id']);	
					$this->permiso->set("User_ID", $_POST['User']);	
					$this->permiso->set("App_ID", $_POST['App']);	
					$this->permiso->edit();
					header("Location: " . URL . "permiso");
			}
		}
				
		public function permitir($us,$per){
			$this->permiso->set("us", $us);
			$this->permiso->set("per", $per);
			$datos = $this->permiso->allow();
			return $datos;
			
		}
}	
	$permiso = new permisoController();

?>