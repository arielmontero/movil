<?php namespace Controllers;

	use Models\Linea as Linea;
		use Models\Permiso as Permiso;
		use Models\Area as Area;
		use Models\Organismo as Organismo;
		use Models\Plan as Plan;
		use Models\Sim as Sim;
		use Models\Equipo as Equipo;

		class lineaController{
			private $linea;
			private $permiso;
			private $area;
			private $organismo;
			private $plan;
			private $sim;
			private $equipo;
			public function __construct(){
				$this->linea = new Linea();
				$this->permiso = new Permiso();
				$this->area = new Area();
				$this->organismo = new Organismo();
				$this->plan = new Plan();
				$this->sim = new Sim();
				$this->equipo = new Equipo();
			}
			public function index(){
			  $datos = $this->linea->listar();
			  return $datos;
			}
			public function listararea(){
			  $datos = $this->area->listar();
			  return $datos;
			}			
			public function listarorganismo(){
			  $datos = $this->organismo->listar();
			  return $datos;
			}			
			public function listarplan(){
			  $datos = $this->plan->listar();
			  return $datos;
			}			
			public function listarequipoactivo(){
			  $datos = $this->equipo->listarActivos();
			  return $datos;
			}
			//esta funcion es para listar los sim disponibles para asignarse a una persona "SIM ACTIVOS"
			public function listarsimactivos(){
			  $datos = $this->sim->listarActivos();
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
/*
					$this->linea->set("Minutos", $_POST['Minutos']);
					$this->linea->set("Datos", $_POST['Datos']);
					$this->linea->set("Sms", $_POST['Sms']);
					$this->linea->set("Cobertura", $_POST['Cobertura']);
					$this->linea->set("Costo", $_POST['Costo']);
					$this->linea->set("Plan_ID", $_POST['Plan_ID']);					
					$this->linea->set("Marca", $_POST['Marca']);
					$this->linea->set("Tipo", $_POST['Tipo']);
					$this->linea->set("Modelo", $_POST['Modelo']);
					$this->linea->set("Imei", $_POST['Imei']);
*/					
					

					$this->linea->set("pregunta", $_POST['pregunta']);
					$this->linea->set("Equipo_ID", $_POST['Equipo_ID']);


					$this->linea->set("Sim_ID", $_POST['Sim_ID']);
					$this->linea->set("Usuario", $_POST['Usuario']);
					$this->linea->set("Funcion", $_POST['Funcion']);
					$this->linea->set("Organismo_ID", $_POST['Organismo_ID']);
					$this->linea->set("Area_ID", $_POST['Area_ID']);

					$this->linea->set("Fecha", $_POST['Fecha']);
					$this->linea->set("User_ID", $_POST['user']);

					$this->linea->add();

					//header("Location: " . URL . "linea");
					?><META HTTP-EQUIV="refresh" CONTENT="4;URL= <?php echo URL;?>linea"><?php
				}	
			}
			public function eliminar($id){			
				if(!$_POST){
					$this->linea->set("id", $id);
					$datos = $this->linea->view();
					return $datos;
				}else{
					$this->linea->set("id", $id);
					$this->linea->delete();
					//header("Location: " . URL . "linea");
					?><META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>linea"><?php	
				}
			}

			public function ver($id){
				$this->linea->set("id",$id);
				$datos = $this->linea->view();
				return $datos;
			}
			//funcion para los planes que tiene la linea
			public function verplan($id){
				$this->linea->set("id",$id);
				$datos = $this->linea->viendoplan();
				return $datos;
			}			
			//funcion para la sim que tiene la linea
			public function versim($id){
				$this->linea->set("id",$id);
				$datos = $this->linea->viendosim();
				return $datos;
			}								
			//funcion para los Equipo que tiene la linea
			public function verequipo($id){
				$this->linea->set("id",$id);
				$datos = $this->linea->viendoequipo();
				return $datos;
			}			






			//funcion para liste el historial SIM
			public function verhistorial($id){
				$this->linea->set("id",$id);
				$datos = $this->linea->viendohistorial();
				return $datos;
			}



			

			public function buscar(){
				//echo "cedula: " . $this->cedula;
				if($_POST['Dni'] == " "){
					//header("Location: " . URL . "linea");
					?><META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>linea"><?php	
				}else{
					$this->linea->set("Dni",$_POST['Dni']);
					$datos = $this->linea->bus();
					return $datos;
				}
			}

			public function editar($id){
					if(!$_POST){
						$this->linea->set("id", $id);
						$datos = $this->linea->view();
						return $datos;
					}else{
						$this->linea->set("id", $id);
						$this->linea->set("Usuario", $_POST['Usuario']);	
						$this->linea->set("Funcion", $_POST['Funcion']);	
						$this->linea->set("Organismo_ID", $_POST['Organismo']);	
						$this->linea->set("Area_ID", $_POST['Area']);
						$this->linea->set("Comentario", $_POST['Comentario']);
						$this->linea->set("User_ID", $_POST['user']);		
						$this->linea->edit();
						//header("Location: " . URL . "linea");
						?><META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>linea/ver/<?php echo $id;?>"><?php
				}
			}
					
			public function editarsim($id){
	
						//echo $_POST;							
						$dera=$_POST['ban'];
						$regreso=$_POST['idlinea'];
							//echo "ANtes de Entrar BANdera" . $dera;
					if($dera==0){
						//echo "Entrar al primer 0  BANdera" . $dera;
						//echo "PRimer IF: ";
						$this->linea->set("id", $id);
						$datos = $this->linea->viendoeditarsim();
						return $datos;
					}
					if($dera==1){
						//echo "Entrar al segundo  1  BANdera" . $dera;
						//echo "Segundo  IF: ";
						$this->linea->set("id", $id);	
						$this->linea->set("idlinea", $_POST['idlinea']);
						$this->linea->set("Estado", $_POST['Estado']);
						$this->linea->set("Comentario", $_POST['Comentario']);
						$this->linea->set("Fecha", $_POST['Fecha']);
						$this->linea->set("User_ID", $_POST['user']);		
						$this->linea->editsim();
						//header("Location: " . URL . "linea");
					
				}					
				if($dera==2){
						//echo "Entrar al segundo 2  BANdera" . $dera;
						//echo "tercer  IF: ";
						$this->linea->set("id", $id);	
						$this->linea->set("Sim_ID", $_POST['Sim_ID']);
						$this->linea->set("idlinea", $_POST['idlinea']);
						$this->linea->set("User_ID", $_POST['user']);		
						$this->linea->asignarsim();
						//header("Location: " . URL . "linea");
					
				}
				?><META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>linea/ver/<?php echo $regreso;?>"><?php
			}


				public function editarequipo($id){
								//echo $_POST;							
						$dera=$_POST['ban'];
						$regreso=$_POST['idlinea'];
							//echo "ANtes de Entrar BANdera" . $dera;
					if($dera==0){
						//echo "Entrar al primer 0  BANdera" . $dera;
						//echo "PRimer IF: ";
						$this->linea->set("id", $id);
						$datos = $this->linea->viendoeditarequipo();
						return $datos;
					}
					if($dera==1){
						$this->linea->set("id", $id);
						$this->linea->set("idlinea", $_POST['idlinea']);	
						$this->linea->set("Estado", $_POST['Estado']);
						$this->linea->set("Comentario", $_POST['Comentario']);
						$this->linea->set("Fecha", $_POST['Fecha']);
						$this->linea->set("User_ID", $_POST['user']);	
						$this->linea->editequipo();
						//header("Location: " . URL . "linea");
						
				    }
				    if($dera==2){
						//echo "Entrar al segundo 2  BANdera" . $dera;
						//echo "tercer  IF: ";
						$this->linea->set("id", $id);	
						$this->linea->set("Equipo_ID", $_POST['Equipo_ID']);
						$this->linea->set("idlinea", $_POST['idlinea']);
						$this->linea->set("User_ID", $_POST['user']);		
						$this->linea->asignarequipo();
						//header("Location: " . URL . "linea");
					
				}
				?><META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>linea/ver/<?php echo $regreso;?>"><?php
			}
	}	
	$linea = new lineaController();
?>