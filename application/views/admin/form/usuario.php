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
			<input type="hidden" name="codigo" id="codigo" value="<?php echo $obj->id_usuario; ?>">

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
							<label for="nm_usuario" class="col-lg-2 control-label">Nome do usuário:</label>
							<div class="col-lg-3">
								<input type="text" class="form-control validate[required]" id="nm_usuario" name="nm_usuario" value="<?php echo $obj->nm_usuario; ?>">
							</div>
							<label for="nm_email" class="col-lg-1 control-label">E-mail:</label>
							<div class="col-lg-3">
								<input type="text" class="form-control validate[required]" id="nm_email" name="nm_email" value="<?php echo $obj->nm_email; ?>">
							</div>
						</div>
						<div class="form-group">							
							<label for="nm_login" class="col-lg-2 control-label">Login:</label>
							<div class="col-lg-3">
								<input type="text" class="form-control validate[required]" id="nm_login" name="nm_login" value="<?php echo $obj->nm_login; ?>">
							</div>
							<label for="nm_senha" class="col-lg-1 control-label">Senha:</label>
							<div class="col-lg-3">
								<input type="password" class="form-control <?php if(!$obj->id_usuario > 0){ ?> validate[required] <?php } ?>" id="nm_senha" name="nm_senha">
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