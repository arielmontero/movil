<?php namespace Controllers;

	use Models\Area as Area;
		use Models\Permiso as Permiso;

		class areaController{
			private $area;
			private $permiso;
			public function __construct(){
				$this->area = new Area();
				$this->permiso = new Permiso();
			}
			public function index(){
			  $datos = $this->area->listar();
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
					$this->area->set("Area", $_POST['Area']);
					$this->area->add();
					//header("Location: " . URL . "area");
					?> <META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>area"><?php
				}	
			}
			public function eliminar($id){

				if(!$_POST){
					$this->area->set("id", $id);
					$datos = $this->area->view();
					return $datos;
				}else{
					$this->area->set("id", $id);
					$this->area->delete();
					//header("Location: " . URL . "area");
					?><META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>area"><?php	
				}

			}

			public function ver($id){
				$this->area->set("id",$id);
				$datos = $this->area->view();
				return $datos;
			}
			public function buscar(){
				//echo "cedula: " . $this->cedula;
				if($_POST['Dni'] == " "){
					//header("Location: " . URL . "area");
					?><META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>area"><?php	
				}else{
					$this->area->set("Dni",$_POST['Dni']);
					$datos = $this->area->bus();
					return $datos;
				}
			}

			public function editar($id){
					if(!$_POST){
						$this->area->set("id", $id);
						$datos = $this->area->view();
						return $datos;
					}else{
						$this->area->set("id", $id);	
						$this->area->set("Area", $_POST['Area']);		
						$this->area->edit();
						//header("Location: " . URL . "area");
						?><META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>area"><?php
				}
			}
	}	
	$area = new areaController();
?>