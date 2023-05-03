<?php namespace Models;

	//include_once("Conexion.php");
	 class Equipo{
	 	private $id;
	 	private $Equipo;
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
				$sql= "SELECT * FROM Equipo WHERE ID_Equipo != 1";
				$resultado = $this->con->consultaRetorno($sql);
				return $resultado;
			}
			//funcion para que liste los equipos activos para crear una linea modelo LINEA
			public function listarActivos(){
				$sql= "SELECT * FROM Equipo Where Estado='Disponible'";
				$resultado = $this->con->consultaRetorno($sql);
				return $resultado;
			}	
			public function add(){
			$sqlu="SELECT ID_User FROM User WHERE User = '{$this->User_ID}'";
			$datou = $this->con->consultaRetorno($sqlu);
			$ram = mysqli_fetch_array($datou);
			$user = $ram['ID_User']; 	

			$sql2="SELECT Imei FROM Equipo WHERE Imei = '{$this->Imei}'";
				$dato = $this->con->consultaRetorno($sql2);
				$num = mysqli_num_rows($dato);
				if ($num != 0) {
					?>
			<script> apprise('ERRO: El Imei de el Equipo ya se encuentra Cargado , verifique el Imei e intente nuevamente.', {'textOk':'OK'}); </script><?php
				}else{
			$sql="INSERT INTO Equipo (Marca,Tipo,Modelo,Imei,Estado,Fecha,User_ID)
					VALUES('{$this->Marca}','{$this->Tipo}','{$this->Modelo}','{$this->Imei}','Disponible',NOW(),$user)";
				    $this->con->consultaSimple($sql);	
				?><script> apprise('El Equipo se Creo Correctamente.', {'textOk':'OK'}); </script><?php
			    }

			}
			public function delete(){
				$sql="DELETE FROM Equipo WHERE ID_Equipo = '{$this->id}'";
				$this->con->consultaSimple($sql);
			}
			public function edit(){
				$sql="UPDATE Equipo SET Marca = '{$this->Marca}',Tipo = '{$this->Tipo}',Modelo = '{$this->Modelo}',
				Imei = '{$this->Imei}',	Estado = '{$this->Estado}' WHERE ID_Equipo = '{$this->id}'";
				$this->con->consultaSimple($sql);

			$sqlu="SELECT ID_User FROM User WHERE User = '{$this->User_ID}'";
			$datou = $this->con->consultaRetorno($sqlu);
			$ram = mysqli_fetch_array($datou);
			$user = $ram['ID_User']; 	
			$var=1; 	
					$sql="INSERT INTO Historial (Sim_ID,Linea_ID,Equipo_ID,Plan_ID,User_ID,Entidad,Comentario,Fecha)
					VALUES($var,$var,'{$this->id}',$var,$user,'Equipo','{$this->Comentario}',NOW())";
				    $this->con->consultaSimple($sql);
			}
			public function view(){
			    $sql="SELECT * FROM Equipo WHERE ID_Equipo = '{$this->id}'";
				$datos = $this->con->consultaRetorno($sql);
				$row = mysqli_fetch_assoc($datos);
				return $row;	
			}
			public function bus(){
			    $sql2="SELECT * FROM Equipo WHERE Dni = '{$this->Dni}'";
				$dato = $this->con->consultaRetorno($sql2);
				$num = mysqli_num_rows($dato);
				if ($num != 0) {
				$sql="SELECT * FROM Equipo WHERE Dni = '{$this->Dni}'";
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