<?php

$arrayM = $this->session->menu;

?>

<ul id="main-menu" class="main-menu">
<!-- class "" will automatically add "active" class for parent elements who are marked already with class "active" -->

<!--<li>
	<a href="<?php // echo site_url("admin/grid/dashboard"); ?>">
		<i class="entypo-monitor"></i>
		<span class="title">Dashboard</span>
	</a>
</li>-->

<li>
	<a href="<?php echo site_url("admin/grid/grupo"); ?>">
		<i class="glyphicon glyphicon-th-large"></i>
		<span class="title">Grupo</span>
	</a>
</li>

<li>
	<a href="<?php echo site_url("admin/grid/cargo"); ?>">
		<i class="glyphicon glyphicon-briefcase"></i>
		<span class="title">Cargo</span>
	</a>
</li>

<li>
	<a href="<?php echo site_url("admin/grid/beneficio"); ?>">
		<i class="glyphicon glyphicon-credit-card"></i>
		<span class="title">Benefício</span>
	</a>
</li>

<li>
	<a href="<?php echo site_url("admin/grid/respondente"); ?>">
		<i class="entypo-users"></i>
		<span class="title">Respondentes</span>
	</a>
</li>

<li>
	<a href="<?php echo site_url("admin/grid/usuario"); ?>">
		<i class="entypo-user"></i>
		<span class="title">Usuários</span>
	</a>
</li>

</ul>

<script>
	
	var modulo_opened = '<?php echo $modulo_opened; ?>';
	
	$("."+modulo_opened).addClass('opened');
	$(".selecionado").css('background-color', "#005683").css("font-weight", "bold").css("color", "#FFF");

</script>