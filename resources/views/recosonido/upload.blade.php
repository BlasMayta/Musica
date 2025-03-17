<!DOCTYPE html>
<html>
<head>
    <title>Subir Audio</title>
</head>
<body>
    <h1>Subir Audio para Reconocimiento</h1>
    <!-- El formulario debe usar enctype="multipart/form-data" para enviar archivos -->
    <form action="{{ route('subir.audio') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="audio">Selecciona un archivo de audio:</label>
        <input type="file" name="audio" id="audio" required>
        <br><br>
        <button type="submit">Subir Audio</button>
    </form>
</body>
</html>
