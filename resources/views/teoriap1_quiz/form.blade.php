<!DOCTYPE html>
<html>
<head>
    <title>Quiz - Nivel {{ ucfirst($level) }}</title>
    <style>
        body {
            font-family: 'Comic Sans MS', cursive, sans-serif;
            background: linear-gradient(to bottom, #fff1eb 0%, #ace0f9 100%);
            padding: 20px;
            min-height: 100vh;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: rgba(255,255,255,0.95);
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }

        h1 {
            color: #ff7f50;
            text-align: center;
            font-size: 2.3em;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }

        .question-box {
            background: #f8f9fa;
            border: 3px solid #a2d9ff;
            border-radius: 15px;
            padding: 20px;
            margin: 20px 0;
            transition: transform 0.3s ease;
        }

        .question-box:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .question-text {
            color: #2d3436;
            font-size: 1.2em;
            margin-bottom: 15px;
        }

        .options-container {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .option-label {
            display: flex;
            align-items: center;
            padding: 12px;
            background: white;
            border-radius: 25px;
            cursor: pointer;
            border: 2px solid #ddd;
            transition: all 0.3s ease;
        }

        .option-label:hover {
            background: #e3f2fd;
            border-color: #64b5f6;
            transform: scale(1.02);
        }

        input[type="radio"] {
            width: 20px;
            height: 20px;
            margin-right: 15px;
            accent-color: #64b5f6;
        }

        button[type="submit"] {
            background: #ff6b6b;
            color: white;
            padding: 15px 40px;
            font-size: 1.3em;
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin: 20px auto;
            display: block;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        button[type="submit"]:hover {
            background: #ff5252;
            transform: scale(1.05);
            box-shadow: 0 6px 8px rgba(0,0,0,0.2);
        }

        .message {
            padding: 15px;
            border-radius: 10px;
            margin: 20px 0;
            text-align: center;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .success {
            background: #d4edda;
            color: #155724;
            border: 2px solid #c3e6cb;
        }

        .error {
            background: #f8d7da;
            color: #721c24;
            border: 2px solid #f5c6cb;
        }

        .emoji {
            font-size: 1.2em;
        }

        .music-note {
            text-align: center;
            font-size: 2.5em;
            animation: float 3s ease-in-out infinite;
            margin-bottom: 20px;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="music-note">🎶</div>
        <h1>Quiz Musical - Nivel {{ ucfirst($level) }} 🎵</h1>

        @if(session('error'))
          <div class="message error">
              <span class="emoji">❌</span> {{ session('error') }}
          </div>
        @endif
        @if(session('success'))
          <div class="message success">
              <span class="emoji">✅</span> {{ session('success') }}
          </div>
        @endif

        <form action="{{ route('teoriap1.quiz.evaluate', ['level' => $level]) }}" method="POST">
            @csrf
            @foreach($questions as $q)
                <div class="question-box">
                    <p class="question-text">🎼 {{ $q['question'] }}</p>
                    <div class="options-container">
                        @foreach($q['options'] as $key => $option)
                            <label class="option-label">
                                <input type="radio" name="{{ $q['key'] }}" value="{{ $key }}" required>
                                <span class="option-text">{{ $key }}) {{ $option }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
            @endforeach
            <button type="submit">Enviar Respuestas 🚀</button>
        </form>
    </div>
</body>
</html>