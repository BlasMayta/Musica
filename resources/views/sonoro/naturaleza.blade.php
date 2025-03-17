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
    background-color:  #ebf0f0 ;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
    display: flex;
    flex-wrap:wrap;

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
    /* flex-grow:1;
    flex-basis:200; */
    background-color: #e0f8f7;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);

  }

  .sections h2 {
    color: #014947 ;
    font-size: 1.8em;
    margin-bottom: 15px;
    font-weight: bold
    aling:center;
  }

 
  .contenedor {
            width: 150px; /* Tamaño base para móviles */
            height: 150px;
            display: flex;
            flex-wrap:wrap;
            justify-content: center;
            align-items: center;
            border: 2px solid #000; 
            overflow: hidden;
            cursor: pointer;
            margin: 10px;
            transition: box-shadow 0.3s ease, transform 0.3s ease;
            position: relative; /* Para centrar la imagen */
        }
        .contenedor:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transform: scale(1.05);
        }
        .contenedor img {
            max-width: 100%;
            width: 500px;  // asume que este es el tamaño por defecto
            max-height: 100%;
            transition: transform 0.3s ease;
            position: absolute; /* Para centrar la imagen */
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%); /* Centrado perfecto */

        }
        .contenedor:hover img {
            transform: translate(-50%, -50%) scale(1.1); /* Centrado y escalado */
        }

        /* Media Queries para tablet */
        @media (min-width: 600px) {
            .contenedor {
                width: 180px; /* Tamaño para tablet */
                height: 180px;
            }
        }

        /* Media Queries para laptop y pantallas más grandes */
        @media (min-width: 900px) {
            .contenedor {
                width: 200px; /* Tamaño para laptop */
                height: 200px;
            }
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
            <h2>LECCION 1 NATURALEZA</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Introducción -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <br>
        <div class="introduction">
          <h1>Introducción</h1>
          <p> La naturaleza nos regala sonidos únicos, como el canto de los pájaros, el murmullo del viento y el fluir del agua. Cada sonido cuenta una historia y nos conecta con el entorno. Escucharlos nos relaja y nos ayuda a apreciar la belleza del mundo natural que nos rodea. </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Secciones -->
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <br>
        <div class="sections">
          <h2 >Volcan</h2>
          <!-- volcan -->
           <!-- Contenedor 1 -->
          <div class="contenedor" onclick="reproducirSonido('audio1')">
              <img src="Sonnido/img/volcan.webp"" alt="Imagen 1">
              <audio id="audio1" src="Sonnido/Sounds/audiovolcan.mp3"></audio>
          </div>
        </div>
        
      </div>
      
      <div class="col-md-3">
        <br>
        <div class="sections">
          <h2 >Viento</h2>
          <!-- Viento -->
           <!-- Contenedor 2 -->
          <div class="contenedor" onclick="reproducirSonido('audio2')">
              <img src="Sonnido/img/viento.webp"  alt="Imagen 2">
              <audio id="audio2" src="Sonnido/Sounds/audioviento.mp3"></audio>
          </div>
        </div>
      </div>
      <br>
      <div class="col-md-3">
        <br>
        <div class="sections">
          <h2>Cascada</h2>
          <!-- volcan -->
           <!-- Contenedor 3 -->
           <div class="contenedor" onclick="reproducirSonido('audio3')">
              <img src="Sonnido/img/cascada.jpg"  alt="Imagen 3">
              <audio id="audio3" src="Sonnido/Sounds/audiocascada.mp3"></audio>
          </div>
        </div>
      </div>
      <br>
      <div class="col-md-3">
        <br>
        <div class="sections">
          <h2>Ola</h2>
          <!-- Viento -->
            <!-- Contenedor 4 -->
          <div class="contenedor" onclick="reproducirSonido('audio4')">
              <img src="Sonnido/img/ola.jpg"  alt="Imagen 4">
              <audio id="audio4" src="Sonnido/Sounds/audioolas.mp3"></audio>
          </div>
           
        </div>
      </div>
      <br>
    </div>
  </div>
<br>
  <!-- Secciones 2 -->
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <br>
        <div class="sections">
          <h2 >Pidras</h2>
          <!-- volcan -->
           <!-- Contenedor 1 -->
          <div class="contenedor" onclick="reproducirSonido('audio5')">
              <img src="Sonnido/img/piedra.jpg"" alt="Imagen 5">
              <audio id="audio5" src="Sonnido/Sounds/audiopiedra.mp3"></audio>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <br>
        <div class="sections">
          <h2 >Rayos</h2>
          <!-- Viento -->
           <!-- Contenedor 2 -->
          <div class="contenedor" onclick="reproducirSonido('audio6')">
              <img src="Sonnido/img/rayo.jpg"  alt="Imagen 6">
              <audio id="audio6" src="Sonnido/Sounds/audiorayo.mp3"></audio>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <br>
        <div class="sections">
          <h2>Lluvias</h2>
          <!-- volcan -->
           <!-- Contenedor 3 -->
           <div class="contenedor" onclick="reproducirSonido('audio7')">
              <img src="Sonnido/img/lluvia.webp"  alt="Imagen 7">
              <audio id="audio7" src="Sonnido/Sounds/audiolluvia.mp3"></audio>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <br>
        <div class="sections">
          <h2>Noche</h2>
          <!-- Viento -->
            <!-- Contenedor 4 -->
          <div class="contenedor" onclick="reproducirSonido('audio8')">
              <img src="Sonnido/img/noche.webp"  alt="Imagen 8">
              <audio id="audio8" src="Sonnido/Sounds/audionoche.mp3"></audio>
          </div>
           
        </div>
      </div>
    </div>
  </div>

  <!-- Secciones 3 -->
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <br>
        <div class="sections">
          <h2 >Arroyo</h2>
          <!-- volcan -->
           <!-- Contenedor 1 -->
          <div class="contenedor" onclick="reproducirSonido('audio9')">
              <img src="Sonnido/img/arrollo.webp"" alt="Imagen 9">
              <audio id="audio9" src="Sonnido/Sounds/audioarrollo.mp3"></audio>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <br>
        <div class="sections">
          <h2 >Hojas</h2>
          <!-- Viento -->
           <!-- Contenedor 2 -->
          <div class="contenedor" onclick="reproducirSonido('audio10')">
              <img src="Sonnido/img/hojas.webp"  alt="Imagen 10">
              <audio id="audio10" src="Sonnido/Sounds/audiohojas.mp3"></audio>
          </div>
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

  <script>
        var audioActual = null;

        function reproducirSonido(idAudio) {
            var nuevoAudio = document.getElementById(idAudio);

            if (audioActual && audioActual !== nuevoAudio) {
                audioActual.pause();
                audioActual.currentTime = 0; // Reinicia el audio al principio
            }

            if (nuevoAudio.paused) {
                nuevoAudio.play();
            } else {
                nuevoAudio.pause();
                nuevoAudio.currentTime = 0;
            }

            audioActual = nuevoAudio;
}
    </script>


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






