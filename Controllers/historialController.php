<?php namespace Controllers;

	use Models\Historial as Historial;
		use Models\Permiso as Permiso;

		class historialController{
			private $historial;
			private $permiso;
			public function __construct(){
				$this->historial = new Historial();
				$this->permiso = new Permiso();
			}
			public function index(){
			  $datos = $this->historial->listar();
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

					$this->historial->set("Fecha", $_POST['Fecha']);
					$this->historial->set("User_ID", $_POST['user']);
					$this->historial->add();
					//header("Location: " . URL . "historial");
					?> <META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>historial"><?php
				}	
			}
			public function eliminar($id){

				if(!$_POST){
					$this->historial->set("id", $id);
					$datos = $this->historial->view();
					return $datos;
				}else{
					$this->historial->set("id", $id);
					$this->historial->delete();
					//header("Location: " . URL . "historial");
					?><META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>historial"><?php	
				}

			}

			public function ver($id){
				$this->historial->set("id",$id);
				$datos = $this->historial->view();
				return $datos;
			}
			public function buscar(){
				//echo "cedula: " . $this->cedula;
				if($_POST['Dni'] == " "){
					//header("Location: " . URL . "historial");
					?><META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>historial"><?php	
				}else{
					$this->historial->set("Dni",$_POST['Dni']);
					$datos = $this->historial->bus();
					return $datos;
				}
			}

			public function editar($id){
					if(!$_POST){
						$this->historial->set("id", $id);
						$datos = $this->historial->view();
						return $datos;
					}else{
						$this->historial->set("id", $id);	
						$this->historial->set("Comentario", $_POST['Comentario']);
						$this->historial->set("Fecha", $_POST['Fecha']);
						$this->historial->set("User_ID", $_POST['user']);	
						$this->historial->edit();
						//header("Location: " . URL . "historial");
						?><META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>historial"><?php
				}
			}
	}	
	$historial = new historialController();
?>