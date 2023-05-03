<?php namespace Controllers;

	use Models\Equipo as Equipo;
		use Models\Permiso as Permiso;

		class equipoController{
			private $equipo;
			private $permiso;
			public function __construct(){
				$this->equipo = new Equipo();
				$this->permiso = new Permiso();
			}
			public function index(){
			  $datos = $this->equipo->listar();
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
					$this->equipo->set("Marca", $_POST['Marca']);
					$this->equipo->set("Tipo", $_POST['Tipo']);
					$this->equipo->set("Modelo", $_POST['Modelo']);
					$this->equipo->set("Imei", $_POST['Imei']);
					$this->equipo->set("Fecha", $_POST['Fecha']);
					$this->equipo->set("User_ID", $_POST['user']);
					$this->equipo->add();
					//header("Location: " . URL . "equipo");
					?><META HTTP-EQUIV="refresh" CONTENT="4;URL= <?php echo URL;?>equipo"><?php	
				}	
			}
			public function eliminar($id){

				if(!$_POST){
					$this->equipo->set("id", $id);
					$datos = $this->equipo->view();
					return $datos;
				}else{
					$this->equipo->set("id", $id);
					$this->equipo->delete();
					//header("Location: " . URL . "equipo");
					?><META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>equipo"><?php	
				}

			}

			public function ver($id){
				$this->equipo->set("id",$id);
				$datos = $this->equipo->view();
				return $datos;
			}
			public function buscar(){
				//echo "cedula: " . $this->cedula;
				if($_POST['Dni'] == " "){
					//header("Location: " . URL . "equipo");
					?><META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>equipo"><?php	
				}else{
					$this->equipo->set("Dni",$_POST['Dni']);
					$datos = $this->equipo->bus();
					return $datos;
				}
			}

			public function editar($id){
					if(!$_POST){
						$this->equipo->set("id", $id);
						$datos = $this->equipo->view();
						return $datos;
					}else{
						$this->equipo->set("id", $id);	
						$this->equipo->set("Marca", $_POST['Marca']);
						$this->equipo->set("Tipo", $_POST['Tipo']);
						$this->equipo->set("Modelo", $_POST['Modelo']);
						$this->equipo->set("Imei", $_POST['Imei']);
						$this->equipo->set("Estado", $_POST['Estado']);
						$this->equipo->set("Comentario", $_POST['Comentario']);
						$this->equipo->set("Fecha", $_POST['Fecha']);
						$this->equipo->set("User_ID", $_POST['user']);	
						$this->equipo->edit();
						//header("Location: " . URL . "equipo");
						?><META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>equipo"><?php
				}
			}
	}	
	$equipo = new equipoController();
?>