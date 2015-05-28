<?php  
	require('../Modelo/usuario_class.php');

	$correo = $_POST['mail'];
	$usuario = $_POST['usuario'];
	$pass = $_POST['pass'];
	$nombre = $_POST['nombre'];
	$apepat = $_POST['apepat'];
	$apemat = $_POST['apemat'];
	$edad = $_POST['edad'];
	$dir = $_POST['dir'];
	$tel = $_POST['tel'];

	$objUsuario = new Usuario($correo,$usuario,$pass,$nombre,$apepat,$apemat,$edad,$dir,$tel);
	$objUsuario -> insertarUsuario();
	/*
	header("Location: ../Vista/bienvenida.php");
	die();
	*/
?>