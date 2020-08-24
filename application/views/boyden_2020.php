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
      <span style="font-size: 20px"><?php echo $_SESSION["nm_cliente_session"] ?></span>
    </li>
    
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">

    <li class="nav-item dropdown-lg">

      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="void(0);" onclick="window.location='deslogar';" style="font-size: 15px">
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

        <h2 style="padding-top: 20px; text-align: center; text-shadow: #111 2px 3px 3px;">&nbsp;&nbsp;Pesquisa Boyden de Remuneração Executiva 2020</h2>

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

                  <select class="form-control field" id="nm_nacionalidade">
                    <option value=""> - selecione - </option>
                    <option value="Brasil" <?php if($obj->nm_nacionalidade == "Brasil"){echo "selected";} ?>>Brasil</option>
                    <option value="Europa" <?php if($obj->nm_nacionalidade == "Europa"){echo "selected";} ?>>Europa</option>
                    <option value="América do Norte" <?php if($obj->nm_nacionalidade == "América do Norte"){echo "selected";} ?>>América do Norte</option>
                    <option value="América do Sul/Central" <?php if($obj->nm_nacionalidade == "América do Sul/Central"){echo "selected";} ?>>América do Sul/Central</option>
                    <option value="Ásia/Oceania" <?php if($obj->nm_nacionalidade == "Ásia/Oceania"){echo "selected";} ?>>Ásia/Oceania</option>
                  </select>

                </div>
               </div>

               <div class="row mt-3">

                <div class="col-lg-12">
                  <label for="input-3">Observações:</label>

                  <textarea class="form-control field" id="tx_observacao_1" rows="4"><?php echo $obj->tx_observacao_1; ?></textarea>

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
               <h5> <i class="fa fa-address-book-o"></i> &nbsp;2. Faturamento</h5>
             </div>

             <hr>

             <div class="row">
                <div class="col-lg-6">
                  <label for="input-1" style="color: #FFF; text-decoration: underline;">Faturamento anual bruto no Brasil (em milhões de reais)</label>
                </div>

            </div>
                           
              <div class="row mt-3">
                <div class="col-lg-6">
                <label for="input-1">No ano de 2018 (em milhões):</label>
                
                  <input type="text" class="form-control field mask_real_milhao" data-tipo-dado="decimal" id="vr_faturamento_2018" value="<?php echo $obj->vr_faturamento_2018; ?>">
                </div>
               
                <div class="col-lg-6">
                <label for="input-1">No ano de 2019 (em milhões):</label>
                
                  <input type="text" class="form-control field mask_real_milhao" data-tipo-dado="decimal" id="vr_faturamento_2019" value="<?php echo $obj->vr_faturamento_2019; ?>">
                </div>

               </div>

               <div class="row mt-3">

                <div class="col-lg-12">
                  <label for="input-3">Observações:</label>

                  <textarea class="form-control field" id="tx_observacao_2" rows="4"><?php echo $obj->tx_observacao_2; ?></textarea>

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
               <h5> <i class="fa fa-address-book-o"></i> &nbsp;3.1 Salários - Base Abril de 2020</h5>
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

                <?php $vr_salario_fixo_mensal = getFormatNumber($objPCV[$objC[$i]->id_cargo]->vr_salario_fixo_mensal); ?>
                <?php $qt_salarios_ano        = $objPCV[$objC[$i]->id_cargo]->qt_salarios_ano; ?>

                <div class="row mt-1">
                  <div class="col-lg-6 mt-1">
                    <div class="icheck-material-white">           
                      <input type="checkbox" 
                             id="cargo-<?php echo $i; ?>" 
                             class="check_<?php echo $i; ?> check-field-cargo tipo-cargo" 
                             data-cargo="<?php echo $objC[$i]->id_cargo; ?>" 
                             data-tipo-cargo="<?php echo $objC[$i]->tp_cargo; ?>" 
                             value="<?php echo $objC[$i]->id_cargo; ?>" 
                             onclick="abre_fecha_div('<?php echo $i; ?>');" <?php echo $checked; ?> />

                      <label for="cargo-<?php echo $i; ?>"><?php echo $objC[$i]->nm_cargo; ?>:</label>
                    </div>
                  </div>
                 
                  <div class="col-lg-2 div_<?php echo $i; ?>" <?php echo $display; ?>>
                    <input type="text" class="form-control dynamic-field mask_real vr_salario_fixo_mensal_<?php echo $i; ?>" id="vr_salario_fixo_mensal" value="<?php echo $vr_salario_fixo_mensal; ?>" data-tipo-dado="decimal" data-cargo="<?php echo $objC[$i]->id_cargo; ?>">
                  </div>

                  <div class="col-lg-1 div_<?php echo $i; ?>" <?php echo $display; ?>></div>
                  <div class="col-lg-2 div_<?php echo $i; ?>" <?php echo $display; ?>>

                    <select class="form-control dynamic-field qt_salarios_ano_<?php echo $i; ?>" id="qt_salarios_ano" data-cargo="<?php echo $objC[$i]->id_cargo; ?>">
                      <option value=""> - selecione - </option>
                      <option value="12" <?php if($qt_salarios_ano == 12){echo "selected";} ?>>12</option>
                      <option value="13" <?php if($qt_salarios_ano == 13){echo "selected";} ?>>13</option>
                      <option value="13.33" <?php if($qt_salarios_ano == 13.33){echo "selected";} ?>>13,33</option>
                      <option value="14" <?php if($qt_salarios_ano == 14){echo "selected";} ?>>14</option>
                    </select>

                  </div>

                 </div>

               <?php } ?>


               <div class="row mt-3">
                 &nbsp;&nbsp;<button class="btn btn-dark" onclick="cadastrar_cargo();">+ &nbsp; Cadastrar Novo Cargo</button>
               </div>

               <hr>

              <div class="row">
                <div class="col-lg-12">
                  <label for="input-1" style="color: #FFF; text-decoration: underline;">Porcentagem do aumento dos salários base (sem considerar remuneração variável) dos seus executivos durante o ano de 2019:</label>
                </div>
              </div>

              <div class="row mt-3">
                <div class="col-lg-7">
                  <label for="input-1" style="color: #FFF; text-decoration: underline;">Grupo:</label>
                </div>
               
                <div class="col-lg-3">
                  <label for="input-3" style="color: #FFF; text-decoration: underline;">% de aumento nominal:</label>
                </div>

              </div>


              <div class="row mt-1">

                  <div class="col-lg-7 mt-1 div_questao_3_2_presidencia" style="display: none">
                      <label for="cargo-1">Presidência:</label>
                  </div>

                  <div class="col-lg-2 div_questao_3_2_presidencia" style="display: none">
                    <input type="text" class="form-control field mask_porcentagem_sinal" id="pc_aumento_salario_presidencia" value="<?php echo getFormatNumber($obj->pc_aumento_salario_presidencia); ?>" data-tipo-dado="decimal" >
                  </div>

               </div>

               <div class="row mt-1">

                  <div class="col-lg-7 mt-1 div_questao_3_2_diretoria" style="display: none">
                      <label for="cargo-1">Diretoria:</label>
                  </div>
                                 
                  <div class="col-lg-2 div_questao_3_2_diretoria" style="display: none">
                    <input type="text" class="form-control field mask_porcentagem_sinal" id="pc_aumento_salario_diretoria" value="<?php echo getFormatNumber($obj->pc_aumento_salario_diretoria); ?>" data-tipo-dado="decimal">
                  </div>

               </div>

               <div class="row mt-1">

                  <div class="col-lg-7 mt-1 div_questao_3_2_gerencia" style="display: none">
                      <label for="cargo-1">Gerência:</label>
                  </div>
                                 
                  <div class="col-lg-2 div_questao_3_2_gerencia" style="display: none">
                    <input type="text" class="form-control field mask_porcentagem_sinal" id="pc_aumento_salario_gerencia" value="<?php echo getFormatNumber($obj->pc_aumento_salario_gerencia); ?>" data-tipo-dado="decimal">
                  </div>

               </div>

               <div class="row mt-1">

                  <div class="col-lg-7 mt-1">
                      <label for="cargo-1">Empresa (total de folha de pagamento incluindo todos os colaboradores):</label>
                  </div>
                                 
                  <div class="col-lg-2" style="text-align: center">
                    <input type="text" class="form-control field mask_porcentagem_sinal" id="pc_aumento_salario_empresa_total" value="<?php echo getFormatNumber($obj->pc_aumento_salario_empresa_total); ?>" data-tipo-dado="decimal">
                  </div>

               </div>


               <div class="row mt-3">

                <div class="col-lg-12">
                  <label for="input-3">Observações:</label>

                  <textarea class="form-control field" id="tx_observacao_3_1" rows="4"><?php echo $obj->tx_observacao_3_1; ?></textarea>

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
               <h5> <i class="fa fa-address-book-o"></i> &nbsp;3.2 Colaboradores</h5>
             </div>

             <hr>

             <div class="row">
                
               
                <div class="col-lg-6">
                  <label for="input-3" style="color: #FFF; text-decoration: underline;">Total de colaboradores no Brasil</label>
                </div>

               </div>

               <div class="row mt-3">
                <div class="col-lg-6">
                <label for="input-1">Em dezembro de 2018:</label>
                
                  <input type="text" class="form-control field" id="nr_total_colaboradores_2018" value="<?php echo $obj->nr_total_colaboradores_2018; ?>" onKeyDown="Mascara(this, Integer);" onKeyPress="Mascara(this, Integer);" onKeyUp="Mascara(this, Integer);">
                </div>
               
                <div class="col-lg-6">
                <label for="input-1">Em dezembro de 2019:</label>
                
                  <input type="text" class="form-control field" id="nr_total_colaboradores_2019" value="<?php echo $obj->nr_total_colaboradores_2019; ?>" onKeyDown="Mascara(this, Integer);" onKeyPress="Mascara(this, Integer);" onKeyUp="Mascara(this, Integer);">
                </div>

               </div>


               <br>







               <br>

              <div class="row mt-3">
                <div class="col-lg-12">
                  <label for="input-1" style="color: #FFF; text-decoration: underline;">Total de Executivos no Brasil:</label>
                </div>
              </div>

              <div class="row mt-3">
                <div class="col-lg-2">
                  <label for="input-1" style="color: #FFF; text-decoration: underline;">Grupo</label>
                </div>
               
                <div class="col-lg-3">
                  <label for="input-3" style="color: #FFF; text-decoration: underline;">Dezembro de 2018</label>
                </div>

                <div class="col-lg-3">
                  <label for="input-3" style="color: #FFF; text-decoration: underline;">Dezembro de 2019</label>
                </div>

              </div>


              <div class="row mt-1">
                <div class="col-lg-2 mt-1">
                  
                    <label for="cargo-1">Diretores:</label>
                  
                </div>
               
                <div class="col-lg-2">
                  <input type="text" class="form-control field" id="nr_posicao_executivos_2018_diretoria" value="<?php echo $obj->nr_posicao_executivos_2018_diretoria; ?>" onKeyDown="Mascara(this, Integer);" onKeyPress="Mascara(this, Integer);" onKeyUp="Mascara(this, Integer);" maxlength="2">
                </div>

                <div class="col-lg-1"></div>
                <div class="col-lg-2">
                  <input type="text" class="form-control field" id="nr_posicao_executivos_2019_diretoria" value="<?php echo $obj->nr_posicao_executivos_2019_diretoria; ?>" onKeyDown="Mascara(this, Integer);" onKeyPress="Mascara(this, Integer);" onKeyUp="Mascara(this, Integer);" maxlength="2">
                </div>

               </div>

               <div class="row mt-1">
                <div class="col-lg-2 mt-1">
                  
                  <label for="cargo-2">Gerentes:</label>
                  
                </div>
               
                <div class="col-lg-2">
                  <input type="text" class="form-control field" id="nr_posicao_executivos_2018_gerencia" value="<?php echo $obj->nr_posicao_executivos_2018_gerencia; ?>" onKeyDown="Mascara(this, Integer);" onKeyPress="Mascara(this, Integer);" onKeyUp="Mascara(this, Integer);" maxlength="2">
                </div>

                <div class="col-lg-1"></div>
                <div class="col-lg-2">
                  <input type="text" class="form-control field" id="nr_posicao_executivos_2019_gerencia" value="<?php echo $obj->nr_posicao_executivos_2019_gerencia; ?>" onKeyDown="Mascara(this, Integer);" onKeyPress="Mascara(this, Integer);" onKeyUp="Mascara(this, Integer);" maxlength="2">
                </div>

               </div>


               <div class="row mt-3">

                <div class="col-lg-12">
                  <label for="input-3">Observações:</label>

                  <textarea class="form-control field" id="tx_observacao_3_2" rows="4"><?php echo $obj->tx_observacao_3_2; ?></textarea>

                </div>
              
               </div>
                           
              
        
             
           </div>
        </div>

        
      </div>

      <div class="overlay toggle-menu"></div>

    </div>
    </div>




    <div class="container-fluid">

      <div class="row mt-3">
        <div class="col-lg-11">
           <div class="card">
             <div class="card-body">
             <div class="card-title">
               <h5> <i class="fa fa-address-book-o"></i> &nbsp;4.1 Bônus ou Gratificação Anual</h5>
             </div>

             <hr>

              <div class="row">
                <div class="col-lg-12">
                  <label for="input-1" style="color: #FFF; text-decoration: underline;">Bônus anual em número de salários (Mínimo, Alvo, Máximo, e Efetivamente Pago), com base no desempenho durante o ano de 2019, para os diferentes níveis executivos:</label>
                </div>
              </div>

              <div class="row mt-3">
                <div class="col-lg-3">
                  <label for="input-1" style="color: #FFF; text-decoration: underline;">Grupo:</label>
                </div>
               
                <div class="col-lg-2">
                  <label for="input-3" style="color: #FFF; text-decoration: underline;">Mínimo:</label>
                </div>

                <div class="col-lg-2">
                  <label for="input-3" style="color: #FFF; text-decoration: underline;">Alvo:</label>
                </div>

                <div class="col-lg-2">
                  <label for="input-3" style="color: #FFF; text-decoration: underline;">Máximo:</label>
                </div>

                <div class="col-lg-2">
                  <label for="input-3" style="color: #FFF; text-decoration: underline;">Efetivamente Pago:</label>
                </div>

              </div>


              <div class="row mt-1">

                  <div class="col-lg-3 mt-1 div_questao_4_1_presidencia" style="display: none">
                      <label for="cargo-1">Presidência:</label>
                  </div>

                  <div class="col-lg-2 div_questao_4_1_presidencia" style="display: none;">
                    <input type="text" class="form-control field mask_porcentagem" id="pc_minimo_presidencia" value="<?php echo getFormatNumber($obj->pc_minimo_presidencia); ?>" data-tipo-dado="decimal" >
                  </div>


                  <div class="col-lg-2 div_questao_4_1_presidencia" style="display: none">
                    <input type="text" class="form-control field mask_porcentagem" id="pc_alvo_presidencia" value="<?php echo getFormatNumber($obj->pc_alvo_presidencia); ?>" data-tipo-dado="decimal" >
                  </div>


                  <div class="col-lg-2 div_questao_4_1_presidencia" style="display: none">
                    <input type="text" class="form-control field mask_porcentagem" id="pc_maximo_presidencia" value="<?php echo getFormatNumber($obj->pc_maximo_presidencia); ?>" data-tipo-dado="decimal" >
                  </div>


                  <div class="col-lg-2 div_questao_4_1_presidencia" style="display: none; text-align: center">
                    <input type="text" class="form-control field mask_porcentagem" id="pc_efetivamente_pago_presidencia" value="<?php echo getFormatNumber($obj->pc_efetivamente_pago_presidencia); ?>" data-tipo-dado="decimal" >
                  </div>

               </div>

               <div class="row mt-1">

                  <div class="col-lg-3 mt-1 div_questao_3_2_diretoria" style="display: none">
                      <label for="cargo-1">Diretoria:</label>
                  </div>
                                 
                  <div class="col-lg-2 div_questao_4_1_diretoria" style="display: none;">
                    <input type="text" class="form-control field mask_porcentagem" id="pc_minimo_diretoria" value="<?php echo getFormatNumber($obj->pc_minimo_diretoria); ?>" data-tipo-dado="decimal" >
                  </div>


                  <div class="col-lg-2 div_questao_4_1_diretoria" style="display: none">
                    <input type="text" class="form-control field mask_porcentagem" id="pc_alvo_diretoria" value="<?php echo getFormatNumber($obj->pc_alvo_diretoria); ?>" data-tipo-dado="decimal" >
                  </div>


                  <div class="col-lg-2 div_questao_4_1_diretoria" style="display: none">
                    <input type="text" class="form-control field mask_porcentagem" id="pc_maximo_diretoria" value="<?php echo getFormatNumber($obj->pc_maximo_diretoria); ?>" data-tipo-dado="decimal" >
                  </div>


                  <div class="col-lg-2 div_questao_4_1_diretoria" style="display: none; text-align: center">
                    <input type="text" class="form-control field mask_porcentagem" id="pc_efetivamente_pago_diretoria" value="<?php echo getFormatNumber($obj->pc_efetivamente_pago_diretoria); ?>" data-tipo-dado="decimal" >
                  </div>

               </div>

               <div class="row mt-1">

                  <div class="col-lg-3 mt-1 div_questao_3_2_gerencia" style="display: none">
                      <label for="cargo-1">Gerência:</label>
                  </div>
                                 
                  <div class="col-lg-2 div_questao_3_2_gerencia" style="display: none;">
                    <input type="text" class="form-control field mask_porcentagem" id="pc_minimo_gerencia" value="<?php echo getFormatNumber($obj->pc_minimo_gerencia); ?>" data-tipo-dado="decimal" >
                  </div>


                  <div class="col-lg-2 div_questao_3_2_gerencia" style="display: none">
                    <input type="text" class="form-control field mask_porcentagem" id="pc_alvo_gerencia" value="<?php echo getFormatNumber($obj->pc_alvo_gerencia); ?>" data-tipo-dado="decimal" >
                  </div>


                  <div class="col-lg-2 div_questao_3_2_gerencia" style="display: none">
                    <input type="text" class="form-control field mask_porcentagem" id="pc_maximo_gerencia" value="<?php echo getFormatNumber($obj->pc_maximo_gerencia); ?>" data-tipo-dado="decimal" >
                  </div>


                  <div class="col-lg-2 div_questao_3_2_gerencia" style="display: none; text-align: center">
                    <input type="text" class="form-control field mask_porcentagem" id="pc_efetivamente_pago_gerencia" value="<?php echo getFormatNumber($obj->pc_efetivamente_pago_gerencia); ?>" data-tipo-dado="decimal" >
                  </div>

               </div>

               <div class="row mt-3">

                <div class="col-lg-12">
                  <label for="input-3">Observações:</label>

                  <textarea class="form-control field" id="tx_observacao_4_1" rows="4"><?php echo $obj->tx_observacao_4_1; ?></textarea>

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
               <h5> <i class="fa fa-address-book-o"></i> &nbsp;4.2 Incentivos de Longo Prazo - Base Abril de 2020</h5>
             </div>

             <hr>

              <div class="row">
                <div class="col-lg-12">
                  <label for="input-1" style="color: #FFF; text-decoration: underline;">Plano ou prática de um pagamento de um incentivo de longo prazo aos executivos de sua empresa:</label>
                </div>
              </div>


              <div class="row mt-1">

                  <div class="col-lg-2 mt-1 div_questao_4_2_presidencia" style="display: none">
                      <label for="cargo-1">Presidência:</label>
                  </div>

                  <div class="col-lg-10 mt-1 div_questao_4_2_presidencia" style="display: none">

                    <div class="row mt-1">
                      <div class="col-lg-12">

                        <div class="icheck-material-white">           
                          <input type="checkbox" 
                                 id="fl_stock_option_presidente" 
                                 class="check-field"
                                 value="S" <?php if($obj->fl_stock_option_presidente == "S"){ echo "checked"; } ?> />
                          <label for="fl_stock_option_presidente">Stock Option</label>
                        </div>

                        </div>

                    </div>

                    <div class="row mt-1">
                      <div class="col-lg-12">

                        <div class="icheck-material-white">           
                          <input type="checkbox" 
                                 id="fl_phantom_option_presidente" 
                                 class="check-field"
                                 value="S" <?php if($obj->fl_phantom_option_presidente == "S"){ echo "checked"; } ?> />

                          <label for="fl_phantom_option_presidente">Phantom Shares / RSU (Restricted Share Units)</label>
                        </div>

                        </div>

                    </div>

                    <div class="row mt-1">
                      <div class="col-lg-12">

                        <div class="icheck-material-white">           
                          <input type="checkbox" 
                                 id="fl_evolucao_presidente" 
                                 class="check-field"
                                 value="S" <?php if($obj->fl_evolucao_presidente == "S"){ echo "checked"; } ?> />

                          <label for="fl_evolucao_presidente">Evolução P&L / EBITDA</label>
                        </div>

                        </div>

                    </div>

                    <div class="row mt-1">
                      <div class="col-lg-5">

                        <div class="icheck-material-white">           
                          <input type="checkbox" 
                                 id="fl_outros_presidente" 
                                 class="check-field"
                                 value="S" <?php if($obj->fl_outros_presidente == "S"){ echo "checked"; } ?> onchange="abre_fecha_div_4_2_presidencia_outro();" />

                          <label for="fl_outros_presidente">Outros</label>
                        </div>

                        </div>

                        <div class="col-lg-1 mt-2 div_questao_4_2_presidencia_outro" style="display: none;">
                          <label for="cargo-1">Qual:</label>
                      </div>
                      <div class="col-lg-6 mt-1 div_questao_4_2_presidencia_outro" style="display: none">
                        <input type="text" class="form-control field" id="nm_incentivo_longo_prazo_presidencia_outro" value="<?php echo $obj->nm_incentivo_longo_prazo_presidencia_outro; ?>" >
                      </div>

                    </div>

                  </div>

               </div>

               <hr class="div_questao_4_2_diretoria" style="display: none">

               <div class="row mt-1">

                  <div class="col-lg-2 mt-1 div_questao_4_2_diretoria" style="display: none">
                      <label for="cargo-1">Diretoria:</label>
                  </div>

                  <div class="col-lg-10 mt-1 div_questao_4_2_diretoria" style="display: none">

                    <div class="row mt-1">
                      <div class="col-lg-12">

                        <div class="icheck-material-white">           
                          <input type="checkbox" 
                                 id="fl_stock_option_diretor" 
                                 class="check-field"
                                 value="S" <?php if($obj->fl_stock_option_diretor == "S"){ echo "checked"; } ?> />
                          <label for="fl_stock_option_diretor">Stock Option</label>
                        </div>

                        </div>

                    </div>

                    <div class="row mt-1">
                      <div class="col-lg-12">

                        <div class="icheck-material-white">           
                          <input type="checkbox" 
                                 id="fl_phantom_option_diretor" 
                                 class="check-field"
                                 value="S" <?php if($obj->fl_phantom_option_diretor == "S"){ echo "checked"; } ?> />

                          <label for="fl_phantom_option_diretor">Phantom Shares / RSU (Restricted Share Units)</label>
                        </div>

                        </div>

                    </div>

                    <div class="row mt-1">
                      <div class="col-lg-12">

                        <div class="icheck-material-white">           
                          <input type="checkbox" 
                                 id="fl_evolucao_diretor" 
                                 class="check-field"
                                 value="S" <?php if($obj->fl_evolucao_diretor == "S"){ echo "checked"; } ?> />

                          <label for="fl_evolucao_diretor">Evolução P&L / EBITDA</label>
                        </div>

                        </div>

                    </div>

                    <div class="row mt-1">
                      <div class="col-lg-5">

                        <div class="icheck-material-white">           
                          <input type="checkbox" 
                                 id="fl_outros_diretor" 
                                 class="check-field"
                                 value="S" <?php if($obj->fl_outros_diretor == "S"){ echo "checked"; } ?> onchange="abre_fecha_div_4_2_diretoria_outro();" />

                          <label for="fl_outros_diretor">Outros</label>
                        </div>

                        </div>

                        <div class="col-lg-1 mt-2 div_questao_4_2_diretoria_outro" style="display: none;">
                          <label for="cargo-1">Qual:</label>
                      </div>
                      <div class="col-lg-6 mt-1 div_questao_4_2_diretoria_outro" style="display: none">
                        <input type="text" class="form-control field" id="nm_incentivo_longo_prazo_diretoria_outro" value="<?php echo $obj->nm_incentivo_longo_prazo_diretoria_outro; ?>" >
                      </div>

                    </div>

                  </div>


               </div>

               <hr class="div_questao_4_2_gerencia" style="display: none">

               <div class="row mt-1">

                  <div class="col-lg-2 mt-1 div_questao_4_2_gerencia" style="display: none">
                      <label for="cargo-1">Gerência:</label>
                  </div>
                                 
                  <div class="col-lg-10 mt-1 div_questao_4_2_gerencia" style="display: none">

                    <div class="row mt-1">
                      <div class="col-lg-12">

                        <div class="icheck-material-white">           
                          <input type="checkbox" 
                                 id="fl_stock_option_gerente" 
                                 class="check-field"
                                 value="S" <?php if($obj->fl_stock_option_gerente == "S"){ echo "checked"; } ?> />
                          <label for="fl_stock_option_gerente">Stock Option</label>
                        </div>

                        </div>

                    </div>

                    <div class="row mt-1">
                      <div class="col-lg-12">

                        <div class="icheck-material-white">           
                          <input type="checkbox" 
                                 id="fl_phantom_option_gerente" 
                                 class="check-field"
                                 value="S" <?php if($obj->fl_phantom_option_gerente == "S"){ echo "checked"; } ?> />

                          <label for="fl_phantom_option_gerente">Phantom Shares / RSU (Restricted Share Units)</label>
                        </div>

                        </div>

                    </div>

                    <div class="row mt-1">
                      <div class="col-lg-12">

                        <div class="icheck-material-white">           
                          <input type="checkbox" 
                                 id="fl_evolucao_gerente" 
                                 class="check-field"
                                 value="S" <?php if($obj->fl_evolucao_gerente == "S"){ echo "checked"; } ?> />

                          <label for="fl_evolucao_gerente">Evolução P&L / EBITDA</label>
                        </div>

                        </div>

                    </div>

                    <div class="row mt-1">
                      <div class="col-lg-5">

                        <div class="icheck-material-white">           
                          <input type="checkbox" 
                                 id="fl_outros_gerente" 
                                 class="check-field"
                                 value="S" <?php if($obj->fl_outros_gerente == "S"){ echo "checked"; } ?> onchange="abre_fecha_div_4_2_gerencia_outro();" />

                          <label for="fl_outros_gerente">Outros</label>
                        </div>

                        </div>

                        <div class="col-lg-1 mt-2 div_questao_4_2_gerencia_outro" style="display: none;">
                          <label for="cargo-1">Qual:</label>
                      </div>
                      <div class="col-lg-6 mt-1 div_questao_4_2_gerencia_outro" style="display: none">
                        <input type="text" class="form-control field" id="nm_incentivo_longo_prazo_gerencia_outro" value="<?php echo $obj->nm_incentivo_longo_prazo_gerencia_outro; ?>" >
                      </div>

                    </div>

                  </div>

               </div>

               <div class="row mt-3">

                <div class="col-lg-12">
                  <label for="input-3">Observações:</label>

                  <textarea class="form-control field" id="tx_observacao_4_2" rows="4"><?php echo $obj->tx_observacao_4_2; ?></textarea>

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
               <h5> <i class="fa fa-address-book-o"></i> &nbsp;5.1 Tabela de Benefícios - Base Abril de 2020</h5>
             </div>

              <hr class="div_questao_5_1_presidencia" style="display: none">

              <div class="row">
                <div class="col-lg-6 div_questao_5_1_presidencia" style="display: none">
                  <label for="input-1" style="color: #FFF; text-decoration: underline;">Presidência:</label>
                </div>

              </div>

              <div class="row mt-1">
                <div class="col-lg-6 mt-1 div_questao_5_1_presidencia" style="display: none">

              <?php $total_beneficio = count($objB); ?>

              <?php for($i=0; $i < count($objB); $i++){ ?>

                <?php $checked = ""; ?>

                <?php if( in_array($objB[$i]->id_beneficio, $objPB["PRESIDENTE"]) ){ $checked = "checked"; } ?>
                    
                      <div class="row mt-1">
                        <div class="col-lg-12 mt-1">

                          <div class="icheck-material-white">           
                            <input type="checkbox" 
                                   id="beneficio-presidente-<?php echo $i; ?>" 
                                   class="check_<?php echo $i; ?> check-field-beneficio tipo-beneficio check-beneficio-presidente" 
                                   data-tipo-cargo="PRESIDENTE"
                                   data-beneficio="<?php echo $objB[$i]->id_beneficio; ?>" 
                                   value="<?php echo $objB[$i]->id_beneficio; ?>" <?php echo $checked; ?> />

                            <label for="beneficio-presidente-<?php echo $i; ?>"><?php echo $objB[$i]->nm_beneficio; ?>:</label>
                          </div>
                      
                        </div>
                      </div>
                    

                    <?php if($i % ($total_beneficio / 2) == ( ($total_beneficio / 2) -1 )){ ?>

                      </div>
                      <div class="col-lg-6 mt-1 div_questao_5_1_presidencia" style="display: none">

                    <?php } ?>

                  

                <?php } ?>

                </div>
              </div>


              <hr class="div_questao_5_1_diretoria" style="display: none">

              <div class="row">
                <div class="col-lg-6 div_questao_5_1_diretoria" style="display: none">
                  <label for="input-1" style="color: #FFF; text-decoration: underline;">Diretoria:</label>
                </div>

              </div>

              <div class="row mt-1">
                <div class="col-lg-6 mt-1 div_questao_5_1_diretoria" style="display: none">

              <?php $total_beneficio = count($objB); ?>

              <?php for($i=0; $i < count($objB); $i++){ ?>

                <?php $checked = ""; ?>

                <?php if( in_array($objB[$i]->id_beneficio, $objPB["DIRETOR"]) ){ $checked = "checked"; } ?>
                    
                      <div class="row mt-1">
                        <div class="col-lg-12 mt-1">

                          <div class="icheck-material-white">           
                            <input type="checkbox" 
                                   id="beneficio-diretor-<?php echo $i; ?>" 
                                   class="check_<?php echo $i; ?> check-field-beneficio tipo-beneficio check-beneficio-diretor" 
                                   data-tipo-cargo="DIRETOR"
                                   data-beneficio="<?php echo $objB[$i]->id_beneficio; ?>" 
                                   value="<?php echo $objB[$i]->id_beneficio; ?>" <?php echo $checked; ?> />

                            <label for="beneficio-diretor-<?php echo $i; ?>"><?php echo $objB[$i]->nm_beneficio; ?>:</label>
                          </div>
                      
                        </div>
                      </div>
                    

                    <?php if($i % ($total_beneficio / 2) == ( ($total_beneficio / 2) -1 )){ ?>

                      </div>
                      <div class="col-lg-6 mt-1 div_questao_5_1_diretoria" style="display: none">

                    <?php } ?>

                  

                <?php } ?>

                </div>
              </div>



              <hr class="div_questao_5_1_gerencia" style="display: none">

              <div class="row">
                <div class="col-lg-6 div_questao_5_1_gerencia" style="display: none">
                  <label for="input-1" style="color: #FFF; text-decoration: underline;">Gerência:</label>
                </div>

              </div>

              <div class="row mt-1">
                <div class="col-lg-6 mt-1 div_questao_5_1_gerencia" style="display: none">

              <?php $total_beneficio = count($objB); ?>

              <?php for($i=0; $i < count($objB); $i++){ ?>

                <?php $checked = ""; ?>

                <?php if( in_array($objB[$i]->id_beneficio, $objPB["GERENTE"]) ){ $checked = "checked"; } ?>
                    
                      <div class="row mt-1">
                        <div class="col-lg-12 mt-1">

                          <div class="icheck-material-white">           
                            <input type="checkbox" 
                                   id="beneficio-gerente-<?php echo $i; ?>" 
                                   class="check_<?php echo $i; ?> check-field-beneficio tipo-beneficio check-beneficio-gerente" 
                                   data-tipo-cargo="GERENTE"
                                   data-beneficio="<?php echo $objB[$i]->id_beneficio; ?>" 
                                   value="<?php echo $objB[$i]->id_beneficio; ?>" <?php echo $checked; ?> />

                            <label for="beneficio-gerente-<?php echo $i; ?>"><?php echo $objB[$i]->nm_beneficio; ?>:</label>
                          </div>
                      
                        </div>
                      </div>
                    

                    <?php if($i % ($total_beneficio / 2) == ( ($total_beneficio / 2) -1 )){ ?>

                      </div>
                      <div class="col-lg-6 mt-1 div_questao_5_1_gerencia" style="display: none">

                    <?php } ?>

                  <?php } ?>

                  </div>
                </div>

                <div class="row mt-3">

                <div class="col-lg-12">
                  <label for="input-3">Observações:</label>

                  <textarea class="form-control field" id="tx_observacao_5_1" rows="4"><?php echo $obj->tx_observacao_5_1; ?></textarea>

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
               <h5> <i class="fa fa-address-book-o"></i> &nbsp;5.2 Previdência Privada - Base Abril de 2020</h5>
             </div>

             <hr>

              <div class="row">
                <div class="col-lg-5">
                  <label for="input-1" style="color: #FFF; text-decoration: underline; padding-top: 10px">Sua empresa oferece um plano de previdência privada:</label>
                </div>
                <div class="col-lg-2" style="text-align: left">
                  <select id="fl_empresa_previdencia_privada" class="form-control field" onchange="abre_fecha_div_5_2_2();">
                    <option value="Não" <?php if($obj->fl_empresa_previdencia_privada == "Não"){echo "selected";} ?>>Não</option>
                    <option value="Sim" <?php if($obj->fl_empresa_previdencia_privada == "Sim"){echo "selected";} ?>>Sim</option>
                  </select>
                </div>
              </div>

              <hr class="div_questao_5_2_2" style="display: none">

              <div class="row mt-3">
                <div class="col-lg-7 div_questao_5_2_2" style="display: none">
                  <label for="input-1" style="color: #FFF; text-decoration: underline;">Tipo de Contribuição:</label>
                </div>
               
                <div class="col-lg-2 div_questao_5_2_presidencia div_questao_5_2_2" style="display: none">
                  <label for="input-3" style="color: #FFF; text-decoration: underline;">Presidência:</label>
                </div>

                <div class="col-lg-2 div_questao_5_2_diretoria div_questao_5_2_2" style="display: none">
                  <label for="input-3" style="color: #FFF; text-decoration: underline;">Diretoria:</label>
                </div>

                <div class="col-lg-1 div_questao_5_2_gerencia div_questao_5_2_2" style="display: none">
                  <label for="input-3" style="color: #FFF; text-decoration: underline;">Gerência:</label>
                </div>

              </div>


              <div class="row mt-1">

                  <div class="col-lg-7 mt-1 div_questao_5_2_2" style="display: none">
                      <label for="cargo-1">Porcentagem máxima de contribuição do executivo, sobre o salário fixo mensal:</label>
                  </div>

                  <div class="col-lg-1 div_questao_5_2_presidencia div_questao_5_2_2" style="display: none;">
                    <input type="text" class="form-control field mask_porcentagem_sinal" id="pc_maxima_contribuicao_presidente" value="<?php echo getFormatNumber($obj->pc_maxima_contribuicao_presidente); ?>" data-tipo-dado="decimal" >
                  </div>

                  <div class="col-lg-1 div_questao_5_2_presidencia div_questao_5_2_2" style="display: none;"></div>

                  <div class="col-lg-1 div_questao_5_2_diretoria div_questao_5_2_2" style="display: none">
                    <input type="text" class="form-control field mask_porcentagem_sinal" id="pc_maxima_contribuicao_diretor" value="<?php echo getFormatNumber($obj->pc_maxima_contribuicao_diretor); ?>" data-tipo-dado="decimal" >
                  </div>

                  <div class="col-lg-1 div_questao_5_2_diretoria div_questao_5_2_2" style="display: none;"></div>

                  <div class="col-lg-1 div_questao_5_2_gerencia div_questao_5_2_2" style="display: none">
                    <input type="text" class="form-control field mask_porcentagem_sinal" id="pc_maxima_contribuicao_gerente" value="<?php echo getFormatNumber($obj->pc_maxima_contribuicao_gerente); ?>" data-tipo-dado="decimal" >
                  </div>

               </div>


               <div class="row mt-1">

                  <div class="col-lg-7 mt-1 div_questao_5_2_2" style="display: none">
                      <label for="cargo-1">O múltiplo da contribuição do colaborador que cabe à empresa:</label>
                  </div>
                                 
                  <div class="col-lg-1 div_questao_5_2_presidencia div_questao_5_2_2" style="display: none;">
                    <input type="text" class="form-control field mask_porcentagem" id="nr_multiplo_contribuicao_presidente" value="<?php echo getFormatNumber($obj->nr_multiplo_contribuicao_presidente); ?>" data-tipo-dado="decimal">
                  </div>

                  <div class="col-lg-1 div_questao_5_2_presidencia div_questao_5_2_2" style="display: none"></div>

                  <div class="col-lg-1 div_questao_5_2_diretoria div_questao_5_2_2" style="display: none">
                    <input type="text" class="form-control field mask_porcentagem" id="nr_multiplo_contribuicao_diretor" value="<?php echo getFormatNumber($obj->nr_multiplo_contribuicao_diretor); ?>" data-tipo-dado="decimal">
                  </div>

                  <div class="col-lg-1 div_questao_5_2_diretoria div_questao_5_2_2" style="display: none"></div>

                  <div class="col-lg-1 div_questao_5_2_gerencia div_questao_5_2_2" style="display: none">
                    <input type="text" class="form-control field mask_porcentagem" id="nr_multiplo_contribuicao_gerente" value="<?php echo getFormatNumber($obj->nr_multiplo_contribuicao_gerente); ?>" data-tipo-dado="decimal">
                  </div>

               </div>

               <hr class="div_questao_5_2_2" style="display: none">

               <div class="row mt-1 ">

                 <div class="col-lg-12 div_questao_5_2_2" style="display: none">
                    <label for="input-3" style="color: #FFF; text-decoration: underline;">A empresa libera a sua parte da contribuição ao funcionário desligado nos seguintes casos:</label>
                  </div>
               
               </div>
                                 
               <div class="row mt-1">

                  <div class="col-lg-7 mt-1 div_questao_5_2_2" style="display: none">
                      <label for="cargo-1">Quando o colaborador pede demissão:</label>
                  </div>

                  <div class="col-lg-3 div_questao_5_2_2" style="display: none">
                    <select class="form-control field" id="nm_colaborador_demissao">
                      <option value=""> - selecione - </option>
                      <option value="Em sua totalidade" <?php if($obj->nm_colaborador_demissao == "Em sua totalidade"){ echo "selected";} ?>>Em sua totalidade</option>
                      <option value="Parcialmente apenas" <?php if($obj->nm_colaborador_demissao == "Parcialmente apenas"){ echo "selected";} ?>>Parcialmente apenas</option>
                      <option value="Não" <?php if($obj->nm_colaborador_demissao == "Não"){ echo "selected";} ?>>Não</option>
                    </select>
                  </div>

              </div>

              <div class="row mt-1">

                  <div class="col-lg-7 mt-1 div_questao_5_2_2" style="display: none">
                      <label for="cargo-1">Quando o colaborador é desligado:</label>
                  </div>

                  <div class="col-lg-3 div_questao_5_2_2" style="display: none">
                    <select class="form-control field" id="nm_colaborador_desligado">
                      <option value=""> - selecione - </option>
                      <option value="Em sua totalidade" <?php if($obj->nm_colaborador_desligado == "Em sua totalidade"){ echo "selected";} ?>>Em sua totalidade</option>
                      <option value="Parcialmente apenas" <?php if($obj->nm_colaborador_desligado == "Parcialmente apenas"){ echo "selected";} ?>>Parcialmente apenas</option>
                      <option value="Não" <?php if($obj->nm_colaborador_desligado == "Não"){ echo "selected";} ?>>Não</option>
                    </select>
                  </div>

              </div>

              <div class="row mt-3">

                <div class="col-lg-12">
                  <label for="input-3">Observações:</label>

                  <textarea class="form-control field" id="tx_observacao_5_2" rows="4"><?php echo $obj->tx_observacao_5_2; ?></textarea>

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
               <h5> <i class="fa fa-address-book-o"></i> &nbsp;6. Remuneração Total - Base 2019</h5>
             </div>

             <hr>

              <div class="row">
                <div class="col-lg-12">
                  <label for="input-1" style="color: #FFF; text-decoration: underline;">Mudanças na composição da remuneração total em sua empresa, nos respectivos grupos abaixo:</label>
                </div>
              </div>

              <br>


              <div class="row div_questao_6_presidencia" style="display: none">
                <div class="col-lg-12">
                  <label for="input-1" style="color: #FFF; text-decoration: underline;">Presidência:</label>
                </div>
              </div>


              <div class="row mt-1">

                  <div class="col-lg-3 mt-1 div_questao_6_presidencia" style="display: none">
                      <label for="cargo-1">Salário Base:</label>
                  </div>

                  <div class="col-lg-4 div_questao_6_presidencia" style="display: none;">
                    <select class="form-control field" id="nm_remuneracao_salario_presidencia">
                      <option value=""> - selecione - </option>
                      <option value="Aumento acima da taxa da inflação (IPCA)" <?php if($obj->nm_remuneracao_salario_presidencia == "Aumento acima da taxa da inflação (IPCA)"){ echo "selected";} ?>>Aumento acima da taxa da inflação (IPCA)</option>
                      <option value="Aumento de acordo com a taxa da inflação (IPCA)" <?php if($obj->nm_remuneracao_salario_presidencia == "Aumento de acordo com a taxa da inflação (IPCA)"){ echo "selected";} ?>>Aumento de acordo com a taxa da inflação (IPCA)</option>
                      <option value="Aumento abaixo da taxa da inflação (IPCA)" <?php if($obj->nm_remuneracao_salario_presidencia == "Aumento abaixo da taxa da inflação (IPCA)"){ echo "selected";} ?>>Aumento abaixo da taxa da inflação (IPCA)</option>
                      <option value="Não houve aumento" <?php if($obj->nm_remuneracao_salario_presidencia == "Não houve aumento"){ echo "selected";} ?>>Não houve aumento</option>
                    </select>
                  </div>

               </div>

               <!--<div class="row mt-1">

                  <div class="col-lg-3 mt-1 div_questao_6_presidencia" style="display: none">
                      <label for="cargo-1">Remuneração variável:</label>
                  </div>
                                 
                  <div class="col-lg-4 div_questao_6_presidencia" style="display: none;">
                    <select class="form-control field" id="nm_remuneracao_variavel_presidencia">
                      <option value="Aumento acima da taxa da inflação (IPCA)" <?php if($obj->nm_remuneracao_variavel_presidencia == "Aumento acima da taxa da inflação (IPCA)"){ echo "selected";} ?>>Aumento acima da taxa da inflação (IPCA)</option>
                      <option value="Aumento de acordo com a taxa da inflação (IPCA)" <?php if($obj->nm_remuneracao_variavel_presidencia == "Aumento de acordo com a taxa da inflação (IPCA)"){ echo "selected";} ?>>Aumento de acordo com a taxa da inflação (IPCA)</option>
                      <option value="Aumento abaixo da taxa da inflação (IPCA)" <?php if($obj->nm_remuneracao_variavel_presidencia == "Aumento abaixo da taxa da inflação (IPCA)"){ echo "selected";} ?>>Aumento abaixo da taxa da inflação (IPCA)</option>
                      <option value="Não houve aumento" <?php if($obj->nm_remuneracao_variavel_presidencia == "Não houve aumento"){ echo "selected";} ?>>Não houve aumento</option>
                    </select>
                  </div>

               </div>-->

               <div class="row mt-1">

                  <div class="col-lg-3 mt-1 div_questao_6_presidencia" style="display: none">
                      <label for="cargo-1">Benefícios:</label>
                  </div>
                                 
                  <div class="col-lg-4 div_questao_6_presidencia" style="display: none;">
                    <select class="form-control field" id="nm_remuneracao_beneficios_presidencia">
                      <option value=""> - selecione - </option>
                      <option value="Aumento acima da taxa da inflação (IPCA)" <?php if($obj->nm_remuneracao_beneficios_presidencia == "Aumento acima da taxa da inflação (IPCA)"){ echo "selected";} ?>>Aumento acima da taxa da inflação (IPCA)</option>
                      <option value="Aumento de acordo com a taxa da inflação (IPCA)" <?php if($obj->nm_remuneracao_beneficios_presidencia == "Aumento de acordo com a taxa da inflação (IPCA)"){ echo "selected";} ?>>Aumento de acordo com a taxa da inflação (IPCA)</option>
                      <option value="Aumento abaixo da taxa da inflação (IPCA)" <?php if($obj->nm_remuneracao_beneficios_presidencia == "Aumento abaixo da taxa da inflação (IPCA)"){ echo "selected";} ?>>Aumento abaixo da taxa da inflação (IPCA)</option>
                      <option value="Não houve aumento" <?php if($obj->nm_remuneracao_beneficios_presidencia == "Não houve aumento"){ echo "selected";} ?>>Não houve aumento</option>
                    </select>
                  </div>


               </div>



               <hr class="div_questao_6_diretoria" style="display: none">


               <div class="row div_questao_6_diretoria" style="display: none">
                <div class="col-lg-12">
                  <label for="input-1" style="color: #FFF; text-decoration: underline;">Diretoria:</label>
                </div>
              </div>


              <div class="row mt-1">

                  <div class="col-lg-3 mt-1 div_questao_6_diretoria" style="display: none">
                      <label for="cargo-1">Salário Base:</label>
                  </div>

                  <div class="col-lg-4 div_questao_6_diretoria" style="display: none;">
                    <select class="form-control field" id="nm_remuneracao_salario_diretoria">
                      <option value=""> - selecione - </option>
                      <option value="Aumento acima da taxa da inflação (IPCA)" <?php if($obj->nm_remuneracao_salario_diretoria == "Aumento acima da taxa da inflação (IPCA)"){ echo "selected";} ?>>Aumento acima da taxa da inflação (IPCA)</option>
                      <option value="Aumento de acordo com a taxa da inflação (IPCA)" <?php if($obj->nm_remuneracao_salario_diretoria == "Aumento de acordo com a taxa da inflação (IPCA)"){ echo "selected";} ?>>Aumento de acordo com a taxa da inflação (IPCA)</option>
                      <option value="Aumento abaixo da taxa da inflação (IPCA)" <?php if($obj->nm_remuneracao_salario_diretoria == "Aumento abaixo da taxa da inflação (IPCA)"){ echo "selected";} ?>>Aumento abaixo da taxa da inflação (IPCA)</option>
                      <option value="Não houve aumento" <?php if($obj->nm_remuneracao_salario_diretoria == "Não houve aumento"){ echo "selected";} ?>>Não houve aumento</option>
                    </select>
                  </div>

               </div>

               <?php /*
               <div class="row mt-1">

                  <div class="col-lg-3 mt-1 div_questao_6_diretoria" style="display: none">
                      <label for="cargo-1">Remuneração variável:</label>
                  </div>
                                 
                  <div class="col-lg-4 div_questao_6_diretoria" style="display: none;">
                    <select class="form-control field" id="nm_remuneracao_variavel_diretoria">
                      <option value=""> - selecione - </option>
                      <option value="Aumento acima da taxa da inflação (IPCA)" <?php if($obj->nm_remuneracao_variavel_diretoria == "Aumento acima da taxa da inflação (IPCA)"){ echo "selected";} ?>>Aumento acima da taxa da inflação (IPCA)</option>
                      <option value="Aumento de acordo com a taxa da inflação (IPCA)" <?php if($obj->nm_remuneracao_variavel_diretoria == "Aumento de acordo com a taxa da inflação (IPCA)"){ echo "selected";} ?>>Aumento de acordo com a taxa da inflação (IPCA)</option>
                      <option value="Aumento abaixo da taxa da inflação (IPCA)" <?php if($obj->nm_remuneracao_variavel_diretoria == "Aumento abaixo da taxa da inflação (IPCA)"){ echo "selected";} ?>>Aumento abaixo da taxa da inflação (IPCA)</option>
                      <option value="Não houve aumento" <?php if($obj->nm_remuneracao_variavel_diretoria == "Não houve aumento"){ echo "selected";} ?>>Não houve aumento</option>
                    </select>
                  </div>

               </div>

               */ ?>

               <div class="row mt-1">

                  <div class="col-lg-3 mt-1 div_questao_6_diretoria" style="display: none">
                      <label for="cargo-1">Benefícios:</label>
                  </div>
                                 
                  <div class="col-lg-4 div_questao_6_diretoria" style="display: none;">
                    <select class="form-control field" id="nm_remuneracao_beneficios_diretoria">
                      <option value=""> - selecione - </option>
                      <option value="Aumento acima da taxa da inflação (IPCA)" <?php if($obj->nm_remuneracao_beneficios_diretoria == "Aumento acima da taxa da inflação (IPCA)"){ echo "selected";} ?>>Aumento acima da taxa da inflação (IPCA)</option>
                      <option value="Aumento de acordo com a taxa da inflação (IPCA)" <?php if($obj->nm_remuneracao_beneficios_diretoria == "Aumento de acordo com a taxa da inflação (IPCA)"){ echo "selected";} ?>>Aumento de acordo com a taxa da inflação (IPCA)</option>
                      <option value="Aumento abaixo da taxa da inflação (IPCA)" <?php if($obj->nm_remuneracao_beneficios_diretoria == "Aumento abaixo da taxa da inflação (IPCA)"){ echo "selected";} ?>>Aumento abaixo da taxa da inflação (IPCA)</option>
                      <option value="Não houve aumento" <?php if($obj->nm_remuneracao_beneficios_diretoria == "Não houve aumento"){ echo "selected";} ?>>Não houve aumento</option>
                    </select>
                  </div>


               </div>


               <hr class="div_questao_6_gerencia" style="display: none">


               <div class="row div_questao_6_gerencia" style="display: none">
                <div class="col-lg-12">
                  <label for="input-1" style="color: #FFF; text-decoration: underline;">Gerência:</label>
                </div>
              </div>


              <div class="row mt-1">

                  <div class="col-lg-3 mt-1 div_questao_6_gerencia" style="display: none">
                      <label for="cargo-1">Salário Base:</label>
                  </div>

                  <div class="col-lg-4 div_questao_6_gerencia" style="display: none;">
                    <select class="form-control field" id="nm_remuneracao_salario_gerencia">
                      <option value=""> - selecione - </option>
                      <option value="Aumento acima da taxa da inflação (IPCA)" <?php if($obj->nm_remuneracao_salario_gerencia == "Aumento acima da taxa da inflação (IPCA)"){ echo "selected";} ?>>Aumento acima da taxa da inflação (IPCA)</option>
                      <option value="Aumento de acordo com a taxa da inflação (IPCA)" <?php if($obj->nm_remuneracao_salario_gerencia == "Aumento de acordo com a taxa da inflação (IPCA)"){ echo "selected";} ?>>Aumento de acordo com a taxa da inflação (IPCA)</option>
                      <option value="Aumento abaixo da taxa da inflação (IPCA)" <?php if($obj->nm_remuneracao_salario_gerencia == "Aumento abaixo da taxa da inflação (IPCA)"){ echo "selected";} ?>>Aumento abaixo da taxa da inflação (IPCA)</option>
                      <option value="Não houve aumento" <?php if($obj->nm_remuneracao_salario_gerencia == "Não houve aumento"){ echo "selected";} ?>>Não houve aumento</option>
                    </select>
                  </div>

               </div>

               <?php /*

               <div class="row mt-1">

                  <div class="col-lg-3 mt-1 div_questao_6_gerencia" style="display: none">
                      <label for="cargo-1">Remuneração variável:</label>
                  </div>
                                 
                  <div class="col-lg-4 div_questao_6_gerencia" style="display: none;">
                    <select class="form-control field" id="nm_remuneracao_variavel_gerencia">
                      <option value=""> - selecione - </option>
                      <option value="Aumento acima da taxa da inflação (IPCA)" <?php if($obj->nm_remuneracao_variavel_gerencia == "Aumento acima da taxa da inflação (IPCA)"){ echo "selected";} ?>>Aumento acima da taxa da inflação (IPCA)</option>
                      <option value="Aumento de acordo com a taxa da inflação (IPCA)" <?php if($obj->nm_remuneracao_variavel_gerencia == "Aumento de acordo com a taxa da inflação (IPCA)"){ echo "selected";} ?>>Aumento de acordo com a taxa da inflação (IPCA)</option>
                      <option value="Aumento abaixo da taxa da inflação (IPCA)" <?php if($obj->nm_remuneracao_variavel_gerencia == "Aumento abaixo da taxa da inflação (IPCA)"){ echo "selected";} ?>>Aumento abaixo da taxa da inflação (IPCA)</option>
                      <option value="Não houve aumento" <?php if($obj->nm_remuneracao_variavel_gerencia == "Não houve aumento"){ echo "selected";} ?>>Não houve aumento</option>
                    </select>
                  </div>

               </div>

               */?>

               <div class="row mt-1">

                  <div class="col-lg-3 mt-1 div_questao_6_gerencia" style="display: none">
                      <label for="cargo-1">Benefícios:</label>
                  </div>
                                 
                  <div class="col-lg-4 div_questao_6_gerencia" style="display: none;">
                    <select class="form-control field" id="nm_remuneracao_beneficios_gerencia">
                      <option value=""> - selecione - </option>
                      <option value="Aumento acima da taxa da inflação (IPCA)" <?php if($obj->nm_remuneracao_beneficios_gerencia == "Aumento acima da taxa da inflação (IPCA)"){ echo "selected";} ?>>Aumento acima da taxa da inflação (IPCA)</option>
                      <option value="Aumento de acordo com a taxa da inflação (IPCA)" <?php if($obj->nm_remuneracao_beneficios_gerencia == "Aumento de acordo com a taxa da inflação (IPCA)"){ echo "selected";} ?>>Aumento de acordo com a taxa da inflação (IPCA)</option>
                      <option value="Aumento abaixo da taxa da inflação (IPCA)" <?php if($obj->nm_remuneracao_beneficios_gerencia == "Aumento abaixo da taxa da inflação (IPCA)"){ echo "selected";} ?>>Aumento abaixo da taxa da inflação (IPCA)</option>
                      <option value="Não houve aumento" <?php if($obj->nm_remuneracao_beneficios_gerencia == "Não houve aumento"){ echo "selected";} ?>>Não houve aumento</option>
                    </select>
                  </div>


               </div>

               <div class="row mt-3">

                <div class="col-lg-12">
                  <label for="input-3">Observações:</label>

                  <textarea class="form-control field" id="tx_observacao_6" rows="4"><?php echo $obj->tx_observacao_6; ?></textarea>

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
               <h5> <i class="fa fa-address-book-o"></i> &nbsp;7. Perguntas Finais</h5>
             </div>

             <hr>

              <div class="row">
                <div class="col-lg-12">
                  <label for="input-1" style="color: #FFF; text-decoration: underline;">TOTAL DE EXECUTIVOS ESTRANGEIROS EXPATRIADOS ATUANDO NO BRASIL:</label>
                </div>

              </div>
                           
              <div class="row">

                  <div class="col-lg-6">
                  <label for="input-1">Dezembro de 2018:</label>
                  
                    <input type="text" class="form-control field" id="nr_expatriados_brasil_2018" value="<?php echo $obj->nr_expatriados_brasil_2018; ?>" onKeyDown="Mascara(this, Integer);" onKeyPress="Mascara(this, Integer);" onKeyUp="Mascara(this, Integer);">
                  </div>
                 
                  <div class="col-lg-6">
                    <label for="input-3">Dezembro de 2019:</label>
                    <input type="text" class="form-control field" id="nr_expatriados_brasil_2019" value="<?php echo $obj->nr_expatriados_brasil_2019; ?>" onKeyDown="Mascara(this, Integer);" onKeyPress="Mascara(this, Integer);" onKeyUp="Mascara(this, Integer);">
                  </div>

               </div>

               <br>

               <div class="row mt-3">
                <div class="col-lg-12">
                  <label for="input-1" style="color: #FFF; text-decoration: underline;">TOTAL DE EXECUTIVOS BRASILEIROS EXPATRIADOS ATUANDO NO EXTERIOR:</label>
                </div>

              </div>
                           
              <div class="row">

                  <div class="col-lg-6">
                  <label for="input-1">Dezembro de 2018:</label>
                  
                    <input type="text" class="form-control field" id="nr_executivos_exterior_2018" value="<?php echo $obj->nr_executivos_exterior_2018; ?>" onKeyDown="Mascara(this, Integer);" onKeyPress="Mascara(this, Integer);" onKeyUp="Mascara(this, Integer);">
                  </div>
                 
                  <div class="col-lg-6">
                    <label for="input-3">Dezembro de 2019:</label>
                    <input type="text" class="form-control field" id="nr_executivos_exterior_2019" value="<?php echo $obj->nr_executivos_exterior_2019; ?>" onKeyDown="Mascara(this, Integer);" onKeyPress="Mascara(this, Integer);" onKeyUp="Mascara(this, Integer);">
                  </div>

               </div>

               <div class="row mt-3">

                <div class="col-lg-12">
                  <label for="input-3">Observações:</label>

                  <textarea class="form-control field" id="tx_observacao_7" rows="4"><?php echo $obj->tx_observacao_7; ?></textarea>

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
               <h5> <i class="fa fa-address-book-o"></i> &nbsp;7.2 Covid 19</h5>
             </div>

             <hr>

              <div class="row">
                <div class="col-lg-12">
                  <label for="input-1" style="color: #FFF; text-decoration: underline;">Quais medidas sua organização adotou no período de pandemia?</label>
                </div>

              </div>
                           
              <div class="row">

                  <div class="col-lg-1" style="text-align: center">
                    <label for="input-1">Nível<br>Executivo</label>
                  </div>
                 
                  <div class="col-lg-2" style="text-align: center">
                    <label for="input-3">Demais<br>Colaboradores</label>
                  </div>

               </div>

               <div class="row">

               	  <div class="col-lg-1" style="text-align: center">

               	  	<div class="icheck-material-white">
                      <input type="checkbox" 
                             id="fl_reducao_ne" 
                             class="check-field-covid"
                             <?php if($obj->fl_reducao_ne == "S"){echo "checked";} ?>>
                      <label for="fl_reducao_ne"></label>
                    </div>               	  	
               	  </div>

               	  <div class="col-lg-2" style="text-align: center">
               	  	<div class="icheck-material-white">           
                      <input type="checkbox" 
                             id="fl_reducao_dc" 
                             class="check-field-covid"
                             <?php if($obj->fl_reducao_dc == "S"){echo "checked";} ?>>
                      <label for="fl_reducao_dc"></label>
                    </div>               	  	
               	  </div>

               	  
               	  <div class="col-lg-9">Redução de jornada de trabalho (e salário)</div>

               </div>

               <div class="row">

               	  <div class="col-lg-1" style="text-align: center">

               	  	<div class="icheck-material-white">
                      <input type="checkbox" 
                             id="fl_ferias_ne" 
                             class="check-field-covid"
                             <?php if($obj->fl_ferias_ne == "S"){echo "checked";} ?>>
                      <label for="fl_ferias_ne"></label>
                    </div>               	  	
               	  </div>

               	  <div class="col-lg-2" style="text-align: center">
               	  	<div class="icheck-material-white">           
                      <input type="checkbox" 
                             id="fl_ferias_dc" 
                             class="check-field-covid"
                             <?php if($obj->fl_ferias_dc == "S"){echo "checked";} ?>>
                      <label for="fl_ferias_dc"></label>
                    </div>               	  	
               	  </div>

               	  <div class="col-lg-9">Férias coletivas</div>

               </div>

               <div class="row">

               	  <div class="col-lg-1" style="text-align: center">

               	  	<div class="icheck-material-white">
                      <input type="checkbox" 
                             id="fl_desligamento_ne" 
                             class="check-field-covid"
                             <?php if($obj->fl_desligamento_ne == "S"){echo "checked";} ?>>
                      <label for="fl_desligamento_ne"></label>
                    </div>               	  	
               	  </div>

               	  <div class="col-lg-2" style="text-align: center">
               	  	<div class="icheck-material-white">           
                      <input type="checkbox" 
                             id="fl_desligamento_dc" 
                             class="check-field-covid"
                             <?php if($obj->fl_desligamento_dc == "S"){echo "checked";} ?>>
                      <label for="fl_desligamento_dc"></label>
                    </div>               	  	
               	  </div>

               	  <div class="col-lg-9">Desligamento de colaboradores (além das demissões planejadas)</div>

               </div>

               <div class="row">

               	  <div class="col-lg-1" style="text-align: center">

               	  	<div class="icheck-material-white">
                      <input type="checkbox" 
                             id="fl_suspensao_ne" 
                             class="check-field-covid"
                             <?php if($obj->fl_suspensao_ne == "S"){echo "checked";} ?>>
                      <label for="fl_suspensao_ne"></label>
                    </div>               	  	
               	  </div>

               	  <div class="col-lg-2" style="text-align: center">
               	  	<div class="icheck-material-white">           
                      <input type="checkbox" 
                             id="fl_suspensao_dc" 
                             class="check-field-covid"
                             <?php if($obj->fl_suspensao_dc == "S"){echo "checked";} ?>>
                      <label for="fl_suspensao_dc"></label>
                    </div>               	  	
               	  </div>

               	  <div class="col-lg-9">Suspensão e/ou redução de benefícios (p.ex. vale refeição, vale combustível)</div>

               </div>

               <div class="row">

               	  <div class="col-lg-1" style="text-align: center">

               	  	<div class="icheck-material-white">
                      <input type="checkbox" 
                             id="fl_oferecimento_ne" 
                             class="check-field-covid"
                             <?php if($obj->fl_oferecimento_ne == "S"){echo "checked";} ?>>
                      <label for="fl_oferecimento_ne"></label>
                    </div>               	  	
               	  </div>

               	  <div class="col-lg-2" style="text-align: center">
               	  	<div class="icheck-material-white">           
                      <input type="checkbox" 
                             id="fl_oferecimento_dc" 
                             class="check-field-covid"
                             <?php if($obj->fl_oferecimento_dc == "S"){echo "checked";} ?>>
                      <label for="fl_oferecimento_dc"></label>
                    </div>               	  	
               	  </div>

               	  <div class="col-lg-9">Oferecimento de apoio adicional ao colaborador (apoio psicológico e outras atividades relacionadas ao bem estar)</div>

               </div>

               <div class="row">

               	  <div class="col-lg-1" style="text-align: center">

               	  	<div class="icheck-material-white">
                      <input type="checkbox" 
                             id="fl_hiring_ne" 
                             class="check-field-covid"
                             <?php if($obj->fl_hiring_ne == "S"){echo "checked";} ?>>
                      <label for="fl_hiring_ne"></label>
                    </div>               	  	
               	  </div>

               	  <div class="col-lg-2" style="text-align: center">
               	  	<div class="icheck-material-white">           
                      <input type="checkbox" 
                             id="fl_hiring_dc" 
                             class="check-field-covid"
                             <?php if($obj->fl_hiring_dc == "S"){echo "checked";} ?>>
                      <label for="fl_hiring_dc"></label>
                    </div>               	  	
               	  </div>

               	  <div class="col-lg-9">Hiring freeze (suspensão de contratações)</div>

               </div>

               <div class="row">

               	  <div class="col-lg-1" style="text-align: center">

               	  	<div class="icheck-material-white">
                      <input type="checkbox" 
                             id="fl_investimentos_ne" 
                             class="check-field-covid"
                             <?php if($obj->fl_investimentos_ne == "S"){echo "checked";} ?>>
                      <label for="fl_investimentos_ne"></label>
                    </div>               	  	
               	  </div>

               	  <div class="col-lg-2" style="text-align: center">
               	  	<div class="icheck-material-white">           
                      <input type="checkbox" 
                             id="fl_investimentos_dc" 
                             class="check-field-covid"
                             <?php if($obj->fl_investimentos_dc == "S"){echo "checked";} ?>>
                      <label for="fl_investimentos_dc"></label>
                    </div>               	  	
               	  </div>

               	  <div class="col-lg-9">Investimentos adicionais em equipes de transformação digital</div>

               </div>

               <div class="row">

               	  <div class="col-lg-1" style="text-align: center">

               	  	<div class="icheck-material-white">
                      <input type="checkbox" 
                             id="fl_introducao_ne" 
                             class="check-field-covid"
                             <?php if($obj->fl_introducao_ne == "S"){echo "checked";} ?>>
                      <label for="fl_introducao_ne"></label>
                    </div>               	  	
               	  </div>

               	  <div class="col-lg-2" style="text-align: center">
               	  	<div class="icheck-material-white">           
                      <input type="checkbox" 
                             id="fl_introducao_dc" 
                             class="check-field-covid"
                             <?php if($obj->fl_introducao_dc == "S"){echo "checked";} ?>>
                      <label for="fl_introducao_dc"></label>
                    </div>               	  	
               	  </div>

               	  <div class="col-lg-9">Introdução de política de home office</div>

               </div>

               <div class="row">

               	  <div class="col-lg-1" style="text-align: center">

               	  	<div class="icheck-material-white">
                      <input type="checkbox" 
                             id="fl_manutencao_ne" 
                             class="check-field-covid"
                             <?php if($obj->fl_manutencao_ne == "S"){echo "checked";} ?>>
                      <label for="fl_manutencao_ne"></label>
                    </div>               	  	
               	  </div>

               	  <div class="col-lg-2" style="text-align: center">
               	  	<div class="icheck-material-white">           
                      <input type="checkbox" 
                             id="fl_manutencao_dc" 
                             class="check-field-covid"
                             <?php if($obj->fl_manutencao_dc == "S"){echo "checked";} ?>>
                      <label for="fl_manutencao_dc"></label>
                    </div>               	  	
               	  </div>

               	  <div class="col-lg-9">Manutenção do regime de home office sem alterações</div>

               </div>

               <div class="row">

               	  <div class="col-lg-1" style="text-align: center">

               	  	<div class="icheck-material-white">
                      <input type="checkbox" 
                             id="fl_ampliacao_ne" 
                             class="check-field-covid"
                             <?php if($obj->fl_ampliacao_ne == "S"){echo "checked";} ?>>
                      <label for="fl_ampliacao_ne"></label>
                    </div>               	  	
               	  </div>

               	  <div class="col-lg-2" style="text-align: center">
               	  	<div class="icheck-material-white">           
                      <input type="checkbox" 
                             id="fl_ampliacao_dc" 
                             class="check-field-covid"
                             <?php if($obj->fl_ampliacao_dc == "S"){echo "checked";} ?>>
                      <label for="fl_ampliacao_dc"></label>
                    </div>               	  	
               	  </div>

               	  <div class="col-lg-9">Ampliação do regime de home office</div>

               </div>

               <div class="row">

               	  <div class="col-lg-1" style="text-align: center">

               	  	<div class="icheck-material-white">
                      <input type="checkbox" 
                             id="fl_reducao2_ne" 
                             class="check-field-covid"
                             <?php if($obj->fl_reducao2_ne == "S"){echo "checked";} ?>>
                      <label for="fl_reducao2_ne"></label>
                    </div>               	  	
               	  </div>

               	  <div class="col-lg-2" style="text-align: center">
               	  	<div class="icheck-material-white">           
                      <input type="checkbox" 
                             id="fl_reducao2_dc" 
                             class="check-field-covid"
                             <?php if($obj->fl_reducao2_dc == "S"){echo "checked";} ?>>
                      <label for="fl_reducao2_dc"></label>
                    </div>               	  	
               	  </div>

               	  <div class="col-lg-9">Redução do regime de home office</div>

               </div>

               <div class="row">

               	  <div class="col-lg-1" style="text-align: center">

               	  	<div class="icheck-material-white">
                      <input type="checkbox" 
                             id="fl_implantacao_1_ne" 
                             class="check-field-covid"
                             <?php if($obj->fl_implantacao_1_ne == "S"){echo "checked";} ?>>
                      <label for="fl_implantacao_1_ne"></label>
                    </div>               	  	
               	  </div>

               	  <div class="col-lg-2" style="text-align: center">
               	  	<div class="icheck-material-white">           
                      <input type="checkbox" 
                             id="fl_implantacao_1_dc" 
                             class="check-field-covid"
                             <?php if($obj->fl_implantacao_1_dc == "S"){echo "checked";} ?>>
                      <label for="fl_implantacao_1_dc"></label>
                    </div>               	  	
               	  </div>

               	  <div class="col-lg-9">Implantação de regime de home office integral para 2021 (para parte dos colaboradores)</div>

               </div>

               <div class="row">

               	  <div class="col-lg-1" style="text-align: center">

               	  	<div class="icheck-material-white">
                      <input type="checkbox" 
                             id="fl_implantacao_2_ne" 
                             class="check-field-covid"
                             <?php if($obj->fl_implantacao_2_ne == "S"){echo "checked";} ?>>
                      <label for="fl_implantacao_2_ne"></label>
                    </div>               	  	
               	  </div>

               	  <div class="col-lg-2" style="text-align: center">
               	  	<div class="icheck-material-white">           
                      <input type="checkbox" 
                             id="fl_implantacao_2_dc" 
                             class="check-field-covid"
                             <?php if($obj->fl_implantacao_2_dc == "S"){echo "checked";} ?>>
                      <label for="fl_implantacao_2_dc"></label>
                    </div>               	  	
               	  </div>

               	  <div class="col-lg-9">Implantação de regime de home office integral para 2021 (para a totalidade dos colaboradores)</div>

               </div>

               <div class="row">

               	  <div class="col-lg-1" style="text-align: center">

               	  	<div class="icheck-material-white">
                      <input type="checkbox" 
                             id="fl_implantacao_3_ne" 
                             class="check-field-covid"
                             <?php if($obj->fl_implantacao_3_ne == "S"){echo "checked";} ?>>
                      <label for="fl_implantacao_3_ne"></label>
                    </div>               	  	
               	  </div>

               	  <div class="col-lg-2" style="text-align: center">
               	  	<div class="icheck-material-white">           
                      <input type="checkbox" 
                             id="fl_implantacao_3_dc" 
                             class="check-field-covid"
                             <?php if($obj->fl_implantacao_3_dc == "S"){echo "checked";} ?>>
                      <label for="fl_implantacao_3_dc"></label>
                    </div>               	  	
               	  </div>

               	  <div class="col-lg-9">Implantação de regime de home office parcial para 2021 (para parte dos colaboradores)</div>

               </div>

               <div class="row">

               	  <div class="col-lg-1" style="text-align: center">

               	  	<div class="icheck-material-white">
                      <input type="checkbox" 
                             id="fl_implantacao_4_ne" 
                             class="check-field-covid"
                             <?php if($obj->fl_implantacao_4_ne == "S"){echo "checked";} ?>>
                      <label for="fl_implantacao_4_ne"></label>
                    </div>               	  	
               	  </div>

               	  <div class="col-lg-2" style="text-align: center">
               	  	<div class="icheck-material-white">           
                      <input type="checkbox" 
                             id="fl_implantacao_4_dc" 
                             class="check-field-covid"
                             <?php if($obj->fl_implantacao_4_dc == "S"){echo "checked";} ?>>
                      <label for="fl_implantacao_4_dc"></label>
                    </div>               	  	
               	  </div>

               	  <div class="col-lg-9">Implantação de regime de home office parcial para 2021 (para a totalidade dos colaboradores)</div>

               </div>

               <div class="row">

               	  <div class="col-lg-1" style="text-align: center">

               	  	<div class="icheck-material-white">
                      <input type="checkbox" 
                             id="fl_mudancas_ne" 
                             class="check-field-covid"
                             <?php if($obj->fl_mudancas_ne == "S"){echo "checked";} ?>>
                      <label for="fl_mudancas_ne"></label>
                    </div>               	  	
               	  </div>

               	  <div class="col-lg-2" style="text-align: center">
               	  	<div class="icheck-material-white">           
                      <input type="checkbox" 
                             id="fl_mudancas_dc" 
                             class="check-field-covid"
                             <?php if($obj->fl_mudancas_dc == "S"){echo "checked";} ?>>
                      <label for="fl_mudancas_dc"></label>
                    </div>               	  	
               	  </div>

               	  <div class="col-lg-9">Sem mudanças previstas do regime de home office atual para 2021</div>

               </div>

             	<br>                           
            

               <div class="row mt-3">

                <div class="col-lg-12">
                  <label for="input-3">Observações:</label>

                  <textarea class="form-control field" id="tx_observacao_covid" rows="4"><?php echo $obj->tx_observacao_covid; ?></textarea>

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
               <h5> <i class="fa fa-address-book-o"></i> &nbsp;8. Feedback</h5>
             </div>

             <hr>

             <div class="row">

                <div class="col-lg-12">
                  <label for="input-1" style="color: #FFF; text-decoration: underline;">Sugestões para que possamos melhorar esta Pesquisa de Remuneração Executiva:</label>
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
                  <label for="input-3" style="color: #FFF; text-decoration: underline;">Dados do(a) principal executivo(a) de RH / Gestão de Pessoas:</label>
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

               <div class="row mt-3">

                <div class="col-lg-12">
                  <label for="input-3">Observações:</label>

                  <textarea class="form-control field" id="tx_observacao_8" rows="4"><?php echo $obj->tx_observacao_8; ?></textarea>

                </div>
              
               </div>

              
             </div>

            
             
           </div>

        </div>

        

        
      </div>

      <div class="overlay toggle-menu"></div>



    </div>

    <div class="container-fluid">

      <div class="row mt-3" style="text-align:center">
        <div class="col-lg-11">
          <button class="btn btn-dark" onclick="finalizar_pesquisa();">Finalizar Pesquisa</button>
        </div>
      </div>

    </div>





<!--

    <div class="container-fluid">

      <div class="row mt-3">
        <div class="col-lg-9">
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
        <div class="col-lg-9">
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
        <div class="text-right">
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

<script src="<?php echo base_url('assets/js/sweetalert2/dist/sweetalert2.all.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/sweetalert2/sweet-alert.init.js'); ?>"></script>

<script>

  function finalizar_pesquisa(){

    swal({   
          title: "Pesquisa Finalizada",   
          html: "<a href='https://www.boyden.com.br/brazil/' style='color:#000; text-decoration: underline'>Acessar nosso site</a>",   
          type: "success",   
          showCancelButton: false,   
          confirmButtonColor: "#5ac146",   
          confirmButtonText: "OBRIGADO!",   
          closeOnConfirm: false,   
          closeOnCancel: false 
      }).then(result => {
          
            window.location = '';

      });

  }

  function cadastrar_cargo(){

    Swal.fire({
      title: 'Cadastro de Cargos',
      html:
        'Nome do Cargo: <input id="nm_cargo" class="swal2-input">' +
        'Tipo: <select id="tp_cargo" class="swal2-input"  style="background-color: #FFF !important"><option style="background-color: #FFF !important" value="DIRETOR">Diretor</option><option value="GERENTE" style="background-color: #FFF !important">Gerente</option></select>',
      focusConfirm: false,
      preConfirm: () => {

        gravar_cargo(document.getElementById('nm_cargo').value, document.getElementById('tp_cargo').value);

        return false;

      }
    });

  }

  function gravar_cargo(nm_cargo, tp_cargo){

    if(nm_cargo == ''){

      swal({   

            title: "Cadastro de Cargo",   
            html: "O nome do cargo está vazio!",
            type: "error",   
            showCancelButton: false,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "OK, IREI CORRIGIR!",   
            cancelButtonText: "Não, cancelar!",   
            closeOnConfirm: false,   
            closeOnCancel: false 
        }).then(result => {
           

        });

        return false;

    }else{      

      $.ajax({

        url: "<?php echo base_url(); ?>boyden_2020/gravar_novo_cargo",
        async: true,
        type: 'POST',
        data: { 
              nm_cargo : nm_cargo,
              tp_cargo : tp_cargo
            },
      
        success: function(res, textStatus) {

          window.location = '';

        },

        error: function(xhr,er) {
        $('#mensagem').html('Erro!');
        }


      });

    }

  }

  function abre_fecha_div(n){

    if($(".check_"+n).is(":checked")){

      $(".div_"+n).fadeIn('slow');

    }else{

      $(".vr_salario_fixo_mensal_"+n).val("");
      $(".qt_salarios_ano_"+n).val("12");

      $(".div_"+n).fadeOut('slow');

    }      

  }

  //$(".div_ocultar").css("display", "none");


  var type;
  var field;
  var value;

  $(".field").change(function(){
    
    //type  = $(this).attr("type");
    field = $(this).attr("id");
    value = $(this).val();
    type  = $(this).attr("data-tipo-dado");

    //if(type == "text"){

      gravar_campo(field, value, type);

    //}

  });

  $(".check-field").change(function(){

    field = $(this).attr("id");
    value = "N";
    type  = "text";

    if($(this).is(":checked")){
      value = "S";
    }

    gravar_campo(field, value, type);


  });

  $(".check-field-covid").change(function(){

    field = $(this).attr("id");
    value = "";
    type  = "text";

    if($(this).is(":checked")){
      value = "S";
    }

    gravar_campo(field, value, type);


  });

  function gravar_campo(field, value, type){

    $.ajax({

        url: "<?php echo base_url(); ?>boyden_2020/gravar_campo",
        async: true,
        type: 'POST',
        data: { 
              type : type,
              field : field,
              value: value,

            },
      
        success: function(res, textStatus) {

          //console.log(res);

        },

        error: function(xhr,er) {
        $('#mensagem').html('Erro!');
        }


      });

  }



  // ---------------------------------------------
  // GRAVA CAMPOS DINAMICOS
  // ---------------------------------------------

  var type;
  var field;
  var value;
  var cargo;

  $(".dynamic-field").change(function(){
    
    //type  = $(this).attr("type");
    field = $(this).attr("id");
    value = $(this).val();
    type  = $(this).attr("data-tipo-dado");
    cargo  = $(this).attr("data-cargo");

    //if(type == "text"){

      $.ajax({

        url: "<?php echo base_url(); ?>boyden_2020/gravar_campo_dinamico",
        async: true,
        type: 'POST',
        data: { 
              type : type,
              field : field,
              value: value,
              cargo: cargo,

            },
      
        success: function(res, textStatus) {

          //console.log(res);

        },

        error: function(xhr,er) {
          $('#mensagem').html('Erro!');
        }


      });

    //}

  });


  // ---------------------------------------------
  // GRAVA CAMPO CHECK - CARGO
  // ---------------------------------------------

    $(".check-field-cargo").change(function(){
    
    cargo  = $(this).attr("data-cargo");

    var checked = 'N';

    if($(this).is(":checked")){

      checked = 'S';

    }

    //if(type == "text"){

      $.ajax({

        url: "<?php echo base_url(); ?>boyden_2020/gravar_campo_check_cargo",
        async: true,
        type: 'POST',
        data: { 
              cargo: cargo,
              checked : checked
            },
      
        success: function(res, textStatus) {

          //console.log(res);

        },

        error: function(xhr,er) {
          $('#mensagem').html('Erro!');
        }


      });

    //}

  });


  // ---------------------------------------------
  // GRAVA CAMPO CHECK - BENEFICIO
  // ---------------------------------------------

    $(".check-field-beneficio").change(function(){
    
    beneficio  = $(this).attr("data-beneficio");
    tipo_cargo = $(this).attr("data-tipo-cargo");

    var checked = 'N';

    if($(this).is(":checked")){

      checked = 'S';

    }

    $.ajax({

      url: "<?php echo base_url(); ?>boyden_2020/gravar_campo_check_beneficio",
      async: true,
      type: 'POST',
      data: { 
            beneficio: beneficio,
            tipo_cargo: tipo_cargo,
            checked : checked
          },
    
      success: function(res, textStatus) {

        //console.log(res);

      },

      error: function(xhr,er) {
        $('#mensagem').html('Erro!');
      }


    });

  });



  // ---------------------------------------------
  // EXCLUI TODOS OS BENEFICIO DO TIPO DE CARGO
  // ---------------------------------------------

    function excluir_beneficios(tipo_cargo){

      var checked = 'T';

      $.ajax({

        url: "<?php echo base_url(); ?>boyden_2020/gravar_campo_check_beneficio",
        async: true,
        type: 'POST',
        data: { 
              tipo_cargo: tipo_cargo,
              checked : checked
            },
      
        success: function(res, textStatus) {

          console.log(res);

        },

        error: function(xhr,er) {
          $('#mensagem').html('Erro!');
        }


      });

    }




  <?php if(in_array("PRESIDENTE", $objTipoCargo)){ ?>
    $(".div_questao_3_2_presidencia").css("display", "block");
    $(".div_questao_4_1_presidencia").css("display", "block");
    $(".div_questao_4_2_presidencia").css("display", "block");

    <?php if($obj->fl_outros_presidente == "S"){ ?>
      $(".div_questao_4_2_presidencia_outro").css("display", "block");
    <?php } ?>


    $(".div_questao_5_1_presidencia").css("display", "block");
    
    <?php if($obj->fl_empresa_previdencia_privada == "Sim"){ ?>
      $(".div_questao_5_2_presidencia").css("display", "block");
    <?php } ?>

    $(".div_questao_6_presidencia").css("display", "block");
  <?php } ?>

  <?php if(in_array("DIRETOR", $objTipoCargo)){ ?>
    $(".div_questao_3_2_diretoria").css("display", "block");
    $(".div_questao_4_1_diretoria").css("display", "block");
    $(".div_questao_4_2_diretoria").css("display", "block");

    <?php if($obj->fl_outros_diretor == "S"){ ?>
      $(".div_questao_4_2_diretoria_outro").css("display", "block");
    <?php } ?>

    $(".div_questao_5_1_diretoria").css("display", "block");

    <?php if($obj->fl_empresa_previdencia_privada == "Sim"){ ?>
      $(".div_questao_5_2_diretoria").css("display", "block");
    <?php } ?>

    $(".div_questao_6_diretoria").css("display", "block");
  <?php } ?>

  <?php if(in_array("GERENTE", $objTipoCargo)){ ?>
    $(".div_questao_3_2_gerencia").css("display", "block");
    $(".div_questao_4_1_gerencia").css("display", "block");
    $(".div_questao_4_2_gerencia").css("display", "block");
    
    <?php if($obj->fl_outros_gerente == "S"){ ?>
      $(".div_questao_4_2_gerencia_outro").css("display", "block");
    <?php } ?>

    $(".div_questao_5_1_gerencia").css("display", "block");
    
    <?php if($obj->fl_empresa_previdencia_privada == "Sim"){ ?>
      $(".div_questao_5_2_gerencia").css("display", "block");
    <?php } ?>

    $(".div_questao_6_gerencia").css("display", "block");
  <?php } ?>




  $(".tipo-cargo").click(function(){

    var fl_presidente = false;
    var fl_diretor    = false;
    var fl_gerente    = false;
    
    $(".tipo-cargo").each(function(){

      if($(this).is(":checked")){

        if($(this).attr("data-tipo-cargo") == "PRESIDENTE"){
          
            fl_presidente = true;

        }

        if($(this).attr("data-tipo-cargo") == "DIRETOR"){
          
            fl_diretor = true;

        }

        if($(this).attr("data-tipo-cargo") == "GERENTE"){
          
            fl_gerente = true;

        }

      }

    });

    if( (fl_presidente || fl_diretor || fl_gerente) && $("#fl_empresa_previdencia_privada").val() == "Sim" ){
      $(".div_questao_5_2_2").css("display", "block");
    }else{
      $(".div_questao_5_2_2").css("display", "none");
    }
    

    if(fl_presidente){

      // ABRIR DIVS -----------------------------------------------------

        $(".div_questao_3_2_presidencia").css("display", "block");
        $(".div_questao_4_1_presidencia").css("display", "block");
        $(".div_questao_4_2_presidencia").css("display", "block");
        $(".div_questao_5_1_presidencia").css("display", "block");

        if($("#fl_empresa_previdencia_privada").val() == "Sim"){
          $(".div_questao_5_2_presidencia").css("display", "block");
        }

        $(".div_questao_6_presidencia").css("display", "block");

    }else{

      // ZERAR CAMPOS -----------------------------------------------------

        gravar_campo("pc_aumento_salario_presidencia", 0, "decimal");     $("#pc_aumento_salario_presidencia").val('');

        gravar_campo("pc_minimo_presidencia", 0, "decimal");              $("#pc_minimo_presidencia").val('');
        gravar_campo("pc_alvo_presidencia", 0, "decimal");                $("#pc_alvo_presidencia").val('');
        gravar_campo("pc_maximo_presidencia", 0, "decimal");              $("#pc_maximo_presidencia").val('');
        gravar_campo("pc_efetivamente_pago_presidencia", 0, "decimal");   $("#pc_efetivamente_pago_presidencia").val('');

        gravar_campo("fl_stock_option_presidente", "N", "text");          $("#fl_stock_option_presidente").attr("checked", false);
        gravar_campo("fl_phantom_option_presidente", "N", "text");        $("#fl_phantom_option_presidente").attr("checked", false);
        gravar_campo("fl_evolucao_presidente", "N", "text");              $("#fl_evolucao_presidente").attr("checked", false);
        gravar_campo("fl_outros_presidente", "N", "text");                $("#fl_outros_presidente").attr("checked", false);
        gravar_campo("nm_incentivo_longo_prazo_presidencia_outro", "", "text"); $("#nm_incentivo_longo_prazo_presidencia_outro").val('');

        gravar_campo("nm_remuneracao_salario_presidencia", "", "text");    $("#nm_remuneracao_salario_presidencia").val('');
        gravar_campo("nm_remuneracao_variavel_presidencia", "", "text");   $("#nm_remuneracao_variavel_presidencia").val('');
        gravar_campo("nm_remuneracao_beneficios_presidencia", "", "text"); $("#nm_remuneracao_beneficios_presidencia").val('');

        $(".check-beneficio-presidente").attr("checked", false);
        excluir_beneficios("PRESIDENTE");

        gravar_campo("pc_maxima_contribuicao_presidente", 0, "decimal"); $("#pc_maxima_contribuicao_presidente").val('');
        gravar_campo("nr_multiplo_contribuicao_presidente", 0, "text"); $("#nr_multiplo_contribuicao_presidente").val('');



      // FECHAR DIVS -----------------------------------------------------

        $(".div_questao_3_2_presidencia").css("display", "none");
        $(".div_questao_4_1_presidencia").css("display", "none");
        $(".div_questao_4_2_presidencia").css("display", "none");
        $(".div_questao_4_2_presidencia_outro").css("display", "none");
        $(".div_questao_5_1_presidencia").css("display", "none");
        $(".div_questao_5_2_presidencia").css("display", "none");
        $(".div_questao_6_presidencia").css("display", "none");

    }



    if(fl_diretor){

      // ABRIR DIVS -----------------------------------------------------

        $(".div_questao_3_2_diretoria").css("display", "block");
        $(".div_questao_4_1_diretoria").css("display", "block");
        $(".div_questao_4_2_diretoria").css("display", "block");
        $(".div_questao_5_1_diretoria").css("display", "block");
        
        if($("#fl_empresa_previdencia_privada").val() == "Sim"){
          $(".div_questao_5_2_diretoria").css("display", "block");
        }

        $(".div_questao_6_diretoria").css("display", "block");

    }else{

      // ZERAR CAMPOS -----------------------------------------------------
        
        gravar_campo("pc_aumento_salario_diretoria", 0, "decimal");      $("#pc_aumento_salario_diretoria").val('');

        gravar_campo("pc_minimo_diretoria", 0, "decimal");               $("#pc_minimo_diretoria").val('');
        gravar_campo("pc_alvo_diretoria", 0, "decimal");                 $("#pc_alvo_diretoria").val('');
        gravar_campo("pc_maximo_diretoria", 0, "decimal");               $("#pc_maximo_diretoria").val('');
        gravar_campo("pc_efetivamente_pago_diretoria", 0, "decimal");    $("#pc_efetivamente_pago_diretoria").val('');

        gravar_campo("fl_stock_option_diretor", "N", "text");             $("#fl_stock_option_diretor").attr("checked", false);
        gravar_campo("fl_phantom_option_diretor", "N", "text");           $("#fl_phantom_option_diretor").attr("checked", false);
        gravar_campo("fl_evolucao_diretor", "N", "text");                 $("#fl_evolucao_diretor").attr("checked", false);
        gravar_campo("fl_outros_diretor", "N", "text");                   $("#fl_outros_diretor").attr("checked", false);
        gravar_campo("nm_incentivo_longo_prazo_diretoria_outro", "", "text"); $("#nm_incentivo_longo_prazo_diretoria_outro").val('');

        gravar_campo("nm_remuneracao_salario_diretoria", "", "text");    $("#nm_remuneracao_salario_diretoria").val('');
        gravar_campo("nm_remuneracao_variavel_diretoria", "", "text");   $("#nm_remuneracao_variavel_diretoria").val('');
        gravar_campo("nm_remuneracao_beneficios_diretoria", "", "text"); $("#nm_remuneracao_beneficios_diretoria").val('');

        $(".check-beneficio-diretor").attr("checked", false);
        excluir_beneficios("DIRETOR");

        gravar_campo("pc_maxima_contribuicao_diretor", 0, "decimal"); $("#pc_maxima_contribuicao_diretor").val('');
        gravar_campo("nr_multiplo_contribuicao_diretor", 0, "text"); $("#nr_multiplo_contribuicao_diretor").val('');
        

      // FECHAR DIVS -----------------------------------------------------

        $(".div_questao_3_2_diretoria").css("display", "none");      
        $(".div_questao_4_1_diretoria").css("display", "none");      
        $(".div_questao_4_2_diretoria").css("display", "none");   
        $(".div_questao_4_2_diretoria_outro").css("display", "none");
        $(".div_questao_5_1_diretoria").css("display", "none");      
        $(".div_questao_5_2_diretoria").css("display", "none");      
        $(".div_questao_6_diretoria").css("display", "none");      

    }



    if(fl_gerente){

      // ABRIR DIVS -----------------------------------------------------

        $(".div_questao_3_2_gerencia").css("display", "block");
        $(".div_questao_4_1_gerencia").css("display", "block");
        $(".div_questao_4_2_gerencia").css("display", "block");
        $(".div_questao_5_1_gerencia").css("display", "block");
        
        if($("#fl_empresa_previdencia_privada").val() == "Sim"){
          $(".div_questao_5_2_gerencia").css("display", "block");
        }

        $(".div_questao_6_gerencia").css("display", "block");

    }else{

      // ZERAR CAMPOS -----------------------------------------------------
        
        gravar_campo("pc_aumento_salario_gerencia", 0, "decimal");      $("#pc_aumento_salario_gerencia").val('');

        gravar_campo("pc_minimo_gerencia", 0, "decimal");               $("#pc_minimo_gerencia").val('');
        gravar_campo("pc_alvo_gerencia", 0, "decimal");                 $("#pc_alvo_gerencia").val('');
        gravar_campo("pc_maximo_gerencia", 0, "decimal");               $("#pc_maximo_gerencia").val('');
        gravar_campo("pc_efetivamente_pago_gerencia", 0, "decimal");    $("#pc_efetivamente_pago_gerencia").val('');

        gravar_campo("fl_stock_option_gerente", "N", "text");             $("#fl_stock_option_gerente").attr("checked", false);
        gravar_campo("fl_phantom_option_gerente", "N", "text");           $("#fl_phantom_option_gerente").attr("checked", false);
        gravar_campo("fl_evolucao_gerente", "N", "text");                 $("#fl_evolucao_gerente").attr("checked", false);
        gravar_campo("fl_outros_gerente", "N", "text");                   $("#fl_outros_gerente").attr("checked", false);
        gravar_campo("nm_incentivo_longo_prazo_gerencia_outro", "", "text"); $("#nm_incentivo_longo_prazo_gerencia_outro").val('');
        
        gravar_campo("nm_remuneracao_salario_gerencia", "", "text");    $("#nm_remuneracao_salario_gerencia").val('');
        gravar_campo("nm_remuneracao_variavel_gerencia", "", "text");   $("#nm_remuneracao_variavel_gerencia").val('');
        gravar_campo("nm_remuneracao_beneficios_gerencia", "", "text"); $("#nm_remuneracao_beneficios_gerencia").val('');

        $(".check-beneficio-gerente").attr("checked", false);
        excluir_beneficios("GERENTE");

        gravar_campo("pc_maxima_contribuicao_gerente", 0, "decimal"); $("#pc_maxima_contribuicao_gerente").val('');
        gravar_campo("nr_multiplo_contribuicao_gerente", 0, "text"); $("#nr_multiplo_contribuicao_gerente").val('');



      // FECHAR DIVS -----------------------------------------------------
      
        $(".div_questao_3_2_gerencia").css("display", "none");
        $(".div_questao_4_1_gerencia").css("display", "none");
        $(".div_questao_4_2_gerencia").css("display", "none");
        $(".div_questao_4_2_gerencia_outro").css("display", "none");
        $(".div_questao_5_1_gerencia").css("display", "none");
        $(".div_questao_5_2_gerencia").css("display", "none");
        $(".div_questao_6_gerencia").css("display", "none");

    }


  });

  function abre_fecha_div_5_2_2(){

    var fl_empresa_previdencia_privada = $("#fl_empresa_previdencia_privada").val();

    if(fl_empresa_previdencia_privada == "Sim"){

      $(".div_questao_5_2_2").css("display", "block");

<?php /* ?>

      <?php if(!in_array("PRESIDENTE", $objTipoCargo)){ ?>
          $(".div_questao_5_2_presidencia").css("display", "none");
      <?php } ?>

      <?php if(!in_array("DIRETOR", $objTipoCargo)){ ?>
          $(".div_questao_5_2_diretoria").css("display", "none");
      <?php } ?>

      <?php if(!in_array("GERENTE", $objTipoCargo)){ ?>
          $(".div_questao_5_2_gerencia").css("display", "none");
      <?php } ?>
*/ ?>

    var fl_presidente = false;
    var fl_diretor    = false;
    var fl_gerente    = false;

    $(".check-field-cargo").each(function(){

      if($(this).is(":checked")){

        if($(this).attr("data-tipo-cargo") == "PRESIDENTE"){
          fl_presidente = true;
        }
        if($(this).attr("data-tipo-cargo") == "DIRETOR"){
          fl_diretor = true;
        }
        if($(this).attr("data-tipo-cargo") == "GERENTE"){
          fl_gerente = true;
        }

      }

    });

    if(fl_presidente || fl_diretor || fl_gerente){
      $(".div_questao_5_2_2").css("display", "block");
    }else{
      $(".div_questao_5_2_2").css("display", "none");
    }

    if(fl_presidente){
      $(".div_questao_5_2_presidencia").css("display", "block");
    }else{
      $(".div_questao_5_2_presidencia").css("display", "none");
    }
    if(fl_diretor){
      $(".div_questao_5_2_diretoria").css("display", "block");
    }else{
      $(".div_questao_5_2_diretoria").css("display", "none");
    }
    if(fl_gerente){
      $(".div_questao_5_2_gerencia").css("display", "block");
    }else{
      $(".div_questao_5_2_gerencia").css("display", "none");
    }


    }else{
      $(".div_questao_5_2_2").css("display", "none");

      gravar_campo("pc_maxima_contribuicao_presidente", 0, "decimal"); $("#pc_maxima_contribuicao_presidente").val('');
      gravar_campo("pc_maxima_contribuicao_diretor", 0, "decimal"); $("#pc_maxima_contribuicao_diretor").val('');
      gravar_campo("pc_maxima_contribuicao_gerente", 0, "decimal"); $("#pc_maxima_contribuicao_gerente").val('');


      gravar_campo("nr_multiplo_contribuicao_presidente", 0, "text"); $("#nr_multiplo_contribuicao_presidente").val('');
      gravar_campo("nr_multiplo_contribuicao_diretor", 0, "text"); $("#nr_multiplo_contribuicao_diretor").val('');
      gravar_campo("nr_multiplo_contribuicao_gerente", 0, "text"); $("#nr_multiplo_contribuicao_gerente").val('');

      gravar_campo("nm_colaborador_demissao", "", "text"); $("#nm_colaborador_demissao").val('');
      gravar_campo("nm_colaborador_desligado", "", "text"); $("#nm_colaborador_desligado").val('');
      gravar_campo("nm_especificacao", "", "text"); $("#nm_especificacao").val('');

    }

  }

  abre_fecha_div_5_2_2();

  function abre_fecha_div_4_2_presidencia_outro(){

    if($("#fl_outros_presidente").is(":checked")){
      
      $(".div_questao_4_2_presidencia_outro").css("display", "block");

    }else{

      gravar_campo("nm_incentivo_longo_prazo_presidencia_outro", "", "text"); $("#nm_incentivo_longo_prazo_presidencia_outro").val('');

      $("#nm_incentivo_longo_prazo_presidencia_outro").attr("checked", false);
      $(".div_questao_4_2_presidencia_outro").css("display", "none");

    }

  }

  function abre_fecha_div_4_2_diretoria_outro(){

    if($("#fl_outros_diretor").is(":checked")){
      
      $(".div_questao_4_2_diretoria_outro").css("display", "block");

    }else{

      gravar_campo("nm_incentivo_longo_prazo_diretoria_outro", "", "text"); $("#nm_incentivo_longo_prazo_diretoria_outro").val('');

      $("#nm_incentivo_longo_prazo_diretoria_outro").val('');
      $(".div_questao_4_2_diretoria_outro").css("display", "none");

    }

  }
  
  function abre_fecha_div_4_2_gerencia_outro(){

    if($("#fl_outros_gerente").is(":checked")){
      
      $(".div_questao_4_2_gerencia_outro").css("display", "block");

    }else{

      gravar_campo("nm_incentivo_longo_prazo_gerencia_outro", "", "text"); $("#nm_incentivo_longo_prazo_gerencia_outro").val('');

      $("#nm_incentivo_longo_prazo_gerencia_outro").val('');
      $(".div_questao_4_2_gerencia_outro").css("display", "none");

    }

  }

  

</script>

</body>
</html>
