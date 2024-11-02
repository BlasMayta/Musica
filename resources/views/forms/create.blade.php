@extends('adminlte::page')
@section('css')


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


    <style>
        .question-container {
            margin-bottom: 20px;
            border: 1px solid #ccc;
            padding: 10px;
            position: relative;
        }
        .option-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 5px;
        }
        .option-container input[type="text"] {
            margin-right: 10px;
            width: 100%;
        }
        .delete-question-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: red;
            color: white;
            border: none;
            cursor: pointer;
        }
        .modal-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }
        .points-input {
            width: 60px;
            text-align: right;
        }
        .checkbox-container {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            width: 100%;
        }
        .checkbox-container input[type="checkbox"] {
            margin-right: 10px;
        }
        .checkmark {
            margin-left: auto;
            color: green;
            display: none;
        }
        .checkbox-container input[type="checkbox"]:checked ~ .checkmark {
            display: block;
        }
    </style>
@endsection

@section('title', 'formulario')
@section('content_header')
<div class="card card-header">
        <div class="card bg-dark">
            <table width=100%>
                <tr>
                    <td align="left" width=5%>
                        <h2><i class="fas fa-clipboard-list"></i></h2>
                    </td>
                    <td align="center">
                        <h2> FORMULARIO </h2>
                    </td>
                </tr>
            </table>
        </div>


<body>
    <h1>Crear Formulario</h1>
    <form action="{{ route('forms.store') }}" method="POST">
        @csrf
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" required>
        
        <label for="description">Descripción:</label>
        <textarea name="description" id="description"></textarea>

        <div id="questions">
            <h2>Preguntas</h2>
            <button type="button" class="btn btn-primary" onclick="addQuestion()">Agregar Pregunta</button>
        </div>

        <button type="submit" class="btn btn-success mt-4">Crear Formulario</button>
    </form>

    <!-- Modal para mostrar las opciones agregadas o el texto -->
    <div class="modal fade" id="respuestaModal" tabindex="-1" aria-labelledby="respuestaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <span>Etiqueta de la pregunta: <strong id="modalEtiqueta"></strong></span>
                        <span>
                            <label for="modalPoints">Puntos:</label>
                            <input type="number" id="modalPoints" class="form-control points-input" min="0" value="0">
                        </span>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p id="modalOpcionesTitulo">Opciones:</p>
                    <ul id="modalOpcionesLista"></ul> <!-- Aquí se mostrarán las opciones con checkbox -->
                    <p id="modalTextoTitulo" style="display: none;">Texto:</p>
                    <p id="modalTexto" style="display: none;"><strong>No hay texto</strong></p> <!-- Aquí se mostrará el texto -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" id="echoButton" onclick="syncChangesToQuestion()">Echo</button> <!-- Botón Echo -->
                </div>
            </div>
        </div>
    </div>

    <!-- Incluir Bootstrap JS y dependencias -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        let questionIndex = 0;
        let currentQuestionIndex = 0; // Para saber qué pregunta está activa en el modal
        let selectedCheckmarks = {};  // Almacenar los checkboxes seleccionados en el modal
        let modalInstance;  // Guardar la instancia del modal actual para cerrarlo después

        function addQuestion() {
            questionIndex++;
            const questionsDiv = document.getElementById('questions');
            const newQuestion = document.createElement('div');
            newQuestion.className = 'question-container';
            newQuestion.id = `question-${questionIndex}`;
            newQuestion.innerHTML = `
                <label>Tipo de Pregunta:</label>
                <select name="questions[${questionIndex}][type]" id="question-type-${questionIndex}" onchange="handleQuestionTypeChange(this, ${questionIndex})">
                    <option value="multiple_choice">Opción múltiple (Radio)</option>
                    <option value="checkbox">Casillas de verificación (Checkbox)</option>
                    <option value="option_with_text">Opción con entrada de texto</option>
                </select>
                <label>Etiqueta:</label>
                <input type="text" name="questions[${questionIndex}][label]" id="label-${questionIndex}" required>
                <div id="options-container-${questionIndex}" class="options-container" style="display: none;">
                    <h3>Opciones</h3>
                    <div id="options-${questionIndex}"></div>
                    <button type="button" onclick="addOption(${questionIndex})">Agregar Opción</button>
                </div>
                <div id="text-option-${questionIndex}" class="text-option-container" style="display: none;">
                    <label>Texto:</label>
                    <input type="text" id="text-${questionIndex}" name="questions[${questionIndex}][text_option]" placeholder="Ingrese el texto aquí">
                </div>
                <div class="d-flex align-items-center">
                    <label>Requerida:</label>
                    <input type="checkbox" name="questions[${questionIndex}][required]" class="ml-2">
                    <label class="ml-3">Puntos:</label>
                    <input type="number" name="questions[${questionIndex}][points]" id="points-${questionIndex}" class="form-control points-input" min="0" value="0">
                    <button type="button" class="ml-3 btn btn-primary" onclick="openRespuestaModal(${questionIndex})">Respuesta</button>
                </div>
                <button type="button" class="delete-question-btn" onclick="removeQuestion(${questionIndex})">Eliminar Pregunta</button>
            `;
            questionsDiv.appendChild(newQuestion);
        }

        function handleQuestionTypeChange(select, index) {
            const selectedValue = select.value;
            const optionsContainer = document.getElementById(`options-container-${index}`);
            const textOptionContainer = document.getElementById(`text-option-${index}`);
            const optionsDiv = document.getElementById(`options-${index}`);
            
            if (selectedValue === 'multiple_choice' || selectedValue === 'checkbox') {
                optionsContainer.style.display = 'block';
                textOptionContainer.style.display = 'none';
                optionsDiv.innerHTML = ''; // Limpiar opciones anteriores
                addOption(index); // Agregar primera opción
            } else if (selectedValue === 'option_with_text') {
                optionsContainer.style.display = 'none';
                textOptionContainer.style.display = 'block';
                optionsDiv.innerHTML = ''; // Limpiar opciones anteriores
            }
        }

        function addOption(questionIndex) {
            const optionsDiv = document.getElementById(`options-${questionIndex}`);
            const optionCount = optionsDiv.children.length;
            const questionType = document.querySelector(`select[name="questions[${questionIndex}][type]"]`).value;
            let optionInput = '';

            // Agregar el radio o checkbox a la izquierda según el tipo de pregunta
            if (questionType === 'multiple_choice') {
                optionInput = `<input type="radio" name="questions[${questionIndex}][correct_options][]" value="${optionCount}">`;
            } else if (questionType === 'checkbox') {
                optionInput = `<input type="checkbox" name="questions[${questionIndex}][correct_options][]" value="${optionCount}">`;
            }

            const newOption = document.createElement('div');
            newOption.className = 'option-container';
            newOption.innerHTML = `
                ${optionInput}
                <input type="text" name="questions[${questionIndex}][options][]" placeholder="Opción ${optionCount + 1}" required>
                <i class="fas fa-check checkmark" id="checkmark-${questionIndex}-${optionCount}" style="display: none;"></i>
                <button type="button" onclick="removeOption(this)">X</button>
            `;
            optionsDiv.appendChild(newOption);
        }

        function removeOption(button) {
            button.parentElement.remove();
        }

        // Función para abrir el modal y mostrar las opciones agregadas o el texto
        function openRespuestaModal(questionIndex) {
            currentQuestionIndex = questionIndex; // Guardar el índice de la pregunta activa
            modalInstance = new bootstrap.Modal(document.getElementById('respuestaModal')); // Crear instancia del modal
            const etiqueta = document.getElementById(`label-${questionIndex}`).value; // Obtener valor de la etiqueta
            const puntos = document.getElementById(`points-${questionIndex}`).value; // Obtener los puntos
            const opcionesDiv = document.getElementById(`options-${questionIndex}`); // Div que contiene las opciones
            const textoInput = document.getElementById(`text-${questionIndex}`); // Obtener el texto si es "Opción con entrada de texto"
            const listaOpciones = document.getElementById('modalOpcionesLista');
            const modalTextoTitulo = document.getElementById('modalTextoTitulo');
            const modalTexto = document.getElementById('modalTexto');
            const modalOpcionesTitulo = document.getElementById('modalOpcionesTitulo');
            
            // Limpiar el contenido de la lista en el modal
            listaOpciones.innerHTML = '';
            selectedCheckmarks = {}; // Reiniciar las selecciones del modal

            // Mostrar la etiqueta de la pregunta en el modal
            document.getElementById('modalEtiqueta').innerHTML = `${etiqueta}`;

            // Mostrar los puntos en el modal
            document.getElementById('modalPoints').value = puntos;

            // Obtener el tipo de pregunta seleccionada
            const tipoPregunta = document.getElementById(`question-type-${questionIndex}`).value;

            // Mostrar el contenido adecuado según el tipo de pregunta
            if (tipoPregunta === 'option_with_text') {
                // Mostrar el texto y ocultar las opciones
                modalTextoTitulo.style.display = 'block';
                modalTexto.style.display = 'block';
                modalOpcionesTitulo.style.display = 'none';
                listaOpciones.style.display = 'none';

                // Mostrar el texto si existe
                if (textoInput && textoInput.value) {
                    modalTexto.innerHTML = `<strong>${textoInput.value}</strong>`;
                } else {
                    modalTexto.innerHTML = `<strong>No hay texto</strong>`;
                }
            } else {
                // Mostrar las opciones y ocultar el texto
                modalTextoTitulo.style.display = 'none';
                modalTexto.style.display = 'none';
                modalOpcionesTitulo.style.display = 'block';
                listaOpciones.style.display = 'block';

                // Obtener todas las opciones y agregarlas a la lista del modal con checkbox
                const opciones = opcionesDiv.querySelectorAll('input[type="text"]');
                opciones.forEach((opcion, index) => {
                    const isOptionChecked = document.getElementById(`checkmark-${questionIndex}-${index}`).style.display === 'block'; // Verificar si el checkmark está visible
                    const li = document.createElement('li');
                    li.innerHTML = `
                        <div class="checkbox-container">
                            <input type="checkbox" name="correct_option_modal_${index}" onchange="storeCheckmark(${index}, this.checked)" ${isOptionChecked ? 'checked' : ''}>
                            <span>Opción ${index + 1}: ${opcion.value}</span>
                            <i class="fas fa-check checkmark"></i>
                        </div>
                    `;
                    listaOpciones.appendChild(li);
                });
            }

            modalInstance.show();
        }

        // Almacenar el estado de los checkboxes seleccionados en el modal
        function storeCheckmark(optionIndex, isChecked) {
            selectedCheckmarks[optionIndex] = isChecked;
        }

        // Función para aplicar los cambios al presionar el botón Echo
        function syncChangesToQuestion() {
            // Sincronizar los puntos del modal al campo de puntos en la pregunta
            const modalPoints = document.getElementById('modalPoints').value;
            const questionPoints = document.getElementById(`points-${currentQuestionIndex}`);
            questionPoints.value = modalPoints;

            // Sincronizar los checkmarks seleccionados en las opciones
            Object.keys(selectedCheckmarks).forEach(optionIndex => {
                const mainCheckmark = document.getElementById(`checkmark-${currentQuestionIndex}-${optionIndex}`);
                mainCheckmark.style.display = selectedCheckmarks[optionIndex] ? 'block' : 'none';
            });

            // Cerrar el modal después de hacer los cambios
            modalInstance.hide();
        }

        function removeQuestion(index) {
            const questionDiv = document.getElementById(`question-${index}`);
            questionDiv.remove();
        }
    </script>
</body>
@stop

