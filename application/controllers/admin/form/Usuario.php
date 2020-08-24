<?php

class Usuario extends CI_Controller {

	public $table = "tab_usuario";
	public $key = "id_usuario";

	public function index(){

		$dados['titulo'] = "Usuário";
		
		$this->load->model("usuario_model");

		if($this->input->post("codigo")){	

			$dados['obj'] = $this->usuario_model->detalhe($this->input->post("codigo"));
			
		}

		$this->load->view('admin/form/'.$this->router->fetch_class(), $dados);

	}

	public function salvar(){

		$this->load->model("usuario_model");

		if(!$this->input->post("codigo")){

			$this->usuario_model->insert($this->input->post());

		}else{

			$this->usuario_model->update($this->input->post());

		}

		redirect("admin/grid/".$this->router->fetch_class());

	}

}
