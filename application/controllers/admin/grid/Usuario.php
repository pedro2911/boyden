<?php

class Usuario extends CI_Controller {

	public $table = "tab_usuario";
	public $key = "id_usuario";

	public function index(){


		// --- TÍTULO ---------------------------------------------

			$dados['titulo'] = "Usuários";

		// --- TÍTULO ---------------------------------------------

		// --- GRID -----------------------------------------------

			$this->load->model('usuario_model');

			$dados['obj'] = $this->usuario_model->listar($this->input->post());

		// --- GRID -----------------------------------------------

		$this->load->view('admin/grid/'.$this->router->fetch_class(), $dados);

	}

	public function excluir(){

		$this->load->model('usuario_model');

		$this->usuario_model->delete($this->input->post("excluir"));

		redirect("admin/grid/".$this->router->fetch_class());

	}

	
}
