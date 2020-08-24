<?php 

class Usuario_model extends CI_Model{

	public function listar($post){

		return $this->db->get($this->table)->result_object();

	}

	public function detalhe($id){

		$this->db->where($this->key, $id);
		
		return $this->db->get($this->table)->result_object()[0];

	}

	public function insert($post){

		$data = array(
						"nm_usuario" => $post["nm_usuario"],
						"nm_email" => $post["nm_email"],
						"nm_login" => $post["nm_login"],
						"nm_senha" => md5($post["nm_senha"])
					 );

		$this->db->insert($this->table, $data);

	}

	public function update($post){

		$data = array(
						"nm_usuario" => $post["nm_usuario"],
						"nm_email" => $post["nm_email"],
						"nm_login" => $post["nm_login"]
					 );

		if($post["nm_senha"]){
			$data["nm_senha"] = md5($post["nm_senha"]);

		}

		$this->db->where($this->key, $post["codigo"]);
		$this->db->update($this->table, $data);

	}

	public function delete($id){

		$this->db->where($this->key, $id);
		$this->db->delete($this->table);

	}

}

?>