<?php 

class Login_model extends CI_Model{

	public function recuperar_senha($email){

		$sql = "SELECT id_cpf_cnpj_usuario
					   
				  FROM tb_usuario

				 WHERE ds_email='" . $email . "'";

		$obj = $this->db->query($sql)->result_object();

		if(count($obj) > 0){

			$senha = rand(100000, 999999);

			$sqlU = "UPDATE tb_usuario
						SET ds_senha_anterior=ds_senha,
							ds_senha='" . md5($senha) . "'
					  WHERE id_cpf_cnpj_usuario='" . $obj[0]->id_cpf_cnpj_usuario . "'
					    AND id_tipo_usuario='WEB'";

			if($this->db->query($sqlU)){
				
				return array('email' 		=> $email,
							 'senha' 		=> $senha,
							 'update' 		=> 'valido');

			}else{

				return array('email_status' => 'invalido');

			}

		}else{

			return array('email_status' => 'invalido');

		}

	}

	public function logar_admin($post){

	// ---------------------------------------------------------------------------------
	// LOGIN
	// ---------------------------------------------------------------------------------
	
	
		$this->db->select('*');
		$this->db->from('tab_usuario');

		$this->db->where("nm_login", $post["username"]);
		$this->db->where("nm_senha", md5($post["password"]));
		
		$row = $this->db->get()->result_object()[0];


		if($row->id_usuario){

			$this->session->usuario_id_usuario  = $row->id_usuario;
			$this->session->usuario_nm_usuario  = $row->nm_usuario;

			return array("login_status" => "success", "redirect_url" => "admin/grid/respondente");

		}else{

			return array("login_status" => "invalid");

		}

	}

	public function logar($post){

	// ---------------------------------------------------------------------------------
	// LOGIN
	// ---------------------------------------------------------------------------------
	
		$this->db->select('*');
		$this->db->from('tab_respondente');

		$this->db->where("nm_email", $post["username"]);
		$this->db->where("nm_senha", $post["password"]);

		$row = $this->db->get()->result_object()[0];

		if($row->id_respondente){

			$this->session->id_respondente_session = $row->id_respondente;
			$this->session->nm_cliente_session 	   = $row->nm_cliente;

			return true;

		}else{

			return false;

		}

	}

}