<?php namespace Models;

	//include_once("Conexion.php");
	 class Linea{
	 	private $id;
	 	private $Linea;
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
			t2.Nombre AS plan,
			t3.Marca AS equipo,
			t4.Area AS area,
			t5.Organismo AS organismo,
			t6.User AS user,
			t7.Numero AS numero
		    FROM Linea t1
			LEFT JOIN Plan t2 ON t1.Plan_ID = t2.ID_Plan
			LEFT JOIN Equipo t3 ON t1.Equipo_ID = t3.ID_Equipo 
			LEFT JOIN Area t4 ON t1.Area_ID = t4.ID_Area 
			LEFT JOIN Organismo t5 ON t1.Organismo_ID = t5.ID_Organismo 
			LEFT JOIN User t6 ON t1.User_ID = t6.ID_User
			LEFT JOIN Sim t7 ON t1.Sim_ID = t7.ID_Sim
			WHERE ID_Linea != 1
			Order By ID_Linea DESC";
				$resultado = $this->con->consultaRetorno($sql);
				return $resultado;
			}
			public function add(){



						$this->pregunta;
				if ($this->pregunta != 4) {
				 				
//consulta el usuario que esta cargado el registro de linea
	 			$sqlu="SELECT ID_User FROM User WHERE User = '{$this->User_ID}'";
				$datou = $this->con->consultaRetorno($sqlu);
				$ram = mysqli_fetch_array($datou);
				$user = $ram['ID_User']; 		

																			/*
															cargar la base de plan con el plan que le corresponde a la linea
															$sqlp="INSERT INTO Plan (Minutos,Datos,Sms,Cobertura,Costo,Fecha,User_ID)
															VALUES('{$this->Minutos}','{$this->Datos}','{$this->Sms}','{$this->Cobertura}','{$this->Costo}',NOW(),$user)";
															$this->con->consultaSimple($sqlp);	
															$sql1="SELECT max(ID_Plan) idp FROM Plan";
															$datop = $this->con->consultaRetorno($sql1);
															$rpm = mysqli_fetch_array($datop);
															$this->ultimop= $rpm['idp'];
															$ultimop = $this->ultimop;
															//carga la base de equipo con el equipo que tiene esta linea
															$sqle="INSERT INTO Equipo (Marca,Tipo,Modelo,Imei,Fecha,User_ID)
															VALUES('{$this->Marca}','{$this->Tipo}','{$this->Modelo}','{$this->Imei}',NOW(),$user)";
															$this->con->consultaSimple($sqle);	
															$sql2="SELECT max(ID_Equipo) ide FROM Equipo";
															$datoe = $this->con->consultaRetorno($sql2);
															$rem = mysqli_fetch_array($datoe);
															$this->ultimoe= $rem['ide'];
															$ultimoe = $this->ultimoe;
																			*/
				
				if ($this->pregunta== 1) {
				 $ultimoe ='1';
				 $ultimos =$this->Sim_ID;
				}else{

						 if ($this->pregunta== 2) {
						 $ultimoe = $this->Equipo_ID;
						 $ultimos = '1';
						 $sqleq="UPDATE Equipo SET Estado = 'Asignado' WHERE ID_Equipo = '{$this->Equipo_ID}'";
						 $this->con->consultaSimple($sqleq);
						 }else{

								 if ($this->pregunta== 3) {
								 $ultimoe = $this->Equipo_ID;
								 $ultimos = $this->Sim_ID;
								 $sqleq="UPDATE Equipo SET Estado = 'Asignado' WHERE ID_Equipo = '{$this->Equipo_ID}'";
								 $this->con->consultaSimple($sqleq);
								}
						 }



				}
							
				if ($this->pregunta== 3 OR $this->pregunta== 1 ) {
						
				//consulta el el plan de la sim para cargarlo en la linea
	 			$sqlip="SELECT Plan_ID FROM Sim WHERE ID_Sim = '{$this->Sim_ID}'";
				$datoip = $this->con->consultaRetorno($sqlip);
				$ripm = mysqli_fetch_array($datoip);
				$iplan = $ripm['Plan_ID'];

				$sqlp="SELECT ID_Plan FROM Plan WHERE ID_Plan = $iplan";
				$datop = $this->con->consultaRetorno($sqlp);
				$rpm = mysqli_fetch_array($datop);
				$plan = $rpm['ID_Plan'];


			    $sqles="UPDATE Sim SET Estado = 'Asignado' WHERE ID_Sim = '{$this->Sim_ID}'";
				$this->con->consultaSimple($sqles);
				}else{

					$plan='1';
				}


				//cargar la base de lineas echo "sqlineas" . 
				$sql="INSERT INTO Linea (Sim_ID, Usuario, Funcion, Organismo_ID, Area_ID, Plan_ID, Equipo_ID,Fecha,User_ID)
				VALUES('$ultimos', '{$this->Usuario}','{$this->Funcion}', '{$this->Organismo_ID}', '{$this->Area_ID}','$plan','$ultimoe',NOW(),'$user')";
			    $this->con->consultaSimple($sql);


				?><script> apprise('Se Cargo Correctamente El Registro.', {'textOk':'OK'}); </script><?php

				}else{
				
					?><script> apprise('Error: No se Puede Cargar Un Registro Que No tenga Asiganda Una Linea o Un Equipo.', {'textOk':'OK'}); </script><?php


				}
					
				 
			}
			public function delete(){
				$sql="DELETE FROM Linea WHERE ID_Area = '{$this->id}'";
				$this->con->consultaSimple($sql);
			}
			public function editplan(){
				$sql="UPDATE Plan SET Minutos = '{$this->Minutos}',Datos = '{$this->Datos}',Sms = '{$this->Sms}',
				Cobertura = '{$this->Cobertura}',Costo = '{$this->Costo}' WHERE ID_Plan = '{$this->id}'";
				$this->con->consultaSimple($sql);
			}
			//edita el estado de la sim lo cambia a Activo o Baja 
			public function editsim(){
				$sqlu="SELECT ID_User FROM User WHERE User = '{$this->User_ID}'";
				$datou = $this->con->consultaRetorno($sqlu);
				$ram = mysqli_fetch_array($datou);
				$user = $ram['ID_User']; 

				$sql="UPDATE Sim SET Estado = '{$this->Estado}',Fecha = NOW() ,User_ID = '$user'  WHERE ID_Sim = '{$this->id}'";
				$this->con->consultaSimple($sql);

				$sql="UPDATE Linea SET Sim_ID = '1' , Plan_ID = '1' WHERE ID_Linea = '{$this->idlinea}'";
				$this->con->consultaSimple($sql);

				$var=1; 	
				$sql="INSERT INTO Historial (Sim_ID,Linea_ID,Equipo_ID,Plan_ID,User_ID,Entidad,Comentario,Fecha)
				VALUES('{$this->id}',$var,$var,$var,$user,'Linea','{$this->Comentario}',NOW())";
			    $this->con->consultaSimple($sql);
			}				
			//edita el estado de la sim lo cambia a Activo o Baja 
			    public function asignarsim(){
				$sqlu="SELECT ID_User FROM User WHERE User = '{$this->User_ID}'";
				$datou = $this->con->consultaRetorno($sqlu);
				$ram = mysqli_fetch_array($datou);
				$user = $ram['ID_User']; 

				$sql="UPDATE Sim SET Estado = 'Asignado',Fecha = NOW() ,User_ID = '$user'  WHERE ID_Sim = '{$this->Sim_ID}'";
				$this->con->consultaSimple($sql);

				$sqlpp="SELECT Plan_ID FROM Sim WHERE ID_Sim = '{$this->Sim_ID}'";
				$datopp = $this->con->consultaRetorno($sqlpp);
				$ramp = mysqli_fetch_array($datopp);
				$plan = $ramp['Plan_ID']; 



				$sql="UPDATE Linea SET Sim_ID = '{$this->Sim_ID}', Plan_ID = '$plan' WHERE ID_Linea = '{$this->idlinea}'";
				$this->con->consultaSimple($sql);

			}				
			//edita el estado de la sim lo cambia a Activo o Baja 
			public function asignarequipo(){
				$sqlu="SELECT ID_User FROM User WHERE User = '{$this->User_ID}'";
				$datou = $this->con->consultaRetorno($sqlu);
				$ram = mysqli_fetch_array($datou);
				$user = $ram['ID_User']; 

				$sql="UPDATE Equipo SET Estado = 'Asignado',Fecha = NOW() ,User_ID = '$user'  WHERE ID_Equipo = '{$this->Equipo_ID}'";
				$this->con->consultaSimple($sql);

				$sql="UPDATE Linea SET Equipo_ID = '{$this->Equipo_ID}' WHERE ID_Linea = '{$this->idlinea}'";
				$this->con->consultaSimple($sql);

			}	
			public function editequipo(){
				$sqlu="SELECT ID_User FROM User WHERE User = '{$this->User_ID}'";
				$datou = $this->con->consultaRetorno($sqlu);
				$ram = mysqli_fetch_array($datou);
				$user = $ram['ID_User']; 

				$sql="UPDATE Equipo SET Estado = '{$this->Estado}',Fecha = NOW() ,User_ID = '$user'  WHERE ID_Equipo = '{$this->id}'";
				$this->con->consultaSimple($sql);

				$sql="UPDATE Linea SET Equipo_ID = '1' WHERE ID_Linea = '{$this->idlinea}'";
				$this->con->consultaSimple($sql);

			    $var=1; 	
				$sql="INSERT INTO Historial (Sim_ID,Linea_ID,Equipo_ID,Plan_ID,User_ID,Entidad,Comentario,Fecha)
				VALUES($var,$var,'{$this->id}',$var,$user,'Equipo','{$this->Comentario}',NOW())";
			    $this->con->consultaSimple($sql);
			}
			public function edit(){
				$sql="UPDATE Linea SET Usuario = '{$this->Usuario}', Funcion = '{$this->Funcion}', Organismo_ID = '{$this->Organismo_ID}', Area_ID = '{$this->Area_ID}' WHERE ID_Linea = '{$this->id}'";
				$this->con->consultaSimple($sql);

					$sqlu="SELECT ID_User FROM User WHERE User = '{$this->User_ID}'";
					$datou = $this->con->consultaRetorno($sqlu);
					$ram = mysqli_fetch_array($datou);
					$user = $ram['ID_User']; 	
				    $var=1; 	
					$sql="INSERT INTO Historial (Sim_ID,Linea_ID,Equipo_ID,Plan_ID,User_ID,Entidad,Comentario,Fecha)
					VALUES($var,'{$this->id}',$var,$var,$user,'Usuario','{$this->Comentario}',NOW())";
				    $this->con->consultaSimple($sql);
			}
			public function view(){
			     $sql="SELECT t1.*, 
			t2.Nombre AS plan,
			t3.Marca AS equipo,
			t4.Area AS area,
			t5.Organismo AS organismo,
			t6.User AS user,
			t7.Numero AS numero
		    FROM Linea t1
			LEFT JOIN Plan t2 ON t1.Plan_ID = t2.ID_Plan
			LEFT JOIN Equipo t3 ON t1.Equipo_ID = t3.ID_Equipo 
			LEFT JOIN Area t4 ON t1.Area_ID = t4.ID_Area 
			LEFT JOIN Organismo t5 ON t1.Organismo_ID = t5.ID_Organismo 
			LEFT JOIN User t6 ON t1.User_ID = t6.ID_User
			LEFT JOIN Sim t7 ON t1.Sim_ID = t7.ID_Sim
			WHERE ID_Linea='{$this->id}'
			Order By ID_Linea DESC";
				$datos = $this->con->consultaRetorno($sql);
				$row = mysqli_fetch_assoc($datos);
				return $row;


				/*
				ANTES QUe simplefique la busqueda 
				SELECT * FROM Linea l
			LEFT JOIN Sim s ON s.ID_Sim=l.Sim_ID
			LEFT JOIN Plan p ON p.ID_Plan=l.Plan_ID
			LEFT JOIN Equipo e ON e.ID_Equipo=l.Equipo_ID
			LEFT JOIN Organismo o ON o.ID_Organismo=l.Organismo_ID
			LEFT JOIN Area a ON a.ID_Area=l.Area_ID
			WHERE ID_Linea='{$this->id}'

				 */	
			}
			//sql de plan	
			/*
			public function viendoplan(){
		    $sql="SELECT t1.*, 
			t2.Referencia AS referencia,
			t2.Periodo AS periodo
		    FROM Plan t1
			LEFT JOIN Referencia t2 ON t1.Referencia_ID = t2.ID_Referencia
			WHERE ID_Plan='{$this->id}' AND ID_Plan != 1
			Order By ID_Plan DESC";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;	
		    }*/
			public function viendoplan(){
		    $sql="SELECT * FROM Plan WHERE ID_Plan='{$this->id}' AND ID_Plan != 1
			Order By ID_Plan DESC";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;	
		    }




		    //sql de sim	
			public function viendosim(){
		    $sql="SELECT t1.*, 
			t2.Referencia AS referencia,
			t2.Periodo AS periodo
		    FROM Sim t1
			LEFT JOIN Referencia t2 ON t1.Referencia_ID = t2.ID_Referencia
			WHERE ID_Sim='{$this->id}' AND ID_Sim != 1
			Order By ID_Sim DESC";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;	
		    }	
		    //sql de editar sim para mostrar los datos antes de modificar EDITARSIM
			public function viendoeditarsim(){
		    $sql="SELECT t1.*, 
			t2.Referencia AS referencia,
			t2.Periodo AS periodo
		    FROM Sim t1
			LEFT JOIN Referencia t2 ON t1.Referencia_ID = t2.ID_Referencia
			WHERE ID_Sim='{$this->id}'
			Order By ID_Sim DESC";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		    }				    
		    //sql de editar sim para mostrar los datos antes de modificar EDITARSIM
			public function viendoeditarequipo(){
		    $sql="SELECT * FROM Equipo WHERE ID_Equipo='{$this->id}'";
			$datos = $this->con->consultaRetorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		    }			
		    //sql de Equipo	
			public function viendoequipo(){
		    $sql="SELECT * FROM Equipo WHERE ID_Equipo='{$this->id}'";
			$datos = $this->con->consultaRetorno($sql);
			return $datos;	
		    }		

	   
		    public function viendohistorial(){
		    $sqlt="SELECT Sim_ID, Equipo_ID, Plan_ID From Linea Where ID_Linea = '{$this->id}'";
			$datost = $this->con->consultaRetorno($sqlt);
			$ram = mysqli_fetch_array($datost);
			$sim=$ram['Sim_ID'];
			$equipo=$ram['Equipo_ID'];
			$plan=$ram['Plan_ID'];
			$linea = $this->id; 
			$ban=0;
			$va=" ";
			if ($sim != 1) {
				$va = "Sim_ID =  $sim " ;
				$ban=1;
			}
			if ($equipo!=1) {
				if ($ban==1) {
					$va .= " OR Equipo_ID = $equipo "     ;
				}else{
					$va = " Equipo_ID = $equipo ";
					$ban=1;
				}
			}			
			if ($plan!=1) {
				if ($ban==1) {
					$va .= " OR Plan_ID = $plan ";
				}else{
					$va = " Plan_ID = $plan ";
					$ban=1;
				}
			}	
			if ($linea!=1) {
				if ($ban==1) {
					$va .= " OR Linea_ID = $linea ";
				}else{
					$va = " Linea_ID = $linea ";
					$ban=1;
				}
			}
		    $sqlc="SELECT Comentario, Entidad, Fecha From Historial WHERE $va ORDER BY Fecha DESC";
			$datosc = $this->con->consultaRetorno($sqlc);
			return $datosc;

		    }	

			public function bus(){
			   $sql2="SELECT * FROM Linea WHERE Dni = '{$this->Dni}'";
				$dato = $this->con->consultaRetorno($sql2);
				$num = mysqli_num_rows($dato);
				if ($num != 0) {
				$sql="SELECT * FROM Linea WHERE Dni = '{$this->Dni}'";
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