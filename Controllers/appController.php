<?php namespace Controllers;

use Models\App as App;
use Models\Permiso as Permiso;

	class AppController{
		private $app;
		private $permiso;

		public function __construct(){
			$this->app = new App();
			$this->permiso = new Permiso();
		}

		public function index(){
		  $datos = $this->app->listar();
		  return $datos;
		}
		public function ControlPermiso($us,$per){
			$this->permiso->set("us", $us);
			$this->permiso->set("per", $per);
			$datos = $this->permiso->allow();
			return $datos;
		}	
	
		public function crear(){
			if($_POST){	
				$this->app->set("App", $_POST['App']);
				$this->app->add();
				//echo "control: " . $promedio;
				header("Location: " . URL . "app");
			}	
		}

		
		public function eliminar($id){

			if(!$_POST){
				$this->app->set("id", $id);
				$datos = $this->app->view();
				return $datos;
			}else{
				$this->app->set("id", $id);
				$this->app->delete();
				header("Location: " . URL . "app");	
			}

		}

		public function ver($id){
			$this->app->set("id",$id);
			$datos = $this->app->view();
			return $datos;
		}
		public function buscar(){
			//echo "App: " . $this->App;
			if($_POST['App'] == ""){
				header("Location: " . URL . "app");	
			}else{
				$this->app->set("App",$_POST['App']);
				$datos = $this->app->bus();
				return $datos;
			}
		}


		public function editar($id){
				if(!$_POST){
					$this->app->set("id", $id);
					$datos = $this->app->view();
					return $datos;
				}else{
					$this->app->set("id", $_POST['id']);	
					$this->app->set("App", $_POST['App']);	
					$this->app->edit();
					header("Location: " . URL . "app");
			}
		}
}	
	$app = new AppController();

?>