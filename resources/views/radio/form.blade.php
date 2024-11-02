

<div class="container " id="radio_opt_clone">
	<div class="input-group mb-3 icheck-primary   " data-count="1">
		<div class="input-group-text">
			<input class="form-check-input" type="radio" name="prueba" id="radioPrimary1"
				aria-label="casilla de verificacion" checked>
				<label for="radioPrimary1">
				</label>
		</div>
		<input type="text" class="form-control form-control-sm check_inp" aria-label="Entrada de texto" neme="">
	
	</div>

	<div class="input-group mb-3 icheck-primary" data-count="2">
		<div class="input-group-text  " >
			<input class="form-check-input" type="radio" name="prueba" id="radioPrimary2"
				aria-label="casilla de verificacion" checked>
				<label for="radioPrimary2">
				</label>
		</div>
		<input type="text" class="form-control form-control-sm check_inp" aria-label="Entrada de texto" name="">
	
	</div>
</div>

<tr class="">
	<td class="text-center">
		<div class="icheck-primary d-inline" data-count='1'>
			<input type="radio" id="radioPrimary1" name="radio" checked="">
			<label for="radioPrimary1">
			</label>
		</div>
	</td>

	<td class="text-center">
		<input type="text" class="form-control form-control-sm check_inp" name="label[]">
	</td>
	<td class="text-center"></td>
</tr>
<tr class="">
	<td class="text-center">
		<div class="icheck-primary d-inline" data-count='2'>
			<input type="radio" id="radioPrimary2" name="radio">
			<label for="radioPrimary2">
			</label>
		</div>
	</td>

	<td class="text-center">
		<input type="text" class="form-control form-control-sm check_inp" name="label[]">
	</td>
	<td class="text-center"></td>
</tr>

<br>



<br>
<div class="form-row ">
    <div class="form-group form-row col-md-12 col-md-offset-2">
        <button type="submit" class="btn btn-outline-info col-md-4"> {{ $modo }}</button>

    </div>
</div>

<script>

</script>