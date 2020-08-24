<?php

class Cargo extends CI_Controller {

	public $table = "tab_cargo";
	public $key = "id_cargo";

	public function index(){

		$dados['titulo'] = "Cargo";
		
		$this->load->model("cargo_model");

		if($this->input->post("codigo")){	

			$dados['obj'] = $this->cargo_model->detalhe($this->input->post("codigo"));
			
		}

		$this->load->view('admin/form/'.$this->router->fetch_class(), $dados);

	}

	public function salvar(){

		$this->load->model("cargo_model");

		if(!$this->input->post("codigo")){

			$this->cargo_model->insert($this->input->post());

		}else{

			$this->cargo_model->update($this->input->post());

		}

		redirect("admin/grid/".$this->router->fetch_class());

	}

}
