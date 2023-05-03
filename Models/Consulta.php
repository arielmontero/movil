<?php namespace Models;

	//include_once("Conexion.php");
	 class Consulta{
	 	private $id;
	 	private $Consulta;
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
			$sql="SELECT  SUM(Costo) as number, Nombre FROM Plan Where ID_Plan!=1 group by Nombre";
			$resultado = $this->con->consultaRetorno($sql);
			return $resultado;
            }
				
	
			public function add(){
			$sqlu="SELECT ID_User FROM User WHERE User = '{$this->User_ID}'";
			$datou = $this->con->consultaRetorno($sqlu);
			$ram = mysqli_fetch_array($datou);
			$user = $ram['ID_User']; 	
					$sql="INSERT INTO Consulta (Nombre,Minutos,Datos,Sms,Cobertura,Costo,Referencia_ID,Fecha,User_ID)
					VALUES('{$this->Nombre}','{$this->Minutos}','{$this->Datos}','{$this->Sms}','{$this->Cobertura}','{$this->Costo}','{$this->Referencia_ID}',NOW(),$user)";
				    $this->con->consultaSimple($sql);				 
			}
			public function delete(){
				$sql="DELETE FROM Consulta WHERE ID_Consulta = '{$this->id}'";
				$this->con->consultaSimple($sql);
			}
			public function edit(){
				$sql="UPDATE Consulta SET Nombre = '{$this->Nombre}',Minutos = '{$this->Minutos}',Datos = '{$this->Datos}',Sms = '{$this->Sms}',
				Cobertura = '{$this->Cobertura}',Costo = '{$this->Costo}',Referencia_ID = '{$this->Referencia_ID}' WHERE ID_Consulta = '{$this->id}'";
				$this->con->consultaSimple($sql);

					$sqlu="SELECT ID_User FROM User WHERE User = '{$this->User_ID}'";
					$datou = $this->con->consultaRetorno($sqlu);
					$ram = mysqli_fetch_array($datou);
					$user = $ram['ID_User']; 	

				    $var=1; 	
					$sql="INSERT INTO Historial (Sim_ID,Linea_ID,Equipo_ID,Consulta_ID,User_ID,Entidad,Comentario,Fecha)
					VALUES($var,$var,$var,'{$this->id}',$user,'Consulta','{$this->Comentario}',NOW())";
				    $this->con->consultaSimple($sql);
			}
			public function view(){
			    $sql="SELECT * FROM Consulta WHERE ID_Consulta = '{$this->id}'";
				$datos = $this->con->consultaRetorno($sql);
				$row = mysqli_fetch_assoc($datos);
				return $row;	
			}
			public function bus(){
			    $sql2="SELECT * FROM Consulta WHERE Dni = '{$this->Dni}'";
				$dato = $this->con->consultaRetorno($sql2);
				$num = mysqli_num_rows($dato);
				if ($num != 0) {
				$sql="SELECT * FROM Consulta WHERE Dni = '{$this->Dni}'";
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