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

		<br><br><br><br><br>
		
		<div class="page-error-404">			

			<br><br><br><br><br><br><br><br><br><br>
			
			
			<div class="error-text">
				
				Houve insconsistencia nesta ação, o problema foi reportado à nossa equipe de suporte.
				<br>
				Você será reportado o mais breve possível através de um SMS assim que o problema for solucionado!
				
			</div>

			
				
		</div>

	
	</div>

</div>


</body>
</html>