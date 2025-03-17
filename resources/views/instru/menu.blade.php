<!DOCTYPE html>
<html>
<head>
    <title>Menú Instrumentos Musicales</title>
</head>
<body>
    <h1>Evaluación de Instrumentos Musicales</h1>
    <ul>
        <li><a href="{{ route('instru.form', 'basic') }}">Nivel Básico</a></li>
        <li><a href="{{ route('instru.form', 'intermediate') }}">Nivel Intermedio</a></li>
        <li><a href="{{ route('instru.form', 'advanced') }}">Nivel Avanzado</a></li>
    </ul>
</body>
</html>
