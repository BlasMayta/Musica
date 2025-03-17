<!DOCTYPE html>
<html>
<head>
    <title>Historial de Notas</title>
</head>
<body>
    <h1>Notas Guardadas</h1>
    <table>
        <thead>
            <tr>
                <th>Nota</th>
                <th>Precisión (cents)</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($notes as $note)
                <tr>
                    <td>{{ $note->note }}</td>
                    <td>{{ $note->accuracy }}</td>
                    <td>{{ $note->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>