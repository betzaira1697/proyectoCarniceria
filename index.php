<?php 
    include("conexion.php");

    session_start();
    $_SESSION["nombre"]="Reyes";

?>


<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Carnes Frias</title>
	<meta charset="utf-8">
	<link rel="icon" href="img/favicon.ico type="image/x-icon">
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<meta name="description" content="Your description">
	<meta name="keywords" content="Your keywords">
	<meta name="author" content="Your name">
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/touchTouch.css" type="text/css" media="screen">
	<link rel="stylesheet" href="css/kwicks-slider.css" type="text/css" media="screen">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/superfish.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/jquery.kwicks-1.5.1.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/touchTouch.jquery.js"></script>
	<script type="text/javascript">if($(window).width()>1024){document.write("<"+"script src='js/jquery.preloader.js'></"+"script>");}	</script>

	<script>
		 jQuery(window).load(function() {
		 $x = $(window).width();
	if($x > 1024)
	{
	jQuery("#content .row").preloader();    }

     jQuery('.magnifier').touchTouch();
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
    </header>
<div class="bg-content">
      <div class="container">
    <div class="row">
          <div class="span12">
        <!--============================== slider =================================-->
        <div class="flexslider">
              <ul class="slides">
            <li> <img src="img/images/arreglos/1.jpg" alt="" > </li>
            <li> <img src="img/images/arreglos/2.jpg" alt="" > </li>
            <li> <img src="img/images/arreglos/3.jpg" alt="" > </li>
            <li> <img src="img/images/arreglos/4.jpg" alt="" > </li>
            <li> <img src="img/images/arreglos/5.jpg" alt="" > </li>
          </ul>
            </div>
        <span id="responsiveFlag"></span>
        <div class="block-slogan">
              <h2>Welcome!</h2>
              <div>
            <p><a href="http://blog.templatemonster.com/free-website-templates/ " target="_blank" class="link-1">Click here</a> for more info about this free website template created by TemplateMonster.com. This is a Bootstrap template that goes with several layout options (for desktop, tablet, smartphone landscape and portrait) to fit all popular screen resolutions. The PSD source files of this template are available for free for the registered members of TemplateMonster.com. Feel free to get them!</p>
          </div>
            </div>
      </div>
        </div>
  </div>

      <!--============================== content =================================-->

      <div id="content" class="content-extra"><div class="ic">More Website Templates @ TemplateMonster.com. November19, 2012!</div>
    <div class="row-1">
          <div class="container">
        <div class="row">
              <ul class="thumbnails thumbnails-1">
            
                <?php 
                       $con="SELECT clave, nombre_producto, precio, producto.foto, nombre_categoria 
                    FROM producto INNER JOIN categorias ON producto.id_categoria = categorias.id_categoria
                  WHERE promocion_arreglo = 's' LIMIT 3";
                       $result =$db->query($con);
                       if ($result)
                        {
                           while ($obj=mysqli_fetch_object($result)) {
                             echo '<li class="span3">
                                <div class="thumbnail thumbnail-1">
                              <h3 class="title-1 extra">'.$obj->nombre_categoria.'</h3>
                              <img  src="img/arreglos/'.$obj->foto.'" alt="">
                              <section> <strong>Producto: '.$obj->nombre_producto.'</strong>
                                    <p>Precio$ '.$obj->precio.'</p>
                                    <a href="#" class="btn btn-1">Comprar</a> </section>
                            </div>
                              </li>';
                         }
                       }
                  
                    ?>


          </ul>
            </div>
      </div>
        </div>
    <div class="container">
          <div class="row">
         <article class="span6">
              <h3>Ofertas</h3>
              <ul class="list-photo">

                <?php 
                       $con="SELECT id,UPPER(produco) as ofertas, imagen
                          FROM ofertas
                          ORDER BY produco";
                       $result =$db->query($con);
                       if ($result)
                        {
                           while ($obj=mysqli_fetch_object($result)) {
                             echo '<li><a href="catalogo.php?id='.$obj->id.'&categoria='.$obj->ofertas.'
                             "><img src="img/categorias/'.$obj->imagen.' "alt="" /></a></li>';
                         }
                       }
                  
                    ?>

        
           
          </ul>
            </article>
        <article class="span6">
              <h3>CATEGORIAS</h3>
              <ul class="list-photo">

                <?php 
                       $con="SELECT id_categoria,UPPER(nom_categoria) as categoria, foto
                          FROM categorias 
                          ORDER BY nom_categoria";
                       $result =$db->query($con);
                       if ($result)
                        {
                           while ($obj=mysqli_fetch_object($result)) {
                             echo '<li><a href="catalogo.php?id='.$obj->id_categoria.'&categoria='.$obj->categoria.'
                             "><img src="img/categorias/'.$obj->foto.' "alt="" /></a></li>';
                         }
                       }
                  
                    ?>

        
           
          </ul>
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
