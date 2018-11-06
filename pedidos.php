<?php session_start();

  if (isset($_GET["eliminar"])) {
    $bandera=0;
     for ($i=1; $i <= $_SESSION["indice"]; $i++) { 

        if ($_GET["id"]==$_SESSION["carrito"][$i][1]) {
          $bandera=1;
        }
        if ($bandera==1 and $i != $_SESSION["indice"]) {
          $_SESSION["carrito"][$i][1]=$_SESSION["carrito"][$i+1][1];
          $_SESSION["carrito"][$i][2]=$_SESSION["carrito"][$i+1][2];
          $_SESSION["carrito"][$i][3]=$_SESSION["carrito"][$i+1][3];
          $_SESSION["carrito"][$i][4]=$_SESSION["carrito"][$i+1][4];

        }

    }

    $_SESSION["indice"]--;

    header('Location: pedidos.php');
  }


 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Pedidos</title>
	<meta charset="utf-8">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<meta name="description" content="Your description">
	<meta name="keywords" content="Your keywords">
	<meta name="author" content="Your name">
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/superfish.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>	
	<script src="js/forms.js"></script>
	<script>		
   jQuery(window).load(function() {	
    jQuery('.spinner').animate({'opacity':0},1000,'easeOutCubic',function (){jQuery(this).css('display','none')});	
   });			
	</script>

	<!--[if lt IE 8]>
  		<div style='text-align:center'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/img/upgrade.jpg"border="0"alt=""/></a></div>  
 	<![endif]-->
	<!--[if (gt IE 9)|!(IE)]><!-->
	<!--<![endif]-->
	<!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> 
    <link rel="stylesheet" href="css/ie.css" type="text/css" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
  <![endif]-->
	</head>

	<body>
<div class="spinner"></div>
<!--============================== header =================================-->
<header>
      <div class="container clearfix">
    <div class="row">
          <div class="span12">
        
            <?php include("menu.php"); ?>

      </div>
        </div>
  </div>
    </header>
<div class="bg-content"> 
      <!--============================== content =================================-->
      <div id="content"><div class="ic">More Website Templates @ TemplateMonster.com. November19, 2012!</div>
    <div class="container">
          <div class="row">
        <article class="span8">
              <h3>Mi Pedido</h3>
              <div class="inner-1">
            <form id="contact-form" method="POST" action="login.php">

              <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Arreglo</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Monto</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>

              <?php

              $total_monto=0;

              for ($i=1; $i <= $_SESSION["indice"]; $i++) { 
                //tr es para renglones.
                echo '<tr>
                  <td>'.$_SESSION["carrito"][$i][1].'</td>
                  <td>'.$_SESSION["carrito"][$i][2].'</td>
                  <td>'.$_SESSION["carrito"][$i][3].'</td>
                  <td>'.$_SESSION["carrito"][$i][4].'</td>
                  <td>'.number_format(($_SESSION["carrito"][$i][4]*$_SESSION["carrito"][$i][3]),2).'</td>
                  <td> <a href="pedidos.php?eliminar=1&id='.$_SESSION["carrito"][$i][1].'">Eliminar </a></td>
                </tr>';

                
              $total_monto+=($_SESSION["carrito"][$i][4]*$_SESSION["carrito"][$i][3]);

              }

              echo ' <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>Total</td>
                      <td>$'.number_format($total_monto,2).'</td>
                      <td></td>
                    </tr>';

                    $_SESSION["total"]=number_format($total_monto,2);

                ?>
     
            </tbody>
          </table>

                <a href="#" onClick="document.getElementById('contact-form').submit()" class="btn btn-1 ">Terminar</a>
                 <a href="phpmailer.php" onClick="document.getElementById('contact-form').submit()" class="btn btn-1 ">Agregar Mas Productos</a>
                <a href="_carrito_vaciar.php" class="btn btn-1">Vaciar Carrito</a>

                </form>
          </div>
            </article>
        <article class="span4">
              
          </div>
              
            </article>
      </div>
        </div>
  </div>
    </div>

<!--============================== footer =================================-->
<footer>
      <div class="container clearfix">
    <ul class="list-social pull-right">
          <li><a class="icon-1" href="#"></a></li>
          <li><a class="icon-2" href="#"></a></li>
          <li><a class="icon-3" href="#"></a></li>
          <li><a class="icon-4" href="#"></a></li>
        </ul>
    <div class="privacy pull-left">Website Template designed by <a href="http://www.templatemonster.com/" target="_blank" rel="nofollow">TemplateMonster.com</a> </div>
  </div>
    </footer>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>