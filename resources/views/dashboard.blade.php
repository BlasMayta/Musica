@extends('adminlte::page')

@section('title', 'Dashboard Compacto')

@section('content_header')
    <h1 class="mb-4">Mi Dashboard Principal</h1>
@stop

@section('css')
    <style>
        .image-gallery img {
            transition: transform 0.3s ease;
            cursor: pointer;
        }
        
        .image-gallery img:hover {
            transform: scale(1.03);
        }
        
        #miniChart {
            max-width: 100%;
            margin: auto;
        }
        
        .info-box {
            margin-bottom: 10px;
            min-height: 85px;
        }
        
        .info-box-icon {
            font-size: 1.8rem;
        }
    </style>
@stop

@section('content')
    <div class="container-fluid">
        <!-- Fila de Estadísticas -->
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="info-box bg-gradient-info">
                    <span class="info-box-icon"><i class="fas fa-users"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Usuarios Activos</span>
                        <span class="info-box-number">1,234</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-6">
                <div class="info-box bg-gradient-success">
                    <span class="info-box-icon"><i class="fas fa-dollar-sign"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Ventas Hoy</span>
                        <span class="info-box-number">$4,567</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fila de Gráfico e Imágenes -->
        <div class="row">
            <!-- Gráfico Pequeño -->
            <div class="col-md-4">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h3 class="card-title">Actividad Diaria</h3>
                    </div>
                    <div class="card-body p-2">
                        <canvas id="miniChart" style="height: 150px;"></canvas>
                    </div>
                </div>
            </div>

            <!-- Sección de Imágenes -->
            <div class="col-md-8">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <h3 class="card-title">Visualizaciones</h3>
                        <button class="btn btn-sm btn-primary float-right" onclick="addImage()">
                            <i class="fas fa-plus"></i> Agregar
                        </button>
                    </div>
                    <div class="card-body image-gallery">
                        <div class="row" id="imageContainer">
                            <!-- Imágenes existentes -->
                            <div class="col-6 col-md-4 mb-3">
                                <img src="https://via.placeholder.com/300x200" 
                                     class="img-fluid rounded" 
                                     alt="Ejemplo 1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico Mini
        const miniChart = new Chart(document.getElementById('miniChart'), {
            type: 'bar',
            data: {
                labels: ['Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
                datasets: [{
                    label: 'Visitas',
                    data: [65, 59, 80, 81, 56, 55],
                    backgroundColor: '#4e73df',
                    borderWidth: 0
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false }
                },
                scales: {
                    y: { display: false },
                    x: { 
                        grid: { display: false },
                        ticks: { font: { size: 10 } }
                    }
                }
            }
        });

        // Función para agregar imágenes
        function addImage(src = 'https://via.placeholder.com/300x200') {
            const container = document.getElementById('imageContainer');
            const newCol = document.createElement('div');
            newCol.className = 'col-6 col-md-4 mb-3';
            
            const newImg = document.createElement('img');
            newImg.className = 'img-fluid rounded';
            newImg.src = src;
            
            newCol.appendChild(newImg);
            container.appendChild(newCol);
        }
    </script>
@stop