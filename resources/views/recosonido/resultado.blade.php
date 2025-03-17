<!DOCTYPE html>
<html>
<head>
    <title>Resultado del Reconocimiento</title>
</head>
<body>
    <h1>Resultado del Procesamiento de Audio</h1>
    <p><strong>Resultado:</strong> {{ $data['resultado'] ?? 'No disponible' }}</p>
    <p><strong>Detalles:</strong> {{ $data['fuzzy_output'] ?? '' }}</p>
</body>
</html>
