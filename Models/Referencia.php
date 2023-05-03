<?php namespace Models;

	//include_once("Conexion.php");
	 class Referencia{
	 	private $id;
	 	private $Referencia;
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
				$sql= "SELECT * FROM Referencia WHERE ID_Referencia != 1";
				$resultado = $this->con->consultaRetorno($sql);
				return $resultado;
			}
			public function add(){
					$sql="INSERT INTO Referencia (Cuenta,Referencia,Periodo)
					VALUES('{$this->Cuenta}','{$this->Referencia}','{$this->Periodo}')";
				    $this->con->consultaSimple($sql);				 
			}
			public function delete(){
				$sql="DELETE FROM Referencia WHERE ID_Referencia = '{$this->id}'";
				$this->con->consultaSimple($sql);
			}
			public function edit(){
				$sql="UPDATE Referencia SET  Cuenta = '{$this->Cuenta}' , Referencia = '{$this->Referencia}' ,Periodo = '{$this->Periodo}' WHERE ID_Referencia = '{$this->id}'";
				$this->con->consultaSimple($sql);
			}
			public function view(){
			    $sql="SELECT * FROM Referencia WHERE ID_Referencia = '{$this->id}'";
				$datos = $this->con->consultaRetorno($sql);
				$row = mysqli_fetch_assoc($datos);
				return $row;	
			}
			public function bus(){
			    $sql2="SELECT * FROM Referencia WHERE Dni = '{$this->Dni}'";
				$dato = $this->con->consultaRetorno($sql2);
				$num = mysqli_num_rows($dato);
				if ($num != 0) {
				$sql="SELECT * FROM Referencia WHERE Dni = '{$this->Dni}'";
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