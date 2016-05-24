<?php 
	function conectar() {
		$host = "localhost";
		$usuario = "root";
		$pass = "";
		$db = "reysap";

		$conexion = mysqli_connect($host, $usuario, $pass);
		if(!$conexion) {
			echo "Error de conexion con el servidor";
			exit();
		}
		$conexion_base = mysqli_select_db($conexcion, $db);
		if(!$conexion_base) {
			echo "Error de conexion con la base de datos";
			exit();
		}
		return ($conexcion);
	}
?>