

<?php 
		function conexion(){
			$servidor="localhost";
			$usuario="root";
			$password="";
			$bd="control_escolar";

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}
		

 ?>