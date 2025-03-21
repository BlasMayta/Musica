<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Resultado del Quiz</title>
    <style>
        body {
            font-family: 'Comic Sans MS', cursive;
            background: linear-gradient(135deg, #ff9a9e 0%, #fad0c4 100%);
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: rgba(255,255,255,0.95);
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }

        h1 {
            color: #6c5ce7;
            text-align: center;
            font-size: 2.5em;
            text-shadow: 2px 2px 4px rgba(108,92,231,0.2);
            margin-bottom: 30px;
        }

        .section {
            background: #f8f9fa;
            border: 3px solid #a2d9ff;
            border-radius: 15px;
            padding: 20px;
            margin: 20px 0;
            position: relative;
            transition: transform 0.3s ease;
        }

        .section:hover {
            transform: translateY(-5px);
        }

        .score-card {
            background: linear-gradient(45deg, #ffd700, #ffb347);
            border: 4px solid #fff;
            border-radius: 20px;
            padding: 25px;
            text-align: center;
            margin: 20px 0;
            position: relative;
        }

        .score-card::after {
            content: "🏆";
            font-size: 60px;
            position: absolute;
            right: 20px;
            top: -30px;
            animation: bounce 1.5s infinite;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }

        .result-badge {
            display: inline-block;
            padding: 10px 25px;
            border-radius: 25px;
            font-weight: bold;
            margin: 10px 0;
            font-size: 1.2em;
        }

        .passed {
            background: #c8f7c5;
            color: #2c662d;
            border: 3px solid #2c662d;
        }

        .failed {
            background: #ffd1d1;
            color: #cc0000;
            border: 3px solid #cc0000;
        }

        button {
            background: #6c5ce7;
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 30px;
            font-size: 1.2em;
            cursor: pointer;
            transition: all 0.3s ease;
            margin: 15px 0;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        button:hover {
            background: #5b4bc4;
            transform: scale(1.05);
            box-shadow: 0 6px 8px rgba(0,0,0,0.2);
        }

        #questionDetails {
            background: #e3f2fd;
            border: 3px dashed #64b5f6;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            background: white;
            margin: 10px 0;
            padding: 15px;
            border-radius: 15px;
            border: 2px solid #ddd;
            position: relative;
        }

        li::before {
            content: "🎵";
            margin-right: 10px;
            font-size: 1.2em;
        }

        .progress-bar {
            width: 100%;
            height: 30px;
            background: #eee;
            border-radius: 15px;
            margin: 10px 0;
            overflow: hidden;
            position: relative;
        }

        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #a8edea, #fed6e3);
            transition: width 0.5s ease;
        }

        .fuzzy-details {
            background: #fff3e0;
            border-color: #ffb74d;
        }

        .fuzzy-details::before {
            content: "🤔";
            font-size: 40px;
            position: absolute;
            left: -20px;
            top: -20px;
        }

        a {
            display: inline-block;
            padding: 12px 25px;
            background: #00b894;
            color: white;
            text-decoration: none;
            border-radius: 25px;
            margin-top: 20px;
            transition: transform 0.3s ease;
        }

        a:hover {
            transform: scale(1.05);
        }

        .emoji {
            font-size: 1.2em;
            margin-right: 5px;
        }

        .glow {
            animation: glow 2s infinite alternate;
        }

        @keyframes glow {
            from { text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #6c5ce7; }
            to { text-shadow: 0 0 20px #fff, 0 0 30px #6c5ce7, 0 0 40px #6c5ce7; }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><span class="emoji">🎉</span>Resultado del Prueba Musical<span class="emoji">🎻</span></h1>
        
        <div class="score-card">
            <div class="glow" style="font-size: 2em; color: #6c5ce7;">
                {{ number_format($body['average_score'], 2) }} / 10
            </div>
            <div class="result-badge {{ $body['passed'] ? 'passed' : 'failed' }}">
                {{ $body['passed'] ? '¡APROBASTE! 🎊' : 'INTÉNTALO DE NUEVO 💪' }}
            </div>
            
            <div class="progress-bar">
                <div class="progress-fill" style="width: {{ $body['final_grade'] * 10 }}%"></div>
            </div>
            
            <p><span class="emoji">✅</span>Correctas: {{ $body['correct_count'] }}</p>
            @if(isset($body['next_level']) && $body['next_level'])
                <p><span class="emoji">🚀</span>Siguiente Nivel: {{ ucfirst($body['next_level']) }}</p>
            @endif
        </div>

        <button id="toggleQuestionDetails"><span class="emoji">🔍</span>Mostrar/Ocultar Detalles</button>
        
        <div id="questionDetails" class="section">
            <h3><span class="emoji">📋</span>Detalle de Preguntas</h3>
            <ul>
                @foreach($body['scores'] as $score)
                    <li style="{{ $score['score'] >= 5 ? 'border-color: #2c662d;' : 'border-color: #cc0000;' }}">
                        <strong>🎼 Pregunta:</strong> {{ $score['question'] }}<br>
                        <strong>✅ Correcta:</strong> {{ $score['correct_answer'] }}<br>
                        <strong>✏️ Tu respuesta:</strong> {{ $score['student_answer'] }}<br>
                        <strong>📊 Similitud:</strong> {{ $score['similarity'] }}%<br>
                        <strong>⭐ Puntaje:</strong> {{ number_format($score['score'], 2) }}
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="section fuzzy-details">
            <h3><span class="emoji">🎲</span>Lógica Difusa</h3>
            <p>{{ $body['fuzzy_details']['regla_activa'] }}</p>
        </div>

        <a href="{{ route('teoriap1.quiz.menu') }}"><span class="emoji">🏠</span>Volver al Menú</a>
    </div>

    <script>
        // El mismo script anterior para el toggle
        document.getElementById('toggleQuestionDetails').addEventListener('click', function() {
            var details = document.getElementById('questionDetails');
            details.style.display = details.style.display === 'none' ? 'block' : 'none';
        });
    </script>
</body>
</html>