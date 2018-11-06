<?php include("conexion.php");
	
		session_start();
		
		$add="INSERT INTO pedidos(fecha_pedido, fecha_entrega_pedido, total_pedido, anticipo_pedido, id_cliente, domicilio_entrega_pedido, referencia_pedido, recibe_pedido, id_empleado, id_empleado_entrega, id_estatus_pedido) VALUES
		(NOW(),
		'".$_POST["txt_fecha_ent"]."',
		'".$_SESSION["total"]."',
		'".$_POST["txt_ant"]."',
		'".$_SESSION["id_cliente_1"]."',
		'".$_POST["txt_dom"]."',
		'".$_POST["txt_ref"]."',
		'".$_POST["txt_rec"]."',
		'1',
		'1',
		'1');";

		$res = $db->query($add);

		if ($res) {
			
			$con="SELECT MAX(id_pedido) AS id 
			FROM pedidos 
			WHERE id_cliente = ".$_SESSION["id_cliente_1"].";";

			$respuesta=$db->query($con);
			$obj=mysqli_fetch_object($respuesta);

			for ($i=1; $i <= $_SESSION["indice"]; $i++) { 
				
				$add_p="INSERT INTO rel_pedidos(id_pedido, id_arreglo, cantidad, precio) 
				VALUES(".$obj->id.", 
				".$_SESSION["carrito"][$i][1].", 
				".$_SESSION["carrito"][$i][4].", 
				".$_SESSION["carrito"][$i][3].");";

				$res_1=$db->query($add_p);

			}

			header('Location: catalogo.php');
			$_SESSION["indice"]=0;

		}

	

?>