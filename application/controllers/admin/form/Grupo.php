<?php

class Grupo extends CI_Controller {

	public $table = "tab_grupo";
	public $key = "id_grupo";

	public function index(){

		$dados['titulo'] = "Grupo";
		
		$this->load->model("grupo_model");

		if($this->input->post("codigo")){	

			$dados['obj'] = $this->grupo_model->detalhe($this->input->post("codigo"));
			
		}

		$this->load->view('admin/form/'.$this->router->fetch_class(), $dados);

	}

	public function salvar(){

		$this->load->model("grupo_model");

		if(!$this->input->post("codigo")){

			$this->grupo_model->insert($this->input->post());

		}else{

			$this->grupo_model->update($this->input->post());

		}

		redirect("admin/grid/".$this->router->fetch_class());

	}

}
