
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- basic -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- mobile metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  
  <title>Contenido</title>
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


<link rel="stylesheet" href="css/Piano.css">

<!-- <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css"> -->

<style>
  /* Piano.css */
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }
  
  body {
    background: #222;
    font-family: Arial, sans-serif;
  }
  
  /* Contenedor principal del piano */
  .ul_1 {
    width: 90%;
    max-width: 1200px;
    height: auto;
    margin: 2em auto;
    padding: 1em;
    position: relative;
    border: 1px solid #160801;
    border-radius: 1em;
    background: linear-gradient(to top left, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0)), url('https://f.cl.ly/items/2q1f3t0C3R1b0g081w3n/vwood.png');
    box-shadow: 0 0 50px rgba(0, 0, 0, 0.5) inset, 0 1px rgba(212, 152, 125, 0.2) inset, 0 5px 15px rgba(0, 0, 0, 0.5);
    overflow: hidden;
  }
  
  /* Lista de teclas */
  .set {
    display: flex;
    justify-content: center;
    align-items: flex-start;
    list-style: none;
    padding: 0;
    margin: 0;
  }
  /* Teclas blancas con estilo de piano real */
.white {
  height: 16em;
  width: 4em;
  z-index: 1;
  border-left: 1px solid #ccc;
  border-bottom: 1px solid #999;
  border-radius: 0 0 8px 8px;
  box-shadow: 
    -1px 0 0 rgba(255, 255, 255, 0.8) inset, /* Sombra interior para el borde izquierdo */
    0 0 8px rgba(0, 0, 0, 0.2) inset,        /* Sombra interior general */
    0 4px 6px rgba(0, 0, 0, 0.3);            /* Sombra exterior para profundidad */
  background: linear-gradient(to bottom, #f9f9f9 0%, #e6e6e6 100%);
  cursor: pointer;
  transition: all 0.1s ease;
  position: relative;
}

/* Efecto al presionar la tecla */
.white:active {
  border-top: 1px solid #bbb;
  border-left: 1px solid #bbb;
  border-bottom: 1px solid #777;
  box-shadow: 
    2px 0 3px rgba(0, 0, 0, 0.1) inset,      /* Sombra interior al presionar */
    -5px 5px 20px rgba(0, 0, 0, 0.1) inset,  /* Sombra interior más pronunciada */
    0 0 5px rgba(0, 0, 0, 0.2);              /* Sombra exterior al presionar */
  background: linear-gradient(to bottom, #e6e6e6 0%, #d9d9d9 100%);
}

/* Detalle superior de las teclas blancas (efecto de bisel) */
.white::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 6px;
  background: linear-gradient(to bottom, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.2));
  border-radius: 8px 8px 0 0;
}

/* Detalle inferior de las teclas blancas (efecto de sombra) */
.white::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 6px;
  background: linear-gradient(to top, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0));
  border-radius: 0 0 8px 8px;
}
  /* Teclas negras */
  .black {
    height: 8em;
    width: 2em;
    margin: 0 0 0 -1em;
    z-index: 2;
    border: 1px solid #000;
    border-radius: 0 0 3px 3px;
    box-shadow: -1px -1px 2px rgba(255, 255, 255, 0.2) inset, 0 -5px 2px 3px rgba(0, 0, 0, 0.6) inset, 0 2px 4px rgba(0, 0, 0, 0.5);
    background: linear-gradient(45deg, #222 0%, #555 100%);
    cursor: pointer;
    transition: all 0.1s ease;
  }
  
  .black:active {
    box-shadow: -1px -1px 2px rgba(255, 255, 255, 0.2) inset, 0 -2px 2px 3px rgba(0, 0, 0, 0.6) inset, 0 1px 2px rgba(0, 0, 0, 0.5);
    background: linear-gradient(to left, #444 0%, #222 100%);
  }
  
  /* Ajustes para teclas específicas */
  .d,
  .e,
  .g,
  .b {
    margin-left: -1em;
  }
  
  /* Bordes redondeados para la primera y última tecla */
  .set li:first-child {
    border-radius: 5px 0 5px 5px;
  }
  
  .set li:last-child {
    border-radius: 0 5px 5px 5px;
  }
  
  /* Responsive Design */
  @media (max-width: 768px) {
    .white {
      width: 3em;
      height: 12em;
    }
  
    .black {
      width: 1.5em;
      height: 6em;
      margin: 0 0 0 -0.75em;
    }
  }
  
  @media (max-width: 480px) {
    .white {
      width: 2em;
      height: 10em;
    }
  
    .black {
      width: 1em;
      height: 5em;
      margin: 0 0 0 -0.5em;
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
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                    <li class="active"> <a href="{{url('/welcome')}}">Inicio</a> </li>
                  
                  <li> <a href="{{url('himno')}}">himno</a> </li>
                  <li> <a href="{{url('contenidoinicio')}}">Contenido </a> </li>
                  <li> <a href="{{url('juego')}}">juegos</a> </li>
                  <li> <a href="{{url('piano')}}">Instrumento</a></li>
                  

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
                 
                  <li  > <a  class="last_manu" href="#"><img src="intro/images/search_icon.png" alt="#" /></a> </li>
                  
                     </ul>
                   </nav>
                
               </div> 
             </div>
           </div>
         </div>
       </div>
     </div>
     <!-- end header inner -->

     <!-- end header -->
    
</header>


<div class="backgro_mh">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heding">
           <h2>INSTRUMENTO PIANO</h2>
           
        </div>
      </div>
    </div>
  </div>
</div>

<div class="card card-header">
  <div class="card bg-whitw">
    <div class="card bg-dark">
      <div class="ul_1">
        <ul class="set">
          <!-- Notas originales -->
          <li onclick="jsNota(261.626)" class="white e">Do</li>
          <li onclick="jsNota(277.183)" class="black ds">Do#</li>
          <li onclick="jsNota(293.665)" class="white d">Re</li>
          <li onclick="jsNota(311.127)" class="black cs">Re#</li>
          <li onclick="jsNota(329.628)" class="white c">Mi</li>
          <li onclick="jsNota(349.228)" class="white f">Fa</li>
          <li onclick="jsNota(369.994)" class="black fs">Fa#</li>
          <li onclick="jsNota(391.995)" class="white g">Sol</li>
          <li onclick="jsNota(415.305)" class="black gs">Sol#</li>
          <li onclick="jsNota(440.000)" class="white a">La</li>
          <li onclick="jsNota(466.164)" class="black as">La#</li>
          <li onclick="jsNota(493.883)" class="white b">Si</li>
          
          <!-- Notas adicionales -->
          <li onclick="jsNota(523.251)" class="white e">Do</li>
          <li onclick="jsNota(554.365)" class="black ds">Do#</li>
          <li onclick="jsNota(587.330)" class="white d">Re</li>
          <li onclick="jsNota(622.254)" class="black cs">Re#</li>
          <li onclick="jsNota(659.255)" class="white c">Mi</li>
          <li onclick="jsNota(698.456)" class="white f">Fa</li>
          <li onclick="jsNota(739.989)" class="black fs">Fa#</li>
          <li onclick="jsNota(783.991)" class="white g">Sol</li>
          <li onclick="jsNota(830.609)" class="black gs">Sol#</li>
          <li onclick="jsNota(880.000)" class="white a">La</li>
          <li onclick="jsNota(932.328)" class="black as">La#</li>
          <li onclick="jsNota(987.767)" class="white b">Si</li>
          
          <!-- Continúa añadiendo más notas hasta llegar a 52 -->
        </ul>
      </div>
    </div>
  </div>
</div>
  







<!-- end Gallery --> 




    <!--  footer -->
    <footr>
      <div class="footer ">
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
                <input class="newslatter" placeholder="ENTER YOUR MAIL" type="text" name=" ENTER YOUR MAIL">
                <button class="submit">Subscribe</button>
              </form>
            </div>
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                  <div class="address">
                    <ul class="loca">
                      <li>
                        <a href="#"><img src="icon/loc.png" alt="#" /></a>Locations
                   
                        <li>
                          
                            <a href="#"><img src="icon/call.png" alt="#" /></a>+12586954775 </li>
                          <li>
                            <a href="#"><img src="icon/email.png" alt="#" /></a>demo@gmail.com </li>
                          </ul>
                         

                        </div>
                      </div>
                       <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
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
               
                  <p>Copyright 2019 All Right Reserved By <a href="https://html.design/">Free  html Templates</a></p>
                </div>
              </div>
            </div>
          </footr>
          <script>
            function jsNota(frecuencia) {
            const audioContext = new (window.AudioContext || window.webkitAudioContext)();
            const oscillator = audioContext.createOscillator();
            oscillator.type = 'sine';
            oscillator.frequency.setValueAtTime(frecuencia, audioContext.currentTime);
            oscillator.connect(audioContext.destination);
            oscillator.start();
            oscillator.stop(audioContext.currentTime + 0.5); // Detiene el sonido después de 0.5 segundos
          }
          </script>
          <!-- end footer -->
          <!-- Javascript files-->
          <script src="js/pin.js"></script>
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