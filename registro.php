<!DOCTYPE html>
<html lang="en">
	<head>
	<title>Contact</title>
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
              <h3>Datos del Cliente</h3>
              <div class="inner-1">
            <form id="contact-form" method="POST" action="_registro.php">
                  <fieldset>
                <div>
                    <h5>Nombre:</h5>
                    <label class="name">
                    <input id="txt_nom" name="txt_nom" type="text">
                    <span class="error">*El nombre no es Valido.</span> <span class="empty">*Este Campo es Requerido.</span> </label>
                    </div>

                <div>
                    <h5>Apellido Paterno:</h5>
                    <label class="name">
                    <input id="txt_ap" name="txt_ap" type="text">
                    <span class="error">*El apellido paterno no es Valido.</span> <span class="empty">*Este Campo es Requerido.</span> </label>
                    </div>

                <div>
                    <h5>Apellido Materno:</h5>
                    <label class="name">
                    <input id="txt_am" name="txt_am" type="text">
                    <span class="error">*El apellido materno no es Valido.</span> <span class="empty">*Este Campo es Requerido.</span> </label>
                    </div>
              
                <div>
                    <h5>Usuario:</h5>
                    <label class="text">
                    <input id="txt_user" name="txt_user" type="text">
                    <span class="error">*El usuario no es Valido.</span> <span class="empty">*Este Campo es Requerido.</span> </label>
                    </div>

                <div>
                    <h5>Contraseña:</h5>
                    <label class="password" >
                    <input id="txt_psw" name="txt_psw" type="password">
                    <span class="error">*La contraseña no es Valida.</span> <span class="empty">*Este Campo es Requerido.</span> </label>
                    </div>

                <div>
                    <h5>Correo Electronico:</h5>
                    <label class="text">
                    <input id="txt_correo" name="txt_correo" type="text">
                    <span class="error">*El correo electronico no es Valido.</span> <span class="empty">*Este Campo es Requerido.</span> </label>
                    </div>

                  <div>
                    
                <div class="buttons-wrapper"> 
                  <a href="#" onClick="document.getElementById('contact-form').submit()" class="btn btn-1 ">Enviar</a>
                  <a class="btn btn-1" data-type="reset">Limpiar</a> 
                  
            </form>



              </fieldset>
                </form>
          </div>
            </article>
        <article class="span4">
              
              
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