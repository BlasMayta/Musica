@extends('adminlte::page')

@section('title', 'Editar Formulario')

@section('content_header')
    <div class="card card-header">
        <div class="card bg-dark">
            <table width="100%">
                <tr>
                    <td align="left" width="5%">
                        <h2><i class="fas fa-clipboard-list"></i></h2>
                    </td>
                    <td align="center">
                        <h2>EDITAR FORMULARIO</h2>
                    </td>
                </tr>
            </table>
        </div>
    </div>
@stop

@section('content')
    <form action="{{ route('forms.update', $form->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Método HTTP para actualizar -->

        <div class="card">
            <div class="card-body">
                <div class="row">
                    <!-- Columna izquierda: Título y Descripción -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">Título:</label>
                            <input type="text" name="title" id="title" class="form-control" 
                                   value="{{ old('title', $form->title) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción:</label>
                            <textarea name="description" id="description" class="form-control" rows="4">
                                {{ old('description', $form->description) }}
                            </textarea>
                        </div>
                    </div>

                    <!-- Columna derecha: Fecha, Hora y Duración -->
                    <div class="col-md-6">
                        <div class="card bg-light">
                            <div class="card-body">
                                <h5 class="card-title">Configuración de Publicación</h5>
                                <br>
                                <div class="form-group">
                                    <label for="publish_date">Fecha de Publicación:</label>
                                    <input type="date" name="publish_date" id="publish_date" class="form-control" 
                                           value="{{ old('publish_date', $form->publish_date) }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="publish_time">Hora de Publicación:</label>
                                    <input type="time" name="publish_time" id="publish_time" class="form-control" 
                                           value="{{ old('publish_time', $form->publish_time) }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="duration">Duración de la Evaluación (en minutos):</label>
                                    <input type="number" name="duration" id="duration" class="form-control" 
                                           value="{{ old('duration', $form->duration) }}" min="1" required>
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

                            <!-- Cargar preguntas existentes -->
                            @foreach ($form->questions as $index => $question)
                                <div class="question-container card mb-3" id="question-{{ $index }}">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Tipo de Pregunta:</label>
                                            <select name="questions[{{ $index }}][type]" class="form-control" 
                                                    onchange="handleQuestionTypeChange(this, {{ $index }})">
                                                <option value="multiple_choice" {{ $question->type == 'multiple_choice' ? 'selected' : '' }}>Opción múltiple</option>
                                                <option value="checkbox" {{ $question->type == 'checkbox' ? 'selected' : '' }}>Casillas de verificación</option>
                                                <option value="option_with_text" {{ $question->type == 'option_with_text' ? 'selected' : '' }}>Opción con texto</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Texto de la Pregunta:</label>
                                            <input type="text" name="questions[{{ $index }}][label]" class="form-control" 
                                                   value="{{ $question->label }}" required>
                                        </div>

                                        <!-- Opciones (para preguntas de opción múltiple o checkbox) -->
                                        <div id="options-container-{{ $index }}" class="options-container" 
                                             style="{{ $question->type == 'multiple_choice' || $question->type == 'checkbox' ? 'display: block;' : 'display: none;' }}">
                                            <h4>Opciones</h4>
                                            <div id="options-{{ $index }}">
                                                @if ($question->options)
                                                    @foreach (explode(',', $question->options) as $optionIndex => $option)
                                                        <div class="option-container form-group">
                                                            <input type="text" name="questions[{{ $index }}][options][]" 
                                                                   class="form-control" value="{{ $option }}" required>
                                                            <button type="button" class="btn btn-danger btn-sm" onclick="removeOption(this)">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </div>
                                                    @endforeach
                                                @endif
                                            </div>
                                            <button type="button" class="btn btn-secondary btn-sm" onclick="addOption({{ $index }})">
                                                <i class="fas fa-plus"></i> Agregar Opción
                                            </button>
                                        </div>

                                        <!-- Respuesta correcta -->
                                        <div class="form-group">
                                            <label>Respuesta Correcta:</label>
                                            <input type="text" name="questions[{{ $index }}][correct_answer]" class="form-control" 
                                                   value="{{ $question->correct_answer }}" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Puntos:</label>
                                            <input type="number" name="questions[{{ $index }}][points]" class="form-control" 
                                                   value="{{ $question->points }}" min="0" required>
                                        </div>
                                        <div class="form-group form-check">
                                            <input type="checkbox" name="questions[{{ $index }}][required]" class="form-check-input" 
                                                   value="1" {{ $question->required ? 'checked' : '' }}>
                                            <label class="form-check-label">Requerida</label>
                                        </div>
                                        <button type="button" class="btn btn-danger btn-sm" onclick="removeQuestion(this)">
                                            <i class="fas fa-trash"></i> Eliminar Pregunta
                                        </button>
                                        <button type="button" class="btn btn-info btn-sm" onclick="openModal({{ $index }})">
                                            <i class="fas fa-cog"></i> Configurar Respuesta
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Botón de Guardar -->
                <div class="row mt-4">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-success">
                            <i class="fas fa-save"></i> Actualizar Formulario
                        </button>
                        <a href="{{ route('forms.index') }}" class="btn btn-secondary">
                            <i class="fas fa-arrow-left"></i> Volver
                        </a>
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
                    <div class="form-group">
                        <label>Respuesta Correcta:</label>
                        <input type="text" id="modalCorrectAnswer" class="form-control">
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
@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let currentQuestionIndex = 0;

        // Función para agregar una nueva pregunta
        function addQuestion() {
            const questionsDiv = document.getElementById('questions');
            const index = questionsDiv.querySelectorAll('.question-container').length;

            const newQuestion = document.createElement('div');
            newQuestion.className = 'question-container card mb-3';
            newQuestion.innerHTML = `
                <div class="card-body">
                    <div class="form-group">
                        <label>Tipo de Pregunta:</label>
                        <select name="questions[${index}][type]" class="form-control" onchange="handleQuestionTypeChange(this, ${index})">
                            <option value="multiple_choice">Opción múltiple</option>
                            <option value="checkbox">Casillas de verificación</option>
                            <option value="option_with_text">Opción con texto</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Texto de la Pregunta:</label>
                        <input type="text" name="questions[${index}][label]" class="form-control" required>
                    </div>
                    <div id="options-container-${index}" class="options-container" style="display: none;">
                        <h4>Opciones</h4>
                        <div id="options-${index}"></div>
                        <button type="button" class="btn btn-secondary btn-sm" onclick="addOption(${index})">
                            <i class="fas fa-plus"></i> Agregar Opción
                        </button>
                    </div>
                    <div class="form-group">
                        <label>Respuesta Correcta:</label>
                        <input type="text" name="questions[${index}][correct_answer]" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Puntos:</label>
                        <input type="number" name="questions[${index}][points]" class="form-control" min="0" required>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" name="questions[${index}][required]" class="form-check-input" value="1">
                        <label class="form-check-label">Requerida</label>
                    </div>
                    <button type="button" class="btn btn-danger btn-sm" onclick="removeQuestion(this)">
                        <i class="fas fa-trash"></i> Eliminar Pregunta
                    </button>
                    <button type="button" class="btn btn-info btn-sm" onclick="openModal(${index})">
                        <i class="fas fa-cog"></i> Configurar Respuesta
                    </button>
                </div>
            `;
            questionsDiv.appendChild(newQuestion);
        }

        // Función para agregar una nueva opción
        function addOption(questionIndex) {
            const optionsDiv = document.getElementById(`options-${questionIndex}`);
            const optionCount = optionsDiv.children.length;

            const newOption = document.createElement('div');
            newOption.className = 'option-container form-group';
            newOption.innerHTML = `
                <input type="text" name="questions[${questionIndex}][options][]" class="form-control" required>
                <button type="button" class="btn btn-danger btn-sm" onclick="removeOption(this)">
                    <i class="fas fa-trash"></i>
                </button>
            `;
            optionsDiv.appendChild(newOption);
        }

        // Función para eliminar una opción
        function removeOption(button) {
            button.closest('.option-container').remove();
        }

        // Función para eliminar una pregunta
        function removeQuestion(button) {
            button.closest('.question-container').remove();
        }

        // Función para mostrar/ocultar opciones según el tipo de pregunta
        function handleQuestionTypeChange(select, questionIndex) {
            const optionsContainer = document.getElementById(`options-container-${questionIndex}`);
            if (select.value === 'multiple_choice' || select.value === 'checkbox') {
                optionsContainer.style.display = 'block';
            } else {
                optionsContainer.style.display = 'none';
            }
        }

        // Función para abrir el modal de configuración de respuesta
        function openModal(questionIndex) {
            currentQuestionIndex = questionIndex;
            const questionDiv = document.getElementById(`question-${questionIndex}`);
            const questionLabel = questionDiv.querySelector('input[name="questions[' + questionIndex + '][label]"]').value;
            const questionType = questionDiv.querySelector('select[name="questions[' + questionIndex + '][type]"]').value;
            const options = questionDiv.querySelectorAll('input[name="questions[' + questionIndex + '][options][]"]');
            const correctAnswer = questionDiv.querySelector('input[name="questions[' + questionIndex + '][correct_answer]"]').value;
            const points = questionDiv.querySelector('input[name="questions[' + questionIndex + '][points]"]').value;

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
                        <input class="form-check-input" type="checkbox" id="option-${index}" value="${optionText}" 
                               onchange="updateCorrectAnswer()" ${correctAnswer.includes(optionText) ? 'checked' : ''}>
                        <label class="form-check-label" for="option-${index}">${optionText}</label>
                    `;
                    optionsList.appendChild(optionDiv);
                });
            } else {
                optionsContainer.style.display = 'none';
            }

            // Mostrar la respuesta correcta en el modal
            document.getElementById('modalCorrectAnswer').value = correctAnswer;

            // Mostrar los puntos en el modal
            document.getElementById('modalPoints').value = points;

            // Mostrar el modal
            const modal = new bootstrap.Modal(document.getElementById('respuestaModal'));
            modal.show();
        }

        // Función para actualizar la respuesta correcta en el modal
        function updateCorrectAnswer() {
            const selectedOptions = [];
            const checkboxes = document.querySelectorAll('#modalOptionsList .form-check-input:checked');
            checkboxes.forEach(checkbox => {
                selectedOptions.push(checkbox.value);
            });

            // Actualizar el campo de Respuesta Correcta en el modal
            document.getElementById('modalCorrectAnswer').value = selectedOptions.join(', ');
        }

        // Función para guardar los datos del modal en el formulario
        function saveModalData() {
            const questionDiv = document.getElementById(`question-${currentQuestionIndex}`);
            const correctAnswerInput = questionDiv.querySelector('input[name="questions[' + currentQuestionIndex + '][correct_answer]"]');
            const pointsInput = questionDiv.querySelector('input[name="questions[' + currentQuestionIndex + '][points]"]');

            // Guardar la respuesta correcta
            correctAnswerInput.value = document.getElementById('modalCorrectAnswer').value;

            // Guardar los puntos
            pointsInput.value = document.getElementById('modalPoints').value;

            // Cerrar el modal
            const modal = bootstrap.Modal.getInstance(document.getElementById('respuestaModal'));
            modal.hide();
        }
    </script>
@stop