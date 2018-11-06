<?php include("conexion.php");

	session_start();

	if (isset($_POST["usuario"]) and isset($_POST["psw"])) {
		
		$consulta = "SELECT id_cliente, nom_cliente, login, psw FROM clientes WHERE login = '".$_POST["usuario"]."' AND psw = '".$_POST["psw"]."';";

		$result_buscar=$db->query($consulta);

		if ($result_buscar) {

			if (mysqli_num_rows($result_buscar)>0) {

				$obj_buscar=mysqli_fetch_object($result_buscar);
				$_SESSION["autentificado"]="si";
				$_SESSION["nombre_1"]=$obj_buscar->nom_cliente;
				$_SESSION["id_cliente_1"]=$obj_buscar->id_cliente;
				
				header("Location: envios.php");
			
			}else{

				header("Location: login.php?error=1"); //mandar error 

			}
		}

	}else{

		header("Location: 404.html");

	}

?>