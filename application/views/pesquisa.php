<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Boyden - Mais Pesquisas</title>
  <!-- loader-->
  <link href="<?php echo base_url("assets-pesquisa/css/pace.min.css"); ?>" rel="stylesheet"/>
  <script src="<?php echo base_url("assets-pesquisa/js/pace.min.js"); ?>"></script>
  <!--favicon-->
  <link rel="icon" href="<?php echo base_url("assets-pesquisa/images/favicon.ico"); ?>" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="<?php echo base_url("assets-pesquisa/plugins/simplebar/css/simplebar.css"); ?>" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url("assets-pesquisa/css/bootstrap.min.css"); ?>" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="<?php echo base_url("assets-pesquisa/css/animate.css"); ?>" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="<?php echo base_url("assets-pesquisa/css/icons.css"); ?>" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="<?php echo base_url("assets-pesquisa/css/sidebar-menu.css"); ?>" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="<?php echo base_url("assets-pesquisa/css/app-style.css"); ?>" rel="stylesheet"/>
  
  
</head>

<body class="bg-theme bg-theme11">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming">
     <div class="loader-wrapper-outer">
       <div class="loader-wrapper-inner" >
         <div class="loader"></div>
       </div>
     </div>
   </div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

 

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <span style="font-size: 20px">Grupo Petropolis</span>
    </li>
    
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">

    <li class="nav-item dropdown-lg">

      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="void(0);" onclick="window.location='login';" style="font-size: 15px">
      <i class="icon-login icons"></i>Sair</a>
    </li>
    
  </ul>

</nav>
</header>
<!--End topbar header-->
<div class="clearfix"></div>
	
<div class="content-wrapper">

<div class="container-fluid">

<div class="row">
  
  <div class="col-lg-1"></div>

  <div class="col-lg-11">

  <div class="container-fluid">

      <div class="row mt-3">
        <div class="col-lg-11">

        <h2 style="padding-top: 20px; text-align: center; text-shadow: #111 2px 3px 3px;">&nbsp;&nbsp;Pesquisa de Cargos e Salários 2020</h2>

        </div>

      </div>

    </div>




    <div class="container-fluid">

      <div class="row mt-3">
        <div class="col-lg-11">
           <div class="card">
             <div class="card-body">
             <div class="card-title">
               <h5> <i class="fa fa-address-book-o"></i> &nbsp;1. Informações Gerais</h5>
             </div>

             <hr>

              <div class="row">
                <div class="col-lg-12">
                  <label for="input-1">Nome da Empresa:</label>
                  <input type="text" class="form-control field" id="nm_nome_empresa" value="<?php echo $obj->nm_nome_empresa; ?>">
                </div>
               </div>

               <div class="row mt-3">
                <div class="col-lg-12">
                  <label for="input-3">Razão Social:</label>
                  <input type="text" class="form-control field" id="nm_razao_social" value="<?php echo $obj->nm_razao_social; ?>">
                </div>
               </div>

               <div class="row mt-3">
                <div class="col-lg-12">
                  <label for="input-1">Ramo principal da atividade:</label>
                  <input type="text" class="form-control field" id="nm_ramo_atividade" value="<?php echo $obj->nm_ramo_atividade; ?>">
                </div>
               </div>

               <div class="row mt-3">
                <div class="col-lg-12">
                  <label for="input-3">Nacionalidade da Empresa:</label>
                  <input type="text" class="form-control field" id="nm_nacionalidade" value="<?php echo $obj->nm_nacionalidade; ?>">
                </div>
               </div>
              
             </div>

           </div>
        </div>
        
      </div>

      <div class="overlay toggle-menu"></div>

    </div>






    <div class="container-fluid">

      <div class="row mt-3">
        <div class="col-lg-11">
           <div class="card">
             <div class="card-body">
             <div class="card-title">
               <h5> <i class="fa fa-address-book-o"></i> &nbsp;2. Faturamento e Colaboradores</h5>
             </div>

             <hr>

             <div class="row">
                <div class="col-lg-6">
                  <label for="input-1" style="color: #FFF; text-decoration: underline;">Faturamento anual bruto no Brasil (em milhões de reais)</label>
                </div>
               
                <div class="col-lg-6">
                  <label for="input-3" style="color: #FFF; text-decoration: underline;">Total de colaboradores no Brasil</label>
                </div>

               </div>
                           
              <div class="row mt-3">
                <div class="col-lg-6">
                <label for="input-1">No ano de 2019 (em milhões):</label>
                
                  <input type="text" class="form-control field mask_real" id="vr_faturamento_2019" value="<?php echo $obj->vr_faturamento_2019; ?>">
                </div>
               
                <div class="col-lg-6">
                  <label for="input-3">Em dezembro de 2020:</label>
                  <input type="text" class="form-control field" id="nr_total_colaboradores_2019" value="<?php echo $obj->nr_total_colaboradores_2019; ?>" onKeyDown="Mascara(this, Integer);" onKeyPress="Mascara(this, Integer);" onKeyUp="Mascara(this, Integer);">
                </div>

               </div>

               <div class="row mt-3">
                <div class="col-lg-6">
                <label for="input-1">No ano de 2019 (em milhões):</label>
                
                  <input type="text" class="form-control field mask_real" id="vr_faturamento_2020" value="<?php echo $obj->vr_faturamento_2020; ?>">
                </div>
               
                <div class="col-lg-6">
                  <label for="input-3">Em dezembro de 2020:</label>
                  <input type="text" class="form-control field" id="nr_total_colaboradores_2020" value="<?php echo $obj->nr_total_colaboradores_2020; ?>" onKeyDown="Mascara(this, Integer);" onKeyPress="Mascara(this, Integer);" onKeyUp="Mascara(this, Integer);">
                </div>

               </div>

              
             </div>
             
           </div>
        </div>

        
      </div>

      <div class="overlay toggle-menu"></div>

    </div>






    <div class="container-fluid">

      <div class="row mt-3">
        <div class="col-lg-11">
           <div class="card">
             <div class="card-body">
             <div class="card-title">
               <h5> <i class="fa fa-address-book-o"></i> &nbsp;3. Salários - Base Abril de 2019</h5>
             </div>

             <hr>

              <div class="row">
                <div class="col-lg-6">
                  <label for="input-1" style="color: #FFF; text-decoration: underline;">Cargo</label>
                </div>
               
                <div class="col-lg-3">
                  <label for="input-3" style="color: #FFF; text-decoration: underline;">Salário Fixo Mensal</label>
                </div>

                <div class="col-lg-3">
                  <label for="input-3" style="color: #FFF; text-decoration: underline;">Nº Salários por Ano</label>
                </div>

              </div>

              <?php for($i=0; $i < count($objC); $i++){ ?>

                <?php $checked = ""; ?>
                <?php $display = "style='display:none'"; ?>

                <?php if( in_array($objC[$i]->id_cargo, $objPC) ){ $checked = "checked"; $display = "style='display:block'"; } ?>

                <?php $vr_salario_fixo_mensal = number_format($objPCV[$objC[$i]->id_cargo]->vr_salario_fixo_mensal, 2, ",", "."); ?>
                <?php $qt_salarios_ano        = $objPCV[$objC[$i]->id_cargo]->qt_salarios_ano; ?>

                <div class="row mt-1">
                  <div class="col-lg-6 mt-1">
                    <div class="icheck-material-white">           
                      <input type="checkbox" id="cargo-<?php echo $i; ?>" class="check_<?php echo $i; ?>" value="<?php echo $objC[$i]->id_cargo; ?>" onclick="abre_fecha_div('<?php echo $i; ?>');" <?php echo $checked; ?> />
                      <label for="cargo-<?php echo $i; ?>"><?php echo $objC[$i]->nm_cargo; ?>:</label>
                    </div>
                  </div>
                 
                  <div class="col-lg-2 div_<?php echo $i; ?>" <?php echo $display; ?>>
                    <input type="text" class="form-control mask_real" id="vr_salario_fixo_mensal" value="<?php echo $vr_salario_fixo_mensal; ?>">
                  </div>

                  <div class="col-lg-1 div_<?php echo $i; ?>" <?php echo $display; ?>></div>
                  <div class="col-lg-2 div_<?php echo $i; ?>" <?php echo $display; ?>>

                    <select class="form-control field" id="qt_salarios_ano">
                      <option value="12" <?php if($qt_salarios_ano == 12){echo "selected";} ?>>12</option>
                      <option value="13" <?php if($qt_salarios_ano == 13){echo "selected";} ?>>13</option>
                      <option value="13,33" <?php if($qt_salarios_ano == 13.33){echo "selected";} ?>>13,33</option>
                    </select>

                  </div>

                 </div>

               <?php } ?>

             

              
             </div>
             
           </div>
        </div>

        
      </div>

      <div class="overlay toggle-menu"></div>

    </div>






    <div class="container-fluid">

      <div class="row mt-3">
        <div class="col-lg-11">
           <div class="card">
             <div class="card-body">
             <div class="card-title">
               <h5> <i class="fa fa-address-book-o"></i> &nbsp;7. Perguntas Finais</h5>
             </div>

             <hr>

              <div class="row">
                <div class="col-lg-12">
                  <label for="input-1" style="color: #FFF; text-decoration: underline;">Total de expatriados atuando no Brasil (somente para empresas multinacionais):</label>
                </div>

              </div>
                           
              <div class="row">

                  <div class="col-lg-6">
                  <label for="input-1">Dezembro de 2019:</label>
                  
                    <input type="text" class="form-control field" id="nr_expatriados_brasil_2019" value="<?php echo $obj->nr_expatriados_brasil_2019; ?>" onKeyDown="Mascara(this, Integer);" onKeyPress="Mascara(this, Integer);" onKeyUp="Mascara(this, Integer);">
                  </div>
                 
                  <div class="col-lg-6">
                    <label for="input-3">Dezembro de 2020:</label>
                    <input type="text" class="form-control field" id="nr_expatriados_brasil_2020" value="<?php echo $obj->nr_expatriados_brasil_2020; ?>" onKeyDown="Mascara(this, Integer);" onKeyPress="Mascara(this, Integer);" onKeyUp="Mascara(this, Integer);">
                  </div>

               </div>

               <br>

               <div class="row mt-3">
                <div class="col-lg-12">
                  <label for="input-1" style="color: #FFF; text-decoration: underline;">Total de executivos brasileiros ocupando posições em operações no exterior (somente para empresas multinacionais):</label>
                </div>

              </div>
                           
              <div class="row">

                  <div class="col-lg-6">
                  <label for="input-1">Dezembro de 2019:</label>
                  
                    <input type="text" class="form-control field" id="nr_executivos_exterior_2019" value="<?php echo $obj->nr_executivos_exterior_2019; ?>" onKeyDown="Mascara(this, Integer);" onKeyPress="Mascara(this, Integer);" onKeyUp="Mascara(this, Integer);">
                  </div>
                 
                  <div class="col-lg-6">
                    <label for="input-3">Dezembro de 2020:</label>
                    <input type="text" class="form-control field" id="nr_executivos_exterior_2020" value="<?php echo $obj->nr_executivos_exterior_2020; ?>" onKeyDown="Mascara(this, Integer);" onKeyPress="Mascara(this, Integer);" onKeyUp="Mascara(this, Integer);">
                  </div>

               </div>




               <br><br>

              <div class="row mt-3">
                <div class="col-lg-12">
                  <label for="input-1" style="color: #FFF; text-decoration: underline;">Posições ocupadas pelos executivos:</label>
                </div>
              </div>

              <div class="row mt-3">
                <div class="col-lg-2">
                  <label for="input-1" style="color: #FFF; text-decoration: underline;">Grupo</label>
                </div>
               
                <div class="col-lg-3">
                  <label for="input-3" style="color: #FFF; text-decoration: underline;">Dezembro de 2019</label>
                </div>

                <div class="col-lg-3">
                  <label for="input-3" style="color: #FFF; text-decoration: underline;">Dezembro de 2020</label>
                </div>

              </div>


              <div class="row mt-1">
                <div class="col-lg-2 mt-1">
                  
                    <label for="cargo-1">Diretoria:</label>
                  
                </div>
               
                <div class="col-lg-2">
                  <input type="text" class="form-control field" id="nr_posicao_executivos_2019_diretoria" value="<?php echo $obj->nr_posicao_executivos_2019_diretoria; ?>" onKeyDown="Mascara(this, Integer);" onKeyPress="Mascara(this, Integer);" onKeyUp="Mascara(this, Integer);" maxlength="2">
                </div>

                <div class="col-lg-1"></div>
                <div class="col-lg-2">
                  <input type="text" class="form-control field" id="nr_posicao_executivos_2020_diretoria" value="<?php echo $obj->nr_posicao_executivos_2020_diretoria; ?>" onKeyDown="Mascara(this, Integer);" onKeyPress="Mascara(this, Integer);" onKeyUp="Mascara(this, Integer);" maxlength="2">
                </div>

               </div>

               <div class="row mt-1">
                <div class="col-lg-2 mt-1">
                  
                  <label for="cargo-2">Gerência:</label>
                  
                </div>
               
                <div class="col-lg-2">
                  <input type="text" class="form-control field" id="nr_posicao_executivos_2019_gerencia" value="<?php echo $obj->nr_posicao_executivos_2019_gerencia; ?>" onKeyDown="Mascara(this, Integer);" onKeyPress="Mascara(this, Integer);" onKeyUp="Mascara(this, Integer);" maxlength="2">
                </div>

                <div class="col-lg-1"></div>
                <div class="col-lg-2">
                  <input type="text" class="form-control field" id="nr_posicao_executivos_2020_gerencia" value="<?php echo $obj->nr_posicao_executivos_2020_gerencia; ?>" onKeyDown="Mascara(this, Integer);" onKeyPress="Mascara(this, Integer);" onKeyUp="Mascara(this, Integer);" maxlength="2">
                </div>

               </div>


             </div>
             
           </div>
        </div>

        
      </div>

      <div class="overlay toggle-menu"></div>

    </div>







    <div class="container-fluid">

      <div class="row mt-3">
        <div class="col-lg-11">
           <div class="card">
             <div class="card-body">
             <div class="card-title">
               <h5> <i class="fa fa-address-book-o"></i> &nbsp;8. Feedback Final</h5>
             </div>

             <hr>

             <div class="row">

                <div class="col-lg-12">
                  <label for="input-1" style="color: #FFF; text-decoration: underline;">Crie suas sugestões para que possamos melhorar esta Pesquisa de Remuneração Executiva:</label>
                </div>

             </div>

             <div class="row mt-3">
                <div class="col-lg-12">

                  <textarea type="text" class="form-control field" id="tx_sugestoes" rows="5"><?php echo $obj->tx_sugestoes; ?></textarea>

                </div>
              </div>

             <div class="row mt-4">
                <div class="col-lg-6">
                  <label for="input-1" style="color: #FFF; text-decoration: underline;">Dados do responsável pelo preenchimento do questionário:</label>
                </div>
               
                <div class="col-lg-6">
                  <label for="input-3" style="color: #FFF; text-decoration: underline;">Dados do(a) principal executivo(s) de RH / Gestão de Pessoas:</label>
                </div>

               </div>
                           
              <div class="row mt-3">
                <div class="col-lg-6">
                  <label for="input-1">Nome:</label>
                  <input type="text" class="form-control field" id="nm_nome_responsavel_preenchimento" value="<?php echo $obj->nm_nome_responsavel_preenchimento; ?>">
                  
                </div>
               
                <div class="col-lg-6">
                  <label for="input-3">Nome:</label>
                  <input type="text" class="form-control field" id="nm_nome_executivo_rh" value="<?php echo $obj->nm_nome_executivo_rh; ?>">
                </div>

               </div>

               <div class="row mt-3">
                <div class="col-lg-6">
                <label for="input-1">Cargo:</label>
                
                  <input type="text" class="form-control field" id="nm_cargo_responsavel_preenchimento" value="<?php echo $obj->nm_cargo_responsavel_preenchimento; ?>">
                </div>
               
                <div class="col-lg-6">
                  <label for="input-3">Cargo:</label>
                  <input type="text" class="form-control field" id="nm_cargo_executivo_rh" value="<?php echo $obj->nm_cargo_executivo_rh; ?>">
                </div>

               </div>

               <div class="row mt-3">
                <div class="col-lg-6">
                <label for="input-1">Telefone:</label>
                
                  <input type="text" class="form-control field" id="nm_telefone_responsavel_preenchimento" value="<?php echo $obj->nm_telefone_responsavel_preenchimento; ?>" onKeyDown="Mascara(this, Telefone);" onKeyPress="Mascara(this, Telefone);" onKeyUp="Mascara(this, Telefone);" maxlength="15">
                </div>
               
                <div class="col-lg-6">
                  <label for="input-3">Telefone:</label>
                  <input type="text" class="form-control field" id="nm_telefone_executivo_rh" value="<?php echo $obj->nm_telefone_executivo_rh; ?>" onKeyDown="Mascara(this, Telefone);" onKeyPress="Mascara(this, Telefone);" onKeyUp="Mascara(this, Telefone);" maxlength="15">
                </div>

               </div>

               <div class="row mt-3">
                <div class="col-lg-6">
                <label for="input-1">E-mail:</label>
                
                  <input type="text" class="form-control field" id="nm_email_responsavel_preenchimento" value="<?php echo $obj->nm_email_responsavel_preenchimento; ?>">
                </div>
               
                <div class="col-lg-6">
                  <label for="input-3">E-mail:</label>
                  <input type="text" class="form-control field" id="nm_email_executivo_rh" value="<?php echo $obj->nm_email_executivo_rh; ?>">
                </div>

               </div>

              
             </div>
             
           </div>
        </div>

        
      </div>

      <div class="overlay toggle-menu"></div>

    </div>





<!--

    <div class="container-fluid">

      <div class="row mt-3">
        <div class="col-lg-10">
           <div class="card">
             <div class="card-body">
             <div class="card-title">
               <h5> <i class="fa fa-address-book-o"></i> &nbsp;Dados Pessoais</h5>
             </div>
             <hr>
              <form>
             <div class="form-group">
              <label for="input-1">Qual o seu nome?</label>
              <input type="text" class="form-control" id="input-1">
             </div>
             <div class="form-group">
              <label for="input-3">Quantos filhos você tem?</label>
              <input type="text" class="form-control" id="input-3">
             </div>
            
             
             <div class="form-group py-2">
              <label for="input-3">Qual a sua cor preferida?</label>
               
               <div class="icheck-material-white">           
                <input type="radio" id="user-checkbox1"/>
                <label for="user-checkbox1">Branco</label>
               </div>

               <div class="icheck-material-white">           
                <input type="radio" id="user-checkbox1"/>
                <label for="user-checkbox1">Preto</label>
               </div>

               <div class="icheck-material-white">           
                <input type="radio" id="user-checkbox1"/>
                <label for="user-checkbox1">Azul</label>
               </div>

               <div class="icheck-material-white">           
                <input type="radio" id="user-checkbox1"/>
                <label for="user-checkbox1">Amarelo</label>
               </div>

             </div>

            </form>
           </div>
           </div>
        </div>

        
      </div>

      <div class="overlay toggle-menu"></div>

    </div>






    <div class="container-fluid">

      <div class="row mt-3">
        <div class="col-lg-10">
           <div class="card">
             <div class="card-body">
             <h5> <i class="fa fa-address-book-o"></i> &nbsp;Dados Profissionais</h5>
             <hr>
              <form>
             <div class="form-group">
              <label for="input-1">Qual é o cargo pretendido?</label>
              <input type="text" class="form-control" id="input-1">
             </div>
             
             <div class="form-group py-3">
              <label for="input-3">Pretensão salarial?</label>
               
               <div class="icheck-material-white">           
                <input type="radio" id="user-checkbox21" name="input1"/>
                <label for="user-checkbox21">1.000,00 a 1.500,00</label>
               </div>

               <div class="icheck-material-white">           
                <input type="radio" id="user-checkbox22" name="input1"/>
                <label for="user-checkbox22">1.500,00 a 2.500,00</label>
               </div>

               <div class="icheck-material-white">           
                <input type="radio" id="user-checkbox23" name="input1"/>
                <label for="user-checkbox23">2.500,00 a 3.500,00</label>
               </div>

               <div class="icheck-material-white">           
                <input type="radio" id="user-checkbox24" name="input1"/>
                <label for="user-checkbox24">Mais de 3.500,00</label>
               </div>

             </div>


             <div class="form-group py-2">
              <label for="input-3">Quais estilos de música você curte?</label>
               
               <div class="icheck-material-white">           
                <input type="checkbox" id="user-checkbox1"/>
                <label for="user-checkbox1">Rock</label>
               </div>

               <div class="icheck-material-white">           
                <input type="checkbox" id="user-checkbox1"/>
                <label for="user-checkbox1">Reggae</label>
               </div>

               <div class="icheck-material-white">           
                <input type="checkbox" id="user-checkbox1"/>
                <label for="user-checkbox1">MPB</label>
               </div>

               <div class="icheck-material-white">           
                <input type="checkbox" id="user-checkbox1"/>
                <label for="user-checkbox1">Sertanejo</label>
               </div>

             </div>



             <div class="form-group">
              <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i> Register</button>
            </div>
            </form>
           </div>
           </div>
        </div>

        
      </div>

		  <div class="overlay toggle-menu"></div>

    </div>

  -->

    </div>
  </div>
</div>


    <!-- End container-fluid-->
    
   </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
	
	<!--Start footer-->
	<footer class="footer">
      <div class="container">
        <div class="text-center">
          Mais Pesquisas
        </div>
      </div>
    </footer>
	<!--End footer-->
	
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
   
  </div><!--End wrapper-->


<script src="<?php echo base_url('assets/js/jquery-1.11.3.min.js'); ?>"></script>

<script src="<?php echo base_url("assets-pesquisa/js/popper.min.js"); ?>"></script>
<script src="<?php echo base_url("assets-pesquisa/js/bootstrap.min.js"); ?>"></script>
<script src="<?php echo base_url("assets-pesquisa/plugins/simplebar/js/simplebar.js"); ?>"></script>
<script src="<?php echo base_url("assets-pesquisa/js/sidebar-menu.js"); ?>"></script>

<script src="<?php echo base_url("assets-pesquisa/js/maskMoney.js"); ?>"></script>
<script src="<?php echo base_url("assets-pesquisa/js/aplication.js"); ?>"></script>
<script src="<?php echo base_url("assets-pesquisa/js/app-script.js"); ?>"></script>

<script>

  function abre_fecha_div(n){

    if($(".check_"+n).is(":checked")){

      $(".div_"+n).fadeIn('slow');

    }else{

      $(".div_"+n).fadeOut('slow');

    }      

  }

  //$(".div_ocultar").css("display", "none");


  var type;
  var field;
  var value;

  $(".field").change(function(){
    
    type  = $(this).attr("type");
    field = $(this).attr("id");
    value = $(this).val();
    tipo = $(this).attr("data-tipo-dado");

    //if(type == "text"){

      $.ajax({

        url: "<?php echo base_url(); ?>pesquisa/gravar",
        async: true,
        type: 'POST',
        data: { 
              type : type,
              field : field,
              value: value
            },
      
        success: function(res, textStatus) {

          console.log(res);

        },

        error: function(xhr,er) {
        $('#mensagem').html('Erro!');
        }


      });

    //}

  });

</script>
	
</body>
</html>
