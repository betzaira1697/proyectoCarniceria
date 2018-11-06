<?php include("conexion.php"); ?>
<div class="navbar navbar_">
              <div class="container">
            <h1 class="brand brand_"><a href="index.php"><img alt="" src="img/logo1.png"> </a></h1>
            <a class="btn btn-navbar btn-navbar_" data-toggle="collapse" data-target=".nav-collapse_">Menu <span class="icon-bar"></span> </a>
            <div class="nav-collapse nav-collapse_  collapse">
                  <ul class="nav sf-menu">
                <li class="active"><a href="index.php">Inicio</a></li>
                <li class="sub-menu"><a href="index.php">Categorias</a>
                  <ul>
                    <?php 
          
                       $con="SELECT id_categoria,UPPER(nom_categoria) as categoria FROM categorias 
                          ORDER BY nom_categoria";

                       $result =$db->query($con);
                       if ($result)
                        {
                           while ($obj=mysqli_fetch_object($result)) {
                             echo '<li><a href="catalogo.php?id='.$obj->id_categoria.'&categoria='.$obj->categoria.'">'.$obj->categoria.'</a></li>';
                         }
                       }
                  
                    ?>

                  </ul>
                    </li>
                <li><a href="catalogo.php">Catalogo</a></li>
                <li><a href="envios.php">Envios</a></li>
                <li><a href="contacto.php">Contacto</a></li>
              </ul>
                </div>
          </div>
            </div>
      </div>