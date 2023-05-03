<?php namespace Models;

	//include_once("Conexion.php");
	 class Sim{
	 	private $id;
	 	private $Sim;
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
				$sql= "SELECT t1.*, 
			t2.Nombre AS plan ,
			t3.Referencia AS referencia
		    FROM Sim t1
			LEFT JOIN Plan t2 ON t1.Plan_ID = t2.ID_Plan
			LEFT JOIN Referencia t3 ON t1.Referencia_ID = t3.ID_Referencia
			WHERE ID_Sim != 1
			Order By ID_Sim DESC";
			$resultado = $this->con->consultaRetorno($sql);
			return $resultado;
			}
			//funcion para que liste la sim activas para crear una linea modelo LINEA
			public function listarActivos(){
				$sql= "SELECT * FROM Sim Where Estado='Disponible' order by Numero ASC ";
				$resultado = $this->con->consultaRetorno($sql);
				return $resultado;
			}			
			public function add(){
			$sqlu="SELECT ID_User FROM User WHERE User = '{$this->User_ID}'";
			$datou = $this->con->consultaRetorno($sqlu);
			$ram = mysqli_fetch_array($datou);
			$user = $ram['ID_User']; 	
					$sql="INSERT INTO Sim (Numero,Imei,Tipo,Estado,Referencia_ID,Plan_ID,Fecha,User_ID)
					VALUES('{$this->Numero}','{$this->Imei}','{$this->Tipo}','Disponible','{$this->Referencia_ID}','{$this->Plan_ID}',NOW(),$user)";
				    $this->con->consultaSimple($sql);				 
			}
			public function delete(){
				$sql="DELETE FROM Sim WHERE ID_Sim = '{$this->id}'";
				$this->con->consultaSimple($sql);
			}
			public function edit(){
				$sql="UPDATE Sim SET Numero = '{$this->Numero}',Imei = '{$this->Imei}',Tipo = '{$this->Tipo}',
				Estado = '{$this->Estado}',Referencia_ID = '{$this->Referencia_ID}',Plan_ID = '{$this->Plan_ID}' WHERE ID_Sim = '{$this->id}'";
				$this->con->consultaSimple($sql);

				$sql="UPDATE Linea SET Plan_ID = '{$this->Plan_ID}' WHERE Sim_ID = '{$this->id}'";
				$this->con->consultaSimple($sql);


			$sqlu="SELECT ID_User FROM User WHERE User = '{$this->User_ID}'";
			$datou = $this->con->consultaRetorno($sqlu);
			$ram = mysqli_fetch_array($datou);
			$user = $ram['ID_User'];
			$var=1; 	
					$sql="INSERT INTO Historial (Sim_ID,Linea_ID,Equipo_ID,Plan_ID,User_ID,Entidad,Comentario,Fecha)
					VALUES('{$this->id}',$var,$var,$var,$user,'Linea','{$this->Comentario}',NOW())";
				    $this->con->consultaSimple($sql);
			}
			public function view(){
			    $sql="SELECT t1.*, 
			t2.Nombre AS plan ,
			t3.Referencia AS referencia
		    FROM Sim t1
			LEFT JOIN Plan t2 ON t1.Plan_ID = t2.ID_Plan
			LEFT JOIN Referencia t3 ON t1.Referencia_ID = t3.ID_Referencia WHERE ID_Sim = '{$this->id}'";
				$datos = $this->con->consultaRetorno($sql);
				$row = mysqli_fetch_assoc($datos);
				return $row;	
			}
			public function bus(){
			    $sql2="SELECT * FROM Sim WHERE Numero = '{$this->Numero}'";
				$dato = $this->con->consultaRetorno($sql2);
				$num = mysqli_num_rows($dato);
				if ($num != 0) {
				$sql="SELECT * FROM Sim WHERE Numero = '{$this->Numero}'";
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