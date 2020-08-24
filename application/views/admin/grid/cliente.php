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

		<nav class="navbar "role="navigation">

			<div class="form-group">

				<div class="col-lg-12" style="text-align: right">
					<button type="button" class="btn btn-blue botao-incluir" data-control="<?php echo $this->router->fetch_class(); ?>">Cadastrar</button>
				</div>

			</div>

		</nav>

		<table class="table table-condensed table-bordered table-hover table-striped datatable" id="table-1">
			<thead>
				<tr>

					<th style="text-align: center" width="80">
						
					</th>

					<th style="text-align: center">Cliente</th>
					<th style="text-align: center">CNPJ</th>
					<th style="text-align: center">IE</th>

				</tr>
			</thead>

			<tbody>

			  <?php for($i=0; $i < count($obj); $i++) { ?>

				<tr class="odd gradeX">
					<td width="60" align="center">

					      <img src="<?php echo base_url('assets/images/editar.png'); ?>" width="20" class="botao-alterar" data-id="<?php echo $obj[$i]->cd_cliente; ?>" data-control="<?php echo $this->router->fetch_class(); ?>" data-toggle="tooltip" data-placement="top" data-original-title="Editar">

					</td>
					  
				  	<td style="text-align: center"><?php echo $obj[$i]->nm_administracao . " - " . $obj[$i]->nm_cliente; ?></td>
				  	<td style="text-align: center"><?php echo getCpfCnpj($obj[$i]->id_cnpj); ?></td>
				  	<td style="text-align: center"><?php echo $obj[$i]->nr_ie; ?></td>
					
				</tr>

			  <?php }  ?>

			</tbody>
			
		</table>

		
		<?php $this->load->view("includes/footer"); ?>
		
	</div>
	
	
</div>

<script type="text/javascript">

	jQuery( document ).ready( function( $ ) {
		var $table1 = jQuery( "#table-1" );
		
		$table1.DataTable( {

			"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
			"order": [[ 1, "asc" ]],
			"bStateSave": true,
			dom: 'frtBp',
			buttons: [
				'excelHtml5',
				'pdfHtml5'
			]
		} );
		$table1.closest( '.dataTables_wrapper' ).find( 'select' ).select2( {
			minimumResultsForSearch: -1
		});
	} );

</script>

</body>
</html>