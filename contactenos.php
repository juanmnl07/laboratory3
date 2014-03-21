<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap_global.js"></script>
    <script src="js/jquery.validate.js"></script>
    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="ico/favicon.png">
  </head>

  <body id="page-contactenos">

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li><a <?php echo "href=\"http://".$_SERVER['HTTP_HOST']."/bootstrap\"";?>>Inicio</a></li>
              <li><a href="quienes-somos.php">Quienes somos</a></li>
              <li><a href="mision-vision.php">Visiòn y Misión</a></li>
              <li><a href="donde-estamos.php">Donde estamos</a></li>
              <li class="active"><a <?php echo "href=\"http://".$_SERVER['HTTP_HOST']."/bootstrap/contactenos.php\"";?>>contactenos</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">TOP 5 <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="movies/iam-legend.php"><i class="icon-film"></i> Iam Legend</a></li>
                  <li><a href="movies/persuit-of-happiness.php"><i class="icon-film"></i> Persuit of happines</a></li>
                  <li><a href="movies/men-in-black.php"><i class="icon-film"></i> Men in Black</a></li>
                  <li><a href="movies/hitch.php"><i class="icon-film"></i> Hitch</a></li>
                  <li><a href="movies/seven-pounds.php"><i class="icon-film"></i> Seven pounds</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">

      <!-- Muestra el logo de la compañia -->
      <div class="logo-company">
        <a <?php echo "href=\"http://".$_SERVER['HTTP_HOST']."/bootstrap\"";?>><img src="img/logo_CINEMARK.JPG" /></a>
      </div>

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h1>Contactanos</h1>
        <p>Toma tu tiempo para contactarnos, asi podemos ayudarte con tus consultas.</p>
        </div>

       <hr>

       <address>
        <strong>Cinermark, Inc.</strong><br>
        795 Folsom Ave, Suite 600<br>
        San Francisco, CA 94107<br>
        <abbr title="Phone">P:</abbr> (123) 456-7890
      </address>

      <hr>

      <address>
        <strong>Cinermark</strong><br>
        <a href="mailto:cinermark@example.com">cinermark@example.com</a>
      </address>

      <!-- contact form -->
      <form method="POST" action="mail.php" id="formulario_contacto">
        <p><input type="text" placeholder="Nombre" required name="nombre"></input></p>
        <p><input type="text" required name="apellidos" placeholder="Apellidos"></input></p>
        <p><input type="text" placeholder="user@example.com" required name="e_mail"></input></p>
        <p><input type="text" name="motivo" required name="motivo" placeholder="Motivo"></input></p>
        <p><textarea type="textarea" rows="5" cols="50" required name="mensaje"></textarea></p>
        <p><button type="submit" class="btn">ENVIAR</button></p>
      </form>

      <footer>
        <p>&copy; Desarrollo aplicaciones en Internet | ULACIT 2014</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster --> 
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>

  </body>
</html>

