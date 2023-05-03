<?php namespace Controllers;

use Models\Login as Login;

	class loginController{
		private $login;

		public function __construct(){
			$this->login = new login();
		}
		public function login(){
			if($_POST['User'] == ""){
				header("Location: " . URL);	
			}else{
				$this->login->set("User",$_POST['User']);
				$this->login->set("Clave",$_POST['Clave']);
				$datos = $this->login->log();
				return $datos;
			}
		}
	}	
	$login = new loginController();

?>