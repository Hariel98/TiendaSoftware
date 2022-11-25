<?php
session_start();
require 'funciones.php';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="assets/css/carrucel.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tienda Licenciaso</title>

    

    <!-- Latest compiled and minified CSS -->
    
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="assets/css/estilos.css">
  </head>

  

  <body>
  <div class="container2">
  
  
  
  <ul class="slider">
    <li id="slide1">
      <img src="https://cdn2.hubspot.net/hubfs/2283874/Fotos%20blog/licencias_software.jpg"/>
    </li>
    <li id="slide2">
      <img src="https://elchapuzasinformatico.com/wp-content/uploads/2019/06/Licencias-NOD32-y-McAfee-goodoffer24.jpg"/>
    </li>
    <li id="slide3">
    <img src="https://www.tecnologia-informatica.com/wp-content/uploads/2018/06/tipos-de-licencia-de-software.jpeg"/>
      
      
    </li>
  </ul>
  
  <ul class="menu">
    <li>
      <a href="#slide1">1</a>
    </li>
    <li>
      <a href="#slide2">2</a>
    </li>
     <li>
      <a href="#slide3">3</a>
    </li>
  </ul>
  
</div>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>


          <a class="navbar-brand" href="index.php">Software shop</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav pull-right">
            <li>
             
            <a href="carrito.php" class="btn">CARRITO <span class="badge"><?php print cantidadsoftwares(); ?></span></a>
            
            </li> 
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container" id="main">
        <div class="row">
            <?php
              require 'vendor/autoload.php';
              $software = new proyecto\software;
              $info_software = $software->mostrar();
              $cantidad = count($info_software);
              if($cantidad > 0){
                for($x =0; $x < $cantidad; $x++){
                  $item = $info_software[$x];
            ?>
              <div class="col-md-3">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <h1 class="text-center titulo-software"><?php print $item['titulo'] ?></h1>  
                    </div>
                    <div class="panel-body">
                      <?php
                          $foto = 'upload/'.$item['foto'];
                          if(file_exists($foto)){
                        ?> 
                          <img src="<?php print $foto; ?>  "class="img-responsive " >
                      <?php }else{?>
                        <img src="assets/imagenes/not-found.jpg " class="img-responsive" >
                      <?php }?>
                    </div>



                    <div class="panel-footer">
                    <h6 class="text-center precio-Software">$ <?php print $item['precio'] ?> MX</h6>
                        <a href="carrito.php?id=<?php print $item['id'] ?>" class="btn btn-success btn-block">
                          <span class="glyphicon glyphicon-shopping-cart"></span> Comprar
                        </a>
                    </div>
                  </div>
                 
              
              
              </div>
              
          <?php
                }
            }else{?>
              <h4>NO HAY REGISTROS</h4>

          <?php }?>




        </div>
        <div class="container3">
            </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
