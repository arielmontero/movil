<?php namespace Controllers;

	use Models\Sim as Sim;
		use Models\Permiso as Permiso;
		use Models\Plan as Plan;
		use Models\Referencia as Referencia;

		class simController{
			private $sim;
			private $permiso;
			private $plan;
			private $referencia;
			public function __construct(){
				$this->sim = new Sim();
				$this->permiso = new Permiso();
				$this->plan = new Plan();
				$this->referencia = new Referencia();
			}
			public function index(){
			  $datos = $this->sim->listar();
			  return $datos;
			}
			public function listarplan(){
			  $datos = $this->plan->listar();
			  return $datos;
			}				
			public function listarreferencia(){
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
					$this->sim->set("Numero", $_POST['Numero']);
					$this->sim->set("Imei", $_POST['Imei']);
					$this->sim->set("Tipo", $_POST['Tipo']);
					//$this->sim->set("Estado", $_POST['Estado']);
					$this->sim->set("Referencia_ID", $_POST['Referencia_ID']);
					$this->sim->set("Plan_ID", $_POST['Plan_ID']);
					$this->sim->set("Fecha", $_POST['Fecha']);
					$this->sim->set("User_ID", $_POST['user']);
					$this->sim->add();
					//header("Location: " . URL . "sim");
					?> <META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>sim"><?php
				}	
			}
			public function eliminar($id){

				if(!$_POST){
					$this->sim->set("id", $id);
					$datos = $this->sim->view();
					return $datos;
				}else{
					$this->sim->set("id", $id);
					$this->sim->delete();
					//header("Location: " . URL . "sim");
					?><META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>sim"><?php	
				}

			}

			public function ver($id){
				$this->sim->set("id",$id);
				$datos = $this->sim->view();
				return $datos;
			}
			public function buscar(){
				//echo "cedula: " . $this->cedula;
				if($_POST['Dni'] == " "){
					//header("Location: " . URL . "sim");
					?><META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>sim"><?php	
				}else{
					$this->sim->set("Dni",$_POST['Dni']);
					$datos = $this->sim->bus();
					return $datos;
				}
			}

			public function editar($id){
					if(!$_POST){
						$this->sim->set("id", $id);
						$datos = $this->sim->view();
						return $datos;
					}else{
						$this->sim->set("id", $id);	
						$this->sim->set("Numero", $_POST['Numero']);
						$this->sim->set("Imei", $_POST['Imei']);
						$this->sim->set("Tipo", $_POST['Tipo']);
						$this->sim->set("Estado", $_POST['Estado']);
						$this->sim->set("Referencia_ID", $_POST['Referencia_ID']);
						$this->sim->set("Plan_ID", $_POST['Plan_ID']);
						$this->sim->set("Comentario", $_POST['Comentario']);
						$this->sim->set("Fecha", $_POST['Fecha']);
						$this->sim->set("User_ID", $_POST['user']);		
						$this->sim->edit();
						//header("Location: " . URL . "sim");
						?><META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>sim"><?php
				}
			}
	}	
	$sim = new simController();
?>