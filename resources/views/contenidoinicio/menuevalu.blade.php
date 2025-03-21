<!DOCTYPE html>
<html>
<head>
    <title>Aventura Musical - Trimestres</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --color-primario: #E84A5F;
            --color-secundario: #2A363B;
            --color-terciario: #FF847C;
            --color-fondo: #F8F8F8;
        }

        body {
            font-family: 'Comic Neue', cursive;
            background: linear-gradient(45deg, #fff3e0 0%, #fce4ec 100%);
            padding: 30px;
            min-height: 100vh;
            position: relative;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .trimestre {
            background: white;
            border-radius: 25px;
            padding: 30px;
            margin: 25px 0;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            border: 4px solid;
            transition: transform 0.3s ease;
        }

        .trimestre:hover {
            transform: translateY(-5px);
        }

        .primer-trimestre { 
            border-color: var(--color-primario);
            background: linear-gradient(135deg, #ffe9ec 0%, #ffffff 100%);
        }

        .segundo-trimestre { 
            border-color: #3F72AF;
            background: linear-gradient(135deg, #e3f2fd 0%, #ffffff 100%);
        }

        .tercer-trimestre { 
            border-color: #45B7D1;
            background: linear-gradient(135deg, #e0f7fa 0%, #ffffff 100%);
        }

        h2 {
            color: var(--color-secundario);
            font-size: 2.5em;
            margin: 0 0 30px 0;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 15px;
            padding: 15px;
            border-radius: 15px;
            background: linear-gradient(45deg, var(--color-primario), var(--color-terciario));
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }

        .temas-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
        }

        .tema-btn {
            padding: 25px;
            border: none;
            border-radius: 15px;
            background: linear-gradient(145deg, #ffffff, #f5f5f5);
            cursor: pointer;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            text-align: left;
            position: relative;
            font-size: 1.1em;
            display: flex;
            align-items: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border: 2px solid transparent;
        }

        .tema-btn:hover {
            transform: scale(1.02);
            box-shadow: 0 8px 25px rgba(0,0,0,0.2);
            border-color: var(--color-primario);
        }

        .tema-btn i {
            font-size: 1.5em;
            margin-right: 15px;
            width: 40px;
            text-align: center;
        }

        .primer-trimestre .tema-btn i { color: var(--color-primario); }
        .segundo-trimestre .tema-btn i { color: #3F72AF; }
        .tercer-trimestre .tema-btn i { color: #45B7D1; }

        .numero-tema {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            background: var(--color-secundario);
            color: white;
            border-radius: 50%;
            margin-right: 15px;
            font-weight: bold;
            font-size: 1.1em;
            flex-shrink: 0;
        }

        /* Botón de Regreso */
        .btn-regresar {
            position: fixed;
            bottom: 40px;
            right: 40px;
            padding: 15px 30px;
            background: linear-gradient(135deg, var(--color-primario), var(--color-terciario));
            color: white;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            box-shadow: 0 8px 25px rgba(232, 74, 95, 0.4);
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 1.1em;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            z-index: 1000;
            border: 2px solid white;
        }

        .btn-regresar:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 12px 30px rgba(232, 74, 95, 0.5);
            background: linear-gradient(135deg, var(--color-terciario), var(--color-primario));
            animation: boton-flotante 1.5s ease-in-out infinite;
        }

        .btn-regresar i {
            font-size: 1.3em;
            transition: transform 0.3s ease;
        }

        .btn-regresar:hover i {
            transform: translateX(-5px);
        }

        @keyframes boton-flotante {
            0%, 100% { transform: translateY(-3px); }
            50% { transform: translateY(3px); }
        }

        @media (max-width: 768px) {
            .btn-regresar {
                bottom: 20px;
                right: 20px;
                padding: 12px 20px;
                font-size: 1em;
            }
        }
    </style>
</head>
<body>
    <button class="btn-regresar" onclick="window.location.href = '{{ url('/contenidoinicio') }}'">
        <i class="fas fa-arrow-circle-left"></i>
        Volver al Menú
    </button>

    <div class="container">
        <!-- Primer Trimestre -->
        <div class="trimestre primer-trimestre">
            <h2>
                <i class="fas fa-microphone-alt"></i>
                Primer Trimestre Evaluacion
            </h2>
            <div class="temas-grid">
                <button class="tema-btn" onclick="window.location.href='{{ url('/teoriap1-quiz') }}'">
                    <span class="numero-tema">1</span>
                    <i class="fas fa-vocal"></i>
                    Evaluacion Ejercicios de Técnica Vocal
                </button>
                <button class="tema-btn">
                    <span class="numero-tema">2</span>
                    <i class="fas fa-music"></i>
                    Evaluacion Entonación en Himnos
                </button>
                <button class="tema-btn">
                    <span class="numero-tema">3</span>
                    <i class="fas fa-waveform"></i>
                    EvaluacionParámetros del Sonido
                </button>
            </div>
        </div>

        <!-- Segundo Trimestre -->
        <div class="trimestre segundo-trimestre">
            <h2>
                <i class="fas fa-piano"></i>
                Segundo Trimestre Evaluacion
            </h2>
            <div class="temas-grid">
                <button class="tema-btn">
                    <span class="numero-tema">1</span>
                    <i class="fas fa-child"></i>
                    Evaluacion Coro Infantil
                </button>
                <button class="tema-btn">
                    <span class="numero-tema">2</span>
                    <i class="fas fa-pen-nib"></i>
                    Evaluacion Escritura Musical
                </button>
                <button class="tema-btn">
                    <span class="numero-tema">3</span>
                    <i class="fas fa-drum"></i>
                    Evaluacion Estructura Musical
                </button>
                <button class="tema-btn">
                    <span class="numero-tema">4</span>
                    <i class="fas fa-wind"></i>
                    Evaluacion Instrumentos Aerófonos
                </button>
            </div>
        </div>

        <!-- Tercer Trimestre -->
        <div class="trimestre tercer-trimestre">
            <h2>
                <i class="fas fa-guitar"></i>
                 Tercer Trimestre Evaluacion
            </h2>
            <div class="temas-grid">
                <button class="tema-btn" onclick="window.location.href='{{ url('/ptecvocal') }}'">
                    <span class="numero-tema">1</span>
                    <i class="fas fa-drum-steelpan"></i>
                    Evaluacion Composiciones con Ritmo
                </button>
                <button class="tema-btn">
                    <span class="numero-tema">2</span>
                    <i class="fas fa-volume-up"></i>
                    Evaluacion Signos de Matiz
                </button>
                <button class="tema-btn">
                    <span class="numero-tema">3</span>
                    <i class="fas fa-flag"></i>
                    Evaluacion Bailes Bolivianos
                </button>
                <button class="tema-btn">
                    <span class="numero-tema">4</span>
                    <i class="fas fa-globe-americas"></i>
                    Evaluacion Música Nacional
                </button>
            </div>
        </div>
    </div>
</body>
</html>