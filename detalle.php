<?php 
    include("conexion.php");

    session_start();
    $_SESSION["nombre"]="Reyes";

?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Blog</title>
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
	    
	<script type="text/javascript">if($(window).width()>1024){document.write("<"+"script src='js/jquery.preloader.js'></"+"script>");}	</script>
	<script>		
		 jQuery(window).load(function() {	
		 $x = $(window).width();		
	if($x > 1024)
	{			
	jQuery("#content .row").preloader();}	
	
	jQuery(".list-blog li:last-child").addClass("last"); 
	jQuery(".list li:last-child").addClass("last"); 

	
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
            <?php include("menu.php"); ?>
        </div>
  </div>
    </header>
<div class="bg-content">       
  <!--============================== content =================================-->      
   <div id="content"><div class="ic">More Website Templates @ TemplateMonster.com. November19, 2012!</div>
    <div class="container">
          <div class="row">
        <article class="span8">
         <div class="inner-1">         
          <ul class="list-blog">
            <li>  

              <?php 

                    if(isset($_GET["clave"])){

                  $buscar="SELECT clave, nombre_producto, precio, foto, describcion
                            FROM producto
                             WHERE clave = ".$_GET["clave"];

                   $result_img =$db->query($buscar);
                   if ($result_img) {


                      if(mysqli_num_rows($result_img)>0){

                      $obj_buscar=mysqli_fetch_object($result_img); 
                         
                     
                         echo '<h3>'.$obj_buscar->nombre_producto.'</h3>     
                              <div class="clear"></div>            
                              <img alt="" src="img/arreglos/'.$obj_buscar->foto.'">     
 
                              <p>Precio $'.$obj_buscar->precio.'</p>

                              <a href="_carrito.php?pedido=1&id_producto='.$obj_buscar->clave.'&nom_producto='.$obj_buscar->nombre_producto.'&cantidad=1&precio='.$obj_buscar->precio.'" class="btn btn-1">Comprar</a>
                                   <p>Precio $'.$obj_buscar->describcion.'</p>'

                              ;


                   }else{

                    echo "<h3>No Existe el Arreglo</h3>";

                   }
                 }

                 }else{

                  echo '<h3>No se Selecciono Ningun Arreglo </h3>';

                 }

              ?>

            </li>       
                                 
          </ul>
          </div>  
        </article>
        <article class="span4">
          


          <h3>Categorias</h3>
          <ul class="list extra extra1"> 

                <?php 
                   $con="SELECT id_categoria,UPPER(nom_categoria) as categoria FROM categorias 
                      ORDER BY nom_categoria";

                   $result =$db->query($con);
                   if ($result) {

                       while ($obj=mysqli_fetch_object($result)) {
                         echo '<li><a href="catalogo.php?id='.$obj->id_categoria.'&categoria='.$obj->categoria.'">'.$obj->categoria.'</a></li>';
                     }
                   }
              
                ?>  
                          
      </ul>
          <h3><?php 
          if(isset($_GET["categoria"])){

                echo $_GET["categoria"];
            }
          
          ?></h3>
         <div class="wrapper">
          <ul class="list extra2 list-pad ">

            <?php 

                  if(isset($_GET["id_categoria"])){

                   $con="SELECT UPPER(nombre_producto) as Nombre_Arreglo
                          FROM producto
                          WHERE id_categoria = ".$_GET["id_categoria"];

                   $result =$db->query($con);
                   if ($result)
                    {
                       while ($obj=mysqli_fetch_object($result)) {
                         echo '<li><a href="catalogo.php">'.$obj->Nombre_Arreglo.'</a></li>';
                     }
                   }
                 }
              
                ?>  
            
          </ul>
          
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