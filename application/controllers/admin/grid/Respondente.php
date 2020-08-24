<?php

class Respondente extends CI_Controller {

	public $table = "tab_respondente";
	public $key = "id_respondente";

	public function index(){


		// --- TÍTULO ---------------------------------------------

			$dados['titulo'] = "Respondentes";

		// --- TÍTULO ---------------------------------------------

		// --- GRID -----------------------------------------------

			$this->load->model('respondente_model');

			$dados['obj'] = $this->respondente_model->listar($this->input->post());

		// --- GRID -----------------------------------------------

		$this->load->view('admin/grid/'.$this->router->fetch_class(), $dados);

	}

	public function excluir(){

		$this->load->model('respondente_model');

		$this->respondente_model->delete($this->input->post("excluir"));

		redirect("admin/grid/".$this->router->fetch_class());

	}

	
}
