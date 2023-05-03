<?php namespace Controllers;

use Models\User as User;
use Models\Permiso as Permiso;

	class UserController{
		private $user;
		private $permiso;

		public function __construct(){
			$this->user = new User();
			$this->permiso = new Permiso();
		}

		public function index(){
		  $datos = $this->user->listar();
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
				$this->user->set("User", $_POST['User']);
				$this->user->set("Clave", $_POST['Clave']);
				$this->user->set("Estado", $_POST['Estado']);
				$this->user->add();
				header("Location: " . URL . "user");
			}	
		}

		
		public function eliminar($id){

			if(!$_POST){
				$this->user->set("id", $id);
				$datos = $this->user->view();
				return $datos;
			}else{
				$this->user->set("id", $id);
				$this->user->delete();
				header("Location: " . URL . "user");	
			}

		}

		public function ver($id){
			$this->user->set("id",$id);
			$datos = $this->user->view();
			return $datos;
		}
		public function buscar(){
			//echo "User: " . $this->User;
			if($_POST['User'] == ""){
				header("Location: " . URL . "user");	
			}else{
				$this->user->set("User",$_POST['User']);
				$datos = $this->user->bus();
				return $datos;
			}
		}


		public function editar($id){
				if(!$_POST){
					$this->user->set("id", $id);
					$datos = $this->user->view();
					return $datos;
				}else{
					$this->user->set("id", $_POST['id']);	
					$this->user->set("User", $_POST['User']);	
					$this->user->set("Clave", $_POST['Clave']);	
					$this->user->set("Estado", $_POST['Estado']);
					$this->user->edit();
					header("Location: " . URL . "user");
			}
		}

				public function seguridad($id){
				if(!$_POST){
					$this->user->set("id", $id);
					$datos = $this->user->view();
					return $datos;
				}else{

						if ($_POST['Clave'] == $_POST['Clave2']) {					
						$this->user->set("id", $_POST['id']);	
						$this->user->set("User", $_POST['User']);	
						$this->user->set("ClaveActual", $_POST['ClaveActual']);	
						$this->user->set("Clave", md5($_POST['Clave']));	
						$this->user->set("Clave2", md5($_POST['Clave2']));	
						$this->user->security();
						header("Location: " . URL);
/*
						echo "The string: ".$_POST['Clave']."<br>"; 
						echo "TRUE - Raw 16 character binary format: ".md5($_POST['Clave'], TRUE)."<br>"; 
						echo "FALSE - 32 character hex number: ".md5($_POST['Clave'])."<br>"; 
*/
					    }else{
					    echo "<script>alert('Intente de Nuevo , Las Claves No Coinciden');window.location.href=\"../index.php\"</script>";
						}
			}
		}
		public function blanqueo($id){
				$this->user->set("id",$id);
				$datos = $this->user->bleach();
				return $datos;
				header("Location: " . URL);
		}

}	
	$user = new UserController();

?>