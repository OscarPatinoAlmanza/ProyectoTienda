<?php  
	class Conexion 
	{
		public function conectar()
		{
			$conn = new mysqli('localhost','root','Memo310894','tienda');
			if ($conn->connect_error) {
				die("Fallo: ". $conn->connect_error);
			}
			return $conn;
		}
	}
?>
