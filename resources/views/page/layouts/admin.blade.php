<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Peliculeros</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="author" content="" />

  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Handlee|Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="{{ asset('page/css/bootstrap.css') }}" rel="stylesheet" />
  <link href="{{ asset('page/css/bootstrap-responsive.css') }}" rel="stylesheet" />
  <link href="{{ asset('page/css/flexslider.css') }}" rel="stylesheet" />
  <link href="{{ asset('page/css/prettyPhoto.css') }}" rel="stylesheet" />
  <link href="{{ asset('page/css/camera.css') }}" rel="stylesheet" />
  <link href="{{ asset('page/css/jquery.bxslider.css') }}" rel="stylesheet" />
  <link href="{{ asset('page/css/style.css') }}" rel="stylesheet" />

  <!-- Theme skin -->
  <link href="{{ asset('page/color/default.css') }}" rel="stylesheet" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />

  <!-- =======================================================
    Theme Name: Eterna
    Theme URL: https://bootstrapmade.com/eterna-free-multipurpose-bootstrap-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
  <style>
      .caja {
  position: relative; /*Para poder ubicar la info dentro de la caja*/
  margin: 10px auto;
  }
    .caja img {
      box-shadow: 4px 4px 5px #999;
    }
  
  .info {
  position: absolute; /*Info sobre la imagen*/
  top: 5%;
  left: 10%; /*Desplazamos a partir de la esquina superior izquierda*/
  zoom: 1;
  filter: alpha(opacity=0); /*Opacidad Para IE */
  opacity: 0; /*Inicialmente transparente */
  padding: 5px;
  color: white;
  background: black;
  -moz-transition:all ease .8s; /*Aplicamos una ligera transición*/
  -webkit-transition:all ease .8s ;
  transition:all ease .8s;
  }
  .caja:hover .info {
  filter: alpha(opacity=80);
  opacity: .8; /*Al hacer hover sobre la caja hacemos visible los datos*/
}
  </style>
</head>


<body>

  <div id="wrapper">

    <!-- start header -->
    <header>
      <div>
        <br>
      </div>
      <div class="container">


        <div class="row nomargin">
          <div class="span4">
            <div class="logo">
            <a href="{{ route('home.index') }}"><img src="{{ asset('page/img/logo.png') }}" alt="" /></a>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="{{ request()->is('home') ? 'active':''  }}">
                      <a href="{{ route('home.index') }}">Home </a>
                    </li>
                    <li class="{{ request()->is('contact') ? 'active':''  }}">
                        <a href="{{ route('contact') }}">Contacto </a>
                    </li>
                  </ul>
                </nav>
              </div>
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->
    

    <section id="content">
      <div class="container">
        @yield('content')
      </div>
    </section>

    <footer>
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">Acerca de</h5>
              <p>Peliculeros es una plataforma creada para los amantes del buen cine, encontrarás una gran variedad de películas de todos los géneros, en idioma latino, calidad full HD y sobre todo ¡ gratis !.</p>

            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">Contacto</h5>
              <address>
							<strong>Peliculeros</strong><br>
							Colombia
						</address>
              <p>
                <i class="icon-envelope-alt"></i> peliculeros2018@gmail.com
              </p>
            </div>
          </div>
          <div class="span4">
            <div class="widget">
              <h5 class="widgetheading">Déjame un mensaje</h5>
              <p>
                ¿Hay alguna película que quieres que subamos? ¿Cual?
              </p>
              <form class="subscribe">
                <div class="input-append">
                  <input class="span2" id="appendedInputButton" type="text">
                  <button class="btn btn-theme" type="submit">Enviar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p><span>&copy; Eterna company. All right reserved</span></p>
              </div>

            </div>

            <div class="span6">
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Eterna
                -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bglight icon-2x active"></i></a>

  <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="{{ asset('page/js/jquery.js') }}"></script>
  <script src="{{ asset('page/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('page/js/bootstrap.js') }}"></script>

  <script src="{{ asset('page/js/modernizr.custom.js') }}"></script>
  <script src="{{ asset('page/js/toucheffects.js') }}"></script>
  <script src="{{ asset('page/js/google-code-prettify/prettify.js') }}"></script>
  <script src="{{ asset('page/js/jquery.bxslider.min.js') }}"></script>

  <script src="{{ asset('page/js/jquery.prettyPhoto.js') }}"></script>
  <script src="{{ asset('page/js/portfolio/jquery.quicksand.js') }}"></script>
  <script src="{{ asset('page/js/portfolio/setting.js') }}"></script>

  <script src="{{ asset('page/js/jquery.flexslider.js') }}"></script>
  <script src="{{ asset('page/js/animate.js') }}"></script>
  <script src="{{ asset('page/js/inview.js') }}"></script>

  <!-- Template Custom JavaScript File -->
  <script src="{{ asset('page/js/custom.js') }}"></script>


</body>

</html>
