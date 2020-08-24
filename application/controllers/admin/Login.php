<?php

class Login extends CI_Controller {

	public $table = "tb_usuario";
	public $key = "id_cliente";

	public function index(){

		// --- TÍTULO ---------------------------------------------

			$dados['titulo'] = "Clientes";

		// --- TÍTULO ---------------------------------------------

		$this->load->view("admin/".$this->router->fetch_class(), $dados);

	}

	public function logar(){

		$this->load->model('login_model');

		$response = $this->login_model->logar_admin($this->input->post());

		echo json_encode($response);

	}

		
}

?>