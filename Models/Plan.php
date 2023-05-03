<?php namespace Models;

	//include_once("Conexion.php");
	 class Plan{
	 	private $id;
	 	private $Plan;
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
			$sql= "SELECT * FROM Plan
			WHERE ID_Plan != 1
			Order By ID_Plan DESC";
			$resultado = $this->con->consultaRetorno($sql);
			return $resultado;
			}
			public function add(){
			$sqlu="SELECT ID_User FROM User WHERE User = '{$this->User_ID}'";
			$datou = $this->con->consultaRetorno($sqlu);
			$ram = mysqli_fetch_array($datou);
			$user = $ram['ID_User']; 	
					$sql="INSERT INTO Plan (Nombre,Minutos,Datos,Sms,Cobertura,Costo,Fecha,User_ID)
					VALUES('{$this->Nombre}','{$this->Minutos}','{$this->Datos}','{$this->Sms}','{$this->Cobertura}','{$this->Costo}',NOW(),$user)";
				    $this->con->consultaSimple($sql);				 
			}
			public function delete(){
				$sql="DELETE FROM Plan WHERE ID_Plan = '{$this->id}'";
				$this->con->consultaSimple($sql);
			}
			public function edit(){
				$sql="UPDATE Plan SET Nombre = '{$this->Nombre}',Minutos = '{$this->Minutos}',Datos = '{$this->Datos}',Sms = '{$this->Sms}',
				Cobertura = '{$this->Cobertura}',Costo = '{$this->Costo}' WHERE ID_Plan = '{$this->id}'";
				$this->con->consultaSimple($sql);

					$sqlu="SELECT ID_User FROM User WHERE User = '{$this->User_ID}'";
					$datou = $this->con->consultaRetorno($sqlu);
					$ram = mysqli_fetch_array($datou);
					$user = $ram['ID_User']; 	

				    $var=1; 	
					$sql="INSERT INTO Historial (Sim_ID,Linea_ID,Equipo_ID,Plan_ID,User_ID,Entidad,Comentario,Fecha)
					VALUES($var,$var,$var,'{$this->id}',$user,'Plan','{$this->Comentario}',NOW())";
				    $this->con->consultaSimple($sql);
			}
			public function view(){
			    $sql="SELECT * FROM Plan WHERE ID_Plan = '{$this->id}'";
				$datos = $this->con->consultaRetorno($sql);
				$row = mysqli_fetch_assoc($datos);
				return $row;	
			}
			public function bus(){
			    $sql2="SELECT * FROM Plan WHERE Dni = '{$this->Dni}'";
				$dato = $this->con->consultaRetorno($sql2);
				$num = mysqli_num_rows($dato);
				if ($num != 0) {
				$sql="SELECT * FROM Plan WHERE Dni = '{$this->Dni}'";
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