<!DOCTYPE html>
<html>
<head>
    <title>Detector de Notas</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
   
   
</head>
<body>
    <button id="startMic">Activar Micrófono</button>
    <div id="results">
        Nota Detectada: <span id="note"></span><br>
        Precisión: <span id="accuracy"></span> cents
    </div>

    <form id="saveForm">
        <input type="hidden" name="note" id="inputNote">
        <input type="hidden" name="accuracy" id="inputAccuracy">
        <button type="submit">Guardar en BD</button>
    </form>

    <!-- Enlace al historial -->
    <a href="{{ route('notes.history') }}">Ver Historial</a>

    <!-- Scripts -->
  
    <!-- Por esta (versión 6.2.1 estable): -->
    
    <script>
        window.NOTE_STORE_ROUTE = "{{ route('notes.store') }}"; // 👈 Aquí
    </script>
    <!-- Meyda DEBE cargarse primero -->
    <script src="https://unpkg.com/meyda@6.2.1/dist/web/meyda.min.js"></script>
    <!-- Luego tu script -->
    <script src="{{ asset('js/audio.js') }}"></script>
    

</body>
</html>