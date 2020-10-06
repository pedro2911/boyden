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
		$this->load->view('relatorio', $dados);		

	}
		
}

?>