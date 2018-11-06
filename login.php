<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
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
        <div class="navbar navbar_">
              <div class="container">
            <h1 class="brand brand_"><a href="index.html"><img alt="" src="img/logo.gif"> </a></h1>
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
                  <ul class="nav sf-menu">
                <li><a href="index.html">About</a></li>
                <li class="sub-menu"><a href="index-1.html">Services</a>
                   <ul>
                    <li><a href="#">Dolore </a></li>
                    <li><a href="#">Consecte</a></li>
                    <li><a href="#">Conseq</a></li>
                  </ul>
                </li>
                <li><a href="index-2.html">Folio</a></li>
                <li><a href="index-3.html">Blog</a></li>
                <li><a href="index-4.html">Contact</a></li>
              </ul>
                </div>
          </div>
            </div>
      </div>
        </div>
  </div>
    </header>
<div class="bg-content">  

<!--============================== content =================================-->

<div id="content"> 
  <div class="container">
    <div class="row ">
    
<div class="span12">
<div class="block-404">  
      <img class="img-404" src="img/slide-1.jpg" alt="">       
    	<div class="box-404">
        	<h2>Bienvenido</h2>
          <h3>Ingresa tu Usuario y Contraseña</h3> 
          <br>
          <?php 

          if (isset($_GET["error"])) {
            
            echo 'Datos Incorrectos';

          }else{

            
            
          }

          ?>       	
           
            <p>Usuario nuevo da click <a href="registro.php">aqui</a></p>
           
        	<form id="form-search" action="_login.php" method="POST" accept-charset="utf-8" >
            	<div class="clearfix">

                  <input type="text" name="usuario">
                  <input type="password" name="psw">

                    <a href="#" onClick="document.getElementById('form-search').submit()" class="btn btn-1 ">Ingresar</a>
                </div>
            </form>
		</div>
     </div>
   </div>
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