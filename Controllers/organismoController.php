<?php namespace Controllers;

	use Models\Organismo as Organismo;
		use Models\Permiso as Permiso;

		class organismoController{
			private $organismo;
			private $permiso;
			public function __construct(){
				$this->organismo = new Organismo();
				$this->permiso = new Permiso();
			}
			public function index(){
			  $datos = $this->organismo->listar();
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
					$this->organismo->set("Organismo", $_POST['Organismo']);
					$this->organismo->add();
					//header("Location: " . URL . "organismo");
					?> <META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>organismo"><?php
				}	
			}
			public function eliminar($id){

				if(!$_POST){
					$this->organismo->set("id", $id);
					$datos = $this->organismo->view();
					return $datos;
				}else{
					$this->organismo->set("id", $id);
					$this->organismo->delete();
					//header("Location: " . URL . "organismo");
					?><META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>organismo"><?php	
				}

			}

			public function ver($id){
				$this->organismo->set("id",$id);
				$datos = $this->organismo->view();
				return $datos;
			}
			public function buscar(){
				//echo "cedula: " . $this->cedula;
				if($_POST['Dni'] == " "){
					//header("Location: " . URL . "organismo");
					?><META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>organismo"><?php	
				}else{
					$this->organismo->set("Dni",$_POST['Dni']);
					$datos = $this->organismo->bus();
					return $datos;
				}
			}

			public function editar($id){
					if(!$_POST){
						$this->organismo->set("id", $id);
						$datos = $this->organismo->view();
						return $datos;
					}else{
						$this->organismo->set("id", $id);	
						$this->organismo->set("Organismo", $_POST['Organismo']);			
						$this->organismo->edit();
						//header("Location: " . URL . "organismo");
						?><META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>organismo"><?php
				}
			}
	}	
	$organismo = new organismoController();
?>