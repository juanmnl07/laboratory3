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
              <li><a <?php echo "href=\"http://".$_SERVER['HTTP_HOST']."/bootstrap\"";?>>Inicio</a></li>
              <li><a href="quienes-somos.php">Quienes somos</a></li>
              <li class="active"><a href="mision-vision.php">Visiòn y Misión</a></li>
              <li><a href="donde-estamos.php">Donde estamos</a></li>
              <li><a <?php echo "href=\"http://".$_SERVER['HTTP_HOST']."/bootstrap/contactenos.php\"";?>>contactenos</a></li>
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
        <h1>Misión y Visión</h1>
        <p>Toma tu tiempo y lee hacerca de nuestras metas y objetivos.</p>
      </div>

      <hr>

      <div id="mision">
        <h3>Misión</h3>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur laoreet faucibus enim, vel placerat purus tincidunt non. Quisque vehicula in odio vitae lacinia. Praesent consequat purus ut dolor fringilla, a feugiat nibh cursus. Duis tristique ligula non auctor congue. Donec molestie erat a ipsum condimentum sollicitudin. Nulla facilisi. Morbi at auctor turpis, vitae mattis nulla. Suspendisse sed vestibulum nisi. Cras malesuada augue ac ligula venenatis, quis luctus mauris consequat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed vitae mollis ipsum. Cras ac blandit nulla, ac semper nibh. Nullam feugiat tempor quam vitae consequat. Etiam quis enim et urna mollis venenatis. Curabitur lobortis sapien et ipsum pretium, eu pulvinar ipsum condimentum.</p>
         <p>Maecenas eu scelerisque tellus. Aliquam dictum ligula quis lacus tristique elementum. Duis non dignissim dui, quis fringilla nibh. Sed euismod eros turpis, ac volutpat justo gravida ut. In pharetra dictum porta. Fusce vitae euismod augue. Nunc ac nisi ornare, consectetur risus quis, pellentesque est. Duis et justo placerat, tincidunt justo sit amet, condimentum neque. Praesent dignissim congue diam, vel facilisis odio commodo quis. Cras eget tincidunt libero, at aliquet eros. Sed pellentesque nec nisl a facilisis. Quisque tincidunt, nunc in molestie tempus, libero lacus suscipit est, ac rhoncus sem sem id diam.</p>
      </div>
      <br />
      <div id="vision">
        <h3>Visión</h3>
         <p>Curabitur semper tellus quam, non egestas mauris dapibus in. Vivamus sed fringilla tellus, eu viverra felis. Aliquam sed consequat sapien, nec accumsan augue. Ut dictum nulla ut ligula pretium ornare. Praesent tincidunt lacinia lacus, sit amet volutpat dolor ullamcorper in. Maecenas nisl risus, posuere sodales risus eu, gravida rhoncus mauris. Donec est massa, venenatis ac magna id, congue bibendum tellus. Aliquam nunc nisi, malesuada ut blandit at, vehicula in orci. Vestibulum pharetra et ligula vitae ultricies. Vestibulum quis est pretium, elementum felis nec, tempor enim. Duis justo ante, tincidunt ac suscipit eu, sagittis egestas odio. Nunc nec metus accumsan, posuere justo convallis, malesuada ipsum. Pellentesque euismod gravida urna, dignissim eleifend urna blandit at. Donec aliquet rutrum mauris, et congue erat bibendum bibendum.</p>
         <p>Suspendisse quis scelerisque leo. Donec aliquet condimentum purus, quis posuere diam molestie sed. Phasellus tincidunt diam eu libero imperdiet faucibus. In imperdiet tortor ac massa congue euismod. Aenean nisi libero, viverra eget lacus ac, sodales tristique lacus. Sed blandit placerat est, ac euismod velit porta eu. Mauris in dui vulputate, egestas arcu eget, dapibus ipsum. </p>
      </div>

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

