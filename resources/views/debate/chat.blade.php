<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat de Debate</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .chat-container {
            border: 1px solid #ccc;
            padding: 10px;
            height: 400px;
            overflow-y: scroll;
            margin-bottom: 10px;
        }
        .mensaje {
            margin-bottom: 10px;
        }
        .usuario {
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <h1>Chat de Debate</h1>
    <h2>Tema: {{ $tema }}</h2>
    <div class="chat-container">
        @foreach($mensajes as $mensaje)
            <div class="mensaje">
                <span class="usuario">{{ $mensaje->usuario }}:</span>
                <span>{{ $mensaje->mensaje }}</span>
                <small>({{ $mensaje->created_at->diffForHumans() }})</small>
            </div>
        @endforeach
    </div>
    <form action="{{ route('chat.enviar') }}" method="POST">
        @csrf
        <input type="text" name="mensaje" placeholder="Escribe tu mensaje" required>
        <button type="submit">Enviar</button>
    </form>
    <a href="{{ route('chat.limpiar') }}">Limpiar Chat</a>
</body>
</html>