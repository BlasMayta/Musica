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

/* .body{
  width: 100%;
  height: 100%;
  display:flex;
  justify-content:center;
  background: #222;
} */

.flip-box{
   
    /* perspective: 1000px; */
     cursor: pointer;
    margin-top:50px; */
}
.wrapper{
    display: flex;
    width: 90%;
    justify-content: space-around;
}
.card{
    width: 280px;
    height: 360px;
    padding: 2rem 1rem;
    background: #fff;
    position: relative;
    display: flex;
    align-items: flex-end;
     box-shadow: 0px 7px 10px rgb(0, 0, 0,1); 
    transition: 0.5s ease-in-out;

}
.card:hover{
    transform: translateY(20px);

}
.card::before{
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    width: 100%;
    height: 100%;
    background: linear-gradient(to bottom, rgba(0,176,155,0.5),rgba(150,201,61,1));
    z-index: 2;
    transition: 0.5s all;
    opacity: 0;

}
.card:hover:before{
    opacity: 1;
}
.card .flip{
    width: 100%;
    height: 100%;
    object-fit: cover ;
    position: absolute;
    top: 0;
    left: 0;
}
.card .info{
    position: relative;
    z-index: 9;
    color: #fff;
    opacity:1 ;
    transform: translateY(90px);
    transition: 0.5s all;
}
.card:hover .info{
    opacity: 1;
    transform: translateY(0px);
}
.card .info h1{
   margin: 0;
   color: #fff;

}
.card .info p{
    letter-spacing: 1px;
    font-size: 15px;
    margin-top: 8px;
    margin-bottom: 20px;
 
 }
 .card .info .btn{
    text-decoration: none;
    padding: 0.5rem 1rem;
    /* background: #fff;
    color: #000; */
    font-size: 14px;
    font-weight: bold;
    cursor: pointer;
    transition: 0.4s ease-in-out;

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
           <h2>INICIO DE LA MUSICA</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="wrapper">
      
        <div class="card col-md-4">
          <div class="flip-box">
            <div class="flip text-center" style="background-image: url('https://i.postimg.cc/HsmbSMT3/piannn.webp');">
              <img src="" alt="">
              <div class="info">
                  <h1>SONORO</h1>
                <p>este contenido es para niños</p>
                <a href="" class="btn btn-primary">ingese par ver </a>
              </div>
            </div>
          </div>
        </div>

        <div class="card col-md-4">
          <div class="flip-box">
            <div class="flip text-center" style="background-image: url('https://i.postimg.cc/HsmbSMT3/piannn.webp');">
              <img src="" alt="">
                <div class="info">
                  <h1>SONORO</h1>
                <p>este contenido es para niños</p>
                <a href="" class="btn btn-primary">ingese par ver </a>
              </div>
            </div>
          </div>
        </div>

        <div class="card col-md-4">
          <div class="flip-box">
            <div class="flip text-center" style="background-image: url('https://i.postimg.cc/HsmbSMT3/piannn.webp');">
              <img src="" alt="">
              <div class="info">
                  <h1>SONORO</h1>
                <p>este contenido es para niños</p>
                <a href="" class="btn btn-primary">ingese par ver </a>
              </div>
            </div>
          </div>
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