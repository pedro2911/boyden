<?php 

class Respondente_model extends CI_Model{

	public function listar($post){

		return $this->db->get($this->table)->result_object();

	}

	public function detalhe($id){

		$this->db->where($this->key, $id);
		
		return $this->db->get($this->table)->result_object()[0];

	}

	public function insert($post){

		$data = array(
						"nm_cliente" 	 => $post["nm_cliente"],
						"nm_responsavel" => $post["nm_responsavel"],
						"nm_email" 		 => $post["nm_email"],
						"nr_telefone" 	 => getNumeros($post["nr_telefone"]),
						"nm_senha" 		 => $post["nm_senha"],
						"nr_ano" 		 => $post["nr_ano"]
					 );

		$this->db->insert($this->table, $data);

	}

	public function update($post){

		$data = array(
						"nm_cliente" 	 => $post["nm_cliente"],
						"nm_responsavel" => $post["nm_responsavel"],
						"nm_email" 		 => $post["nm_email"],
						"nr_telefone" 	 => getNumeros($post["nr_telefone"]),
						"nm_senha" 		 => $post["nm_senha"],
						"nr_ano" 		 => $post["nr_ano"]
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