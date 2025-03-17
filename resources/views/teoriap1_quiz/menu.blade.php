<!DOCTYPE html>
<html>
<head>
    <title>Menú del Quiz de Teoría Musical</title>
    <style>
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background: linear-gradient(to bottom, #a8edea 0%, #fed6e3 100%);
            text-align: center;
            padding: 20px;
            min-height: 100vh;
        }

        h1 {
            color: #ff6b6b;
            font-size: 2.5em;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
            margin-bottom: 30px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: rgba(255,255,255,0.9);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }

        p {
            color: #4a4a4a;
            font-size: 1.2em;
            margin: 20px 0;
        }

        .message {
            padding: 15px;
            border-radius: 10px;
            margin: 20px auto;
            width: 80%;
            font-weight: bold;
        }

        .success {
            background: #c8f7c5;
            color: #2c662d;
            border: 2px solid #2c662d;
        }

        .error {
            background: #ffd1d1;
            color: #cc0000;
            border: 2px solid #cc0000;
        }

        .level-links {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-top: 30px;
        }

        .level-button {
            padding: 15px 30px;
            font-size: 1.3em;
            border-radius: 30px;
            text-decoration: none;
            color: white;
            transition: transform 0.3s ease;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .level-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 8px rgba(0,0,0,0.2);
        }

        #basico {
            background: #6c5ce7;
        }

        #intermedio {
            background: #00b894;
        }

        #avanzado {
            background: #ff7675;
        }

        .music-note {
            font-size: 3em;
            margin: 20px 0;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="music-note">🎵</div>
        <h1>Quiz de Teoría Musical</h1>
        
        @if(session('success'))
          <div class="message success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
          <div class="message error">{{ session('error') }}</div>
        @endif

        <p>¡Comienza tu aventura musical!<br>Empieza con el nivel <strong style="color: #6c5ce7;">BÁSICO</strong></p>

        <div class="level-links">
            <a href="{{ route('teoriap1.quiz.form', ['level' => 'basico']) }}" class="level-button" id="basico">Nivel Básico 🎼</a>
            <a href="{{ route('teoriap1.quiz.form', ['level' => 'intermedio']) }}" class="level-button" id="intermedio">Nivel Intermedio 🎹</a>
            <a href="{{ route('teoriap1.quiz.form', ['level' => 'avanzado']) }}" class="level-button" id="avanzado">Nivel Avanzado 🎺</a>
        </div>
    </div>
</body>
</html>