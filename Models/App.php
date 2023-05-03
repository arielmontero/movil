<?php namespace Models;

//include_once("Conexion.php");
 class App{
 	private $id;
 	private $App;
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
			$sql= "SELECT * FROM App";
			$resultado = $this->con->consultaRetorno($sql);
			return $resultado;
		}

		public function add(){
				$sql="INSERT INTO App (App)
				VALUES('{$this->App}')";
			    $this->con->consultaSimple($sql);				 
		}

		public function delete(){
			//echo "App: " . $this->id;
			$sql="DELETE FROM App WHERE ID_App = '{$this->id}'";
			$this->con->consultaSimple($sql);
		}

		public function edit(){
	//echo "promedio: " . $this->promedio;
	$sql="UPDATE App SET App = '{$this->App}' WHERE ID_App = '{$this->id}'";
	//echo "sql: " . $sql;
	$this->con->consultaSimple($sql);
		}

		public function view(){

		    $sql="SELECT * FROM App WHERE ID_App = '{$this->id}'";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;	
		}
		
		public function bus(){
		    $sql2="SELECT * FROM App WHERE App = '{$this->App}'";
			$dato = $this->con->consultaRetorno($sql2);
			$num = mysqli_num_rows($dato);
			if ($num != 0) {
			$sql="SELECT * FROM App WHERE App = '{$this->App}'";
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