<?php namespace Models;

	//include_once("Conexion.php");
	 class Historial{
	 	private $id;
	 	private $Historial;
	 	private $con;
	 	private $user;

			public function __construct(){
				$this->con = new Conexion();
			 }
			public function set($atributo, $contenido){
				return $this->$atributo = $contenido;
			}
			public function get($atributo){
				return $this->$atributo;
			}
			public function listar(){
				$sql= "SELECT * FROM Historial";
				$resultado = $this->con->consultaRetorno($sql);
				return $resultado;
			}
			public function add(){
			$sqlu="SELECT ID_User FROM User WHERE User = '{$this->User_ID}'";
			$datou = $this->con->consultaRetorno($sqlu);
			$ram = mysqli_fetch_array($datou);
			$user = $ram['ID_User']; 	
					$sql="INSERT INTO Historial (Fecha,User_ID)
					VALUES(NOW(),$user)";
				    $this->con->consultaSimple($sql);				 
			}
			public function delete(){
				$sql="DELETE FROM Historial WHERE ID_Historial = '{$this->id}'";
				$this->con->consultaSimple($sql);
			}
			public function edit(){
				$sql="UPDATE Historial SET Comentario = '{$this->Comentario}' WHERE ID_Historial = '{$this->id}'";
				$this->con->consultaSimple($sql);
			}
			public function view(){
			    $sql="SELECT * FROM Historial WHERE ID_Historial = '{$this->id}'";
				$datos = $this->con->consultaRetorno($sql);
				$row = mysqli_fetch_assoc($datos);
				return $row;	
			}
			public function bus(){
			    $sql2="SELECT * FROM Historial WHERE Dni = '{$this->Dni}'";
				$dato = $this->con->consultaRetorno($sql2);
				$num = mysqli_num_rows($dato);
				if ($num != 0) {
				$sql="SELECT * FROM Historial WHERE Dni = '{$this->Dni}'";
				$datos = $this->con->consultaRetorno($sql);
				$row = mysqli_fetch_assoc($datos);
				return $row;
				}else{
					$num=0;
					return $num;

			}
	
		}
	}
?>