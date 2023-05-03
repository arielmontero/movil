<?php namespace Controllers;

	use Models\Referencia as Referencia;
		use Models\Permiso as Permiso;

		class referenciaController{
			private $referencia;
			private $permiso;
			public function __construct(){
				$this->referencia = new Referencia();
				$this->permiso = new Permiso();
			}
			public function index(){
			  $datos = $this->referencia->listar();
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
					$this->referencia->set("Cuenta", $_POST['Cuenta']);
					$this->referencia->set("Referencia", $_POST['Referencia']);
					$this->referencia->set("Periodo", $_POST['Periodo']);
					$this->referencia->add();
					//header("Location: " . URL . "referencia");
					?> <META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>referencia"><?php
				}	
			}
			public function eliminar($id){

				if(!$_POST){
					$this->referencia->set("id", $id);
					$datos = $this->referencia->view();
					return $datos;
				}else{
					$this->referencia->set("id", $id);
					$this->referencia->delete();
					//header("Location: " . URL . "referencia");
					?><META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>referencia"><?php	
				}

			}

			public function ver($id){
				$this->referencia->set("id",$id);
				$datos = $this->referencia->view();
				return $datos;
			}
			public function buscar(){
				//echo "cedula: " . $this->cedula;
				if($_POST['Dni'] == " "){
					//header("Location: " . URL . "referencia");
					?><META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>referencia"><?php	
				}else{
					$this->referencia->set("Dni",$_POST['Dni']);
					$datos = $this->referencia->bus();
					return $datos;
				}
			}

			public function editar($id){
					if(!$_POST){
						$this->referencia->set("id", $id);
						$datos = $this->referencia->view();
						return $datos;
					}else{
						$this->referencia->set("id", $id);	
						$this->referencia->set("Cuenta", $_POST['Cuenta']);
						$this->referencia->set("Referencia", $_POST['Referencia']);
						$this->referencia->set("Periodo", $_POST['Periodo']);		
						$this->referencia->edit();
						//header("Location: " . URL . "referencia");
						?><META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>referencia"><?php
				}
			}
	}	
	$referencia = new referenciaController();
?>