<?php 
	require('conexion_class.php');
	/**
	* 
	*/
	class Usuario
	{
		private $usuario;
		private $correo;
		private $nombre;
		private $apepat;
		private $apemat;
		private $dir;
		private $tel;
		private $pass;
		private $edad;
		private $conn;

		function __construct($correo,$usuario,$pass,$nombre,$apepat,$apemat,$edad,$dir,$tel)
		{
			$this->correo = $correo;
			$this->usuario = $usuario;
			$this->pass = $pass;
			$this->nombre = $nombre;
			$this->apepat = $apepat;
			$this->apemat = $apemat;
			$this->edad = $edad;
			$this->dir = $dir;
			$this->tel = $tel;

			$objConexion = new Conexion();
			$this->conn = $objConexion->conectar();
		}

		public function insertarUsuario()
		{
			$qry_usuario = "CALL registro('".$this->usuario."',
				'".$this->nombre."',
				'".$this->apepat."',
				'".$this->apemat."',
				'".$this->edad."',
				'".$this->correo."',
				'".$this->tel."',
				'".$this->pass."',
				'".$this->dir."',1)";

			$msg_correo = "Gracias ".$this->nombre." por registrarte en nuestra pagina!";
			$msg_correo = wordwrap($msg_correo,20);


			if ($this->conn->query($qry_usuario) === TRUE) {
				mail("oscarp1113@gmail.com", "Registro pagina.", $msg_correo);
				header("Location: ../Vista/bienvenida.php");
				die();			
			}
			else{
				echo "ERROR: ". $qry_usuario . $conn->error;
			}
		}
	}
?>