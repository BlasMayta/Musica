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

<style>

.color-white{
    color:white;
}
.flip-box{
    transform-style: preserve-3d;
    perspective: 1000px;
    cursor: pointer;
    margin-top:50px;
}
 .flip-box-front,
.flip-box-back{
    background-size: cover;
    background-position: center;
    border-radius: 8px;
    min-height: 475px;
    transition:transform 0.7s cubic-bezier(.4,.2,.2,1);
    backface-visibility: hidden;

} 
.flip-box-front{
  transform: rotateY(0deg);
  transform-style: preserve-3d;  
}
.flip-box:hover .flip-box-front{
    transform:rotateY(-180deg);
    transform-style: preserve-3d;

}
.flip-box-back{
  position:absolute;
  top:0;
  left:0;
  width: 100%;
  transform:rotateY(180deg);
  transform-style: preserve-3d;
}
.flip-box:hover .flip-box-back{
    transform:rotateY(0deg);
    transform-style: preserve-3d;

}
 .flip-box .inner{
   position:absolute; 
   left:0;
  width: 100%;
  padding: 60px;
  outline:1px solid transparent;
  perspective:inherit;
  z-index:2;
  transform: translateY(-50%)translateZ(60px) scale(.94);
  top:50%; 
  
} 
.flip-box-header{
  font-size:30px;
  color:white;

}
.flip-box p{
  font-size:20px;
  line-height:1.5rem;
}
.flip-box-img{
  margin-top:25px;
}
.flip-box-button{
  background-color: transparent;
  border: 2px solid #fff;
  border-radius: 2px;
  color: #fff;
  cursor: pointer;
  font-size: 20px;
  font-weight: bold;
  margin-top: 25px;
  padding: 15px 20px;
  text-transform: uppercase;
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
           <h2>CONTENIDO</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <!-- TARJETA 1 -->
    <div class= "box-item col-md-4">
      <div class="flip-box">
        <div class="flip-box-front text-center" style="background-image: url('https://i.postimg.cc/MGjrxBNN/piano-reloj.jpg');">
          <div class="inner color-white">
              <h3 class="flip-box-header">INICIO DE LA MUSICA</h3>
              <p>El inicio de la musica que inicio antiaguamente</p>
          
              <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img">
          </div>

        </div>
        <div class="flip-box-back text-center" style="background-image: url('https://i.postimg.cc/MGjrxBNN/piano-reloj.jpg');">
          <div class="inner color-white">
              <h3 class="flip-box-header">INICIO DE LA MUSICA</h3>
              <p>El inicio de la musica que inicio antiaguamente</p>
       
              <br>

                <!-- <button class="flip-box-button" >ingrese para ver</button> -->
                <a class="btn btn-primary" class="flip-box-button" href="{{url('/iniciomusica')}}">ingrese para ver</a> 
              
          </div>

        </div>

       

      </div>
    </div>

    <!-- TARJETA 2 -->
    <div class= "box-item col-md-4">
      <div class="flip-box">
        <div class="flip-box-front text-center" style="background-image: url('https://i.postimg.cc/HsmbSMT3/piannn.webp');">
          <div class="inner color-white">
              <h3 class="flip-box-header">TEORIA DE LA MUSICA</h3>
              
                   <p>Es el estudio de los elementos que componen la música, y sirve para comprender cómo funciona, crear, analizar e interpretar música</p>
              <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img">
          </div>

        </div>
        <div class="flip-box-back text-center" style="background-image: url('https://i.postimg.cc/HsmbSMT3/piannn.webp');">
          <div class="inner color-white">
              <h3 class="flip-box-header">TEORIA DE LA MUSICA</h3>
                 <p>Es el estudio de los elementos que componen la música, y sirve para comprender cómo funciona, crear, analizar e interpretar música</p>
                 <a class="btn btn-primary" class="flip-box-button" href="{{url('/principal')}}">ingrese para ver</a> 
              
          </div>

        </div>

       

      </div>
    </div>
    
    <!-- TARJETA 3 -->
    <div class= "box-item col-md-4">
      <div class="flip-box">
        <div class="flip-box-front text-center" style="background-image: url('https://i.postimg.cc/vmTM1Kpy/evalu.png');">
          <div class="inner color-white">
              <h3 class="flip-box-header">EVALUACION</h3>
              
                   <p> la evaluación es una herramienta que ayuda a identificar sus aprendizajes, ajustar los contenidos y apoyar su desarrollo</p>
              <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img">
          </div>

        </div>
        <div class="flip-box-back text-center" style="background-image: url('https://i.postimg.cc/vmTM1Kpy/evalu.png');">
          <div class="inner color-white">
              <h3 class="flip-box-header">EVALUACION</h3>
                 <p> la evaluación es una herramienta que ayuda a identificar sus aprendizajes, ajustar los contenidos y apoyar su desarrollo</p>
                 <a class="btn btn-primary" class="flip-box-button" href="{{url('/menuevalu')}}">ingrese para ver</a> 
              
          </div>

        </div>

       

      </div>
    </div>
    
  </div>
 
</div>
<!-- /----------------------------------------------------------------------------/ -->
<div class="backgro_mh">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="heding">
           <h2>LECCIONES</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <!-- TARJETA 1 -->
    <div class= "box-item col-md-4">
      <div class="flip-box">
        <div class="flip-box-front text-center" style="background-image: url('https://i.postimg.cc/MGjrxBNN/piano-reloj.jpg');">
          <div class="inner color-white">
              <h3 class="flip-box-header">TEORIA DE LA MUSICA</h3>
              <p>Es el estudio de los elementos que componen la música, y sirve para comprender cómo funciona, crear, analizar e interpretar música</p>
          
              <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img">
          </div>

        </div>
        <div class="flip-box-back text-center" style="background-image: url('https://i.postimg.cc/MGjrxBNN/piano-reloj.jpg');">
          <div class="inner color-white">
              <h3 class="flip-box-header">TEORIA DE LA MUSICA</h3>
              <p>Es el estudio de los elementos que componen la música, y sirve para comprender cómo funciona, crear, analizar e interpretar música</p>
       
              <br>

                <!-- <button class="flip-box-button" >ingrese para ver</button> -->
                <a class="btn btn-primary" class="flip-box-button" href="{{url('/iniciomusica')}}">ingrese para ver</a> 
              
          </div>

        </div>

       

      </div>
    </div>

    <!-- TARJETA 2 -->
    <div class= "box-item col-md-4">
      <div class="flip-box">
        <div class="flip-box-front text-center" style="background-image: url('https://i.postimg.cc/HsmbSMT3/piannn.webp');">
          <div class="inner color-white">
              <h3 class="flip-box-header">EL PENTAGRAMA</h3>
              <p>La Metodologia musical se debe </p>
           
              <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img">
          </div>

        </div>
        <div class="flip-box-back text-center" style="background-image: url('https://i.postimg.cc/HsmbSMT3/piannn.webp');">
          <div class="inner color-white">
              <h3 class="flip-box-header">EL PENTAGRAMA</h3>
              <p>La Metodologia musical se debe </p>
              <p>encotrar factible y practico para los niños</p>
                <!-- <button class="flip-box-button" href="{{url('/iniciomusica')}}" >ingrese para ver</button> -->

                <a class="btn btn-primary" class="flip-box-button" href="{{url('/pentagrama')}}">ingrese para ver</a>
              
          </div>

        </div>

       

      </div>
    </div>
    <!-- TARJETA 3 -->
    <div class= "box-item col-md-4">
      <div class="flip-box">
        <div class="flip-box-front text-center" style="background-image: url('https://i.postimg.cc/B69Qpx2C/pian2.webp');">
          <div class="inner color-white">
              <h3 class="flip-box-header">LAS NOTAS</h3>
              <p>La Metodologia musical se debe </p>
        
              <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img">
          </div>

        </div>
        <div class="flip-box-back text-center" style="background-image: url('https://i.postimg.cc/B69Qpx2C/pian2.webp');">
          <div class="inner color-white">
              <h3 class="flip-box-header">LAS NOTAS</h3>
              <p>La Metodologia musical se debe </p>
  
              <a class="btn btn-primary" class="flip-box-button" href="{{url('/lasnotas')}}">ingrese para ver</a>
              
              
          </div>

        </div>

       

      </div>
    </div>


  </div>
</div>

<!-- /-------------------------------------------------------/ -->
<div class="container">
  <div class="row">
    <!-- TARJETA 1 -->
    <div class= "box-item col-md-4">
      <div class="flip-box">
        <div class="flip-box-front text-center" style="background-image: url('https://i.postimg.cc/MGjrxBNN/piano-reloj.jpg');">
          <div class="inner color-white">
              <h3 class="flip-box-header">LAS FIGURAS</h3>
              <p>La Metodologia musical se debe </p>
          
              <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img">
          </div>

        </div>
        <div class="flip-box-back text-center" style="background-image: url('https://i.postimg.cc/MGjrxBNN/piano-reloj.jpg');">
          <div class="inner color-white">
              <h3 class="flip-box-header">LAS FIGURAS</h3>
              <p>La Metodologia musical se debe </p>
       
              <br>

                <!-- <button class="flip-box-button" >ingrese para ver</button> -->
                <a class="btn btn-primary" class="flip-box-button" href="{{url('/figuras')}}">ingrese para ver</a> 
              
          </div>

        </div>

       

      </div>
    </div>

    <!-- TARJETA 2 -->
    <div class= "box-item col-md-4">
      <div class="flip-box">
        <div class="flip-box-front text-center" style="background-image: url('https://i.postimg.cc/HsmbSMT3/piannn.webp');">
          <div class="inner color-white">
              <h3 class="flip-box-header">LAS CLAVES</h3>
              <p>La Metodologia musical se debe </p>
           
              <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img">
          </div>

        </div>
        <div class="flip-box-back text-center" style="background-image: url('https://i.postimg.cc/HsmbSMT3/piannn.webp');">
          <div class="inner color-white">
              <h3 class="flip-box-header">LAS CLAVES</h3>
              <p>La Metodologia musical se debe </p>
              <p>encotrar factible y practico para los niños</p>
              <a class="btn btn-primary" class="flip-box-button" href="{{url('/claves')}}">ingrese para ver</a> 
              
              
          </div>

        </div>

       

      </div>
    </div>
    <!-- TARJETA 3 -->
    <div class= "box-item col-md-4">
      <div class="flip-box">
        <div class="flip-box-front text-center" style="background-image: url('https://i.postimg.cc/B69Qpx2C/pian2.webp');">
          <div class="inner color-white">
              <h3 class="flip-box-header">EL PUNTILLO</h3>
              <p>La Metodologia musical se debe </p>
        
              <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img">
          </div>

        </div>
        <div class="flip-box-back text-center" style="background-image: url('https://i.postimg.cc/B69Qpx2C/pian2.webp');">
          <div class="inner color-white">
              <h3 class="flip-box-header">EL PUNTILLO</h3>
              <p>La Metodologia musical se debe </p>
  
              <a class="btn btn-primary" class="flip-box-button" href="{{url('/puntillos')}}">ingrese para ver</a> 
              
              
          </div>

        </div>

       

      </div>
    </div>


  </div>
</div>
<!-- /------------------------------------------------------------------/ -->

<div class="container">
  <div class="row">
    <!-- TARJETA 1 -->
    <div class= "box-item col-md-6">
      <div class="flip-box">
        <div class="flip-box-front text-center" style="background-image: url('https://i.postimg.cc/MGjrxBNN/piano-reloj.jpg');">
          <div class="inner color-white">
              <h3 class="flip-box-header">LA LIGADURA</h3>
              <p>La Metodologia musical se debe </p>
          
              <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img">
          </div>

        </div>
        <div class="flip-box-back text-center" style="background-image: url('https://i.postimg.cc/MGjrxBNN/piano-reloj.jpg');">
          <div class="inner color-white">
              <h3 class="flip-box-header">LA LIGADURA</h3>
              <p>La Metodologia musical se debe </p>
       
              <br>

                <!-- <button class="flip-box-button" >ingrese para ver</button> -->
                <a class="btn btn-primary" class="flip-box-button" href="{{url('/laligadura')}}">ingrese para ver</a> 
              
          </div>

        </div>

       

      </div>
    </div>

    <!-- TARJETA 2 -->
    <div class= "box-item col-md-6">
      <div class="flip-box">
        <div class="flip-box-front text-center" style="background-image: url('https://i.postimg.cc/HsmbSMT3/piannn.webp');">
          <div class="inner color-white">
              <h3 class="flip-box-header">EL TRISILLO</h3>
              <p>La Metodologia musical se debe </p>
           
              <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img">
          </div>

        </div>
        <div class="flip-box-back text-center" style="background-image: url('https://i.postimg.cc/HsmbSMT3/piannn.webp');">
          <div class="inner color-white">
              <h3 class="flip-box-header">EL TRISILLO</h3>
              <p>La Metodologia musical se debe </p>
              <p>encotrar factible y practico para los niños</p>
              <a class="btn btn-primary" class="flip-box-button" href="{{url('/eltrisillo')}}">ingrese para ver</a> 
              
          </div>

        </div>

       

      </div>
    </div>
    <!-- TARJETA 3 -->
  


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