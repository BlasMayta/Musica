<!DOCTYPE html>
<html>
<head>
    <title>Detector de Notas</title>
</head>
<body>
<!-- <meta name="csrf-token" content="{{ csrf_token() }}"> -->
    <!-- Botón para iniciar el micrófono -->
    <button id="startMic">Iniciar Micrófono</button>
    
    <!-- Visualización de resultados -->
    <div id="result">
        Nota: <span id="note"></span><br>
        Precisión: <span id="accuracy"></span> cents
    </div>

    <!-- Canvas para visualización de onda (opcional) -->
    <canvas id="waveform" width="300" height="100"></canvas>

    <!-- Formulario para guardar datos -->
    <form id="saveData">
        @csrf
        <input type="hidden" name="note" id="inputNote">
        <input type="hidden" name="accuracy" id="inputAccuracy">
        <button type="submit">Guardar</button>
    </form>

    <!-- Scripts -->
    <script src="https://unpkg.com/meyda/dist/web/meyda.min.js"></script>
    <script src="{{ asset('js/audio.js') }}"></script>
    
</body>
</html>