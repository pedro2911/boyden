<?php

class Cargo extends CI_Controller {

	public $table = "tab_cargo";
	public $key = "id_cargo";

	public function index(){

		// --- TÍTULO ---------------------------------------------

			$dados['titulo'] = "Cargos";

		// --- TÍTULO ---------------------------------------------

		// --- GRID -----------------------------------------------

			$this->load->model('cargo_model');

			$dados['obj'] = $this->cargo_model->listar($this->input->post());

		// --- GRID -----------------------------------------------

		$this->load->view('admin/grid/'.$this->router->fetch_class(), $dados);

	}

	public function excluir(){

		$this->load->model('cargo_model');

		$this->cargo_model->delete($this->input->post("excluir"));

		redirect("admin/grid/".$this->router->fetch_class());

	}

	
}
