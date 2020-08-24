<?php

class Respondente extends CI_Controller {

	public $table = "tab_respondente";
	public $key = "id_respondente";

	public function index(){

		$dados['titulo'] = "Respondente";
		
		$this->load->model("respondente_model");

		if($this->input->post("codigo")){	

			$dados['obj'] = $this->respondente_model->detalhe($this->input->post("codigo"));

			if($dados['obj']->nr_telefone){
			
				$dados['obj']->nr_telefone = mask($dados['obj']->nr_telefone, 'tel');

			}
			
		}

		$this->load->view('admin/form/'.$this->router->fetch_class(), $dados);

	}

	public function salvar(){

		$this->load->model("respondente_model");

		if(!$this->input->post("codigo")){

			$this->respondente_model->insert($this->input->post());

		}else{

			$this->respondente_model->update($this->input->post());

		}

		redirect("admin/grid/".$this->router->fetch_class());

	}

}
