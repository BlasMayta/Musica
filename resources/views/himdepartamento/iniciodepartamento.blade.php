@extends('adminlte::page')
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css">

    <style>
 
        .ewk_cont_banner{
              width: 100%; /* Ancho completo del contenedor */
            height: 150vh; 
            display:flex;
            justify-content:center;
            /*align-items:center;*/
            font-family:sans-serif;
            background-attachment: fixed;
            background-position: center;
           /* background-repeat: no-repeat;*/
           background-size: cover;
            background-image: url(" {{ asset('path/to/departamento/iniciodep.jpg') }}");
        }
        
         .row{
            display:flex;
           width: 60%;
           justify-content: space-around;
            /* width:100%;
            display:flex;
            max-width:1100px;
            align-items:center; */

            
        }
     .card{
     
            /* width: 40vh;
           margin: 80px;*/
             border-radius:6px;
             overflow:hidden;
           background:#08b0ae ; 
             /*background-color: rgba(0, 0, 0,0.5 );*/
              box-shadow: 0px 3px 20px rgba(0,0,0,1);
            cursor:default;
            transition: all 400ms ease;  
        }
        .card:hover{
            box-shadow: 5px 5px 20px rgba(0,0,0,1);
            transform:traslate(-10%);

        }
        .card img{
           width: 100%;
            height:210px;
          
            background-color: rgba(0, 0, 0,0.2 );
        }
      .card .contenido{
            padding:20px;
            text-align:center;
        }
        .card .contenido p{
            line-height:1.2;
           color: #6a6a6a;
        }

    </style>

@endsection

@section('title', 'Himno')
@section('content_header')
 <!-- <div class="custom-background ">
 <div class="card card-header">
           <div class="ewk_sobra">                    -->
      
        <div class="ewk_cont_banner ">
            
           
                <div class="row row-cols-1 row-cols-md-3 g-4"> 
                    <div class="col">
                        <div class="card">
                            <h5 class="card-header">Himno al departamento de La Paz</h5>
                                <img src="path/to/departamento/lapaz.png" >
                                <div class="contenido">
                                    
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="{{ route('himno.himnonacional') }}" class="btn btn-primary">Ingrese aqui</a>
                                </div>
                            </div>
                    </div>

                    <div class="col">
                        <div class="card">
                            <h5 class="card-header">Himno al departamento de Cochabamba</h5>
                                <img src="path/to/departamento/cochabamba.png" class="card-img-top" alt="...">
                                <div class="contenido">
                                
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="{{ route('himno.salveopatria') }}" class="btn btn-primary">Ingresa aui para ver</a>
                                </div>
                        </div>
                            
                    </div>

                    <div class="col">
                        
                        <div class="card">
                            <h5 class="card-header">Himno al departameto de Santa Cruz</h5>
                            <img src="path/to/departamento/santacruz.png" class="card-img-top" alt="...">
                            <div class="contenido">
                                
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="{{ route('himno.himnobandera') }}" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                     <div class="col">
                        <div class="card">
                            
                                 <img src="path/to/departamento/beni.jpg" class="card-img-top" alt="...">
                            <div class="contenido">
                                 <h5> Himno al Departamento Beni</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="{{ route('himno.himnobandera') }}" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                 
                     </div>

                    <div class="col"> 
                        <div class="card">
                            
                                 <img src="path/to/departamento/pando.png" class="card-img-top" alt="...">
                            <div class="contenido">
                                 <h5 > Himno al Departamento Pando</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="{{ route('himno.himnobandera') }}" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
               
                     </div>

                    <div class="col">
                        <div class="card">
                            
                                <img src="path/to/departamento/oruro.jpg" class="card-img-top" alt="...">
                            <div class="contenido">
                                <h5 > Himno al Departamento Oruro</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="{{ route('himno.himnobandera') }}" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                
                    </div>

                    <div class="col"> 
                        <div class="card">
                            
                                 <img src="path/to/departamento/potosi.png" class="card-img-top" alt="...">
                            <div class="contenido">
                                <h5 >Himno al Departamento Potosi</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="{{ route('himno.himnobandera') }}" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                      
                        <div class="card">
                            
                                 <img src="path/to/departamento/chuquisaca.png" class="card-img-top" alt="...">
                            <div class="contenido">
                                 <h5>Himno al Departamento chuquisaca</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="{{ route('himno.himnobandera') }}" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    
                    </div>

                    <div class="col">
                        <div class="card">
                            
                                 <img src="path/to/departamento/tarija.png" class="card-img-top" alt="...">
                            <div class="contenido">
                                 <h5>Himno al DepartamentoTarija</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="{{ route('himno.himnobandera') }}" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
           
        </div>

@endsection

@section('js')

<script src=" https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@stop




