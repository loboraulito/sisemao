<form id="form-diasplanilla">
	<label for="nombre"><span class="list-group-item-text text-truncate"><?= $datos->paterno . ' ' . $datos->materno . ' ' . $datos->nombres ?></span><br><?=$datos->dip;?></label>
	<input type="hidden" class="form-control" id="id_planilla" name="id_planilla" placeholder="id_planilla" value="<?=$datos->id_planilla;?>">
	<fieldset class="form-group floating-label-form-group">
		<label for="dias_pagados">dias_pagados</label>
		<input type="text" class="form-control" id="dias_pagados" name="dias_pagados" placeholder="dias_pagados" value="<?=$datos->dias_pagados;?>">
	</fieldset>
	<fieldset class="form-group floating-label-form-group">
		<label for="horas_extra">horas_extra</label>
		<input type="text" class="form-control" id="horas_extra" name="horas_extra" placeholder="horas_extra" value="<?=$datos->horas_extra;?>">
	</fieldset>
	<fieldset class="form-group floating-label-form-group">
		<label for="horas_recargo_nocturno">horas_recargo_nocturno</label>
		<input type="text" class="form-control" id="horas_recargo_nocturno" name="horas_recargo_nocturno" placeholder="horas_recargo_nocturno" value="<?=$datos->horas_recargo_nocturno;?>">
	</fieldset>
	<fieldset class="form-group floating-label-form-group">
		<label for="feriados">feriados</label>
		<input type="text" class="form-control" id="feriados" name="feriados" placeholder="feriados" value="<?=$datos->feriados;?>">
	</fieldset>
	<fieldset class="form-group floating-label-form-group">
		<label for="domintos_trabajados">domintos_trabajados</label>
		<input type="text" class="form-control" id="domintos_trabajados" name="domintos_trabajados" placeholder="domintos_trabajados" value="<?=$datos->domintos_trabajados;?>">
	</fieldset>
	<div class="modal-footer">
		<input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
		<!-- <input type="submit" class="btn btn-outline-primary btn-lg" value="Login"> -->
		<button onclick="guardarDiasplanilla()" id="guardar-btn-editar" type="button" class="btn btn-primary">Guardar</button>
	</div>
</form>