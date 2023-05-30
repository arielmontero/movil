<?php namespace Config;
class Enrutador{
	public static function run(Request $request){
				$controlador= $request->getControlador() . "Controller";
				$ruta= ROOT . "Controllers" . DS . $controlador . ".php";
				$metodo = $request->getMetodo();
				if ($metodo == "index.php") {
					$metodo = "index";
				}
				$argumento = $request->getArgumento();
				if (is_readable($ruta)) {
					require_once $ruta;
					$mostrar = "Controllers\\" . $controlador;
					$controlador = new $mostrar;
					if (!isset($argumento)) {
						$datos = call_user_func(array($controlador, $metodo));
					}else{
						$datos = call_user_func_array(array($controlador, $metodo), $argumento);
					}
				}
				$ruta = ROOT . "Views" . DS . $request->getControlador() . DS . $request->getMetodo()  . ".php";
				if (is_readable($ruta)) {
					require_once $ruta;
				}else{
					print "no se encontro la ruta";
				}
				//print  $ruta;
	}
}

					/*
			
					if (isset($_GET['url'])){
							$url=filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
							$url=explode('/', $url);
							$url=array_filter($url);
							print_r($url);
						}
				 */
				

?>