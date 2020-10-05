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
          <th>Acima de R$ 900 milhões</th>
          <th><?php echo $obj['table_1']['grupo_i']; ?></th>
        </tr>
        <tr>
          <th><b>II</b></th>
          <th>Acima de R$ 150 milhões até R$ 900 milhões</th>
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
            <span>Acima de R$ 900 milhões</span>
          </th>
          <th><?php echo $obj['faturamento_bruto']['grupo_i']['total2018']; ?></th>
          <th><?php echo $obj['faturamento_bruto']['grupo_i']['total2019']; ?></th>
          <th><?php echo $obj['faturamento_bruto']['grupo_i']['percentagem']; ?>%</th>
        </tr>
        <tr>
          <th class="text-left">
            <h4>Grupo II</h4>
            <span>Acima de R$ 150 milhões até R$ 900 milhões</span>
          </th>
          <th><?php echo $obj['faturamento_bruto']['grupo_ii']['total2018']; ?></th>
          <th><?php echo $obj['faturamento_bruto']['grupo_ii']['total2019']; ?></th>
          <th><?php echo $obj['faturamento_bruto']['grupo_ii']['percentagem']; ?>%</th>
        </tr>
        <tr>
          <th class="text-left">
            <h4>Grupo III</h4>
            <span>Acima de R$ 900 milhões</span>
          </th>
          <th><?php echo $obj['faturamento_bruto']['grupo_iii']['total2018']; ?></th>
          <th><?php echo $obj['faturamento_bruto']['grupo_iii']['total2019']; ?></th>
          <th><?php echo $obj['faturamento_bruto']['grupo_iii']['percentagem']; ?>%</th>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th>
            <b>Total</b>
          </th>
          <th class="text-center"><?php echo $obj['faturamento_bruto']['grupo_i']['total2018'] + $obj['faturamento_bruto']['grupo_ii']['total2018'] + $obj['faturamento_bruto']['grupo_iii']['total2018']; ?></th>
          <th class="text-center"><?php echo $obj['faturamento_bruto']['grupo_i']['total2019'] + $obj['faturamento_bruto']['grupo_ii']['total2019'] + $obj['faturamento_bruto']['grupo_iii']['total2019']; ?></th>
          <th class="text-center"><?php echo $obj['faturamento_bruto']['grupo_i']['percentagem'] + $obj['faturamento_bruto']['grupo_ii']['percentagem'] + $obj['faturamento_bruto']['grupo_iii']['percentagem']; ?>%</th>
        </tr>
      </tfoot>
    </table>
  </section>
  <section>
    <div class="header">
      <img src="<?php echo base_url('assets/images/relatorio/page_3.3.png'); ?>" alt="">
      <h2>Número de funcionários</h2>
      <p>
      No geral houve um pequeno aumento no quadro de colaboradores, com destaque para as
      empresas de porte médio. Já as de menor porte diminuíram suas estruturas.<br>
      </p>
    </div>
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
            <span>Acima de R$ 900 milhões</span>
          </th>
          <th><?php echo $obj['numero_funcionarios']['grupo_i']['total2018']; ?></th>
          <th><?php echo $obj['numero_funcionarios']['grupo_i']['total2019']; ?></th>
          <th><?php echo $obj['numero_funcionarios']['grupo_i']['percentagem']; ?>%</th>
        </tr>
        <tr>
          <th class="text-left">
            <h4>Grupo II</h4>
            <span>Acima de R$ 150 milhões até R$ 900 milhões</span>
          </th>
          <th><?php echo $obj['numero_funcionarios']['grupo_ii']['total2018']; ?></th>
          <th><?php echo $obj['numero_funcionarios']['grupo_ii']['total2019']; ?></th>
          <th><?php echo $obj['numero_funcionarios']['grupo_ii']['percentagem']; ?>%</th>
        </tr>
        <tr>
          <th class="text-left">
            <h4>Grupo III</h4>
            <span>Acima de R$ 900 milhões</span>
          </th>
          <th><?php echo $obj['numero_funcionarios']['grupo_iii']['total2018']; ?></th>
          <th><?php echo $obj['numero_funcionarios']['grupo_iii']['total2019']; ?></th>
          <th><?php echo $obj['numero_funcionarios']['grupo_iii']['percentagem']; ?>%</th>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th>
            <b>Total</b>
          </th>
          <th class="text-center"><?php echo $obj['numero_funcionarios']['grupo_i']['total2018'] + $obj['numero_funcionarios']['grupo_ii']['total2018'] + $obj['numero_funcionarios']['grupo_iii']['total2018']; ?></th>
          <th class="text-center"><?php echo $obj['numero_funcionarios']['grupo_i']['total2019'] + $obj['numero_funcionarios']['grupo_ii']['total2019'] + $obj['numero_funcionarios']['grupo_iii']['total2019']; ?></th>
          <th class="text-center"><?php echo $obj['numero_funcionarios']['grupo_i']['percentagem'] + $obj['numero_funcionarios']['grupo_ii']['percentagem'] + $obj['numero_funcionarios']['grupo_iii']['percentagem']; ?>%</th>
        </tr>
      </tfoot>
    </table>
  </section>
  <section>
    <div class="header">
      <img src="<?php echo base_url('assets/images/relatorio/page_4.1.png'); ?>" alt="">
      <h2>Total de executivos</h2>
      <p>
      Em 2018 as empresas em geral aumentaram o número de executivos, interrompendo uma sequência
      de anos de enxugamento.<br>
      </p>
    </div>
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
            <span>Acima de R$ 900 milhões</span>
          </th>
          <th><?php echo $obj['numero_funcionarios']['grupo_i']['total2018']; ?></th>
          <th><?php echo $obj['numero_funcionarios']['grupo_i']['total2019']; ?></th>
          <th><?php echo $obj['numero_funcionarios']['grupo_i']['percentagem']; ?>%</th>
          <th><?php echo $obj['numero_funcionarios']['grupo_i']['total2019']; ?></th>
          <th><?php echo $obj['numero_funcionarios']['grupo_i']['percentagem']; ?>%</th>
        </tr>
        <tr>
          <th>
            <h4>Grupo II</h4>
            <span>Acima de R$ 150 milhões até R$ 900 milhões</span>
          </th>
          <th><?php echo $obj['numero_funcionarios']['grupo_ii']['total2018']; ?></th>
          <th><?php echo $obj['numero_funcionarios']['grupo_ii']['total2019']; ?></th>
          <th><?php echo $obj['numero_funcionarios']['grupo_ii']['percentagem']; ?>%</th>
          <th><?php echo $obj['numero_funcionarios']['grupo_ii']['total2019']; ?></th>
          <th><?php echo $obj['numero_funcionarios']['grupo_ii']['percentagem']; ?>%</th>
        </tr>
        <tr>
          <th>
            <h4>Grupo III</h4>
            <span>Acima de R$ 900 milhões</span>
          </th>
          <th><?php echo $obj['numero_funcionarios']['grupo_iii']['total2018']; ?></th>
          <th><?php echo $obj['numero_funcionarios']['grupo_iii']['total2019']; ?></th>
          <th><?php echo $obj['numero_funcionarios']['grupo_iii']['percentagem']; ?>%</th>
          <th><?php echo $obj['numero_funcionarios']['grupo_iii']['total2019']; ?></th>
          <th><?php echo $obj['numero_funcionarios']['grupo_iii']['percentagem']; ?>%</th>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th>
            <b>Total</b>
          </th>
          <th class="text-center"><?php echo $obj['numero_funcionarios']['grupo_i']['total2018'] + $obj['numero_funcionarios']['grupo_ii']['total2018'] + $obj['numero_funcionarios']['grupo_iii']['total2018']; ?></th>
          <th class="text-center"><?php echo $obj['numero_funcionarios']['grupo_i']['total2019'] + $obj['numero_funcionarios']['grupo_ii']['total2019'] + $obj['numero_funcionarios']['grupo_iii']['total2019']; ?></th>
          <th class="text-center"><?php echo $obj['numero_funcionarios']['grupo_i']['percentagem'] + $obj['numero_funcionarios']['grupo_ii']['percentagem'] + $obj['numero_funcionarios']['grupo_iii']['percentagem']; ?>%</th>
          <th class="text-center"><?php echo $obj['numero_funcionarios']['grupo_i']['total2019'] + $obj['numero_funcionarios']['grupo_ii']['total2019'] + $obj['numero_funcionarios']['grupo_iii']['total2019']; ?></th>
          <th class="text-center"><?php echo $obj['numero_funcionarios']['grupo_i']['percentagem'] + $obj['numero_funcionarios']['grupo_ii']['percentagem'] + $obj['numero_funcionarios']['grupo_iii']['percentagem']; ?>%</th>
        </tr>
      </tfoot>
    </table>
  </section>

  <script>
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
    }
});
</script>
</body>
</html>
