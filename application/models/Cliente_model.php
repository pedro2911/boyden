<?php 

class Cliente_model extends CI_Model{

	public function listar($post){

		$sql = "SELECT         tc.cd_cliente,
							   tc.nm_cliente,
							   tc.id_cnpj,
							   tc.nr_ie,
							   ta.nm_administracao
						  FROM tb_cliente tc
				 	INNER JOIN tb_administracao ta
				 			ON ta.cd_administracao = tc.cd_administracao";

		return $this->db->query($sql)->result_object();

	}

	public function listar_todos_clientes(){

		$sql = "SELECT         tc.cd_cliente,
							   CONCAT(ta.nm_administracao, ' - ', tc.nm_cliente) as nm_cliente,
							   tc.id_cnpj,
							   tc.nr_ie
							   
						  FROM tb_cliente tc
				 	INNER JOIN tb_administracao ta
				 			ON ta.cd_administracao = tc.cd_administracao";

		$obj = $this->db->query($sql)->result_object();

		for ($i=0; $i < count($obj); $i++) { 

			$selected = "";

			if($cd_cliente == $obj[$i]->cd_cliente) $selected = "selected";

			$options .= "<option value='" . $obj[$i]->cd_cliente . "' $selected>" . $obj[$i]->nm_cliente . "</option>";
		}

		return $options;

	}

	public function listar_combo($cd_cliente = null){

		$sql = "SELECT tc.cd_cliente,
					   CONCAT(ta.nm_administracao, ' - ', tc.nm_cliente) as nm_cliente,
					   tc.id_cnpj,
					   tc.nr_ie
					   
				  FROM tb_cliente tc
		 	INNER JOIN tb_administracao ta
		 			ON ta.cd_administracao = tc.cd_administracao

		 		 WHERE tc.cd_cliente='" . $this->session->filtro_cd_cliente . "'";

		$obj = $this->db->query($sql)->result_object();

		for ($i=0; $i < count($obj); $i++) { 

			$selected = "";

			if($cd_cliente == $obj[$i]->cd_cliente) $selected = "selected";

			$options .= "<option value='" . $obj[$i]->cd_cliente . "' $selected>" . $obj[$i]->nm_cliente . "</option>";
		}

		return $options;

	}

	public function listar_combo_parametros($cd_cliente = null){

		$sql = "SELECT tc.cd_cliente,
					   CONCAT(ta.nm_administracao, ' - ', tc.nm_cliente) as nm_cliente,
					   tc.id_cnpj,
					   tc.nr_ie
					   
				  FROM tb_cliente tc
		 	INNER JOIN tb_administracao ta
		 			ON ta.cd_administracao = tc.cd_administracao";

		$obj = $this->db->query($sql)->result_object();

		for ($i=0; $i < count($obj); $i++) { 

			$selected = "";

			if($cd_cliente == $obj[$i]->cd_cliente) $selected = "selected";

			$options .= "<option value='" . $obj[$i]->cd_cliente . "' $selected>" . $obj[$i]->nm_cliente . "</option>";
		}

		return $options;

	}

	public function listar_area_cliente($cd_cliente = null){

		$sql = "SELECT tc.cd_cliente,
					   CONCAT(ta.nm_administracao, ' - ', tc.nm_cliente) as nm_cliente,
					   tc.id_cnpj,
					   tc.nr_ie
					   
				  FROM tb_cliente tc
		 	INNER JOIN tb_administracao ta
		 			ON ta.cd_administracao = tc.cd_administracao

		 		 WHERE tc.cd_cliente='" . $cd_cliente . "'";

		$obj = $this->db->query($sql)->result_object();

		$options = "<option value=''> - todas - </option>";

		for ($i=0; $i < count($obj); $i++) { 

			$selected = "";

			if($cd_cliente == $obj[$i]->cd_cliente) $selected = "selected";

			$options .= "<option value='" . $obj[$i]->cd_cliente . "' $selected>" . $obj[$i]->nm_cliente . "</option>";
		}

		return $options;

	}

	public function duplicidade($post){

		$sql = "SELECT *
		  	  	  FROM tb_cliente
		 	 	 WHERE id_cnpj='" . getNumeros($post["id_cnpj"]) . "'";

		$array = $this->db->query($sql)->result_array()[0];

		if(count($array) > 0){
			$arrayR = array("status" => 1);
		}else{
			$arrayR = array("status" => 0);
		}
		
	    $array_json = json_encode($arrayR);

		echo $array_json;die;

	}

	public function detalhe($id){

		$this->db->where($this->key, $id);
		
		return $this->db->get($this->table)->result_object()[0];

	}

	public function insert($post){

		$data = array(
						"cd_administracao"		=> $post["cd_administracao"],
						"nm_cliente"			=> $post["nm_cliente"],
						"id_cnpj" 				=> getNumeros($post["id_cnpj"]),
						"nr_ie" 				=> $post["nr_ie"],
						"nr_telefone_1" 		=> getNumeros($post["nr_telefone_1"]),
						"nm_contato_1"  		=> $post["nm_contato_1"],
						"ds_email_1" 			=> $post["ds_email_1"],
						"nr_telefone_2" 		=> getNumeros($post["nr_telefone_2"]),
						"nm_contato_2" 			=> $post["nm_contato_2"],
						"ds_email_2" 			=> $post["ds_email_2"],
						"nr_telefone_3" 		=> getNumeros($post["nr_telefone_3"]),
						"nm_contato_3" 			=> $post["nm_contato_3"],
						"ds_email_3" 			=> $post["ds_email_3"],
						"nr_cep" 				=> getNumeros($post["nr_cep"]),
						"ds_endereco" 			=> $post["ds_endereco"],
						"nr_endereco" 			=> $post["nr_endereco"],
						"ds_complemento" 		=> $post["ds_complemento"],
						"nm_bairro" 			=> $post["nm_bairro"],
						"nm_cidade" 			=> $post["nm_cidade"],
						"sg_uf" 				=> $post["sg_uf"],
						"cd_municipio" 			=> $post["cd_municipio"],
						"nm_usuario_inclusao" 	=> $this->session->usuario_id_cpf_cnpj_usuario,
						"dt_inclusao" 			=> date("Y-m-d H:i:s")
					 );

		$this->db->insert($this->table, $data);

		$cd_cliente = $this->db->insert_id();

/*
	// -----------------------------------------------------------------------------
	// INSERT NA TABELA tb_cliente_empresa
	// -----------------------------------------------------------------------------

		if($this->session->tipo_usuario_logado == "GESTOR"){
			$id_cpf_cnpj_gestor  = $this->session->usuario_id_cpf_cnpj_gestor;
			$id_cpf_cnpj_empresa = $post["id_cpf_cnpj_empresa"];
		}

		if($this->session->tipo_usuario_logado == "EMPRESA"){
			$id_cpf_cnpj_gestor  = $post["id_cpf_cnpj_gestor"];;
			$id_cpf_cnpj_empresa = $this->session->usuario_id_cpf_cnpj_empresa;
		}

		$data = array(
						"id_cpf_cnpj_gestor"	=> $id_cpf_cnpj_gestor,
						"id_cpf_cnpj_empresa" 	=> $id_cpf_cnpj_empresa,
						"cd_cliente" 			=> $cd_cliente
					  );

		
		$this->db->insert("tb_cliente_empresa", $data);
*/

	}

	public function update($post){

		$data = array(
						"cd_administracao"		=> $post["cd_administracao"],
						"nm_cliente" 			=> $post["nm_cliente"],
//						"id_cnpj" 				=> getNumeros($post["id_cnpj"]),
						"nr_ie" 				=> $post["nr_ie"],
						"nr_telefone_1" 		=> getNumeros($post["nr_telefone_1"]),
						"nm_contato_1"  		=> $post["nm_contato_1"],
						"ds_email_1" 			=> $post["ds_email_1"],
						"nr_telefone_2" 		=> getNumeros($post["nr_telefone_2"]),
						"nm_contato_2" 			=> $post["nm_contato_2"],
						"ds_email_2" 			=> $post["ds_email_2"],
						"nr_telefone_3" 		=> getNumeros($post["nr_telefone_3"]),
						"nm_contato_3" 			=> $post["nm_contato_3"],
						"ds_email_3" 			=> $post["ds_email_3"],
						"nr_cep" 				=> getNumeros($post["nr_cep"]),
						"ds_endereco" 			=> $post["ds_endereco"],
						"nr_endereco" 			=> $post["nr_endereco"],
						"ds_complemento" 		=> $post["ds_complemento"],
						"nm_bairro" 			=> $post["nm_bairro"],
						"nm_cidade" 			=> $post["nm_cidade"],
						"sg_uf" 				=> $post["sg_uf"],
						"cd_municipio" 			=> $post["cd_municipio"],
						"nm_usuario_alteracao" 	=> $this->session->usuario_id_cpf_cnpj_usuario,
						"dt_alteracao"			=> date("Y-m-d H:i:s")
					 );

		$this->db->where($this->key, $post["codigo"]);
		$this->db->update($this->table, $data);

	}

	public function delete($id){

		$this->db->where($this->key, $id);
		$this->db->delete($this->table);

	}

}

?>