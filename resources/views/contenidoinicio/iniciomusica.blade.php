<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <!-- site metas -->
  <title>Curso de Música</title>
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- fevicon -->
  <link rel="icon" href="intro/images/fevicon.png" type="image/gif" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="intro/css/bootstrap.min.css">
  <!-- style css -->
  <link rel="stylesheet" href="intro/css/style.css">
  <!-- Responsive-->
  <link rel="stylesheet" href="intro/css/responsive.css">  
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="intro/css/jquery.mCustomScrollbar.min.css">
  <!-- Tweaks for older IEs-->
  <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

<style>
  /* Estilos para la introducción */
  .introduction {
    background-color: #f9f9f9;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
  }

  .introduction h1 {
    color: #333;
    font-size: 2em;
    margin-bottom: 10px;
  }

  .introduction p {
    color: #555;
    font-size: 1.1em;
    line-height: 1.6;
  }

  /* Estilos para las secciones */
  .sections {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }

  .sections h2 {
    color: #007bff;
    font-size: 1.8em;
    margin-bottom: 15px;
  }

  .sections ul {
    list-style-type: none;
    padding: 0;
  }

  .sections ul li {
    margin: 10px 0;
    font-size: 1.1em;
    color: #333;
  }

  .sections ul li strong {
    color: #007bff;
  }

  /* Estilos para los botones transparentes */
  .transparent-button {
    display: inline-block;
    padding: 10px 20px;
    margin: 5px;
    border: 2px solid #007bff;
    border-radius: 5px;
    background-color: transparent;
    color: #007bff;
    text-align: center;
    text-decoration: none;
    transition: background-color 0.3s ease, color 0.3s ease;
  }

  .transparent-button:hover {
    background-color: #007bff;
    color: white;
  }
</style>

</head>
<!-- body -->

<body class="main-layout contineer_page">
  <!-- loader  -->
  <div class="loader_bg">
    <div class="loader"><img src="intro/images/loading.gif" alt="#" /></div>
  </div>
  <!-- end loader -->
  <!-- header -->
  <header>
    <!-- header inner -->
    <div class="header">
      <div class="container">
        <div class="row">
          <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col logo_section">
            <div class="full">
              <div class="center-desk">
                <div class="logo">
                  <a href="index.html"><img src="intro/images/logo.png" alt="#" /></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-10 col-lg-10 col-md-10 col-sm-9">
            <div class="menu-area">
              <div class="limit-box">
                <nav class="main-menu">
                  <ul class="menu-area-main">
                    <li class="active"> <a href="{{url('/welcome')}}">Inicio</a> </li>
                    <li> <a href="{{url('himno')}}">himno</a> </li>
                    <li> <a href="{{url('contenidoinicio')}}">Contenido</a> </li>
                    <li> <a href="gallery.html">juegos</a> </li>
                    <li> <a href="contact.html">Instrumento</a></li>
                    @if (Route::has('login'))
                      <li> <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a></li> 
                      @auth
                        @can('dashboard')
                          <li> <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a></li> 
                        @endcan
                      @else
                        <li> <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li> 
                      @endauth
                    @endif 
                    <li> <a class="last_manu" href="#"><img src="intro/images/search_icon.png" alt="#" /></a> </li>
                  </ul>
                </nav>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- end header inner -->
  </header>
  <!-- end header -->

  <div class="backgro_mh">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="heding">
            <h2>Curso de Música</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Introducción -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="introduction">
          <h1>Introducción</h1>
          <p>La metodología musical a veces debe centrarse en el estudiante para despertar su interés, es por ello que este curso es práctico y contiene facilidades para que los niños aprendan el lenguaje musical de una forma amena y divertida.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Secciones -->
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="sections">
          <h2>Secciones</h2>
          <ul>
            <li><strong>Sección 1</strong>
              <ul>
                <li><a href="{{url('/iniciosonoro')}}" class="transparent-button">Eje sonoro</a></li>
              </ul>
            </li>
            <li><strong>Sección 2</strong>
              <ul>
                <li><a href="#" class="transparent-button">Eje auditivo</a></li>
              </ul>
            </li>
           
          </ul>
        </div>
      </div>
      <div class="col-md-6">
        <div class="sections">
          <h2>Secciones</h2>
          <ul>
            <li><strong>Sección 3</strong>
              <ul>
                <li><a href="#" class="transparent-button">Eje instrumental</a></li>
              </ul>
            </li>
            <li><strong>Sección 4</strong>
              <ul>
                <li><a href="#" class="transparent-button">Eje vocal</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Resto del contenido existente -->

  <!--  footer -->
  <footr>
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <form class="contact_bg">
              <div class="row">
                <div class="col-md-12">
                  <div class="titlepage">
                    <h2>Contact us</h2>
                  </div>
                  <div class="col-md-12">
                    <input class="contactus" placeholder="Your Name" type="text" name="Your Name">
                  </div>
                  <div class="col-md-12">
                    <input class="contactus" placeholder="Your Email" type="text" name="Your Email">
                  </div>
                  <div class="col-md-12">
                    <input class="contactus" placeholder="Your Phone" type="text" name="Your Phone">
                  </div>
                  <div class="col-md-12">
                    <textarea class="textarea" placeholder="Message" type="text" name="Message"></textarea>
                  </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <button class="send">Send</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-12 border_top">
            <form class="news">
              <h3>Newsletter</h3>
              <input class="newslatter" placeholder="ENTER YOUR MAIL" type="text" name="ENTER YOUR MAIL">
              <button class="submit">Subscribe</button>
            </form>
          </div>
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="address">
                  <ul class="loca">
                    <li>
                      <a href="#"><img src="icon/loc.png" alt="#" /></a>Locations
                    </li>
                    <li>
                      <a href="#"><img src="icon/call.png" alt="#" /></a>+12586954775
                    </li>
                    <li>
                      <a href="#"><img src="icon/email.png" alt="#" /></a>demo@gmail.com
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <ul class="social_link">
                  <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="copyright">
          <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free html Templates</a></p>
        </div>
      </div>
    </div>
  </footr>
  <!-- end footer -->
  <!-- Javascript files-->
  <script src="intro/js/jquery.min.js"></script>
  <script src="intro/js/popper.min.js"></script>
  <script src="intro/js/bootstrap.bundle.min.js"></script>
  <script src="intro/js/jquery-3.0.0.min.js"></script>
  <script src="intro/js/plugin.js"></script>
  <!-- sidebar -->
  <script src="intro/js/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="intro/js/custom.js"></script>
  <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>