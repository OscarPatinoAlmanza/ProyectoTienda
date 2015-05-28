<?php  
	//require('../Modelo/conexion_class.php');	
	$usuario = $_POST['usuario'];
	$pass = $_POST['pass'];
	echo $usuario;
	echo $pass;
	$servername = 'localhost';
	$username = 'root';
	$password = 'Memo310894';

	//crear conexion
	$conn = mysqli_connect($servername,$username,$password,"tienda");
	//checar conexion 
	if (!$conn) {
		die("conexion fallida.");
	}
	else{
		echo "Conectado.";
		echo "<br>";
	}
	
	$sql = "SELECT `cveUsuario`,`contrasena` FROM `usuario` WHERE `cveUsuario`='".$usuario."' AND `contrasena`='".$pass."'";
	$result = mysqli_query($conn,$sql);

	if (mysqli_num_rows($result) > 0) {

		header("Location: ../Vista/catalogo.php?user=$usuario");
		/*
		//imprimr los datos de cada fila
		while ($row = $result->fetch_assoc()) {
			echo "cveUsuario: " . $row["cveUsuario"];
			echo " - ";
			echo "contrasena: " . $row["contrasena"];
			echo "<br>";
		}
		*/
	} 
	else{
		//si no se encuentran registros de ese usuario
		header("Location: ../Vista/errorLogin.html");
	}
?>