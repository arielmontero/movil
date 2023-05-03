<?php namespace Models;

	//include_once("Conexion.php");
	 class Organismo{
	 	private $id;
	 	private $Organismo;
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
			public function listar(){
				$sql= "SELECT * FROM Organismo WHERE ID_Organismo != 1";
				$resultado = $this->con->consultaRetorno($sql);
				return $resultado;
			}
			public function add(){
					$sql="INSERT INTO Organismo (Organismo)
					VALUES('{$this->Organismo}')";
				    $this->con->consultaSimple($sql);				 
			}
			public function delete(){
				$sql="DELETE FROM Organismo WHERE ID_Organismo = '{$this->id}'";
				$this->con->consultaSimple($sql);
			}
			public function edit(){
				$sql="UPDATE Organismo SET Organismo = '{$this->Organismo}' WHERE ID_Organismo = '{$this->id}'";
				$this->con->consultaSimple($sql);
			}
			public function view(){
			    $sql="SELECT * FROM Organismo WHERE ID_Organismo = '{$this->id}'";
				$datos = $this->con->consultaRetorno($sql);
				$row = mysqli_fetch_assoc($datos);
				return $row;	
			}
			public function bus(){
			    $sql2="SELECT * FROM Organismo WHERE Dni = '{$this->Dni}'";
				$dato = $this->con->consultaRetorno($sql2);
				$num = mysqli_num_rows($dato);
				if ($num != 0) {
				$sql="SELECT * FROM Organismo WHERE Dni = '{$this->Dni}'";
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