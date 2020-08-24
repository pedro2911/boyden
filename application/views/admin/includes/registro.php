<div class="panel panel-gradient" data-collapsed="0">

	<div class="panel-heading">
		<div class="panel-title">
			<strong>Informações Adicionais</strong>
		</div>
		
		<div class="panel-options">
			<a href="#" data-rel="collapse" class="div_registro"><i class="entypo-down-open" style="font-size:16px"></i></a>
		</div>
	</div>
			
	<div class="panel-body">								

		<div class="form-group">
			<label for="nm_usuario_inclusao" class="col-lg-4 control-label" style="text-align: left">Usuário Inclusão:</label>
			<label for="dt_inclusao" class="col-lg-2 control-label" style="text-align: left">Data/Hora:</label>
			<label for="nm_usuario_inclusao" class="col-lg-4 control-label" style="text-align: left">Usuário Alteração:</label>
			<label for="dt_inclusao" class="col-lg-2 control-label" style="text-align: left">Data/Hora:</label>
		</div>

		<div class="form-group">

			<div class="col-lg-4">
				<input type="text" class="form-control" id="nm_usuario_inclusao" name="nm_usuario_inclusao" value="<?php echo $obj->nm_usuario_inclusao; ?>" disabled>
			</div>
			
			<div class="col-lg-2">
				<input type="text" class="form-control" id="dt_inclusao" name="dt_inclusao" value="<?php echo formatHtmlHour($obj->dt_inclusao); ?>" disabled>
			</div>

			<div class="col-lg-4">
				<input type="text" class="form-control" id="nm_usuario_alteracao" name="nm_usuario_alteracao" value="<?php echo $obj->nm_usuario_alteracao; ?>" disabled>
			</div>
			
			<div class="col-lg-2">
				<input type="text" class="form-control" id="dt_alteracao" name="dt_alteracao" value="<?php echo formatHtmlHour($obj->dt_alteracao); ?>" disabled>
			</div>

		</div>

	</div>
</div>