<?php

class Boyden_2020 extends CI_Controller {

	public $table = "tab_pesquisa_2020";
	public $key = "id_pesquisa";

	public function index(){

		//$this->session->id_respondente_session = ""; // EXCLUIR
		//$this->session->id_pesquisa_session = ""; // EXCLUIR



		if($this->session->id_respondente_session > 0 && $this->session->id_pesquisa_session > 0){

			$this->load->model('pesquisa_model');
			$this->load->model('cargo_model');
			$this->load->model('pesquisa_cargo_model');
			$this->load->model('pesquisa_beneficio_model');
			$this->load->model('beneficio_model');

			$dados['obj']  = $this->pesquisa_model->get_pesquisa();

			$dados['objC'] = $this->cargo_model->get_cargos(2020);
			$dados['objB'] = $this->beneficio_model->get_beneficios(2020);

			$objPC 		   = $this->pesquisa_cargo_model->get_cargos();
			$objPB 		   = $this->pesquisa_beneficio_model->get_beneficios();

			//ps($objPB[0]->id_beneficio);

			for ($i=0; $i < count($objPB); $i++) { 
				$dados['objPB'][$objPB[$i]->tp_cargo][] = $objPB[$i]->id_beneficio;
			}

			//ps($dados['objPB']);


			for ($i=0; $i < count($objPC); $i++) { 
				$dados['objPC'][] = $objPC[$i]->id_cargo;
				$dados['objPCV'][$objPC[$i]->id_cargo] = $objPC[$i];

				$objTipoCargo[] = $objPC[$i]->tp_cargo;

			}

			$dados['objTipoCargo'] = array_unique($objTipoCargo);


			$dados['obj']->vr_faturamento_2018 = number_format($dados['obj']->vr_faturamento_2018, 0, ",", ".");
			$dados['obj']->vr_faturamento_2019 = number_format($dados['obj']->vr_faturamento_2019, 0, ",", ".");

			$this->load->view($this->router->fetch_class(), $dados);

		}else{

			redirect('./login');

		}		

	}
	
	public function gravar_campo(){

		$this->load->model('pesquisa_model');

		$this->pesquisa_model->gravar_campo($this->input->post());

	}

	public function gravar_campo_dinamico(){

		$this->load->model('pesquisa_model');

		$this->pesquisa_model->gravar_campo_dinamico($this->input->post());

	}

	public function gravar_campo_check_cargo(){

		$this->load->model('pesquisa_model');

		$this->pesquisa_model->gravar_campo_check_cargo($this->input->post());

	}

	public function gravar_campo_check_beneficio(){

		$this->load->model('pesquisa_model');

		$this->pesquisa_model->gravar_campo_check_beneficio($this->input->post());

	}

	public function gravar_novo_cargo(){

		$this->load->model('cargo_model');

		$_POST["nr_ano"] = 2020;

		$this->cargo_model->insert($this->input->post());

	}

		
}

?>