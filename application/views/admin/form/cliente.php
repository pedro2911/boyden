<!DOCTYPE html>
<html lang="en">
<head>
	
  <?php $this->load->view("includes/head"); ?>

</head>
<body class="page-body">

<div class="page-container">

	<!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
	<div class="sidebar-menu">

		<div class="sidebar-menu-inner">
			
			<?php $this->load->view("includes/top-menu"); ?>

			<?php $this->load->view("includes/menu"); ?>
			
		</div>

	</div>

	<div class="main-content">
				
		<?php $this->load->view("includes/header"); ?>

		<br>
		
		<form role="form" method="post" class="form-horizontal form-groups-bordered" id="formulario" action="<?php echo base_url("form/".$this->router->fetch_class()."/salvar"); ?>">
			<input type="hidden" name="codigo" id="codigo" value="<?php echo $obj->cd_cliente; ?>">

		<div class="row">
			<div class="col-md-12">
				
				<div class="panel panel-dark" data-collapsed="0">

					<div class="panel-heading">
						<div class="panel-title">
							<strong>Informações Principais</strong>
						</div>
						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="entypo-down-open" style="font-size:16px"></i></a>
						</div>
					</div>
							
					<div class="panel-body">								

						<div class="form-group">
							
							<label for="cd_administracao" class="col-md-2 control-label">Administração:</label>
					
							<div class="col-md-6">
								<select class="form-control validate[required]" id="cd_administracao" name="cd_administracao">
									<?php echo str_replace("'" . $obj->cd_administracao . "'", "'" . $obj->cd_administracao . "' selected", $this->session->administracoes); ?>
								</select>
							</div>

						</div>

						<?php /* if($this->session->tipo_usuario_logado == "GESTOR" && !$obj->cd_cliente){ ?>

							<div class="form-group">
								
								<label for="id_cpf_cnpj_empresa" class="col-md-2 control-label">Empresa:</label>
						
								<div class="col-md-6">
									<select class="form-control validate[required]" id="id_cpf_cnpj_empresa" name="id_cpf_cnpj_empresa">
										<?php echo str_replace("'" . $obj->id_cpf_cnpj_empresa . "'", "'" . $obj->id_cpf_cnpj_empresa . "' selected", $this->session->empresas); ?>
									</select>
								</div>

							</div>

						<?php } */ ?>

						<?php /* if($this->session->tipo_usuario_logado == "EMPRESA" && !$obj->cd_cliente){ ?>

							<div class="form-group">
								
								<label for="id_cpf_cnpj_gestor" class="col-md-2 control-label">Gestor:</label>
						
								<div class="col-md-6">
									<select class="form-control validate[required]" id="id_cpf_cnpj_gestor" name="id_cpf_cnpj_gestor">
										<?php echo str_replace("'" . $obj->id_cpf_cnpj_gestor . "'", "'" . $obj->id_cpf_cnpj_gestor . "' selected", $this->session->gestores); ?>
									</select>
								</div>

							</div>

						<?php } */ ?>

						<div class="form-group">

							<label for="nm_cliente" class="col-lg-2 control-label">Cliente:</label>
							
							<div class="col-lg-3">
								<input type="text" class="form-control validate[required]" id="nm_cliente" name="nm_cliente" value="<?php echo $obj->nm_cliente; ?>">
							</div>

							<label for="id_cnpj" class="col-lg-1 control-label">CNPJ:</label>
							
							<div class="col-lg-2">
								<input type="text" class="form-control validate[required] campo_cpf_cnpj" id="id_cnpj" name="id_cnpj" value="<?php echo $obj->id_cnpj; ?>" data-mask="cnpj" <?php if($obj->cd_cliente){ ?> disabled <?php } ?>>
							</div>

							<label for="nr_ie" class="col-lg-1 control-label">IE:</label>
							
							<div class="col-lg-2">
								<input type="text" class="form-control validate[required]" id="nr_ie" name="nr_ie" value="<?php echo $obj->nr_ie; ?>">
							</div>

						</div>

					</div>
				</div>

				<div class="panel panel-dark" data-collapsed="0">

					<div class="panel-heading">
						<div class="panel-title">
							<strong>Contatos</strong>
						</div>
						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="entypo-down-open" style="font-size:16px"></i></a>
						</div>
					</div>
							
					<div class="panel-body">								

						<div class="form-group">

							<label for="nm_contato_1" class="col-lg-2 control-label">Contato 1:</label>
							
							<div class="col-lg-3">
								<input type="text" class="form-control validate[required]" id="nm_contato_1" name="nm_contato_1" value="<?php echo $obj->nm_contato_1; ?>">
							</div>

							<label for="nr_telefone_1" class="col-lg-1 control-label">Telefone 1:</label>
							
							<div class="col-lg-2">
								<input type="text" class="form-control validate[required]" id="nr_telefone_1" name="nr_telefone_1" value="<?php echo $obj->nr_telefone_1; ?>" onKeyDown="Mascara(this, Telefone);" onKeyPress="Mascara(this, Telefone);" onKeyUp="Mascara(this, Telefone);" maxlength="15">
							</div>

							<label for="ds_email_1" class="col-lg-1 control-label">E-mail 1:</label>
							
							<div class="col-lg-2">
								<input type="email" class="form-control validate[required]" id="ds_email_1" name="ds_email_1" value="<?php echo $obj->ds_email_1; ?>">
							</div>

						</div>

						<div class="form-group">

							<label for="nm_contato_2" class="col-lg-2 control-label">Contato 2:</label>
							
							<div class="col-lg-3">
								<input type="text" class="form-control" id="nm_contato_2" name="nm_contato_2" value="<?php echo $obj->nm_contato_2; ?>">
							</div>

							<label for="nr_telefone_2" class="col-lg-1 control-label">Telefone 2:</label>
							
							<div class="col-lg-2">
								<input type="text" class="form-control" id="nr_telefone_2" name="nr_telefone_2" value="<?php echo $obj->nr_telefone_2; ?>" onKeyDown="Mascara(this, Telefone);" onKeyPress="Mascara(this, Telefone);" onKeyUp="Mascara(this, Telefone);" maxlength="15">
							</div>

							<label for="ds_email_2" class="col-lg-1 control-label">E-mail 2:</label>
							
							<div class="col-lg-2">
								<input type="email" class="form-control" id="ds_email_2" name="ds_email_2" value="<?php echo $obj->ds_email_2; ?>">
							</div>

						</div>

						<div class="form-group">

							<label for="nm_contato_3" class="col-lg-2 control-label">Contato 3:</label>
							
							<div class="col-lg-3">
								<input type="text" class="form-control" id="nm_contato_3" name="nm_contato_3" value="<?php echo $obj->nm_contato_3; ?>">
							</div>

							<label for="nr_telefone_3" class="col-lg-1 control-label">Telefone 3:</label>
							
							<div class="col-lg-2">
								<input type="text" class="form-control" id="nr_telefone_3" name="nr_telefone_3" value="<?php echo $obj->nr_telefone_3; ?>" onKeyDown="Mascara(this, Telefone);" onKeyPress="Mascara(this, Telefone);" onKeyUp="Mascara(this, Telefone);" maxlength="15">
							</div>

							<label for="ds_email_3" class="col-lg-1 control-label">E-mail 3:</label>
							
							<div class="col-lg-2">
								<input type="email" class="form-control" id="ds_email_3" name="ds_email_3" value="<?php echo $obj->ds_email_3; ?>">
							</div>

						</div>

					</div>
				</div>

				<div class="panel panel-dark" data-collapsed="0">

					<div class="panel-heading">
						<div class="panel-title">
							<strong>Endereço</strong>
						</div>
						
						<div class="panel-options">
							<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
						</div>
					</div>
							
					<div class="panel-body">								

						<br>
			
						<div class="form-group">

							<label for="nr_cep" class="col-lg-2 control-label">CEP:</label>
							
							<div class="col-lg-2">
								<input type="text" class="form-control validate[required]" data-mask="cep" id="nr_cep" name="nr_cep" value="<?php echo $obj->nr_cep; ?>" onchange="get_cep(event);" >
							</div>

							<label for="ds_endereco" class="col-md-1 control-label">Endereço:</label>
							
							<div class="col-sm-4">
								<input type="text" class="form-control validate[required]" id="ds_endereco" name="ds_endereco" value="<?php echo $obj->ds_endereco; ?>">
							</div>

							<label for="nr_endereco" class="col-md-1 control-label">Número:</label>
							
							<div class="col-sm-2">
								<input type="text" class="form-control validate[required]" id="nr_endereco" name="nr_endereco" value="<?php echo $obj->nr_endereco; ?>">
							</div>

						</div>

						<div class="form-group">

							<label for="nm_bairro" class="col-lg-2 control-label">Bairro:</label>
							
							<div class="col-lg-2">
								<input type="text" class="form-control validate[required]" id="nm_bairro" name="nm_bairro" value="<?php echo $obj->nm_bairro; ?>">
							</div>

							<label for="nm_cidade" class="col-lg-1 control-label">Cidade:</label>
							
							<div class="col-lg-4">
								<input type="text" class="form-control validate[required]" id="nm_cidade" name="nm_cidade" value="<?php echo $obj->nm_cidade; ?>">
							</div>

							<label for="sg_uf" class="col-lg-1 control-label">Estado:</label>
							
							<div class="col-lg-2">
								<select class="form-control validate[required]" id="sg_uf" name="sg_uf">
									<option value=""> - selecione - </option>
									<?php echo $lista_estados; ?>
								</select>
							</div>

						</div>

						<div class="form-group">

							<label for="ds_complemento" class="col-lg-2 control-label">Complemento:</label>
							
							<div class="col-lg-7">
								<input type="text" class="form-control" id="ds_complemento" name="ds_complemento" value="<?php echo $obj->ds_complemento; ?>">
							</div>

							<label for="nm_cidade" class="col-lg-1 control-label">Município:</label>
							
							<div class="col-lg-2">
								<input type="text" class="form-control" id="cd_municipio" name="cd_municipio" value="<?php echo $obj->cd_municipio; ?>" readonly>
							</div>

						</div>

					</div>
				</div>

			<?php $this->load->view("includes/registro"); ?>

			</div>
		</div>

		<div class="row">
			<div class="col-md-12"  style="text-align: center">
											
				<button type="button" class="btn btn-blue" onclick="verifica_duplicidade();">Salvar</button>
				<button type="button" class="btn btn-primary botao-cancelar" data-control="<?php echo $this->router->fetch_class(); ?>">Voltar</button>

			</div>
		</div>

		</form>
		
		<?php $this->load->view("includes/footer"); ?>		
		
	</div>	
	
</div>

<script>

function get_cep(event){

  if($("#nr_cep").val() != ''){

	$.ajax({
	  url: "<?php echo base_url(); ?>cep/get_cep",
	  async: true,
	  type: 'POST',
	  dataType: 'json',
	  data: {cep:$("#nr_cep").val()},
	
	  success: function(res, textStatus) {

	  	if(res.status > 0){

			$("#ds_endereco").val(res.logradouro);
			$("#nm_bairro").val(res.bairro);
			$("#nm_cidade").val(res.cidade);
		    $("#sg_uf").val(res.uf);
			$("#nm_complemento").val(res.complemento);
		    $("#cd_municipio").val(res.cd_uf+res.cd_municipio);

	  	}else{
	  		
	  		$("#ds_endereco").val("");
			$("#nm_bairro").val("");
			$("#nm_cidade").val("");
		    $("#sg_uf").val("");
			$("#nm_complemento").val("");
		    $("#cd_municipio").val("");

	  	}

	  },

	  error: function(xhr,er) {
		$('#mensagem').html('Erro!');
	  }


	});
	 
	event.preventDefault();

  }

}

function verifica_duplicidade(){

	<?php if($obj->cd_cliente){ ?>

		$("#formulario").submit();

	<?php }else{ ?>

	 	var exist = false;

		$.ajax({
		  url: "<?php echo base_url(); ?>form/cliente/duplicidade",
		  async: false,
		  type: 'POST',
		  dataType: 'json',
		  data: { id_cnpj:$("#id_cnpj").val() },
		
		  success: function(res, textStatus) {

		  	//alert(res);

		  	if(res.status == '1'){
		  		exist = true;
		  	}
		  	
		  },

		  error: function(xhr,er) {
			$('#mensagem').html('Erro!');
		  }


		});

		if(exist){
			$(".botao_salvar").attr("data-erro", 1);
			toastr.error("Já existe um Cliente com este CNPJ cadastrado!");
			return false;
		}
		
		$(".botao_salvar").attr("data-erro", 0);

		$("#formulario").submit();
	
	<?php } ?>
	
}

</script>

</body>
</html>