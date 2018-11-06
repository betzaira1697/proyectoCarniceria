<?php include("conexion.php");

	session_start();

	if (isset($_SESSION["autentificado"])) {

		

	}else{

		header("Location: login.php");

	}

?>