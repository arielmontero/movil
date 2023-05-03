<?php namespace Models;

	//include_once("Conexion.php");
	 class Area{
	 	private $id;
	 	private $Area;
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
				$sql= "SELECT * FROM Area WHERE ID_Area != 1";
				$resultado = $this->con->consultaRetorno($sql);
				return $resultado;
			}
			public function add(){
					$sql="INSERT INTO Area (Area)
					VALUES('{$this->Area}')";
				    $this->con->consultaSimple($sql);				 
			}
			public function delete(){
				$sql="DELETE FROM Area WHERE ID_Area = '{$this->id}'";
				$this->con->consultaSimple($sql);
			}
			public function edit(){
				$sql="UPDATE Area SET  Area = '{$this->Area}' WHERE ID_Area = '{$this->id}'";
				$this->con->consultaSimple($sql);
			}
			public function view(){
			    $sql="SELECT * FROM Area WHERE ID_Area = '{$this->id}'";
				$datos = $this->con->consultaRetorno($sql);
				$row = mysqli_fetch_assoc($datos);
				return $row;	
			}
			public function bus(){
			    $sql2="SELECT * FROM Area WHERE Dni = '{$this->Dni}'";
				$dato = $this->con->consultaRetorno($sql2);
				$num = mysqli_num_rows($dato);
				if ($num != 0) {
				$sql="SELECT * FROM Area WHERE Dni = '{$this->Dni}'";
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