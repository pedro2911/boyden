<?php

class Recuperar_senha extends CI_Controller {

	public $table = "tb_usuario";
	public $key = "id_cliente";

	public function index(){

		// --- TÍTULO ---------------------------------------------

			$dados['titulo'] = "Clientes";

		// --- TÍTULO ---------------------------------------------

		$this->load->view($this->router->fetch_class(), $dados);

	}

	public function recuperar(){

	// ------------------------------------------------------------------------------------------
	// INICIALIZA OS PARAMETROS DO SISTEMA
	// ------------------------------------------------------------------------------------------

		init_parametros();

		$this->load->model('login_model');

		$response = $this->login_model->recuperar_senha($this->input->post('email'));		

		if($response["update"] == "valido"){

		  $nm_assunto_email 	= "Fleet - Recuperação de Senha - " . date("d/m/Y H:i:s");

		  $msg = get_include_contents(APPPATH."views/email/recuperar_senha.php", $response );

		  $retorno = sendMail(utf8_decode($response["usuario"]), 
							  $response["email"], 
							  utf8_decode("Fleet"), 
							  "contato@eganet.com.br", 
							  $nm_assunto_email, 
							  $msg);

		  //$retorno = sendMail("Nome", $response["email"], "Fleet", "contato@eganet.com.br", "Recuperação de senha", $html);

		  if($retorno[0]){
			$response["email_status"] = "valido";
		  }

		}

		echo json_encode($response);

	}

		
}

?>