
<div class="col-lg-12">
	<div class="row">
		<div class="col-md-4">
			<div class="card card-outline card-primary">
				<div class="card-header">
					<h3 class="card-title">Información Encuesta</h3>
				</div>
				<div class="card-body p-0 py-2">
					<div class="container-fluid">

						@foreach($evaluacion as $eva)

						<p>Título: <b>{{$eva->titulo}}</b></p>
						<p class="mb-0">Descripción:</p>
						<small>{{$eva->descripcion}}</small>
						<p>Inicio:  <b>{{$eva->fechainicio}}</b></p>
						<p>Fin: <b>{{$eva->fechafinal}}</b></p>
						<p>Tiempo: <b>{{$eva->tiempo}}</b></p>

						<p>Encuentas tomadas: <b></b></p>
						@endforeach
					</div>
					<hr class="border-primary">
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="card card-outline card-success">
				<div class="card-header">
					<h3 class="card-title"><b>Preguntas</b></h3>
					<div class="card-tools">
						<button class="btn btn-block btn-sm btn-default btn-flat border-success new_question" type="button"><i class="fa fa-plus"></i> Agregar Nueva Pregunta</button>
					</div>
				</div>
				<form action="" id="manage-sort">
					<div class="card-body ui-sortable">
                        
						
							<div class="callout callout-info">
								<div class="row">
									<div class="col-md-12">
										<span class="dropleft float-right">
											<a class="fa fa-ellipsis-v text-dark" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
											<div class="dropdown-menu" style="">
												<a class="dropdown-item edit_question text-dark" href="javascript:void(0)" >Editar</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item delete_question text-dark" href="javascript:void(0)" >Eliminar</a>
											</div>
										</span>
									</div>
								</div>
								<h5>   </h5>
								<div class="col-md-12">
									<input type="hidden" name="qid[]" value="">
									
											<div class="icheck-primary">
												<input type="radio" id="option_" name="answer[]" value="?>" checked="">
												<label for="option_"></label>
											</div>
										


											<div class="icheck-primary">
												<input type="checkbox" id="option_" name="answer[][]" value="">
												<label for="option_"></label>
											</div>
									

										<div class="form-group">
											<textarea name="answer[]" id="" cols="30" rows="4" class="form-control" placeholder="Escriba su respuesta aquí..."></textarea>
										</div>
									
								</div>
							</div>
						
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function() {
		$('.ui-sortable').sortable({
			placeholder: "ui-state-highlight",
			update: function() {
				alert_toast("Guardando el orden de clasificación de las preguntas.", "info")
				$.ajax({
					url: "ajax.php?action=action_update_qsort",
					method: 'POST',
					data: $('#manage-sort').serialize(),
					success: function(resp) {
						if (resp == 1) {
							alert_toast("El orden de las preguntas se guardó correctamente.", "success")
						}
					}
				})
			}
		})
	})
	$('.new_question').click(function() {
		uni_modal("Nueva Pregunta", ", "large")
	})
	$('.edit_question').click(function() {
		uni_modal("Nueva Pregunta",  + $(this).attr('data-id'), "large")
	})

	$('.delete_question').click(function() {
		_conf("Deseas eliminar esta pregunta?", "delete_question", [$(this).attr('data-id')])
	})

	function delete_question($id) {
		start_load()
		$.ajax({
			url: 'ajax.php?action=delete_question',
			method: 'POST',
			data: {
				id: $id
			},
			success: function(resp) {
				if (resp == 1) {
					alert_toast("Datos eliminados correctamente", 'success')
					setTimeout(function() {
						location.reload()
					}, 1500)

				}
			}
		})
	}
</script>