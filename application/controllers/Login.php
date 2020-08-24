<?php

class Login extends CI_Controller {

	public $table = "tb_usuario";
	public $key = "id_cliente";

	public function index(){

		$this->load->view($this->router->fetch_class(), $dados);

	}

	public function logar(){

		$this->load->model('login_model');
		$this->load->model('pesquisa_model');

		$response = $this->login_model->logar($this->input->post());

		if($response){
			
			$this->session->id_pesquisa_session = $this->pesquisa_model->insert_set_pesquisa();
			$this->session->erro_login = 0;

			redirect('boyden_2020');
		}else{
			
			$this->session->erro_login = 1;

			redirect('/');
		}

	}

		
}

?>