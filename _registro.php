<?php include("conexion.php"); 

	if(isset($_POST[""])){

		echo "Datos Vacios";
	}else{

		$add="INSERT INTO clientes(ap_cliente, am_cliente, nom_cliente, login, psw, correo) VALUES
		('".$_POST["txt_ap"]."',
		 '".$_POST["txt_am"]."',
		  '".$_POST["txt_nom"]."',
		   '".$_POST["txt_user"]."',
		    '".$_POST["txt_psw"]."',
		     '".$_POST["txt_correo"]."');";

		$result=$db->query($add);

		if ($result) {
			header("Location: login.php");
			
		}else{
			echo "Error al Registrar el Cliente.!";
		}
	}

?>