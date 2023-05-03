<?php namespace Models;

//include_once("Conexion.php");
 class User{
 	private $id;
 	private $User;
 	private $ClaveActual;
 	private $Clave;
 	private $Clave2;
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

		public function listar(){
			$sql= "SELECT * FROM User";
			$resultado = $this->con->consultaRetorno($sql);
			return $resultado;
		}

		public function add(){
			$Clave=md5($this->Clave);
				//echo "User: " . $_POST['User'];
				$sql="INSERT INTO User (User, Clave, Estado)
				VALUES('{$this->User}', '$Clave','{$this->Estado}')";
			    $this->con->consultaSimple($sql);				 
		}

		public function delete(){
			//echo "User: " . $this->id;
			$sql="DELETE FROM User WHERE ID_User = '{$this->id}'";
			$this->con->consultaSimple($sql);
		}

		public function edit(){
	//echo "promedio: " . $this->promedio;
	$sql="UPDATE User SET User = '{$this->User}',  Clave = '{$this->Clave}', Estado = '{$this->Estado}' WHERE ID_User = '{$this->id}'";
	//echo "sql: " . $sql;
	$this->con->consultaSimple($sql);
		}
		public function security(){
			$ClaveActual=md5($this->ClaveActual);
	$sqlu="SELECT ID_User  FROM User where User =  '{$this->User}' AND Clave = '$ClaveActual'"; 	
	$datou = $this->con->consultaRetorno($sqlu);
	$ram = mysqli_fetch_array($datou);
	$User = $ram['ID_User']; 
	//echo "sqlu: " . $sqlu;
	//echo "promedio: " . $this->promedio;
	$sql="UPDATE User SET  Clave = '{$this->Clave}' WHERE ID_User = '$User'";
	//echo "sql: " . $sql;
	$this->con->consultaSimple($sql);
		}

		public function view(){

		    $sql="SELECT * FROM User WHERE ID_User = '{$this->id}'";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;	
		}
		
		public function bus(){
		    $sql2="SELECT * FROM User WHERE User = '{$this->User}'";
			$dato = $this->con->consultaRetorno($sql2);
			$num = mysqli_num_rows($dato);
			if ($num != 0) {
			$sql="SELECT * FROM User WHERE User = '{$this->User}'";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
			}else{
				$num=0;
				return $num;

			}
	
		}
				public function bleach(){

		    $sqlb="SELECT * FROM User WHERE ID_User = '{$this->id}'";
			$datou = $this->con->consultaRetorno($sqlb);
			$ram = mysqli_fetch_array($datou);
			$User = $ram['User']; 	
			$User=md5($User);
			$sql="UPDATE User SET  Clave = '$User' WHERE ID_User = '{$this->id}'";
		    $this->con->consultaSimple($sql);
		    header("Location: " . URL);	
		}
		
}
?>