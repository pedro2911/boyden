<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Boyden - Login</title>
  <!-- loader-->
    <link href="<?php echo base_url("assets-pesquisa/css/pace.min.css"); ?>" rel="stylesheet"/>
  <script src="<?php echo base_url("assets-pesquisa/js/pace.min.js"); ?>"></script>
  <!--favicon-->
  <link rel="icon" href="<?php echo base_url("assets-pesquisa/images/favicon.ico"); ?>" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url("assets-pesquisa/css/bootstrap.min.css"); ?>" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="<?php echo base_url("assets-pesquisa/css/animate.css"); ?>" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="<?php echo base_url("assets-pesquisa/css/icons.css"); ?>" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="<?php echo base_url("assets-pesquisa/css/app-style.css"); ?>" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme11">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

 <div class="loader-wrapper"><div class="lds-ring"><div></div><div></div><div></div><div></div></div></div>
	<div class="card card-authentication1 mx-auto my-5">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="assets-pesquisa/images/logo-boyden.png" width="300">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">Autenticação</div>
		    <form action="login/logar" method="post">
			  <div class="form-group">
			  <label for="exampleInputUsername" class="sr-only">Login</label>
			   <div class="position-relative has-icon-right">
				  <input type="text" id="username" name="username" class="form-control input-shadow" placeholder="Usuário / E-mail">
				  <div class="form-control-position">
					  <i class="icon-user"></i>
				  </div>
			   </div>
			  </div>
			  <div class="form-group">
			  <label for="exampleInputPassword" class="sr-only">Senha</label>
			   <div class="position-relative has-icon-right">
				  <input type="password" id="password" name="password" class="form-control input-shadow" placeholder="Senha">
				  <div class="form-control-position">
					  <i class="icon-lock"></i>
				  </div>
			   </div>
			  </div>
			<!--<div class="form-row">
			 <div class="form-group col-12 text-right">
			  <a href="reset-password.html">Esqueci minha senha</a>
			 </div>
			</div>-->
      <?php if($this->session->erro_login > 0){ ?>
        <div class="form-row">
         <div class="form-group col-12 text-center">
           Usuário e/ou senha incorretos!
         </div>
        </div>
      <?php } ?>

			 <button type="submit" class="btn btn-light btn-block">Logar</button>
			 </form>
		   </div>
		  </div>

	     </div>
    
     <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
		    <li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
	
	</div><!--wrapper-->




  <script src="<?php echo base_url('assets/js/jquery-1.11.3.min.js'); ?>"></script>

<script src="<?php echo base_url("assets-pesquisa/js/jquery.min.js"); ?>"></script>
<script src="<?php echo base_url("assets-pesquisa/js/popper.min.js"); ?>"></script>
<script src="<?php echo base_url("assets-pesquisa/js/bootstrap.min.js"); ?>"></script>
<script src="<?php echo base_url("assets-pesquisa/js/sidebar-menu.js"); ?>"></script>

<script src="<?php echo base_url("assets-pesquisa/js/app-script.js"); ?>"></script>
<script src="<?php echo base_url("assets-pesquisa/js/aplication.js"); ?>"></script>

</body>
</html>
