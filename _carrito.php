<?php

	session_start();

	if (isset($_GET["pedido"])) {
		
		if (!isset($_SESSION["carrito"])) {
			
			$_SESSION["carrito"][][] = array();

			$_SESSION["indice"]=0;

		}else{

			    if (isset($_GET["id_producto"])) {
				    $rep=0;
				     for ($i=1; $i <= $_SESSION["indice"]; $i++) { 

				        if ($_GET["id_producto"]==$_SESSION["carrito"][$i][1]) {
				          $rep=1;

							$_SESSION["carrito"][$i][4]++;

				        }
				        
				      }
				    }
				    if ($rep==0) {
				    	$_SESSION["indice"]++;
						$_SESSION["carrito"][$_SESSION["indice"]][1]=$_GET["id_producto"];
						$_SESSION["carrito"][$_SESSION["indice"]][2]=$_GET["nom_producto"];
						$_SESSION["carrito"][$_SESSION["indice"]][3]=$_GET["precio"];
						$_SESSION["carrito"][$_SESSION["indice"]][4]=$_GET["cantidad"];
				   	 }


			

			header('Location: pedidos.php');
			
			
			
		}

	}

?>