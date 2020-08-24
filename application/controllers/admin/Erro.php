<?php

class Erro extends CI_Controller {

	public $table = "tb_banco";
	public $key = "id_banco";

	public function index(){


		// --- TÍTULO ---------------------------------------------

			$dados['titulo'] = "Erro";

		// --- TÍTULO ---------------------------------------------


		//$this->load->view('grid/'.$this->router->fetch_class(), $dados);
		$this->load->view('erro');

	}

	
}
