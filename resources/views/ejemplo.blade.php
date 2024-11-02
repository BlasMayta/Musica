<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Pregunta</title>
    <style>
        #opciones_respuesta {
            display: none;
        }
        .flex-container {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        #resultados {
            margin-top: 20px;
            border: 1px solid #ccc;
            padding: 10px;
        }
    </style>
</head>
<body>
    <h2>Formulario de Pregunta</h2>
    <form id="formulario">
        <div class="flex-container">
            <div>
                <label for="pregunta">Pregunta:</label>
                <input type="text" id="pregunta" name="pregunta" required>
            </div>
            <div>
                <label for="tipo_respuesta">Tipo de Respuesta:</label>
                <select id="tipo_respuesta" name="tipo_respuesta" onchange="mostrarRespuesta()">
                    <option value="texto">Texto</option>
                    <option value="checkbox">Checkbox</option>
                    <option value="radio">Radio</option>
                </select>
            </div>
        </div>
        <br><br>
        <div id="opciones_respuesta">
            <label>Opciones de Respuesta:</label><br>
            <div id="opciones"></div>
            <button type="button" id="agregarOpcion">Agregar Opción</button>
        </div>
        <br>
        <input type="submit" value="Enviar">
        <button type="button" onclick="mostrarPuntosYClave()">Puntos y Clave de Respuesta</button>
    </form>
    <div id="resultados"></div>

    <script>
        const opcionesDiv = document.getElementById("opciones_respuesta");
        const opcionesContainer = document.getElementById("opciones");
        const tipoRespuestaElem = document.getElementById("tipo_respuesta");

        function mostrarRespuesta() {
            const tipoRespuesta = tipoRespuestaElem.value;
            opcionesContainer.innerHTML = '';

            if (tipoRespuesta === "checkbox" || tipoRespuesta === "radio") {
                opcionesDiv.style.display = "block";
                agregarOpcion();
            } else if (tipoRespuesta === "texto") {
                opcionesDiv.style.display = "block";
                agregarTexto();
            } else {
                opcionesDiv.style.display = "none";
            }
        }

        function agregarOpcion() {
            const divOpcion = document.createElement("div");
            const inputOpcion = document.createElement("input");
            inputOpcion.type = "text";
            inputOpcion.name = "opcion[]";
            inputOpcion.placeholder = "Texto de opción";

            const tipoRespuesta = tipoRespuestaElem.value;
            if (tipoRespuesta === "checkbox" || tipoRespuesta === "radio") {
                const input = document.createElement("input");
                input.type = tipoRespuesta;
                input.name = tipoRespuesta + "[]";
                divOpcion.appendChild(input);
            }

            const eliminar = document.createElement("button");
            eliminar.type = "button";
            eliminar.textContent = "Eliminar";
            eliminar.onclick = () => opcionesContainer.removeChild(divOpcion);

            divOpcion.appendChild(inputOpcion);
            divOpcion.appendChild(eliminar);
            opcionesContainer.appendChild(divOpcion);
        }

        function agregarTexto() {
            const divTexto = document.createElement("div");
            const inputTexto = document.createElement("input");
            inputTexto.type = "text";
            inputTexto.name = "respuesta_texto";
            inputTexto.placeholder = "Respuesta de texto";
            divTexto.appendChild(inputTexto);
            opcionesContainer.appendChild(divTexto);
        }

        document.getElementById("agregarOpcion").addEventListener("click", agregarOpcion);

        document.getElementById("formulario").addEventListener("submit", function (e) {
            e.preventDefault();
            const pregunta = document.getElementById("pregunta").value;
            const tipoRespuesta = tipoRespuestaElem.value;
            const opciones = [];

            if (tipoRespuesta === "checkbox" || tipoRespuesta === "radio") {
                const opcionesElems = document.getElementsByName("opcion[]");
                opcionesElems.forEach(opcionElem => opciones.push(opcionElem.value));
            } else if (tipoRespuesta === "texto") {
                const respuestaTexto = document.getElementsByName("respuesta_texto")[0].value;
                opciones.push(respuestaTexto);
            }

            console.log("Pregunta:", pregunta);
            console.log("Tipo de Respuesta:", tipoRespuesta);
            console.log("Respuestas:", opciones);
        });
        function mostrarPuntosYClave() {
            const pregunta = document.getElementById("pregunta").value;
            const tipoRespuesta = document.getElementById("tipo_respuesta").value;
            const opcionesElems = document.getElementsByName("opcion[]");
            let opciones = [];

            opcionesElems.forEach(opcionElem => opciones.push(opcionElem.value));

            let resultadosDiv = document.getElementById("resultados");
            resultadosDiv.innerHTML = `<strong>Pregunta:</strong> ${pregunta}<br>`;
            resultadosDiv.innerHTML += `<strong>Tipo de Respuesta:</strong> ${tipoRespuesta}<br>`;
            resultadosDiv.innerHTML += `<strong>Opciones:</strong><br>`;
            opciones.forEach(opcion => {
                resultadosDiv.innerHTML += `- ${opcion}<br>`;
            });
        }
    </script>
</body>
</html>