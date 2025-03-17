@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>

    <!-- Sección de imágenes grandes -->
    <div class="school-images">
        <div class="image-container">
            <img src="/images/colegio1.jpg" alt="Colegio 1" class="school-img">
            <div class="menu-overlay">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Noticias</a></li>
                    <li><a href="#">Calendario</a></li>
                </ul>
            </div>
        </div>
        <div class="image-container">
            <img src="/images/colegio2.jpg" alt="Colegio 2" class="school-img">
            <div class="menu-overlay">
                <ul>
                    <li><a href="#">Actividades</a></li>
                    <li><a href="#">Talleres</a></li>
                    <li><a href="#">Excursiones</a></li>
                </ul>
            </div>
        </div>
    </div>
@stop

@section('css')
    <style>
        /* Estilos para las imágenes grandes */
        .school-images {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }

        .image-container {
            position: relative;
            width: 45%;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .school-img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }

        .image-container:hover .school-img {
            transform: scale(1.1);
        }

        /* Estilos para los menús que aparecen al pasar el mouse */
        .menu-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .image-container:hover .menu-overlay {
            opacity: 1;
        }

        .menu-overlay ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }

        .menu-overlay ul li {
            margin: 15px 0;
        }

        .menu-overlay ul li a {
            text-decoration: none;
            color: #fff;
            font-size: 20px;
            font-family: 'Comic Sans MS', cursive, sans-serif;
            transition: color 0.3s ease;
        }

        .menu-overlay ul li a:hover {
            color: #ffcc00;
        }
    </style>
@stop

@section('js')
    <!-- <script>console.log('hola')</script> -->
@stop