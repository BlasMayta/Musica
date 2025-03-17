<!DOCTYPE html>
<html>
<head>
    <title>Evaluación - Nivel {{ ucfirst($nivel) }}</title>
</head>
<body>
    <h1>Evaluación de Instrumentos - Nivel {{ ucfirst($nivel) }}</h1>

    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('error'))
        <p style="color:red;">{{ session('error') }}</p>
    @endif

    <form action="{{ route('instru.evaluate', $nivel) }}" method="POST">
        @csrf
        <label for="performance">Ingrese el desempeño (0-10):</label>
        <input type="number" step="0.1" name="performance" id="performance" min="0" max="10" required>
        <button type="submit">Evaluar</button>
    </form>

    <br>
    <a href="{{ route('instru.menu') }}">Volver al menú</a>
</body>
</html>
