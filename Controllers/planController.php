<?php namespace Controllers;

	use Models\Plan as Plan;
		use Models\Permiso as Permiso;
		//use Models\Referencia as Referencia;

		class planController{
			private $plan;
			private $permiso;
			//private $Referencia;
			public function __construct(){
				$this->plan = new Plan();
				$this->permiso = new Permiso();
				//$this->referencia = new Referencia();
			}
			public function index(){
			  $datos = $this->plan->listar();
			  return $datos;
			}
			/*public function listarreferencia(){
			  $datos = $this->referencia->listar();
			  return $datos;
			}	*/
			public function ControlPermiso($us,$per){
			$this->permiso->set("us", $us);
			$this->permiso->set("per", $per);
			$datos = $this->permiso->allow();
			return $datos;
		}
			public function crear(){
				if($_POST){
					$this->plan->set("Nombre", $_POST['Nombre']);
					$this->plan->set("Minutos", $_POST['Minutos']);
					$this->plan->set("Datos", $_POST['Datos']);
					$this->plan->set("Sms", $_POST['Sms']);
					$this->plan->set("Cobertura", $_POST['Cobertura']);
					$this->plan->set("Costo", $_POST['Costo']);
					//$this->plan->set("Referencia_ID", $_POST['Referencia_ID']);
					$this->plan->set("Fecha", $_POST['Fecha']);
					$this->plan->set("User_ID", $_POST['user']);
					$this->plan->add();
					//header("Location: " . URL . "plan");
					?> <META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>plan"><?php
				}	
			}
			public function eliminar($id){

				if(!$_POST){
					$this->plan->set("id", $id);
					$datos = $this->plan->view();
					return $datos;
				}else{
					$this->plan->set("id", $id);
					$this->plan->delete();
					//header("Location: " . URL . "plan");
					?><META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>plan"><?php	
				}

			}

			public function ver($id){
				$this->plan->set("id",$id);
				$datos = $this->plan->view();
				return $datos;
			}
			public function buscar(){
				//echo "cedula: " . $this->cedula;
				if($_POST['Dni'] == " "){
					//header("Location: " . URL . "plan");
					?><META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>plan"><?php	
				}else{
					$this->plan->set("Dni",$_POST['Dni']);
					$datos = $this->plan->bus();
					return $datos;
				}
			}

			public function editar($id){
					if(!$_POST){
						$this->plan->set("id", $id);
						$datos = $this->plan->view();
						return $datos;
					}else{
						$this->plan->set("id", $id);	
						$this->plan->set("Nombre", $_POST['Nombre']);
						$this->plan->set("Minutos", $_POST['Minutos']);
						$this->plan->set("Datos", $_POST['Datos']);
						$this->plan->set("Sms", $_POST['Sms']);
						$this->plan->set("Cobertura", $_POST['Cobertura']);
						$this->plan->set("Costo", $_POST['Costo']);
						//$this->plan->set("Referencia_ID", $_POST['Referencia_ID']);
						$this->plan->set("Comentario", $_POST['Comentario']);
						$this->plan->set("Fecha", $_POST['Fecha']);
						$this->plan->set("User_ID", $_POST['user']);		
						$this->plan->edit();
						//header("Location: " . URL . "plan");
						?><META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>plan"><?php
				}
			}
	}	
	$plan = new planController();
?>