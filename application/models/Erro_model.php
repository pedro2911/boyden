<?php 

class Erro_model extends CI_Model{

	public function insert($error, $ds_funcionalidade, $sql = null){

		$this->db->trans_complete();

		$data = array(
				        'cd_erro' 				=> $error["code"],
						'ds_funcionalidade' 	=> $ds_funcionalidade,
						'id_cpf_cnpj_usuario' 	=> $_SESSION["usuario_id_cpf_cnpj_usuario"],
						'tx_erro' 				=> $error["message"],
						'tx_sql' 				=> $sql,
						'dt_erro' 				=> date("Y-m-d H:i:s")
					 );

		$this->db->insert("tb_erro", $data);

	}

}

?>