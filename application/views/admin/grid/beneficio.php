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

		<nav class="navbar "role="navigation">

			<div class="form-group">

				<div class="col-lg-12" style="text-align: right">
					<button type="button" class="btn btn-blue botao-incluir" data-control="<?php echo $this->router->fetch_class(); ?>">Cadastrar</button>
				</div>

			</div>

		</nav>
		
		<table class="table table-bordered datatable" id="table-1">
			<thead>
				<tr>

					<th style="text-align: center"></th>

					<th>Nome do Cargo</th>

				</tr>
			</thead>

			<tbody>

			  <?php for($i=0; $i < count($obj); $i++) { ?>

				<tr class="odd gradeX">
					<td width="60" align="center">

					      <img src="<?php echo base_url('assets/images/editar.png'); ?>" width="20" class="botao-alterar" data-id="<?php echo $obj[$i]->id_beneficio; ?>" data-control="<?php echo $this->router->fetch_class(); ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Editar">

					      <img src="<?php echo base_url('assets/images/delete.png'); ?>" width="20" class="botao-excluir" data-id="<?php echo $obj[$i]->id_beneficio; ?>" data-control="<?php echo $this->router->fetch_class(); ?>" data-toggle="tooltip" data-placement="top" data-original-title="Excluir">

					</td>
					  
				  	<td><?php echo $obj[$i]->nm_beneficio; ?></td>
					
				</tr>

			  <?php }  ?>

			</tbody>
			
		</table>

		
		<?php $this->load->view("admin/includes/footer"); ?>
		
	</div>
	
	
</div>


	<script type="text/javascript">

		jQuery( document ).ready( function( $ ) {
			var $table1 = jQuery( "#table-1" );
			
			$table1.DataTable( {

				"aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
				"order": [[ 1, "asc" ]],
				"bStateSave": true,
				dom: 'frltiBp',
				buttons: [
					'copyHtml5',
					'excelHtml5',
					'csvHtml5',
					'pdfHtml5'
				]
			} );
			$table1.closest( '.dataTables_wrapper' ).find( 'select' ).select2( {
				minimumResultsForSearch: -1
			});
		} );

		$('.botao-cancelar').click(function(){
		    window.location = 'index.php';
		});

	</script>

	<!-- Imported styles on this page -->
	

</body>
</html>