<table class="table table-bordered datatable" id="table-1">
	<thead>
		<tr>
			<th style="text-align: center">
			  
			  <?php if($botao_incluir != "N"){ ?>
				<img src="<?php echo base_url('assets/images/adicionar.png'); ?>" width="20" class="botao-incluir" data-control="<?php echo $this->router->fetch_class(); ?>">
			  <?php } ?>

			</th>
			<?php for ($i=0; $i < count($objL); $i++) { ?>
			  <th><?php echo $objL[$i]; ?></th>
			<?php } ?>
			
		</tr>
	</thead>

	<tbody>
	  <?php for ($r=0; $r < count($objR); $r++) { ?>

		<tr class="odd gradeX">
			<td width="60" align="center">

				<?php if($botao_editar != "N"){ ?>
			      <img src="<?php echo base_url('assets/images/editar.png'); ?>" width="20" class="botao-alterar" data-id="<?php echo $i; ?>" data-control="<?php echo $this->router->fetch_class(); ?>">
				<?php } ?>

				<?php if($botao_editar != "N"){ ?>
			      <img src="<?php echo base_url('assets/images/delete.png'); ?>" width="20" class="botao-excluir" data-id="<?php echo $i; ?>">
			    <?php } ?>

			</td>
			
			
			
			  <?php for ($c=0; $c < count($objC); $c++) { ?>
			  
			  	<td data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top"><?php echo $objF[ key($objR[$r]) ]( $objR[$r][ key($objR[$r]) ] ); ?></td>

			  	<?php next($objR[$r]); ?>

			  

			<?php } ?>
			
		</tr>
	  <?php }  ?>
	</tbody>
	
</table>