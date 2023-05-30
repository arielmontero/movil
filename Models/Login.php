<?php namespace Models;

//include_once("Conexion.php");
class Login{
 	private $id;
 	private $User;
 	private $Clave;
 	private $Estado;
 	private $con;

		public function __construct(){
			$this->con = new Conexion();
		}
		public function set($atributo, $contenido){
			return $this->$atributo = $contenido;
		}
		public function get($atributo){
			return $this->$atributo;
		}	
		public function log(){
				$validacion=0;
				$Clave=md5($this->Clave);
				$sql="SELECT ID_User, User, Clave, Estado  FROM User where User =  '{$this->User}' AND Clave = '$Clave'"; 
				$datos = $this->con->consultaRetorno($sql);
	
		while ($row = mysqli_fetch_array($datos))
        {
									  	function mysqli_result($res, $row, $field=0) { 
										    $res->data_seek($row); 
										    $datarow = $res->fetch_array(); 
										    return $datarow[$field]; 
										}	


            if($row['Estado'] == '1')
            {				
                                      session_start();
                                      $_SESSION["idUser"] = mysqli_result($datos,0,0);
                                      //echo $_SESSION["idUser"]; 
                                      $_SESSION["autentica"] = "SIP";
                                      //echo $_SESSION["autentica"];
									  $_SESSION["usuarioactual"] = mysqli_result($datos,0,1); 
									  //echo $_SESSION["usuarioactual"];									  
									  $_SESSION["estado"] = mysqli_result($datos,0,3); 
									  //echo $_SESSION["estado"];
									  //return $_SESSION["usuarioactual"];
									  $validacion=1; 	
									 ?> <META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>"><?php

            }

            if($row['Estado'] == '2')
            {				
                                      session_start();
                                      $_SESSION["idUser"] = mysqli_result($datos,0,0);
                                      //echo $_SESSION["idUser"]; 
                                      $_SESSION["autentica"] = "SIP";
                                      //echo $_SESSION["autentica"];
									  $_SESSION["usuarioactual"] = mysqli_result($datos,0,1); 
									 // echo $_SESSION["usuarioactual"];
									  $_SESSION["estado"] = mysqli_result($datos,0,3); 
									 // echo $_SESSION["estado"];
									  //return $_SESSION["usuarioactual"];
									  $validacion=1; 	
									  ?> <META HTTP-EQUIV="refresh" CONTENT="0;URL= <?php echo URL;?>"><?php

            }
        }
 		if($validacion==0) 
            {
			    $myusuario="SELECT User FROM User WHERE User = '{$this->User}'";
				$num = $this->con->consultaRetorno($myusuario);
				$nmyusuario = mysqli_num_rows($num);
 			 	if($nmyusuario != 0){
	            $sql2 = "SELECT User FROM User WHERE  User = '{$this->User}' AND Clave = '{$this->Clave}'";
	            $datos = $this->con->consultaRetorno($sql2);
	            $nmyclave = mysqli_num_rows($datos);
	          //Si el usuario y clave ingresado son correctos (y el usuario está activo en la BD), creamos la sesión del mismo.
	          	if($nmyclave != 0){

	          	}
	          	else{
	           	echo "<script>alert('Intente de Nuevo. Usuario o clave Incorrecta');window.location.href=\"../index.php\"</script>"; 
	          	}
	     		}else{
         		echo "<script>alert('Intente de Nuevo. Usuario o clave Incorrecta');window.location.href=\"../index.php\"</script>";
	     		} 

	  		}         



		}
}
?>