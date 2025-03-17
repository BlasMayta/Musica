@extends('adminlte::page')

@section('title', 'Crear Formulario')

@section('content_header')
    <div class="card card-header">
        <div class="card bg-dark">
            <table width="100%">
                <tr>
                    <td align="left" width="5%">
                        <h2><i class="fas fa-clipboard-list"></i></h2>
                    </td>
                    <td align="center">
                        <h2>CREAR FORMULARIO</h2>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@stop

@section('content')
    <form action="{{ route('forms.store') }}" method="POST">
        @csrf
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <!-- Columna izquierda: Título y Descripción -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">Título:</label>
                            <input type="text" name="title" id="title" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción:</label>
                            <textarea name="description" id="description" class="form-control" rows="4"></textarea>
                        </div>
                    </div>

                    <!-- Columna derecha: Fecha, Hora y Duración -->
                    <div class="col-md-6">
                        <div class="card bg-light">
                            <div class="card-body">
                                <h5 class="card-title">Configuración de Publicación</h5>
                                <div class="form-group">
                                    <label for="publish_date">Fecha y Hora de Publicación:</label>
                                    <input type="datetime-local" name="publish_date" id="publish_date" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="duration">Duración de la Evaluación (en minutos):</label>
                                    <input type="number" name="duration" id="duration" class="form-control" min="1" required>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Preguntas -->
                <div class="row mt-4">
                    <div class="col-md-12">
                        <div id="questions">
                            <h3>Preguntas</h3>
                            <button type="button" class="btn btn-primary" onclick="addQuestion()">
                                <i class="fas fa-plus"></i> Agregar Pregunta
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Botón de Guardar -->
                <div class="row mt-4">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i> Guardar Formulario
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <!-- Modal para configurar respuestas correctas -->
    <div class="modal fade" id="respuestaModal" tabindex="-1" aria-labelledby="respuestaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="respuestaModalLabel">Configurar Respuesta Correcta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Pregunta:</label>
                        <p id="modalQuestionLabel" class="font-weight-bold"></p>
                    </div>
                    <div class="form-group" id="modalOptionsContainer" style="display: none;">
                        <label>Opciones:</label>
                        <div id="modalOptionsList"></div>
                    </div>
                    <div class="form-group" id="modalTextAnswerContainer" style="display: none;">
                        <label>Respuesta Correcta (Texto):</label>
                        <input type="text" id="modalTextAnswer" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Puntos:</label>
                        <input type="number" id="modalPoints" class="form-control" min="0" value="0">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" onclick="saveModalData()">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    @section('js')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            let questionIndex = 0;
            let currentQuestionIndex = 0;

            function addQuestion() {
                questionIndex++;
                const questionsDiv = document.getElementById('questions');
                const newQuestion = document.createElement('div');
                newQuestion.className = 'question-container card mb-3';
                newQuestion.id = `question-${questionIndex}`;
                newQuestion.innerHTML = `
                    <div class="card-body">
                        <div class="form-group">
                            <label>Tipo de Pregunta:</label>
                            <select name="questions[${questionIndex}][type]" class="form-control" onchange="handleQuestionTypeChange(this, ${questionIndex})">
                                <option value="multiple_choice">Opción múltiple (Radio)</option>
                                <option value="checkbox">Casillas de verificación (Checkbox)</option>
                                <option value="option_with_text">Opción con entrada de texto</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Etiqueta:</label>
                            <input type="text" name="questions[${questionIndex}][label]" class="form-control" required>
                        </div>
                        <div id="options-container-${questionIndex}" class="options-container" style="display: none;">
                            <h4>Opciones</h4>
                            <div id="options-${questionIndex}"></div>
                            <button type="button" class="btn btn-secondary btn-sm" onclick="addOption(${questionIndex})">
                                <i class="fas fa-plus"></i> Agregar Opción
                            </button>
                        </div>
                        <div id="text-option-${questionIndex}" class="text-option-container" style="display: none;">
                            <label>Texto:</label>
                            <input type="text" name="questions[${questionIndex}][text_option]" class="form-control" placeholder="Ingrese el texto aquí">
                        </div>
                        <div class="form-group">
                            <label>Puntos:</label>
                            <input type="number" name="questions[${questionIndex}][points]" id="points-${questionIndex}" class="form-control points-input" min="0" value="0" required>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" name="questions[${questionIndex}][required]" class="form-check-input" value="1">
                            <input type="hidden" name="questions[${questionIndex}][required]" value="0">
                            <label class="form-check-label">Requerida</label>
                        </div>
                        <button type="button" class="btn btn-danger btn-sm" onclick="removeQuestion(${questionIndex})">
                            <i class="fas fa-trash"></i> Eliminar Pregunta
                        </button>
                        <button type="button" class="btn btn-info btn-sm" onclick="openModal(${questionIndex})">
                            <i class="fas fa-cog"></i> Configurar Respuesta
                        </button>
                        <input type="hidden" name="questions[${questionIndex}][correct_answer]" id="correctAnswer-${questionIndex}">
                        <div id="correctAnswerDisplay-${questionIndex}" class="mt-2"></div>
                    </div>
                `;
                questionsDiv.appendChild(newQuestion);
            }

            function handleQuestionTypeChange(select, index) {
                const optionsContainer = document.getElementById(`options-container-${index}`);
                const textOptionContainer = document.getElementById(`text-option-${index}`);

                if (select.value === 'multiple_choice' || select.value === 'checkbox') {
                    optionsContainer.style.display = 'block';
                    textOptionContainer.style.display = 'none';
                } else if (select.value === 'option_with_text') {
                    optionsContainer.style.display = 'none';
                    textOptionContainer.style.display = 'block';
                }
            }

            function addOption(questionIndex) {
                const optionsDiv = document.getElementById(`options-${questionIndex}`);
                const optionCount = optionsDiv.children.length;
                const newOption = document.createElement('div');
                newOption.className = 'option-container form-group';
                newOption.innerHTML = `
                    <input type="text" name="questions[${questionIndex}][options][]" class="form-control" placeholder="Opción ${optionCount + 1}" required>
                    <button type="button" class="btn btn-danger btn-sm" onclick="removeOption(this)">
                        <i class="fas fa-trash"></i>
                    </button>
                `;
                optionsDiv.appendChild(newOption);
            }

            function removeOption(button) {
                button.parentElement.remove();
            }

            function removeQuestion(index) {
                const questionDiv = document.getElementById(`question-${index}`);
                questionDiv.remove();
            }

            function openModal(questionIndex) {
                currentQuestionIndex = questionIndex;
                const questionDiv = document.getElementById(`question-${questionIndex}`);
                const questionLabel = questionDiv.querySelector('input[name="questions[' + questionIndex + '][label]"]').value;
                const questionType = questionDiv.querySelector('select[name="questions[' + questionIndex + '][type]"]').value;
                const options = questionDiv.querySelectorAll('input[name="questions[' + questionIndex + '][options][]"]');
                const points = questionDiv.querySelector(`#points-${questionIndex}`).value;

                // Mostrar la etiqueta de la pregunta en el modal
                document.getElementById('modalQuestionLabel').textContent = questionLabel;

                // Mostrar las opciones en el modal (solo para preguntas de opción múltiple o checkbox)
                const optionsContainer = document.getElementById('modalOptionsContainer');
                const optionsList = document.getElementById('modalOptionsList');
                optionsList.innerHTML = '';
                if (questionType === 'multiple_choice' || questionType === 'checkbox') {
                    optionsContainer.style.display = 'block';
                    options.forEach((option, index) => {
                        const optionText = option.value;
                        const optionDiv = document.createElement('div');
                        optionDiv.className = 'form-check';
                        optionDiv.innerHTML = `
                            <input class="form-check-input" type="checkbox" id="option-${index}" value="${optionText}" onchange="updateCorrectAnswer()">
                            <label class="form-check-label" for="option-${index}">${optionText}</label>
                        `;
                        optionsList.appendChild(optionDiv);
                    });
                } else {
                    optionsContainer.style.display = 'none';
                }

                // Mostrar el campo de texto para la respuesta correcta (solo para preguntas de texto)
                const textAnswerContainer = document.getElementById('modalTextAnswerContainer');
                if (questionType === 'option_with_text') {
                    textAnswerContainer.style.display = 'block';
                } else {
                    textAnswerContainer.style.display = 'none';
                }

                // Mostrar los puntos en el modal
                document.getElementById('modalPoints').value = points;

                // Mostrar el modal
                const modal = new bootstrap.Modal(document.getElementById('respuestaModal'));
                modal.show();
            }

            function updateCorrectAnswer() {
                const selectedOptions = [];
                const checkboxes = document.querySelectorAll('#modalOptionsList .form-check-input:checked');
                checkboxes.forEach(checkbox => {
                    selectedOptions.push(checkbox.value);
                });

                // Actualizar el campo de Respuesta Correcta en el modal
                document.getElementById('modalCorrectAnswer').value = selectedOptions.join(', ');
            }

            function saveModalData() {
                const questionDiv = document.getElementById(`question-${currentQuestionIndex}`);
                const questionType = questionDiv.querySelector('select[name="questions[' + currentQuestionIndex + '][type]"]').value;

                let correctAnswer = '';
                if (questionType === 'multiple_choice' || questionType === 'checkbox') {
                    const selectedOptions = [];
                    const checkboxes = document.querySelectorAll('#modalOptionsList .form-check-input:checked');
                    checkboxes.forEach(checkbox => {
                        selectedOptions.push(checkbox.value);
                    });
                    correctAnswer = selectedOptions.join(',');
                } else if (questionType === 'option_with_text') {
                    correctAnswer = document.getElementById('modalTextAnswer').value;
                }

                const correctAnswerInput = document.getElementById(`correctAnswer-${currentQuestionIndex}`);
                correctAnswerInput.value = correctAnswer;

                // Actualizar los puntos en el formulario
                const pointsInput = document.getElementById(`points-${currentQuestionIndex}`);
                const modalPoints = document.getElementById('modalPoints').value;
                pointsInput.value = modalPoints;

                // Mostrar la respuesta correcta en el formulario
                const correctAnswerDisplay = document.getElementById(`correctAnswerDisplay-${currentQuestionIndex}`);
                correctAnswerDisplay.innerHTML = `
                    <span class="text-success">
                        <i class="fas fa-check"></i> Respuesta Correcta: ${correctAnswer}
                    </span>
                `;

                // Cerrar el modal
                const modal = bootstrap.Modal.getInstance(document.getElementById('respuestaModal'));
                modal.hide();
            }
        </script>
    @stop
@stop