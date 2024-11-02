<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Preguntas</title>
</head>
<body>

<form id="questionForm">
    <h2>Formulario de Preguntas</h2>

    <label for="question1">1. ¿Cuál es tu lenguaje de programación favorito?</label>
    <input type="text" id="question1" name="question1"><br><br>

    <label for="question2">2. ¿Tienes experiencia en desarrollo web?</label>
    <select id="question2" name="question2">
        <option value="si">Sí</option>
        <option value="no">No</option>
    </select><br><br>

    <input type="submit" value="Enviar">
</form>

<script>
    document.getElementById('questionForm').addEventListener('submit', function(e) {
        e.preventDefault(); // Evita que el formulario se envíe de la manera predeterminada

        let answer1 = document.getElementById('question1').value;
        let answer2 = document.getElementById('question2').value;

        console.log("Respuesta a la pregunta 1:", answer1);
        console.log("Respuesta a la pregunta 2:", answer2);

        // Aquí puedes agregar el código para procesar las respuestas, como enviarlas a un servidor o guardarlas en una base de datos.
    });
</script>

</body>
</html>
