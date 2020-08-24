<?php

class Cliente extends CI_Controller {

	public $table = "tb_cliente";
	public $key = "cd_cliente";

	public function index(){

		$dados['titulo'] = "Cliente";
		
		$this->load->model("cliente_model");

		if($this->input->post("codigo")){	

			$dados['obj'] = $this->cliente_model->detalhe($this->input->post("codigo"));

			$dados['obj']->id_cnpj 		 = getCpfCnpj($dados['obj']->id_cnpj);
			$dados['obj']->nr_telefone_1 = getTelefone($dados['obj']->nr_telefone_1);
			$dados['obj']->nr_telefone_2 = getTelefone($dados['obj']->nr_telefone_2);
			$dados['obj']->nr_telefone_3 = getTelefone($dados['obj']->nr_telefone_3);
			
		}

		// LISTAS -----------------------------------------------------------------------------------

			$this->load->model("estado_model");
		
			$dados['lista_estados'] = $this->estado_model->listar_combo($dados['obj']->sg_uf);
		
		// LISTAS -----------------------------------------------------------------------------------

		$this->load->view('form/'.$this->router->fetch_class(), $dados);

	}
	
	public function salvar(){

		$this->load->model("cliente_model");

		if(!$this->input->post("codigo")){

			$this->cliente_model->insert($this->input->post());

		}else{

			$this->cliente_model->update($this->input->post());

		}

		redirect("grid/".$this->router->fetch_class());

	}

	public function duplicidade(){
		
		$this->load->model("cliente_model");

		return $this->cliente_model->duplicidade($this->input->post());

	}
/*
	public function listar_cliente_cliente(){

			$this->load->model("cliente_model");

			echo $this->cliente_model->listar_cliente_cliente($this->input->post("cd_cliente"));die;		

	}
*/
}
