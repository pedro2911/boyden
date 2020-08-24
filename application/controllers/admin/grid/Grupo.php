<?php

class Grupo extends CI_Controller {

	public $table = "tab_grupo";
	public $key = "id_grupo";

	public function index(){


		// --- TÍTULO ---------------------------------------------

			$dados['titulo'] = "Grupos";

		// --- TÍTULO ---------------------------------------------

		// --- GRID -----------------------------------------------

			$this->load->model('grupo_model');

			$dados['obj'] = $this->grupo_model->listar($this->input->post());

		// --- GRID -----------------------------------------------

		$this->load->view('admin/grid/'.$this->router->fetch_class(), $dados);

	}

	public function excluir(){

		$this->load->model('grupo_model');

		$this->grupo_model->delete($this->input->post("excluir"));

		redirect("admin/grid/".$this->router->fetch_class());

	}

	
}
