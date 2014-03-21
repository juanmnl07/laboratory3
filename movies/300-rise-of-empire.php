<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="../js/bootstrap_global.js"></script>
    <!-- Le styles -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <link href="../css/bootstrap-responsive.css" rel="stylesheet">

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

  <body>

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
              <li class="active"><a <?php echo "href=\"http://".$_SERVER['HTTP_HOST']."/bootstrap\"";?>>Inicio</a></li>
              <li><a href="../quienes-somos.php">Quienes somos</a></li>
              <li><a href="../mision-vision.php">Visiòn y Misión</a></li>
              <li><a href="../donde-estamos.php">Donde estamos</a></li>
              <li><a <?php echo "href=\"http://".$_SERVER['HTTP_HOST']."/bootstrap/contactenos.php\"";?>>contactenos</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">TOP 5 <b class="caret"></b></a>
                <ul class="dropdown-menu">
                   <li><a href="iam-legend.php"><i class="icon-film"></i> Iam Legend</a></li>
                  <li><a href="persuit-of-happiness.php"><i class="icon-film"></i> Persuit of happines</a></li>
                  <li><a href="men-in-black.php"><i class="icon-film"></i> Men in Black</a></li>
                  <li><a href="hitch.php"><i class="icon-film"></i> Hitch</a></li>
                  <li><a href="seven-pounds.php"><i class="icon-film"></i> Seven pounds</a></li>
                </ul>
              </li>
            </ul>
           </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">


      <!-- movie image -->
      <div class="movie-image">
        <img src="../movies/300-rise-of-an-empire.jpg"/>
      </div>

      <div class="well well-large descripcion-pelicula">
        <ul>
          <li><label class="label">Titulo:</label>300 Nacimiento de un Imperio</li>
          <li><label class="label">Pais:</label><span>USA</span></li>
          <li><label class="label">Productora:</label><span>Paramount Pictures</span></li>
          <li><label class="label">Director:</label><span>Mark Canton</span></li>
          <li><label class="label">Calificacion:</label><span>No recomendada para menores de 10 años</span></li>
          <li><label class="label">Sinopsis:</label><p>La película se centra en relatar los hechos que ocurren de manera simultánea a los que se desarrollan en 300 (película), centrándose en el bando ateniense, durante su primera parte, luego parasá a contar los hechos que ocurren tras la derrota de Leónidas en las Termópilas. Mediante un flashback de la reina Gorgo conocemos los hechos que desencadenaron la Segunda Guerra Médica en el universo creado por Frank Miller, nos narra la Batalla de Maratón, los problemas de Temístocles a la hora de reunir a las distintas polis griegas, los orígenes de la divinidad de Jerjes, presenta a Artemisia (antagonista de Temístocles) y nos cuenta la Batalla de Artemisio y la Batalla de Salamina. Con esta última batalla y la victoria de los griegos termina la película.</p></li>
        </li>  
      </div>

      <hr>

      <div class="well well-large comentarios">
          <form>
            <fieldset>
              <legend>Comentarios</legend>
              <label>Nombre</label>
              <p><input type="text" placeholder="Digita tu nombre..." required></p>
              <p><textarea rows="5" placeholder="Comentario" required></textarea></p>
              <p><button type="submit" class="btn">Enviar</button></p>
            </fieldset>
          </form> 

      </div>

          <hr>

      <!-- Nuestros proximos estrenos -->
      <h2>Proximos estrenos</h2>
      <!-- Example row of columns -->
      <div class="row">
        <div class="span4">
          <h2><a href="thor2.php">Thor<br/>Un mundo Oscuro</a></h2>
          <div id="estreno-1" class="estreno">
            <a href="thor2.php"><img src="../img/thor-2-2.jpg"/></a>
          </div>
          <p class="estreno-detalle">Thor, El Mundo Oscuro" de Marvel es la continuación en la gran pantalla de las aventuras de Thor, el Poderoso Vengador, en su lucha por salvar la Tierra y los Nueve Reinos de un oscuro enemigo que es anterior al mismísimo universo. Después de "Thor" y "Los Vengadores”, Thor lucha por restablecer el orden en todo el cosmos...  </p>
          <p class="ver-mas"><a class="btn" href="thor2.php">Ver detalles &raquo;</a></p>
        </div>
        <div class="span4">
          <h2><a href="300-rise-of-empire.php">300<br/>El origen de un imperio</a></h2>
          <div id="estreno-2" class="estreno">
            <img src="../img/300.jpg"/>
          </div>
          <p class="estreno-detalle">Tras el éxito de “300″, su precuela “300: El origen de un imperio” lleva la acción a otro campo de batalla: el mar. La historia enfrenta al general griego Temístocles con las grandiosas fuerzas invasivas de Persia, dominadas por Jerjes, un mortal convertido en dios, y guiadas por Artemisia, vengativa comandante de la armada persa... </p>
          <p class="ver-mas"><a class="btn" href="300-rise-of-empire.php">Ver detalles &raquo;</a></p>
       </div>
        <div class="span4">
          <h2><a href="need-for-speed.php">Need for speed</a></h2>
          <div id="estreno-3" class="estreno">
            <img src="../img/need_for_speed.jpg"/>
          </div>
          <p class="estreno-detalle">La película narra la historia de Tobey Marshall (Aaron Paul), un mecánico que pilota muscle cars (coches clásicos de gran cilindrada) en un circuito de carreras ilegal callejero. Necesitado de medios para mantener a flote su taller familiar, acepta a regañadientes asociarse con el adinerado y arrogante ex piloto de NASCAR Dino Brewster (Dominic Cooper)...</p>
          <p class="ver-mas"><a class="btn" href="need-for-speed.php">Ver detalles &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p>&copy; Desarrollo aplicaciones en Internet | ULACIT 2014</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster --> 
    <script src="../js/bootstrap-transition.js"></script>
    <script src="../js/bootstrap-alert.js"></script>
    <script src="../js/bootstrap-modal.js"></script>
    <script src="../js/bootstrap-dropdown.js"></script>
    <script src="../js/bootstrap-scrollspy.js"></script>
    <script src="../js/bootstrap-tab.js"></script>
    <script src="../js/bootstrap-tooltip.js"></script>
    <script src="../js/bootstrap-popover.js"></script>
    <script src="../js/bootstrap-button.js"></script>
    <script src="../js/bootstrap-collapse.js"></script>
    <script src="../js/bootstrap-carousel.js"></script>
    <script src="../js/bootstrap-typeahead.js"></script>

  </body>
</html>

