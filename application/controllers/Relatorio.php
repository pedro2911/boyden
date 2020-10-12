<?php

class Relatorio extends CI_Controller {

	public $table = "tab_pesquisa_2020";
	public $key = "id_pesquisa";

	public function index(){
		$this->load->model('pesquisa_model');
		$table_1  = $this->pesquisa_model->get_totais_por_grupos();
		foreach($table_1 as $pos => $item){
			if($item->grupo == 'I')
			$dados['obj']['table_1']['grupo_i'] = $item->total;
			if($item->grupo == 'II')
			$dados['obj']['table_1']['grupo_ii'] = $item->total;
			if($item->grupo == 'III')
			$dados['obj']['table_1']['grupo_iii'] = $item->total;
		}
		$dados['obj']['empresas']  = $this->pesquisa_model->get_empresas_participante();
		$dados['obj']['participantes_por_pais']  = $this->pesquisa_model->get_participantes_por_pais();
		$faturamento_bruto  = $this->pesquisa_model->get_faturamento_bruto();
		foreach($faturamento_bruto as $pos => $item){
			if($item->grupo == 'I')
			$dados['obj']['faturamento_bruto']['grupo_i'] = ['total2018' => $item->total2018, 'total2019' => $item->total2019, 'percentagem' => $item->percentagem];
			if($item->grupo == 'II')
			$dados['obj']['faturamento_bruto']['grupo_ii'] = ['total2018' => $item->total2018, 'total2019' => $item->total2019, 'percentagem' => $item->percentagem];
			if($item->grupo == 'III')
			$dados['obj']['faturamento_bruto']['grupo_iii'] = ['total2018' => $item->total2018, 'total2019' => $item->total2019, 'percentagem' => $item->percentagem];
		}
		$numero_funcionarios  = $this->pesquisa_model->get_numero_funcionarios();
		foreach($numero_funcionarios as $pos => $item){
			if($item->grupo == 'I')
			$dados['obj']['numero_funcionarios']['grupo_i'] = ['total2018' => $item->total2018, 'total2019' => $item->total2019, 'percentagem' => $item->percentagem];
			if($item->grupo == 'II')
			$dados['obj']['numero_funcionarios']['grupo_ii'] = ['total2018' => $item->total2018, 'total2019' => $item->total2019, 'percentagem' => $item->percentagem];
			if($item->grupo == 'III')
			$dados['obj']['numero_funcionarios']['grupo_iii'] = ['total2018' => $item->total2018, 'total2019' => $item->total2019, 'percentagem' => $item->percentagem];
		}
		$excutivos  = $this->pesquisa_model->get_excutivos();
		foreach($excutivos as $pos => $item){
			if($item->grupo == 'I')
				$dados['obj']['excutivos']['grupo_i'] = ['total2018' => $item->total2018, 'total2019' => $item->total2019, 'percentagem' => $item->percentagem];
			if($item->grupo == 'II')
				$dados['obj']['excutivos']['grupo_ii'] = ['total2018' => $item->total2018, 'total2019' => $item->total2019, 'percentagem' => $item->percentagem];
			if($item->grupo == 'III')
				$dados['obj']['excutivos']['grupo_iii'] =['total2018' => $item->total2018, 'total2019' => $item->total2019, 'percentagem' => $item->percentagem];
		}
		$expatriados_brasil  = $this->pesquisa_model->get_expatriados_brasil();
		foreach($excutivos as $pos => $item){
			if($item->grupo == 'I')
				$dados['obj']['expatriados_brasil']['grupo_i'] = ['total2018' => $item->total2018, 'total2019' => $item->total2019, 'percentagem' => $item->percentagem];
			if($item->grupo == 'II')
				$dados['obj']['expatriados_brasil']['grupo_ii'] = ['total2018' => $item->total2018, 'total2019' => $item->total2019, 'percentagem' => $item->percentagem];
			if($item->grupo == 'III')
				$dados['obj']['expatriados_brasil']['grupo_iii'] =['total2018' => $item->total2018, 'total2019' => $item->total2019, 'percentagem' => $item->percentagem];
		}
		$expatriados_exterior  = $this->pesquisa_model->get_expatriados_exterior();
		foreach($excutivos as $pos => $item){
			if($item->grupo == 'I')
				$dados['obj']['expatriados_exterior']['grupo_i'] = ['total2018' => $item->total2018, 'total2019' => $item->total2019, 'percentagem' => $item->percentagem];
			if($item->grupo == 'II')
				$dados['obj']['expatriados_exterior']['grupo_ii'] = ['total2018' => $item->total2018, 'total2019' => $item->total2019, 'percentagem' => $item->percentagem];
			if($item->grupo == 'III')
				$dados['obj']['expatriados_exterior']['grupo_iii'] =['total2018' => $item->total2018, 'total2019' => $item->total2019, 'percentagem' => $item->percentagem];
		}
		$dados['obj']['mudancas_remuneracao_presidencias']  = $this->pesquisa_model->get_mudancas_remuneracao_presidencias();
		$dados['obj']['mudancas_beneficios_presidencias']  = $this->pesquisa_model->get_mudancas_beneficios_presidencias();
		$dados['obj']['mudancas_remuneracao_diretorias']  = $this->pesquisa_model->get_mudancas_remuneracao_diretorias();
		$dados['obj']['mudancas_beneficios_diretorias']  = $this->pesquisa_model->get_mudancas_beneficios_diretorias();
		$dados['obj']['mudancas_remuneracao_gerencias']  = $this->pesquisa_model->get_mudancas_remuneracao_gerencias();
		$dados['obj']['mudancas_beneficios_gerencias']  = $this->pesquisa_model->get_mudancas_beneficios_gerencias();
		$beneficios  = $this->pesquisa_model->get_beneficios();
		$beneficios_x_cargo = [];
		foreach($beneficios as $pos => $item){
			$dados['obj']['beneficios'][$item->nm_beneficio][$item->tp_cargo] = (int) $item->total;
		}
		$previdencia  = $this->pesquisa_model->get_previdencia();
		$total_previdencia = 0;
		foreach($previdencia as $pos => $item){
			$total_previdencia += (int) $item->total;
		}
		foreach($previdencia as $pos => $item){
			if($item->fl_empresa_previdencia_privada == 'Sim')
			$dados['obj']['previdencia']['sim'] = round((int) $item->total * 100 / $total_previdencia,2);
			else
			$dados['obj']['previdencia']['nao'] = round((int) $item->total * 100 / $total_previdencia,2);
		}
		$previdencia_percentual =  $this->pesquisa_model->get_previdencia_percentual();
		foreach($previdencia_percentual as $pos => $item){
			if(!isset($dados['obj']['previdencia_percentual'][$item->tipo]['total'])) {
				$dados['obj']['previdencia_percentual'][$item->tipo]['total'] = (int) $item->total;
			} else {
				$dados['obj']['previdencia_percentual'][$item->tipo]['total'] += (int) $item->total;
			}
			$dados['obj']['previdencia_percentual'][$item->tipo][$item->grupo] = (int) $item->total;			
		}
		foreach($dados['obj']['previdencia_percentual'] as $pos => $item){
			$dados['obj']['previdencia_percentual'][$pos]['4'] = round($item['4'] * 100 / $item['total'],2);
			$dados['obj']['previdencia_percentual'][$pos]['6'] = round($item['6'] * 100 / $item['total'],2);
			$dados['obj']['previdencia_percentual'][$pos]['8'] = round($item['8'] * 100 / $item['total'],2);
			$dados['obj']['previdencia_percentual'][$pos]['10'] = round($item['10'] * 100 / $item['total'],2);
		}

		$incentivos =  $this->pesquisa_model->get_incentivos();
		foreach($incentivos  as $pos => $item){
			if(!isset($dados['obj']['incentivos'][$item->grupo][$item->tipo][$item->cargo]['total'])) {
				$dados['obj']['incentivos'][$item->grupo][$item->tipo][$item->cargo]['total'] = (int) $item->total;
			} else {
				$dados['obj']['incentivos'][$item->grupo][$item->tipo][$item->cargo]['total'] += (int) $item->total;
			}
		}
		foreach($incentivos  as $pos => $item){
			$dados['obj']['incentivos'][$item->grupo][$item->tipo][$item->cargo][$item->valor] = (int) $item->total;
		}
		foreach($dados['obj']['incentivos']  as $pos => $item){
			foreach($item  as $pos2 => $item2){
				foreach($item2  as $pos3 => $item3){
					if(!isset($item3['S'])) {
						$dados['obj']['incentivos'][$pos][$pos2][$pos3]['S'] = 0;
					}
					else {
						$dados['obj']['incentivos'][$pos][$pos2][$pos3]['S'] = round($item3['S'] * 100 / $item3['total'],2);
					}
					if(!isset($item3['N'])){
						$dados['obj']['incentivos'][$pos][$pos2][$pos3]['N'] = 0;
					} else {
						$dados['obj']['incentivos'][$pos][$pos2][$pos3]['N'] = round($item3['N'] * 100 / $item3['total'],2);
					}
				}
			}
		}
		$this->load->view('relatorio', $dados);		

	}
		
}

?>