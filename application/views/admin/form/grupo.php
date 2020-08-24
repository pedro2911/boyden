<!DOCTYPE html>
<html lang="en">
<head>
	
  <?php $this->load->view("admin/includes/head"); ?>

</head>
<body class="page-body">

<div class="page-container">

	<!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
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
			<input type="hidden" name="codigo" id="codigo" value="<?php echo $obj->id_grupo; ?>">

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
							<label for="nm_grupo" class="col-lg-2 control-label">Nome do grupo:</label>
							<div class="col-lg-3">
								<input type="text" class="form-control validate[required]" id="nm_grupo" name="nm_grupo" value="<?php echo $obj->nm_grupo; ?>">
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

							<label for="vr_corte_faturamento_de" class="col-lg-2 control-label">Valor de corte de:</label>
							<div class="col-lg-2">
								<input type="text" class="form-control mask_real validate[required]" id="vr_corte_faturamento_de" name="vr_corte_faturamento_de" value="<?php echo number_format($obj->vr_corte_faturamento_de, 2, ",", "."); ?>">
							</div>

							<label for="vr_corte_faturamento_ate" class="col-lg-2 control-label">Valor de corte até:</label>
							<div class="col-lg-2">
								<input type="text" class="form-control mask_real validate[required]" id="vr_corte_faturamento_ate" name="vr_corte_faturamento_ate" value="<?php echo number_format($obj->vr_corte_faturamento_ate, 2, ",", "."); ?>">
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