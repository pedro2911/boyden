<?php 

class Cargo_model extends CI_Model{

	public function listar($post){

		return $this->db->get($this->table)->result_object();

	}

	public function get_cargos($nr_ano){

		$sql = "SELECT * 
				  FROM tab_cargo
				 WHERE nr_ano='" . $nr_ano . "'";

		return $this->db->query($sql)->result_object();

	}

	public function detalhe($id){

		$this->db->where($this->key, $id);
		
		return $this->db->get($this->table)->result_object()[0];

	}

	public function insert($post){

		$data = array(
						"nm_cargo"	=> $post["nm_cargo"],
						"tp_cargo" 	=> $post["tp_cargo"],
						"nr_ano" 	=> $post["nr_ano"]
					 );

		$this->db->insert("tab_cargo", $data);

	}

	public function update($post){

		$data = array(
						"nm_cargo"	=> $post["nm_cargo"],
						"tp_cargo" 	=> $post["tp_cargo"],
						"nr_ano" 	=> $post["nr_ano"]
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