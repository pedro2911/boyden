<!DOCTYPE html>
<html lang="en">
<head>
	
  <?php $this->load->view("admin/includes/head"); ?>

</head>
<body class="page-body">

<div class="page-container">

	<div class="sidebar-menu">

		<div class="sidebar-menu-inner">
			
			<?php $this->load->view("admin/includes/top-menu"); ?>

			<?php $this->load->view("admin/includes/menu"); ?>
			
		</div>

	</div>

	<div class="main-content">
				
		<?php $this->load->view("admin/includes/header"); ?>

		<br>
		
		<form role="form" method="post" class="form-horizontal form-groups-bordered" id="formulario" action="<?php echo base_url("admin/form/".$this->router->fetch_class()."/salvar"); ?>">
			<input type="hidden" name="codigo" id="codigo" value="<?php echo $obj->id_respondente; ?>">

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-dark" data-collapsed="0">
					<div class="panel-heading">
						<div class="panel-title">
							<strong>Informações Principais</strong>
						</div>						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
						</div>
					</div>							
					
					<div class="panel-body"> 
						<br>
						
						<div class="form-group">							
							<label for="nm_cliente" class="col-lg-2 control-label">Nome do Cliente:</label>
							<div class="col-lg-5">
								<input type="text" class="form-control validate[required]" id="nm_cliente" name="nm_cliente" value="<?php echo $obj->nm_cliente; ?>">
							</div>
							<label for="nr_ano" class="col-lg-1 control-label">Ano:</label>
							<div class="col-lg-2">
								<select class="form-control validate[required]" id="nr_ano" name="nr_ano">
									<?php for ($i=2020; $i <= 2025; $i++) { ?>
										<option value="<?php echo $i; ?>" <?php if($obj->nr_ano == $i){echo "selected";} ?>><?php echo $i; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>

						<div class="form-group">

							<label for="nm_responsavel" class="col-lg-2 control-label">Responsável:</label>
							<div class="col-lg-5">
								<input type="text" class="form-control validate[required]" id="nm_responsavel" name="nm_responsavel" value="<?php echo $obj->nm_responsavel; ?>">
							</div>

							<label for="nr_telefone" class="col-lg-1 control-label">Telefone:</label>
							<div class="col-lg-2">
								<input type="text" class="form-control validate[required]" id="nr_telefone" name="nr_telefone" value="<?php echo $obj->nr_telefone; ?>" onKeyDown="Mascara(this, Telefone);" onKeyPress="Mascara(this, Telefone);" onKeyUp="Mascara(this, Telefone);" maxlength="15">
							</div>
							
						</div>


						<div class="form-group">

							<label for="nm_email" class="col-lg-2 control-label">E-mail:</label>
							<div class="col-lg-4">
								<input type="text" class="form-control validate[required]" id="nm_email" name="nm_email" value="<?php echo $obj->nm_email; ?>">
							</div>

							<label for="nm_senha" class="col-lg-1 control-label">Senha:</label>
							<div class="col-lg-3">
								<input type="text" class="form-control validate[required]" id="nm_senha" name="nm_senha" value="<?php echo $obj->nm_senha; ?>">
							</div>
							
						</div>


					</div>

				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12"  style="text-align: center">											
				<button type="submit" data-loading-text="Salvando..." class="btn btn-blue botao_salvar">Salvar</button>
				<button type="button" class="btn btn-primary botao-cancelar" data-control="<?php echo $this->router->fetch_class(); ?>">Cancelar</button>
			</div>
		</div>

		</form>
		
		<?php $this->load->view("admin/includes/footer"); ?>		
		
	</div>
	
	
</div>

<script>

$('.botao-incluir').click(function(){

	window.location = "../form/" + $(this).attr("data-control");    

});

$('.botao-cancelar').click(function(){

	window.location = "../grid/" + $(this).attr("data-control");    

});

</script>

</body>
</html>