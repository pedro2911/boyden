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
  <link href="<?php echo base_url("assets-pesquisa/css/relatorio.css"); ?>" rel="stylesheet"/>
  <!-- Charts lib -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>

</head>

<body>
  <section>
    <div class="header">
      <img src="<?php echo base_url('assets/images/relatorio/page_1.png'); ?>" alt="">
      <h2>Estudo de remuneração executiva</h2>
    </div>
    <p>
      Este é o 40º Estudo de Remuneração Executiva da Boyden do Brasil. Ele contém as análises feitas com
      base nas informações fornecidas pelas 145 empresas participantes do estudo, tomando como
      referência salários e benefícios de abril de 2019. Todos os participantes deste estudo são empresas do
      setor privado, sendo que a maioria está localizada nas regiões Sul e Sudeste do País. <br><br>
      Elas representam boa parte do segmento mais avançado da economia brasileira.<br><br>
      As informações das 145 empresas participantes da pesquisa estão divididas em três grupos
      diferentes, de acordo com seus números de faturamento anual, como mostra a tabela a seguir:
    </p>
    <br>
    <table>
      <thead class="thead-blue">
        <tr>
          <th>Grupo</th>
          <th>Faturamento</th>
          <th>Nº de empresas</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th><b>I</b></th>
          <th>Acima de R$ 1 bilhão</th>
          <th><?php echo $obj['table_1']['grupo_i']; ?></th>
        </tr>
        <tr>
          <th><b>II</b></th>
          <th>Acima de R$ 150 milhões até R$ 1 bilhão</th>
          <th><?php echo $obj['table_1']['grupo_ii']; ?></th>
        </tr>
        <tr>
          <th><b>III</b></th>
          <th>Até R$ 150 milhões</th>
          <th><?php echo $obj['table_1']['grupo_iii']; ?></th>
        </tr>
      </tbody>
    </table>
  </section>
  <section>
    <div class="header">
      <img src="<?php echo base_url('assets/images/relatorio/page_2.png'); ?>" alt="">
      <h2>Empresas participantes
      Celebrando</h2>
    </div>
    <ul>
      <?php
        foreach($obj['empresas'] as $pos => $empresa) {
      ?>
          <li><?php echo $empresa->nm_nome_empresa; ?></li>
      <?php
        }
      ?>
    </ul>
  </section>
  <section>
    <div class="header">
      <img src="<?php echo base_url('assets/images/relatorio/page_3.1.png'); ?>" alt="">
      <h2>Origem dos participantes</h2>
      <p>
      Dentre os participantes, há empresas de diversas nacionalidades, com predomínio
      das brasileiras e europeias. <br>
      </p>
    </div>
    <canvas id="myChart"></canvas>
      <?php
        $total = 0;
        foreach($obj['participantes_por_pais'] as $pos => $pais) {
          $total +=$pais->total;
     
        }
        echo '<p class="text-center">'.$total.' empresas participantes </p>';
      ?>
  </section>
  <section>
    <div class="header">
      <img src="<?php echo base_url('assets/images/relatorio/page_3.2.png'); ?>" alt="">
      <h2>Faturamento bruto</h2>
      <p>(Valores nominais)</p> <br>
      <p>
      Em 2018 houve crescimento no faturamento de todos os grupos. O total registrado pelas empresas
      participantes superou o patamar de R$ 200 bilhões anuais. <br>
      </p>
    </div>
    <br>
    <table>
      <thead>
        <tr>
          <th>Faturamento (em R$ milhões)</th>
          <th class="text-center">2018</th>
          <th class="text-center">2019</th>
          <th class="text-center">Variação</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th class="text-left">
            <h4>Grupo I</h4>
            <span>Acima de R$ 1 bilhão</span>
          </th>
          <th><?php echo number_format($obj['faturamento_bruto']['grupo_i']['total2018'],2,",","."); ?></th>
          <th><?php echo number_format($obj['faturamento_bruto']['grupo_i']['total2019'],2,",","."); ?></th>
          <th><?php echo number_format($obj['faturamento_bruto']['grupo_i']['percentagem'],2,",","."); ?>%</th>
        </tr>
        <tr>
          <th class="text-left">
            <h4>Grupo II</h4>
            <span>Acima de R$ 150 milhões até R$ 1 bilhão</span>
          </th>
          <th><?php echo number_format($obj['faturamento_bruto']['grupo_ii']['total2018'],2,",","."); ?></th>
          <th><?php echo number_format($obj['faturamento_bruto']['grupo_ii']['total2019'],2,",","."); ?></th>
          <th><?php echo number_format($obj['faturamento_bruto']['grupo_ii']['percentagem'],2,",","."); ?>%</th>
        </tr>
        <tr>
          <th class="text-left">
            <h4>Grupo III</h4>
            <span>Até R$ 150 milhões</span>
          </th>
          <th><?php echo number_format($obj['faturamento_bruto']['grupo_iii']['total2018'],2,",","."); ?></th>
          <th><?php echo number_format($obj['faturamento_bruto']['grupo_iii']['total2019'],2,",","."); ?></th>
          <th><?php echo number_format($obj['faturamento_bruto']['grupo_iii']['percentagem'],2,",","."); ?>%</th>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th>
            <b>Total</b>
          </th>
          <th class="text-center"><?php echo number_format($obj['faturamento_bruto']['grupo_i']['total2018'] + $obj['faturamento_bruto']['grupo_ii']['total2018'] + $obj['faturamento_bruto']['grupo_iii']['total2018'],2,",","."); ?></th>
          <th class="text-center"><?php echo number_format($obj['faturamento_bruto']['grupo_i']['total2019'] + $obj['faturamento_bruto']['grupo_ii']['total2019'] + $obj['faturamento_bruto']['grupo_iii']['total2019'],2,",","."); ?></th>
          <th class="text-center"><?php echo number_format(
              round(((($obj['faturamento_bruto']['grupo_i']['total2019'] + $obj['faturamento_bruto']['grupo_ii']['total2019'] + $obj['faturamento_bruto']['grupo_iii']['total2019'])-
              ($obj['faturamento_bruto']['grupo_i']['total2018'] + $obj['faturamento_bruto']['grupo_ii']['total2018'] + $obj['faturamento_bruto']['grupo_iii']['total2018']))
              /($obj['faturamento_bruto']['grupo_i']['total2018'] + $obj['faturamento_bruto']['grupo_ii']['total2018'] + $obj['faturamento_bruto']['grupo_iii']['total2018']) * 100),2),2,",","."); ?>%</th>
        </tr>
      </tfoot>
    </table>
  </section>
  <section>
    <div class="header">
      <img src="<?php echo base_url('assets/images/relatorio/page_3.3.png'); ?>" alt="">
      <h2>Número de funcionários</h2>
    </div>
    <p>
    No geral houve um pequeno aumento no quadro de colaboradores, com destaque para as
    empresas de porte médio. Já as de menor porte diminuíram suas estruturas.<br>
    </p>
    <br>
    <table>
      <thead>
        <tr>
          <th></th>
          <th class="text-center">Jan/18</th>
          <th class="text-center">Jan/19</th>
          <th class="text-center">Variação</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th class="text-left">
            <h4>Grupo I</h4>
            <span>Acima de R$ 1 bilhão</span>
          </th>
          <th><?php echo number_format($obj['numero_funcionarios']['grupo_i']['total2018'],2,",","."); ?></th>
          <th><?php echo number_format($obj['numero_funcionarios']['grupo_i']['total2019'],2,",","."); ?></th>
          <th><?php echo number_format($obj['numero_funcionarios']['grupo_i']['percentagem'],2,",","."); ?>%</th>
        </tr>
        <tr>
          <th class="text-left">
            <h4>Grupo II</h4>
            <span>Acima de R$ 150 milhões até R$ 1 bilhão</span>
          </th>
          <th><?php echo number_format($obj['numero_funcionarios']['grupo_ii']['total2018'],2,",","."); ?></th>
          <th><?php echo number_format($obj['numero_funcionarios']['grupo_ii']['total2019'],2,",","."); ?></th>
          <th><?php echo number_format($obj['numero_funcionarios']['grupo_ii']['percentagem'],2,",","."); ?>%</th>
        </tr>
        <tr>
          <th class="text-left">
            <h4>Grupo III</h4>
            <span>Acima de R$ 150 milhões</span>
          </th>
          <th><?php echo number_format($obj['numero_funcionarios']['grupo_iii']['total2018'],2,",","."); ?></th>
          <th><?php echo number_format($obj['numero_funcionarios']['grupo_iii']['total2019'],2,",","."); ?></th>
          <th><?php echo number_format($obj['numero_funcionarios']['grupo_iii']['percentagem'],2,",","."); ?>%</th>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th>
            <b>Total</b>
          </th>
          <th class="text-center"><?php echo number_format($obj['numero_funcionarios']['grupo_i']['total2018'] + $obj['numero_funcionarios']['grupo_ii']['total2018'] + $obj['numero_funcionarios']['grupo_iii']['total2018'],2,",","."); ?></th>
          <th class="text-center"><?php echo number_format($obj['numero_funcionarios']['grupo_i']['total2019'] + $obj['numero_funcionarios']['grupo_ii']['total2019'] + $obj['numero_funcionarios']['grupo_iii']['total2019'],2,",","."); ?></th>
          <th class="text-center"><?php echo number_format(round((
            ($obj['numero_funcionarios']['grupo_i']['total2019'] + $obj['numero_funcionarios']['grupo_ii']['total2019'] + $obj['numero_funcionarios']['grupo_iii']['total2019'])-($obj['numero_funcionarios']['grupo_i']['total2018'] + $obj['numero_funcionarios']['grupo_ii']['total2018'] + $obj['numero_funcionarios']['grupo_iii']['total2018'])
          )/($obj['numero_funcionarios']['grupo_i']['total2018'] + $obj['numero_funcionarios']['grupo_ii']['total2018'] + $obj['numero_funcionarios']['grupo_iii']['total2018'])*100,2),2,",","."); ?>%</th>
        </tr>
      </tfoot>
    </table>
  </section>
  <section>
    <div class="header">
      <img src="<?php echo base_url('assets/images/relatorio/page_4.1.png'); ?>" alt="">
      <h2>Total de executivos</h2>
    </div>
    <p>
    Em 2018 as empresas em geral aumentaram o número de executivos, interrompendo uma sequência
    de anos de enxugamento.<br>
    </p>
    <br>
    <table>
      <thead>
        <tr>
          <th></th>
          <th class="text-center font-12">
            Total de
            executivos em
            Jan/2018
          </th>
          <th class="text-center font-12">
            Proporção
            de executivos
            pelo total de
            funcionários
          </th>
          <th class="text-center font-12">
            Total de
            executivos
            em Jan/2019
          </th>
          <th class="text-center font-12">
            Proporção
            de executivos
            pelo total de
            funcionários
          </th>
          <th class="text-center font-12">
            Variação
            2019/2018
            total de
            executivos
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th>
            <h4>Grupo I</h4>
            <span>Acima de R$ 1 bilhão</span>
          </th>
          <th><?php echo number_format($obj['excutivos']['grupo_i']['total2018'],2,",","."); ?></th>
          <th><?php echo number_format(round($obj['excutivos']['grupo_i']['total2018'] * 100 / $obj['numero_funcionarios']['grupo_i']['total2018'],2),2,",","."); ?>%</th>
          <th><?php echo number_format($obj['excutivos']['grupo_i']['total2019'],2,",","."); ?></th>
          <th><?php echo number_format(round($obj['excutivos']['grupo_i']['total2019'] * 100 / $obj['numero_funcionarios']['grupo_i']['total2019'],2),2,",","."); ?>%</th>
          <th><?php echo number_format(round((round($obj['excutivos']['grupo_i']['total2019'] * 100 / $obj['numero_funcionarios']['grupo_i']['total2019'],2) - round($obj['excutivos']['grupo_i']['total2018'] * 100 / $obj['numero_funcionarios']['grupo_i']['total2018'],2)) / round($obj['excutivos']['grupo_i']['total2018'] * 100 / $obj['numero_funcionarios']['grupo_i']['total2018'],2),2),2,",","."); ?>%</th>
        </tr>
        <tr>
          <th>
            <h4>Grupo II</h4>
            <span>Acima de R$ 150 milhões até R$ 1 bilhão</span>
          </th>
          <th><?php echo number_format($obj['excutivos']['grupo_ii']['total2018'],2,",","."); ?></th>
          <th><?php echo number_format(round($obj['excutivos']['grupo_ii']['total2018'] * 100 / $obj['numero_funcionarios']['grupo_ii']['total2018'],2),2,",","."); ?>%</th>
          <th><?php echo number_format($obj['excutivos']['grupo_ii']['total2019'],2,",","."); ?></th>
          <th><?php echo number_format(round($obj['excutivos']['grupo_ii']['total2019'] * 100 / $obj['numero_funcionarios']['grupo_ii']['total2019'],2),2,",","."); ?>%</th>
          <th><?php echo number_format(round((round($obj['excutivos']['grupo_ii']['total2019'] * 100 / $obj['numero_funcionarios']['grupo_ii']['total2019'],2) - round($obj['excutivos']['grupo_ii']['total2018'] * 100 / $obj['numero_funcionarios']['grupo_ii']['total2018'],2)) / round($obj['excutivos']['grupo_ii']['total2018'] * 100 / $obj['numero_funcionarios']['grupo_ii']['total2018'],2),2),2,",","."); ?>%</th>
        </tr>
        <tr>
          <th>
            <h4>Grupo III</h4>
            <span>Até R$ 150 milhões</span>
          </th>
          <th><?php echo number_format($obj['excutivos']['grupo_iii']['total2018'],2,",","."); ?></th>
          <th><?php echo number_format(round($obj['excutivos']['grupo_iii']['total2018'] * 100 / $obj['numero_funcionarios']['grupo_iii']['total2018'],2),2,",","."); ?>%</th>
          <th><?php echo number_format($obj['excutivos']['grupo_iii']['total2019'],2,",","."); ?></th>
          <th><?php echo number_format(round($obj['excutivos']['grupo_iii']['total2019'] * 100 / $obj['numero_funcionarios']['grupo_iii']['total2019'],2),2,",","."); ?>%</th>
          <th><?php echo number_format(round((round($obj['excutivos']['grupo_iii']['total2019'] * 100 / $obj['numero_funcionarios']['grupo_iii']['total2019'],2) - round($obj['excutivos']['grupo_iii']['total2018'] * 100 / $obj['numero_funcionarios']['grupo_iii']['total2018'],2)) / round($obj['excutivos']['grupo_iii']['total2018'] * 100 / $obj['numero_funcionarios']['grupo_iii']['total2018'],2),2),2,",","."); ?>%</th>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th>
            <b>Total</b>
          </th>
          <th class="text-center"><?php echo number_format($obj['excutivos']['grupo_i']['total2018'] + $obj['excutivos']['grupo_ii']['total2018'] + $obj['excutivos']['grupo_iii']['total2018'],2,",","."); ?></th>
          <th class="text-center"><?php echo number_format(round(($obj['excutivos']['grupo_i']['total2018'] + $obj['excutivos']['grupo_ii']['total2018'] + $obj['excutivos']['grupo_iii']['total2018']) * 100 / ($obj['numero_funcionarios']['grupo_i']['total2018'] + $obj['numero_funcionarios']['grupo_ii']['total2018'] + $obj['numero_funcionarios']['grupo_iii']['total2018']),2),2,",","."); ?>%</th>
          <th class="text-center"><?php echo number_format($obj['excutivos']['grupo_i']['total2019'] + $obj['excutivos']['grupo_ii']['total2019'] + $obj['excutivos']['grupo_iii']['total2019'],2,",","."); ?></th>
          <th class="text-center"><?php echo number_format(round(($obj['excutivos']['grupo_i']['total2019'] + $obj['excutivos']['grupo_ii']['total2019'] + $obj['excutivos']['grupo_iii']['total2019']) * 100 / ($obj['numero_funcionarios']['grupo_i']['total2019'] + $obj['numero_funcionarios']['grupo_ii']['total2019'] + $obj['numero_funcionarios']['grupo_iii']['total2019']),2),2,",","."); ?>%</th>
          <th class="text-center"><?php echo number_format(round(
            (($obj['excutivos']['grupo_i']['total2019'] + $obj['excutivos']['grupo_ii']['total2019'] + $obj['excutivos']['grupo_iii']['total2019'])-($obj['excutivos']['grupo_i']['total2018'] + $obj['excutivos']['grupo_ii']['total2018'] + $obj['excutivos']['grupo_iii']['total2018']))/($obj['excutivos']['grupo_i']['total2018'] + $obj['excutivos']['grupo_ii']['total2018'] + $obj['excutivos']['grupo_iii']['total2018'])*100
            ,2),2,",","."); ?>%</th>
        </tr>
      </tfoot>
    </table>
  </section>
  <section>
    <div class="header">
      <img src="<?php echo base_url('assets/images/relatorio/page_4.2.png'); ?>" alt="">
      <h2>Expatriados</h2>
    </div>
    <p>
    No último ano, o número de expatriados no Brasil permaneceu estável, interrompendo a queda
    verificada nos últimos quatro anos. Já o número de executivos locais trabalhando no exterior mantém
    sua trajetória de crescimento observada nos últimos anos.<br>
    </p>
    <div class="comentario">
      Executivos
      estrangeiros
      no Brasil
    </div>
    <table class="expatriados-table mb-5">
      <thead>
        <tr>
          <th></th>
          <th class="text-center">Jan/18</th>
          <th class="text-center">Jan/19</th>
          <th class="text-center">Variação</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th class="text-left">
            <h4>Grupo I</h4>
            <span>Acima de R$ 1 bilhão</span>
          </th>
          <th><?php echo number_format($obj['expatriados_brasil']['grupo_i']['total2018'],2,",","."); ?></th>
          <th><?php echo number_format($obj['expatriados_brasil']['grupo_i']['total2019'],2,",","."); ?></th>
          <th><?php echo number_format($obj['expatriados_brasil']['grupo_i']['percentagem'],2,",","."); ?>%</th>
        </tr>
        <tr>
          <th class="text-left">
            <h4>Grupo II</h4>
            <span>Acima de R$ 150 milhões até R$ 1 bilhão</span>
          </th>
          <th><?php echo number_format($obj['expatriados_brasil']['grupo_ii']['total2018'],2,",","."); ?></th>
          <th><?php echo number_format($obj['expatriados_brasil']['grupo_ii']['total2019'],2,",","."); ?></th>
          <th><?php echo number_format($obj['expatriados_brasil']['grupo_ii']['percentagem'],2,",","."); ?>%</th>
        </tr>
        <tr>
          <th class="text-left">
            <h4>Grupo III</h4>
            <span>Até R$ 150 milhões</span>
          </th>
          <th><?php echo number_format($obj['expatriados_brasil']['grupo_iii']['total2018'],2,",","."); ?></th>
          <th><?php echo number_format($obj['expatriados_brasil']['grupo_iii']['total2019'],2,",","."); ?></th>
          <th><?php echo number_format($obj['expatriados_brasil']['grupo_iii']['percentagem'],2,",","."); ?>%</th>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th>
            <b>Total</b>
          </th>
          <th class="text-center"><?php echo number_format($obj['expatriados_brasil']['grupo_i']['total2018'] + $obj['expatriados_brasil']['grupo_ii']['total2018'] + $obj['expatriados_brasil']['grupo_iii']['total2018'],2,",","."); ?></th>
          <th class="text-center"><?php echo number_format($obj['expatriados_brasil']['grupo_i']['total2019'] + $obj['expatriados_brasil']['grupo_ii']['total2019'] + $obj['expatriados_brasil']['grupo_iii']['total2019'],2,",","."); ?></th>
          <th class="text-center"><?php echo number_format(round(
            (($obj['expatriados_brasil']['grupo_i']['total2019'] + $obj['expatriados_brasil']['grupo_ii']['total2019'] + $obj['expatriados_brasil']['grupo_iii']['total2019'])-($obj['expatriados_brasil']['grupo_i']['total2018'] + $obj['expatriados_brasil']['grupo_ii']['total2018'] + $obj['expatriados_brasil']['grupo_iii']['total2018']))/($obj['expatriados_brasil']['grupo_i']['total2018'] + $obj['expatriados_brasil']['grupo_ii']['total2018'] + $obj['expatriados_brasil']['grupo_iii']['total2018'])*100
            ,2),2,",","."); ?>%</th>
        </tr>
      </tfoot>
    </table>
    <div class="comentario">
      Executivos
      brasileiros
      no exterior
    </div>
    <table class="expatriados-table">
      <thead>
        <tr>
          <th></th>
          <th class="text-center">Jan/18</th>
          <th class="text-center">Jan/19</th>
          <th class="text-center">Variação</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th class="text-left">
            <h4>Grupo I</h4>
            <span>Acima de R$ 1 bilhão</span>
          </th>
          <th><?php echo number_format($obj['expatriados_exterior']['grupo_i']['total2018'],2,",","."); ?></th>
          <th><?php echo number_format($obj['expatriados_exterior']['grupo_i']['total2019'],2,",","."); ?></th>
          <th><?php echo number_format($obj['expatriados_exterior']['grupo_i']['percentagem'],2,",","."); ?>%</th>
        </tr>
        <tr>
          <th class="text-left">
            <h4>Grupo II</h4>
            <span>Acima de R$ 150 milhões até R$ 1 bilhão</span>
          </th>
          <th><?php echo number_format($obj['expatriados_exterior']['grupo_ii']['total2018'],2,",","."); ?></th>
          <th><?php echo number_format($obj['expatriados_exterior']['grupo_ii']['total2019'],2,",","."); ?></th>
          <th><?php echo number_format($obj['expatriados_exterior']['grupo_ii']['percentagem'],2,",","."); ?>%</th>
        </tr>
        <tr>
          <th class="text-left">
            <h4>Grupo III</h4>
            <span>Até R$ 150 milhões</span>
          </th>
          <th><?php echo number_format($obj['expatriados_exterior']['grupo_iii']['total2018'],2,",","."); ?></th>
          <th><?php echo number_format($obj['expatriados_exterior']['grupo_iii']['total2019'],2,",","."); ?></th>
          <th><?php echo number_format($obj['expatriados_exterior']['grupo_iii']['percentagem'],2,",","."); ?>%</th>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th>
            <b>Total</b>
          </th>
          <th class="text-center"><?php echo number_format($obj['expatriados_exterior']['grupo_i']['total2018'] + $obj['expatriados_exterior']['grupo_ii']['total2018'] + $obj['expatriados_exterior']['grupo_iii']['total2018'],2,",","."); ?></th>
          <th class="text-center"><?php echo number_format($obj['expatriados_exterior']['grupo_i']['total2019'] + $obj['expatriados_exterior']['grupo_ii']['total2019'] + $obj['expatriados_exterior']['grupo_iii']['total2019'],2,",","."); ?></th>
          <th class="text-center"><?php echo number_format(round(
            (($obj['expatriados_exterior']['grupo_i']['total2019'] + $obj['expatriados_exterior']['grupo_ii']['total2019'] + $obj['expatriados_exterior']['grupo_iii']['total2019'])-($obj['expatriados_exterior']['grupo_i']['total2018'] + $obj['expatriados_exterior']['grupo_ii']['total2018'] + $obj['expatriados_exterior']['grupo_iii']['total2018']))/($obj['expatriados_exterior']['grupo_i']['total2018'] + $obj['expatriados_exterior']['grupo_ii']['total2018'] + $obj['expatriados_exterior']['grupo_iii']['total2018'])*100
            ,2),2,",","."); ?>%</th>
        </tr>
      </tfoot>
    </table>
  </section>
  <section>
    <div class="header">
      <img src="<?php echo base_url('assets/images/relatorio/page_5.png'); ?>" alt="">
      <h2>Mudanças na remuneração</h2>
      <p>
        Referência: IPCA 3,75%
      </p>
    </div>
    <div class="chart-section">
      <h4>Presidência</h4>
      <div class="chart">
        <title>Mudanças na remuneração fixa</title>
        <canvas id="myChartBarPresidenciaRemuneracao"></canvas>
      </div>
      <div class="chart">
        <title>Mudanças nos benefícios</title>
        <canvas id="myChartBarPresidenciaBeneficios"></canvas>
      </div>
    </div>
    <div class="chart-section">
      <h4>Diretoria</h4>
      <div class="chart">
        <title>Mudanças na remuneração fixa</title>
        <canvas id="myChartBarDiretoriaRemuneracao"></canvas>
      </div>
      <div class="chart">
        <title>Mudanças nos benefícios</title>
        <canvas id="myChartBarDiretoriaBeneficios"></canvas>
      </div>
    </div>
    <div class="chart-section">
      <h4>Gerência</h4>
      <div class="chart">
        <title>Mudanças na remuneração fixa</title>
        <canvas id="myChartBarGerenciaRemuneracao"></canvas>
      </div>
      <div class="chart">
        <title>Mudanças nos benefícios</title>
        <canvas id="myChartBarGerenciaBeneficios"></canvas>
      </div>
    </div>
  </section>
  <section>
    <div class="header">
      <img src="<?php echo base_url('assets/images/relatorio/page_6.png'); ?>" alt="">
      <h2>Benefícios</h2>
    </div>
    <br>
    <table>
      <thead>
        <tr>
          <th></th>
          <th class="text-center"><b>Presidência</b></th>
          <th class="text-center"><b>Diretoria</b></th>
          <th class="text-center"><b>Gerência</b></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($obj['beneficios'] as $pos => $beneficio) { ?>
        <tr>
          <th class="text-left">
            <b><?php echo $pos; ?></b>
          </th>
          <th><?php echo number_format(isset($beneficio['PRESIDENTE'])?round($beneficio['PRESIDENTE']* 100 / $obj['total_cargos']['PRESIDENTE'],2):0,2,",","."); ?>%</th>
          <th><?php echo number_format(isset($beneficio['DIRETOR'])?round($beneficio['DIRETOR']* 100 / $obj['total_cargos']['DIRETOR'],2):0,2,",","."); ?>%</th>
          <th><?php echo number_format(isset($beneficio['GERENTE'])?round($beneficio['GERENTE']* 100 / $obj['total_cargos']['GERENTE'],2):0,2,",","."); ?>%</th>
        </tr>
        <?php } ?>
      </tbody>
      
    </table>
  </section>
  <section>
    <div class="header">
      <img src="<?php echo base_url('assets/images/relatorio/page_6.1.png'); ?>" alt="">
      <h2>Previdência privada</h2>
    </div>
    <br>
    <table>
      <tbody>
        <tr>
          <th class="text-left"><b>Não oferecem previdência</b></th>
          <th class="text-center"><b><?php echo number_format($obj['previdencia']['nao'],2,",","."); ?>%</b></th>
        </tr>
        <tr>
          <th class="text-left">
            <b>Oferecem previdência</b>
          </th>
          <th><b><?php echo number_format($obj['previdencia']['sim'],2,",","."); ?>%</b></th>
        </tr>
      </tbody>
    </table>
    <br><br>
    <table>
      <thead>
        <tr>
          <th>Percentual de contribuição máximo (salário)</th>
          <th class="text-center"><b>Presidência</b></th>
          <th class="text-center"><b>Diretoria</b></th>
          <th class="text-center"><b>Gerência</b></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th class="text-left">
            <b>Abaixo de 4%</b>
          </th>
          <th><?php echo number_format($obj['previdencia_percentual']['PRESIDENTE']['4'],2,",","."); ?>%</th>
          <th><?php echo number_format($obj['previdencia_percentual']['DIRETOR']['4'],2,",","."); ?>%</th>
          <th><?php echo number_format($obj['previdencia_percentual']['GERENTE']['4'],2,",","."); ?>%</th>
        </tr>
        <tr>
          <th class="text-left">
            <b>De 4% até 6%</b>
          </th>
          <th><?php echo number_format($obj['previdencia_percentual']['PRESIDENTE']['6'],2,",","."); ?>%</th>
          <th><?php echo number_format($obj['previdencia_percentual']['DIRETOR']['6'],2,",","."); ?>%</th>
          <th><?php echo number_format($obj['previdencia_percentual']['GERENTE']['6'],2,",","."); ?>%</th>
        </tr>
        <tr>
          <th class="text-left">
            <b>Acima de 6% até 8%</b>
          </th>
          <th><?php echo number_format($obj['previdencia_percentual']['PRESIDENTE']['8'],2,",","."); ?>%</th>
          <th><?php echo number_format($obj['previdencia_percentual']['DIRETOR']['8'],2,",","."); ?>%</th>
          <th><?php echo number_format($obj['previdencia_percentual']['GERENTE']['8'],2,",","."); ?>%</th>
        </tr>
        <tr>
          <th class="text-left">
            <b>Acima de 8%</b>
          </th>
          <th><?php echo number_format($obj['previdencia_percentual']['PRESIDENTE']['10'],2,",","."); ?>%</th>
          <th><?php echo number_format($obj['previdencia_percentual']['DIRETOR']['10'],2,",","."); ?>%</th>
          <th><?php echo number_format($obj['previdencia_percentual']['GERENTE']['10'],2,",","."); ?>%</th>
        </tr>
      </tbody>
      
    </table>
  </section>
  <section>
    <div class="header">
      <img src="<?php echo base_url('assets/images/relatorio/page_7.png'); ?>" alt="">
      <h2>Incentivos de longo prazo</h2>
    </div>
    <br>
    <table>
      <thead>
        <tr>
          <th>Grupo I</th>
          <th class="text-center"><b>Presidência</b></th>
          <th class="text-center"><b>Diretoria</b></th>
          <th class="text-center"><b>Gerência</b></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th class="text-left">
            <b>Não Há</b>
          </th>
          <th><?php echo number_format(100 - ($obj['incentivos']['I']['STOCK']['PRESIDENTE']['S'] + $obj['incentivos']['I']['PHANTON']['PRESIDENTE']['S'] + $obj['incentivos']['I']['EVOLUCAO']['PRESIDENTE']['S'] + $obj['incentivos']['I']['OUTROS']['PRESIDENTE']['S']),2,",","."); ?>%</th>
          <th><?php echo number_format(100 - ($obj['incentivos']['I']['STOCK']['DIRETOR']['S'] + $obj['incentivos']['I']['PHANTON']['DIRETOR']['S'] + $obj['incentivos']['I']['EVOLUCAO']['DIRETOR']['S'] + $obj['incentivos']['I']['OUTROS']['DIRETOR']['S']),2,",","."); ?>%</th>
          <th><?php echo number_format(100 - ($obj['incentivos']['I']['STOCK']['GERENTE']['S'] + $obj['incentivos']['I']['PHANTON']['GERENTE']['S'] + $obj['incentivos']['I']['EVOLUCAO']['GERENTE']['S'] + $obj['incentivos']['I']['OUTROS']['GERENTE']['S']),2,",","."); ?>%</th>
        </tr>
        <tr>
          <th class="text-left">
            <b>Stock Option</b>
          </th>
          <th><?php echo number_format($obj['incentivos']['I']['STOCK']['PRESIDENTE']['S'],2,",","."); ?>%</th>
          <th><?php echo number_format($obj['incentivos']['I']['STOCK']['DIRETOR']['S'],2,",","."); ?>%</th>
          <th><?php echo number_format($obj['incentivos']['I']['STOCK']['GERENTE']['S'],2,",","."); ?>%</th>
        </tr>
        <tr>
          <th class="text-left">
            <b>Phantom Option / RSU (Restricted Share Units)</b>
          </th>
          <th><?php echo number_format($obj['incentivos']['I']['PHANTON']['PRESIDENTE']['S'],2,",","."); ?>%</th>
          <th><?php echo number_format($obj['incentivos']['I']['PHANTON']['DIRETOR']['S'],2,",","."); ?>%</th>
          <th><?php echo number_format($obj['incentivos']['I']['PHANTON']['GERENTE']['S'],2,",","."); ?>%</th>
        </tr>
        <tr>
          <th class="text-left">
            <b>Evolução P&L / EBITDA</b>
          </th>
          <th><?php echo number_format($obj['incentivos']['I']['EVOLUCAO']['PRESIDENTE']['S'],2,",","."); ?>%</th>
          <th><?php echo number_format($obj['incentivos']['I']['EVOLUCAO']['DIRETOR']['S'],2,",","."); ?>%</th>
          <th><?php echo number_format($obj['incentivos']['I']['EVOLUCAO']['GERENTE']['S'],2,",","."); ?>%</th>
        </tr>
        <tr>
          <th class="text-left">
            <b>Outros</b>
          </th>
          <th><?php echo number_format($obj['incentivos']['I']['OUTROS']['PRESIDENTE']['S'],2,",","."); ?>%</th>
          <th><?php echo number_format($obj['incentivos']['I']['OUTROS']['DIRETOR']['S'],2,",","."); ?>%</th>
          <th><?php echo number_format($obj['incentivos']['I']['OUTROS']['GERENTE']['S'],2,",","."); ?>%</th>
        </tr>
      </tbody>
      
    </table>
    <br>
    <table>
      <thead>
        <tr>
          <th>Grupo II</th>
          <th class="text-center"><b>Presidência</b></th>
          <th class="text-center"><b>Diretoria</b></th>
          <th class="text-center"><b>Gerência</b></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th class="text-left">
            <b>Não Há</b>
          </th>
          <th><?php echo number_format(100 - ($obj['incentivos']['II']['STOCK']['PRESIDENTE']['S'] + $obj['incentivos']['II']['PHANTON']['PRESIDENTE']['S'] + $obj['incentivos']['II']['EVOLUCAO']['PRESIDENTE']['S'] + $obj['incentivos']['II']['OUTROS']['PRESIDENTE']['S']),2,",","."); ?>%</th>
          <th><?php echo number_format(100 - ($obj['incentivos']['II']['STOCK']['DIRETOR']['S'] + $obj['incentivos']['II']['PHANTON']['DIRETOR']['S'] + $obj['incentivos']['II']['EVOLUCAO']['DIRETOR']['S'] + $obj['incentivos']['II']['OUTROS']['DIRETOR']['S']),2,",","."); ?>%</th>
          <th><?php echo number_format(100 - ($obj['incentivos']['II']['STOCK']['GERENTE']['S'] + $obj['incentivos']['II']['PHANTON']['GERENTE']['S'] + $obj['incentivos']['II']['EVOLUCAO']['GERENTE']['S'] + $obj['incentivos']['II']['OUTROS']['GERENTE']['S']),2,",","."); ?>%</th>
        </tr>
        <tr>
          <th class="text-left">
            <b>Stock Option</b>
          </th>
          <th><?php echo number_format($obj['incentivos']['II']['STOCK']['PRESIDENTE']['S'],2,",","."); ?>%</th>
          <th><?php echo number_format($obj['incentivos']['II']['STOCK']['DIRETOR']['S'],2,",","."); ?>%</th>
          <th><?php echo number_format($obj['incentivos']['II']['STOCK']['GERENTE']['S'],2,",","."); ?>%</th>
        </tr>
        <tr>
          <th class="text-left">
            <b>Phantom Option / RSU (Restricted Share Units)</b>
          </th>
          <th><?php echo number_format($obj['incentivos']['II']['PHANTON']['PRESIDENTE']['S'],2,",","."); ?>%</th>
          <th><?php echo number_format($obj['incentivos']['II']['PHANTON']['DIRETOR']['S'],2,",","."); ?>%</th>
          <th><?php echo number_format($obj['incentivos']['II']['PHANTON']['GERENTE']['S'],2,",","."); ?>%</th>
        </tr>
        <tr>
          <th class="text-left">
            <b>Evolução P&L / EBITDA</b>
          </th>
          <th><?php echo number_format($obj['incentivos']['II']['EVOLUCAO']['PRESIDENTE']['S'],2,",","."); ?>%</th>
          <th><?php echo number_format($obj['incentivos']['II']['EVOLUCAO']['DIRETOR']['S'],2,",","."); ?>%</th>
          <th><?php echo number_format($obj['incentivos']['II']['EVOLUCAO']['GERENTE']['S'],2,",","."); ?>%</th>
        </tr>
        <tr>
          <th class="text-left">
            <b>Outros</b>
          </th>
          <th><?php echo number_format($obj['incentivos']['II']['OUTROS']['PRESIDENTE']['S'],2,",","."); ?>%</th>
          <th><?php echo number_format($obj['incentivos']['II']['OUTROS']['DIRETOR']['S'],2,",","."); ?>%</th>
          <th><?php echo number_format($obj['incentivos']['II']['OUTROS']['GERENTE']['S'],2,",","."); ?>%</th>
        </tr>
      </tbody>
      
    </table>
    <br>
    <table>
      <thead>
        <tr>
          <th>Grupo III</th>
          <th class="text-center"><b>Presidência</b></th>
          <th class="text-center"><b>Diretoria</b></th>
          <th class="text-center"><b>Gerência</b></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th class="text-left">
            <b>Não Há</b>
          </th>
          <th><?php echo number_format(100 - ($obj['incentivos']['III']['STOCK']['PRESIDENTE']['S'] + $obj['incentivos']['III']['PHANTON']['PRESIDENTE']['S'] + $obj['incentivos']['III']['EVOLUCAO']['PRESIDENTE']['S'] + $obj['incentivos']['III']['OUTROS']['PRESIDENTE']['S']),2,",","."); ?>%</th>
          <th><?php echo number_format(100 - ($obj['incentivos']['III']['STOCK']['DIRETOR']['S'] + $obj['incentivos']['III']['PHANTON']['DIRETOR']['S'] + $obj['incentivos']['III']['EVOLUCAO']['DIRETOR']['S'] + $obj['incentivos']['III']['OUTROS']['DIRETOR']['S']),2,",","."); ?>%</th>
          <th><?php echo number_format(100 - ($obj['incentivos']['III']['STOCK']['GERENTE']['S'] + $obj['incentivos']['III']['PHANTON']['GERENTE']['S'] + $obj['incentivos']['III']['EVOLUCAO']['GERENTE']['S'] + $obj['incentivos']['III']['OUTROS']['GERENTE']['S']),2,",","."); ?>%</th>
        </tr>
        <tr>
          <th class="text-left">
            <b>Stock Option</b>
          </th>
          <th><?php echo number_format($obj['incentivos']['III']['STOCK']['PRESIDENTE']['S'],2,",","."); ?>%</th>
          <th><?php echo number_format($obj['incentivos']['III']['STOCK']['DIRETOR']['S'],2,",","."); ?>%</th>
          <th><?php echo number_format($obj['incentivos']['III']['STOCK']['GERENTE']['S'],2,",","."); ?>%</th>
        </tr>
        <tr>
          <th class="text-left">
            <b>Phantom Option / RSU (Restricted Share Units)</b>
          </th>
          <th><?php echo number_format($obj['incentivos']['III']['PHANTON']['PRESIDENTE']['S'],2,",","."); ?>%</th>
          <th><?php echo number_format($obj['incentivos']['III']['PHANTON']['DIRETOR']['S'],2,",","."); ?>%</th>
          <th><?php echo number_format($obj['incentivos']['III']['PHANTON']['GERENTE']['S'],2,",","."); ?>%</th>
        </tr>
        <tr>
          <th class="text-left">
            <b>Evolução P&L / EBITDA</b>
          </th>
          <th><?php echo number_format($obj['incentivos']['III']['EVOLUCAO']['PRESIDENTE']['S'],2,",","."); ?>%</th>
          <th><?php echo number_format($obj['incentivos']['III']['EVOLUCAO']['DIRETOR']['S'],2,",","."); ?>%</th>
          <th><?php echo number_format($obj['incentivos']['III']['EVOLUCAO']['GERENTE']['S'],2,",","."); ?>%</th>
        </tr>
        <tr>
          <th class="text-left">
            <b>Outros</b>
          </th>
          <th><?php echo number_format($obj['incentivos']['III']['OUTROS']['PRESIDENTE']['S'],2,",","."); ?>%</th>
          <th><?php echo number_format($obj['incentivos']['III']['OUTROS']['DIRETOR']['S'],2,",","."); ?>%</th>
          <th><?php echo number_format($obj['incentivos']['III']['OUTROS']['GERENTE']['S'],2,",","."); ?>%</th>
        </tr>
      </tbody>
      
    </table>
    <br>
  </section>
  <section>
    <div class="header">
      <img src="<?php echo base_url('assets/images/relatorio/page_7.1.png');  ?>" alt="">
      <h2>Bônus anual</h2>
      <p>
        (Número de salários mensais por ano)
      </p>
      <?php foreach($obj['bonus'] as $pos => $cargo) { ?>
      <table>
        <thead>
          <tr>
            <th></th>
            <th class="text-center"><b><?php echo $pos;?></b></th>
            <th class="text-center"><b>Meta</b></th>
            <th class="text-center"><b>Máximo</b></th>
            <th class="text-center"><b>Pago</b></th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($cargo as $pos1 => $bonus) { 
                  $print = false;
                  foreach($bonus as $pos2 => $tipo) { 
          ?>
          <tr <?php echo ($pos2 == '3º Quartil'? 'class="border-bonus-bottom-table"':'');?>>
              <?php if(!$print) {?>
              <td class="text-center border-bonus-table" rowspan="3">
                <b>GRUPO <?php echo($pos1); $print = true;?></b>
              </td>
            <?php } ?>
            <td class="text-center"><b><?php echo($pos2);?></b></td>
            <?php foreach($tipo as $pos3 => $valor) { ?>
              <td><?php echo number_format($valor,2,",",".");?></td>
            <?php } ?>
          </tr>
          <?php }
          }
          ?>
        </tbody>
      </table>
      <br>
      <?php } ?>
    </div>
    <br>
  </section>
  <section> 
    <div class="header">
      <img src="<?php echo base_url('assets/images/relatorio/page_8.png');  ?>" alt="">
      <h2>Tabelas salariais / Presidentes / Diretores</h2>
      <table>
        <thead>
          <tr>
            <th width='100px'></th>
            <th width='300px' class="text-left font-12"><b>Posição</b></th>
            <th class="text-center font-12"><b>1º Quartil</b></th>
            <th class="text-center font-12"><b>Mediana</b></th>
            <th class="text-center font-12"><b>3º Quartil</b></th>
          </tr>
        </thead>
        <tbody>
          <?php $print = false;  
          foreach($obj['tabela_salariais']['I']['PRESIDENTE_DIRETOR'] as $cargo => $valores) {    
          ?>
          <tr>
            <?php if(!$print) { $print = true;  ?>
              <td class="text-left align-top pt-3" rowspan="<?php echo count($obj['tabela_salariais']['I']['PRESIDENTE_DIRETOR']);?> ">
                <b class="text-left">GRUPO I</b><br>
                <span class="font-12">
                Salário base
                mensal (em R$)
                </span>
              </td>
            <?php } ?>
            <td class="text-left font-12 text-capitalize"><b><?php echo($cargo);?></b></td>
            <td class="font-12"><?php echo number_format($valores['quartil_1'],2,",",".");?></td>
            <td class="font-12"><?php echo number_format($valores['mediana'],2,",",".");?></td>
            <td class="font-12"><?php echo number_format($valores['quartil_3'],2,",",".");?></td>
          </tr>
          <?php 
          }
          ?>
        </tbody>
      </table>
      <br>
      <table>
        <thead>
          <tr>
          <th width='100px'></th>
            <th width='300px' class="text-left font-12"><b>Posição</b></th>
            <th class="text-center font-12"><b>1º Quartil</b></th>
            <th class="text-center font-12"><b>Mediana</b></th>
            <th class="text-center font-12"><b>3º Quartil</b></th>
          </tr>
        </thead>
        <tbody>
          <?php $print = false;  
          foreach($obj['tabela_salariais']['II']['PRESIDENTE_DIRETOR'] as $cargo => $valores) {    
          ?>
          <tr>
            <?php if(!$print) { $print = true;  ?>
              <td class="text-left align-top pt-3" rowspan="<?php echo count($obj['tabela_salariais']['II']['PRESIDENTE_DIRETOR']);?> ">
                <b class="text-left">GRUPO II</b><br>
                <span class="font-12">
                Salário base
                mensal (em R$)
                </span>
              </td>
            <?php } ?>
            <td class="text-left font-12 text-capitalize"><b><?php echo($cargo);?></b></td>
            <td class="font-12"><?php echo number_format($valores['quartil_1'],2,",",".");?></td>
            <td class="font-12"><?php echo number_format($valores['mediana'],2,",",".");?></td>
            <td class="font-12"><?php echo number_format($valores['quartil_3'],2,",",".");?></td>
          </tr>
          <?php 
          }
          ?>
        </tbody>
      </table>
      <br>
      <table>
        <thead>
          <tr>
            <th width='100px'></th>
            <th width='300px' class="text-left font-12"><b>Posição</b></th>
            <th class="text-center font-12"><b>1º Quartil</b></th>
            <th class="text-center font-12"><b>Mediana</b></th>
            <th class="text-center font-12"><b>3º Quartil</b></th>
          </tr>
        </thead>
        <tbody>
          <?php $print = false;  
          foreach($obj['tabela_salariais']['III']['PRESIDENTE_DIRETOR'] as $cargo => $valores) {    
          ?>
          <tr>
            <?php if(!$print) { $print = true;  ?>
              <td class="text-left align-top pt-3" rowspan="<?php echo count($obj['tabela_salariais']['III']['PRESIDENTE_DIRETOR']);?> ">
                <b class="text-left">GRUPO III</b><br>
                <span class="font-12">
                Salário base
                mensal (em R$)
                </span>
              </td>
            <?php } ?>
            <td class="text-left font-12 text-capitalize"><b><?php echo($cargo);?></b></td>
            <td class="font-12"><?php echo number_format($valores['quartil_1'],2,",",".");?></td>
            <td class="font-12"><?php echo number_format($valores['mediana'],2,",",".");?></td>
            <td class="font-12"><?php echo number_format($valores['quartil_3'],2,",",".");?></td>
          </tr>
          <?php 
          }
          ?>
        </tbody>
      </table>
    </div>
  </section>
  <section>
    <div class="header">
      <img src="<?php echo base_url('assets/images/relatorio/page_9.png');  ?>" alt="">
      <h2>Tabelas salariais / Gerentes</h2>
      <table>
        <thead>
          <tr>
            <th width='100px'></th>
            <th width='300px' class="text-left font-12"><b>Posição</b></th>
            <th class="text-center font-12"><b>1º Quartil</b></th>
            <th class="text-center font-12"><b>Mediana</b></th>
            <th class="text-center font-12"><b>3º Quartil</b></th>
          </tr>
        </thead>
        <tbody>
          <?php $print = false;  
          foreach($obj['tabela_salariais']['I']['GERENTE'] as $cargo => $valores) {    
          ?>
          <tr>
            <?php if(!$print) { $print = true;  ?>
              <td class="text-left align-top pt-3" rowspan="<?php echo count($obj['tabela_salariais']['I']['GERENTE']);?> ">
                <b class="text-left">GRUPO I</b><br>
                <span class="font-12">
                Salário base
                mensal (em R$)
                </span>
              </td>
            <?php } ?>
            <td class="text-left font-12 text-capitalize"><b><?php echo($cargo);?></b></td>
            <td class="font-12"><?php echo number_format($valores['quartil_1'],2,",",".");?></td>
            <td class="font-12"><?php echo number_format($valores['mediana'],2,",",".");?></td>
            <td class="font-12"><?php echo number_format($valores['quartil_3'],2,",",".");?></td>
          </tr>
          <?php 
          }
          ?>
        </tbody>
      </table>
      <br>
      <table>
        <thead>
          <tr>
          <th width='100px'></th>
            <th width='300px' class="text-left font-12"><b>Posição</b></th>
            <th class="text-center font-12"><b>1º Quartil</b></th>
            <th class="text-center font-12"><b>Mediana</b></th>
            <th class="text-center font-12"><b>3º Quartil</b></th>
          </tr>
        </thead>
        <tbody>
          <?php $print = false;  
          foreach($obj['tabela_salariais']['II']['GERENTE'] as $cargo => $valores) {    
          ?>
          <tr>
            <?php if(!$print) { $print = true;  ?>
              <td class="text-left align-top pt-3" rowspan="<?php echo count($obj['tabela_salariais']['II']['GERENTE']);?> ">
                <b class="text-left">GRUPO II</b><br>
                <span class="font-12">
                Salário base
                mensal (em R$)
                </span>
              </td>
            <?php } ?>
            <td class="text-left font-12 text-capitalize"><b><?php echo($cargo);?></b></td>
            <td class="font-12"><?php echo number_format($valores['quartil_1'],2,",",".");?></td>
            <td class="font-12"><?php echo number_format($valores['mediana'],2,",",".");?></td>
            <td class="font-12"><?php echo number_format($valores['quartil_3'],2,",",".");?></td>
          </tr>
          <?php 
          }
          ?>
        </tbody>
      </table>
      <br>
      <table>
        <thead>
          <tr>
            <th width='100px'></th>
            <th width='300px' class="text-left font-12"><b>Posição</b></th>
            <th class="text-center font-12"><b>1º Quartil</b></th>
            <th class="text-center font-12"><b>Mediana</b></th>
            <th class="text-center font-12"><b>3º Quartil</b></th>
          </tr>
        </thead>
        <tbody>
          <?php $print = false;  
          foreach($obj['tabela_salariais']['III']['GERENTE'] as $cargo => $valores) {    
          ?>
          <tr>
            <?php if(!$print) { $print = true;  ?>
              <td class="text-left align-top pt-3" rowspan="<?php echo count($obj['tabela_salariais']['III']['GERENTE']);?> ">
                <b class="text-left">GRUPO III</b><br>
                <span class="font-12">
                Salário base
                mensal (em R$)
                </span>
              </td>
            <?php } ?>
            <td class="text-left font-12 text-capitalize"><b><?php echo($cargo);?></b></td>
            <td class="font-12"><?php echo number_format($valores['quartil_1'],2,",",".");?></td>
            <td class="font-12"><?php echo number_format($valores['mediana'],2,",",".");?></td>
            <td class="font-12"><?php echo number_format($valores['quartil_3'],2,",",".");?></td>
          </tr>
          <?php 
          }
          ?>
        </tbody>
      </table>
    </div>
  </section>
  <script>

    //Chart.defaults.global.defaultFontSize = '50';

    var ctx = document.getElementById('myChart');
    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
          datasets: [{
              data: [<?php
              $data = [];
              $paises = [];
            foreach($obj['participantes_por_pais'] as $pos => $pais) {
              $data[] = $pais->total;
              $paises[] = "'".$pais->nm_nacionalidade."'";
            }
            echo implode(',',$data);
          ?>],
            datalabels: {
                color: '#000',
                font : {
                  size: '16'
                },
                backgroundColor: '#f1f1f15c',
                borderRadius: 5,
            },
            backgroundColor: [
                      '#04759f',
                      '#00aeef',
                      '#60c8ee',
                      '#444444',
                      '#acacac',
                      '#737373'
                  ]
          }],

          // These labels appear in the legend and in the tooltips when hovering different arcs
          labels: [<?php
              echo implode(',',$paises);
              ?>
          ],
        },
        options: {
          cutoutPercentage: 50,
          legend: {
            labels: {
                fontSize: 20
            }
          }
        }
    });
    var ctx = document.getElementById('myChartBarPresidenciaRemuneracao');
    var myPieChart = new Chart(ctx, {
        type: 'horizontalBar',
        plugins: [ChartDataLabels],
        data: {
          labels: [<?php
              $total = [];
              $labels = [];
            foreach($obj['mudancas_remuneracao_presidencias'] as $pos => $item) {
              $total[] = $item->total;
              $labels[] = "'".$item->nm_remuneracao_salario_presidencia."'";
            }
            echo implode(',',$labels);
          ?>],
          datasets: [{
              data: [<?php echo implode(',',$total);
          ?>],
            label: '',
            barPercentage: 0.5,
            backgroundColor: [
                      '#04759f',
                      '#00aeef',
                      '#60c8ee',
                      '#444444',
                      '#acacac',
                      '#737373'
                  ],
            datalabels: {
              anchor: 'end',
              align: 'end',
            }
          }],
        },
        options: {
          layout: {
            padding: {
              left: 0,
              right: 30,
              top: 0,
              bottom: 0
            }
          },
          scales: {
              xAxes: [{
                ticks: {
                    beginAtZero: true,
                },
                display: false,
                gridLines: {
                  offsetGridLines: true
                }
              }]
          },
          legend: {
            display: false
          }
        }
    });
    var ctx = document.getElementById('myChartBarPresidenciaBeneficios');
    var myPieChart = new Chart(ctx, {
        type: 'horizontalBar',
        plugins: [ChartDataLabels],
        data: {
          labels: [<?php
              $total = [];
              $labels = [];
            foreach($obj['mudancas_beneficios_presidencias'] as $pos => $item) {
              $total[] = $item->total;
              $labels[] = "'".$item->nm_remuneracao_beneficios_presidencia."'";
            }
            echo implode(',',$labels);
          ?>],
          datasets: [{
              data: [<?php echo implode(',',$total);
          ?>],
            label: '',
            barPercentage: 0.5,
            backgroundColor: [
                      '#04759f',
                      '#00aeef',
                      '#60c8ee',
                      '#444444',
                      '#acacac',
                      '#737373'
                  ],
            datalabels: {
              anchor: 'end',
              align: 'end',
            }
          }],
        },
        options: {
          layout: {
            padding: {
              left: 0,
              right: 30,
              top: 0,
              bottom: 0
            }
          },
          scales: {
              xAxes: [{
                ticks: {
                    beginAtZero: true,
                },
                display: false,
                gridLines: {
                  offsetGridLines: true
                }
              }]
          },
          legend: {
            display: false
          }
        }
    });
    var ctx = document.getElementById('myChartBarDiretoriaRemuneracao');
    var myPieChart = new Chart(ctx, {
        type: 'horizontalBar',
        plugins: [ChartDataLabels],
        data: {
          labels: [<?php
              $total = [];
              $labels = [];
            foreach($obj['mudancas_remuneracao_diretorias'] as $pos => $item) {
              $total[] = $item->total;
              $labels[] = "'".$item->nm_remuneracao_salario_diretoria."'";
            }
            echo implode(',',$labels);
          ?>],
          datasets: [{
              data: [<?php echo implode(',',$total);
          ?>],
            label: '',
            barPercentage: 0.5,
            backgroundColor: [
                      '#04759f',
                      '#00aeef',
                      '#60c8ee',
                      '#444444',
                      '#acacac',
                      '#737373'
                  ],
            datalabels: {
              anchor: 'end',
              align: 'end',
            }
          }],
        },
        options: {
          layout: {
            padding: {
              left: 0,
              right: 30,
              top: 0,
              bottom: 0
            }
          },
          scales: {
              xAxes: [{
                ticks: {
                    beginAtZero: true,
                },
                display: false,
                gridLines: {
                  offsetGridLines: true
                }
              }]
          },
          legend: {
            display: false
          }
        }
    });
    var ctx = document.getElementById('myChartBarDiretoriaBeneficios');
    var myPieChart = new Chart(ctx, {
        type: 'horizontalBar',
        plugins: [ChartDataLabels],
        data: {
          labels: [<?php
              $total = [];
              $labels = [];
            foreach($obj['mudancas_beneficios_diretorias'] as $pos => $item) {
              $total[] = $item->total;
              $labels[] = "'".$item->nm_remuneracao_beneficios_diretoria."'";
            }
            echo implode(',',$labels);
          ?>],
          datasets: [{
              data: [<?php echo implode(',',$total);
          ?>],
            label: '',
            barPercentage: 0.5,
            backgroundColor: [
                      '#04759f',
                      '#00aeef',
                      '#60c8ee',
                      '#444444',
                      '#acacac',
                      '#737373'
                  ],
            datalabels: {
              anchor: 'end',
              align: 'end',
            }
          }],
        },
        options: {
          layout: {
            padding: {
              left: 0,
              right: 30,
              top: 0,
              bottom: 0
            }
          },
          scales: {
              xAxes: [{
                ticks: {
                    beginAtZero: true,
                },
                display: false,
                gridLines: {
                  offsetGridLines: true
                }
              }]
          },
          legend: {
            display: false
          }
        }
    });
    var ctx = document.getElementById('myChartBarGerenciaRemuneracao');
    var myPieChart = new Chart(ctx, {
        type: 'horizontalBar',
        plugins: [ChartDataLabels],
        data: {
          labels: [<?php
              $total = [];
              $labels = [];
            foreach($obj['mudancas_remuneracao_gerencias'] as $pos => $item) {
              $total[] = $item->total;
              $labels[] = "'".$item->nm_remuneracao_salario_gerencia."'";
            }
            echo implode(',',$labels);
          ?>],
          datasets: [{
              data: [<?php echo implode(',',$total);
          ?>],
            label: '',
            barPercentage: 0.5,
            backgroundColor: [
                      '#04759f',
                      '#00aeef',
                      '#60c8ee',
                      '#444444',
                      '#acacac',
                      '#737373'
                  ],
            datalabels: {
              anchor: 'end',
              align: 'end',
            }
          }],
        },
        options: {
          layout: {
            padding: {
              left: 0,
              right: 30,
              top: 0,
              bottom: 0
            }
          },
          scales: {
              xAxes: [{
                ticks: {
                    beginAtZero: true,
                },
                display: false,
                gridLines: {
                  offsetGridLines: true
                }
              }]
          },
          legend: {
            display: false
          }
        }
    });
    var ctx = document.getElementById('myChartBarGerenciaBeneficios');
    var myPieChart = new Chart(ctx, {
        type: 'horizontalBar',
        plugins: [ChartDataLabels],
        data: {
          labels: [<?php
              $total = [];
              $labels = [];
            foreach($obj['mudancas_beneficios_gerencias'] as $pos => $item) {
              $total[] = $item->total;
              $labels[] = "'".$item->nm_remuneracao_beneficios_gerencia."'";
            }
            echo implode(',',$labels);
          ?>],
          datasets: [{
              data: [<?php echo implode(',',$total);
          ?>],
            label: '',
            barPercentage: 0.5,
            backgroundColor: [
                      '#04759f',
                      '#00aeef',
                      '#60c8ee',
                      '#444444',
                      '#acacac',
                      '#737373'
                  ],
            datalabels: {
              anchor: 'end',
              align: 'end',
            }
          }],
        },
        options: {
          layout: {
            padding: {
              left: 0,
              right: 30,
              top: 0,
              bottom: 0
            }
          },
          scales: {
              xAxes: [{
                ticks: {
                    beginAtZero: true,
                },
                display: false,
                gridLines: {
                  offsetGridLines: true
                }
              }]
          },
          legend: {
            display: false
          }
        }
    });
  </script>
</body>
</html>
