<!DOCTYPE html>
<html>
<head>
    <title>Aventura Musical - Trimestres</title>
    <style>
        body {
            font-family: 'Comic Sans MS', cursive;
            background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
            padding: 20px;
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .trimestre {
            background: rgba(255,255,255,0.9);
            border-radius: 20px;
            padding: 25px;
            margin: 20px 0;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            border-left: 15px solid;
        }

        .primer-trimestre { border-color: #ff6b6b; }
        .segundo-trimestre { border-color: #4b9cdb; }
        .tercer-trimestre { border-color: #7dc242; }

        h2 {
            color: #2d3436;
            font-size: 2em;
            margin-bottom: 20px;
            text-align: center;
            animation: float 3s ease-in-out infinite;
        }

        .temas-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
        }

        .tema-btn {
            padding: 20px;
            border: none;
            border-radius: 15px;
            background: white;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: left;
            position: relative;
            font-size: 1.1em;
            box-shadow: 0 3px 6px rgba(0,0,0,0.1);
        }

        .tema-btn:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 10px rgba(0,0,0,0.2);
        }

        .tema-btn::before {
            content: "🎵";
            margin-right: 10px;
            font-size: 1.3em;
        }

        .primer-trimestre .tema-btn { background: #ffe4e6; }
        .segundo-trimestre .tema-btn { background: #e3f2fd; }
        .tercer-trimestre .tema-btn { background: #e8f5e9; }

        .numero-tema {
            display: inline-block;
            width: 30px;
            height: 30px;
            background: #ff6b6b;
            color: white;
            border-radius: 50%;
            text-align: center;
            line-height: 30px;
            margin-right: 10px;
            font-weight: bold;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .emoji-trimestre {
            font-size: 1.5em;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Primer Trimestre -->
        <div class="trimestre primer-trimestre">
            <h2>Primer Trimestre 🌸
                <span class="emoji-trimestre">🎤</span></h2>
            <div class="temas-grid">
            <button class="tema-btn" onclick="window.location.href='{{ url('/ptecvocal') }}'">
                <span class="numero-tema">1</span>
                Ejercicios de Técnica Vocal
            </button>
                <button class="tema-btn"  onclick="window.location.href='{{ url('/pentonacion') }}'" >
                    <span class="numero-tema">2</span>
                    Entonación en Himnos y Marchas
                </button>
                <button class="tema-btn" onclick="window.location.href='{{ url('/pparametro') }}'">
                    <span class="numero-tema">3</span>
                    Parámetros del Sonido
                </button>
            </div>
        </div>

        <!-- Segundo Trimestre -->
        <div class="trimestre segundo-trimestre">
            <h2>Segundo Trimestre ☀️
                <span class="emoji-trimestre">🎹</span></h2>
            <div class="temas-grid">
                <button class="tema-btn">
                    <span class="numero-tema">1</span>
                    Canciones y Coro Infantil
                </button>
                <button class="tema-btn">
                    <span class="numero-tema">2</span>
                    Escritura Musical
                </button>
                <button class="tema-btn">
                    <span class="numero-tema">3</span>
                    Ritmo y Estructura Musical
                </button>
                <button class="tema-btn">
                    <span class="numero-tema">4</span>
                    Instrumentos Aerófonos
                </button>
                <button class="tema-btn">
                    <span class="numero-tema">5</span>
                    Clasificación de Instrumentos
                </button>
            </div>
        </div>

        <!-- Tercer Trimestre -->
        <div class="trimestre tercer-trimestre">
            <h2>Tercer Trimestre 🍂
                <span class="emoji-trimestre">💃</span></h2>
            <div class="temas-grid">
                <button class="tema-btn">
                    <span class="numero-tema">1</span>
                    Composiciones con Ritmo
                </button>
                <button class="tema-btn">
                    <span class="numero-tema">2</span>
                    Signos de Matiz Musical
                </button>
                <button class="tema-btn">
                    <span class="numero-tema">3</span>
                    Bailes Bolivianos
                </button>
                <button class="tema-btn">
                    <span class="numero-tema">4</span>
                    Música Nacional
                </button>
                <button class="tema-btn">
                    <span class="numero-tema">5</span>
                    Instrumentos Folklóricos
                </button>
            </div>
        </div>
    </div>
</body>
</html>