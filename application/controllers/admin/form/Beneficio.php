<?php

class Beneficio extends CI_Controller {

	public $table = "tab_beneficio";
	public $key = "id_beneficio";

	public function index(){

		$dados['titulo'] = "Benefício";
		
		$this->load->model("beneficio_model");

		if($this->input->post("codigo")){	

			$dados['obj'] = $this->beneficio_model->detalhe($this->input->post("codigo"));
			
		}

		$this->load->view('admin/form/'.$this->router->fetch_class(), $dados);

	}

	public function salvar(){

		$this->load->model("beneficio_model");

		if(!$this->input->post("codigo")){

			$this->beneficio_model->insert($this->input->post());

		}else{

			$this->beneficio_model->update($this->input->post());

		}

		redirect("admin/grid/".$this->router->fetch_class());

	}

}
