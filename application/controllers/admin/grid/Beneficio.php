<?php

class Beneficio extends CI_Controller {

	public $table = "tab_beneficio";
	public $key = "id_beneficio";

	public function index(){


		// --- TÍTULO ---------------------------------------------

			$dados['titulo'] = "Benefícios";

		// --- TÍTULO ---------------------------------------------

		// --- GRID -----------------------------------------------

			$this->load->model('beneficio_model');

			$dados['obj'] = $this->beneficio_model->listar($this->input->post());

		// --- GRID -----------------------------------------------

		$this->load->view('admin/grid/'.$this->router->fetch_class(), $dados);

	}

	public function excluir(){

		$this->load->model('beneficio_model');

		$this->beneficio_model->delete($this->input->post("excluir"));

		redirect("admin/grid/".$this->router->fetch_class());

	}

	
}
