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
        .left-content {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .right-content {
            background-color: #e9ecef;
            padding: 20px;
        }
        .custom-background {
            /*width: 100%; /* Ancho completo del contenedor */
           /* height: 400px; /* Altura específica */
          
            background-image: url(" {{ asset('path/to/560.jpg') }}");
            background-size: cover; /* Ajusta la imagen para cubrir el elemento */
            background-position: center; /* Centra la imagen */
            background-repeat: no-repeat; /* Evita que la imagen se repita */
        }
        .hymn-title {
            font-size: 2em;
            margin-bottom: 10px;
            text-align: center;
            color: #2c3e50;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }
        .hymn-container {
            max-width: 1500px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            border: 1px solid #e1e1e1;
            background-image: url('img/pattern.png');
            background-size: cover;
            background-position: center;
        }
        .hymn-paragraph {
            margin-bottom: 10px;
            line-height: 1;
            font-size: 1.2em;
            color: #34495e;
            transition: color 0.3s ease;

        }
        .hymn-paragraph:hover {
            color: #e74c3c;
        }
    </style>

@endsection

@section('title', 'Himno')
@section('content_header')
<div class="custom-background">

    <div class="card card-header">
       

         <div class="hymn-container mt-5">

                <div class="row">
                    <div class="col-md-6 left-content">
                        <h1 class="hymn-title">{{ $title }}</h1>
                        <h5>Letra</h5>
                        <p>{{$letra }}</p>
                        <h5>Música</h5>
                        <p>{{$musica}}</p>
                        <h5>Estrofas</h5>
                        
                        <ul>

                            @foreach ($estrofas as $estrofa)
                            
                                <p class="text-center  hymn-paragraph ">{{ $estrofa }} </p>
                            
                            @endforeach

                        </ul>

                    </div>
        
                    <div class="col-md-6 right-content  ">
                        <h3>Imagen</h3>
                        
                        <img src="{{ asset('path/to/mapa.png') }}" alt="Imagen relacionada con el himno" class="img-fluid" >
                        <h3>Video</h3>
                        <video controls class="w-100">
                    
                            <source src= "{{ asset('path/to/salveopatria.mp4') }}" type="video/mp4">
                            Tu navegador no soporta la reproducción de video.
                        </video>
                        <h3>Audio</h3>
                        <audio controls class="w-100">
                        
                            <source src="{{ asset('path/to/Salve oh Patria.mp3') }}"type="audio/mpeg">
                            Tu navegador no soporta la reproducción de audio.
                        </audio>
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




