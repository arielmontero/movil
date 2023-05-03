<?php namespace Controllers;

	use Models\Consulta as Consulta;
		use Models\Permiso as Permiso;
		use Models\Referencia as Referencia;

		class consultaController{
			private $consulta;
			private $permiso;
			private $Referencia;
			public function __construct(){
				$this->consulta = new Consulta();
				$this->permiso = new Permiso();

			}
			public function index(){
			  $datos = $this->consulta->listar();
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
					//$this->consulta->set("User_ID", $_POST['user']);
					$this->consulta->add();
					//header("Location: " . URL . "consulta");
					?> <META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>consulta"><?php
				}	
			}
			public function eliminar($id){

				if(!$_POST){
					$this->consulta->set("id", $id);
					$datos = $this->consulta->view();
					return $datos;
				}else{
					//$this->consulta->set("id", $id);
					$this->consulta->delete();
					//header("Location: " . URL . "consulta");
					?><META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>consulta"><?php	
				}

			}

			public function ver($id){
				$this->consulta->set("id",$id);
				$datos = $this->consulta->view();
				return $datos;
			}
			public function buscar(){
				//echo "cedula: " . $this->cedula;
				if($_POST['Dni'] == " "){
					//header("Location: " . URL . "consulta");
					?><META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>consulta"><?php	
				}else{
					$this->consulta->set("Dni",$_POST['Dni']);
					$datos = $this->consulta->bus();
					return $datos;
				}
			}

			public function editar($id){
					if(!$_POST){
						$this->consulta->set("id", $id);
						$datos = $this->consulta->view();
						return $datos;
					}else{
						$this->consulta->set("User_ID", $_POST['user']);		
						$this->consulta->edit();
						//header("Location: " . URL . "consulta");
						?><META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>consulta"><?php
				}
			}
	}	
	$consulta = new consultaController();
?>