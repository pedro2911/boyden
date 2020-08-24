<?php

class Cliente extends CI_Controller {

	public $table = "tb_cliente";
	public $key = "cd_cliente";

	public function index(){

		// --- TÍTULO ---------------------------------------------

			$dados['titulo'] = "Clientes";

		// --- TÍTULO ---------------------------------------------

		// --- GRID -----------------------------------------------

			$this->load->model('cliente_model');

			$dados['obj'] = $this->cliente_model->listar($this->input->post());

		// --- GRID -----------------------------------------------

		$this->load->view('grid/'.$this->router->fetch_class(), $dados);

	}

	public function excluir(){

		$this->load->model('cliente_model');

		$this->cliente_model->delete($this->input->post("excluir"));

		redirect("grid/".$this->router->fetch_class());

	}

	
}

?>