<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario Actual 2024 - Gracias</title>
    <script>
        // Función para mostrar/ocultar las respuestas
        function toggleRespuestas() {
            const respuestas = document.getElementById('respuestas');
            if (respuestas.style.display === 'none') {
                respuestas.style.display = 'block';
            } else {
                respuestas.style.display = 'none';
            }
        }
    </script>
</head>
<body>
    <h1>Gracias por completar el formulario.</h1>
    <p>Tu respuesta ha sido registrada.</p>
    <p>Puntaje total del formulario: {{ $incorrectAnswersCount }} / {{ $totalPoints }}</p>
    <p>Tu puntaje: {{ $earnedPoints }}</p>
    <p>Respuestas correctas: {{ $correctAnswersCount }}</p>
    <p>Respuestas incorrectas: {{ $incorrectAnswersCount }}</p>

    <!-- Botón para ver/ocultar respuestas -->
    <button onclick="toggleRespuestas()">Ver Respuestas</button>

    <!-- Contenedor oculto para las respuestas -->
    <div id="respuestas" style="display: none; margin-top: 10px;">
        <h2>Respuestas del Formulario</h2>
        <ul>
            <!-- @foreach ($respuestas as $index => $respuesta)
                <li>
                    Pregunta {{ $index + 1 }}: 
                    {{ $respuesta['estado'] == 'correcta' ? 'Correcta' : 'Incorrecta' }} 
                    - <b>{{ $respuesta['respuesta'] }}</b>
                </li>
            @endforeach -->
        </ul>
    </div>
</body>
</html>
