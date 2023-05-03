<?php namespace Models;

//include_once("Conexion.php");
 class Permiso{
 	private $id;
 	private $us;
 	private $per;
 	private $User;
 	private $App;
 	private $idApp;

 	
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
			  $sql= "SELECT t1.*, 
			  t2.User AS user,
			  t3.App AS app
			  FROM Permiso t1 
			  LEFT JOIN User t2 ON t1.User_ID = t2.ID_User
			  LEFT JOIN App t3 ON t1.App_ID = t3.ID_App  ORDER BY User ASC";
			  $datos = $this->con->consultaRetorno($sql);
			  return $datos;

		}

		public function add(){

				$sql="INSERT INTO Permiso (User_ID, App_ID)
				VALUES('{$this->User_ID}', '{$this->App_ID}')";
			    $this->con->consultaSimple($sql);				 
		}

		public function delete(){
			//echo "Permiso: " . $this->id;
			$sql="DELETE FROM Permiso WHERE ID_Permiso = '{$this->id}'";
			$this->con->consultaSimple($sql);
		}

		public function edit(){
	//echo "promedio: " . $this->promedio;
	$sql="UPDATE Permiso SET User_ID = '{$this->User_ID}',  App_ID = '{$this->App_ID}' WHERE ID_Permiso = '{$this->id}'";
	//echo "sql: " . $sql;
	$this->con->consultaSimple($sql);
		}

		public function view(){

			  $sql= "SELECT t1.*, 
			  t2.User AS user,
			  t3.App AS app
			  FROM Permiso t1 
			  LEFT JOIN User t2 ON t1.User_ID = t2.ID_User
			  LEFT JOIN App t3 ON t1.App_ID = t3.ID_App WHERE ID_Permiso = '{$this->id}'";
			  $datos = $this->con->consultaRetorno($sql);
			  $row = mysqli_fetch_assoc($datos);
			  return $row;

		}
		
		public function bus(){
		    $sql2="SELECT * FROM Permiso WHERE User_ID = '{$this->User_ID}'";
			$dato = $this->con->consultaRetorno($sql2);
			$num = mysqli_num_rows($dato);
			if ($num != 0) {
			$sql="SELECT * FROM Permiso WHERE User_ID = '{$this->User_ID}'";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
			}else{
				$num=0;
				return $num;
			}
	
		}		
		public function allow(){
		    $sql2="SELECT ID_App FROM App WHERE App = '{$this->per}'";
			$dato = $this->con->consultaRetorno($sql2);
			$row = mysqli_fetch_array($dato);
			$this->idApp= $row['ID_App'];
			$sql="SELECT * FROM Permiso WHERE User_ID = '{$this->us}' AND   App_ID = '{$this->idApp}'";
			$datos = $this->con->consultaRetorno($sql);
			$num = mysqli_num_rows($datos);
			return $num;
		 }		


}
?>