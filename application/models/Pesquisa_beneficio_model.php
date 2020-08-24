<?php 

class Pesquisa_beneficio_model extends CI_Model{

	public function get_beneficios(){

		$sql = "SELECT tpb.id_beneficio,
					   tpb.tp_cargo
				  
				  FROM tab_pesquisa_2020_beneficio tpb

			INNER JOIN tab_pesquisa_2020 tp
					ON tp.id_pesquisa=tpb.id_pesquisa

			INNER JOIN tab_beneficio tb
					ON tb.id_beneficio=tpb.id_beneficio

				 WHERE tp.id_respondente='" . $this->session->id_respondente_session . "'";

		return $this->db->query($sql)->result_object();

	}

	public function gravar($post){

		$field = $post["field"];
		$value = $post["value"];

		$sql = "UPDATE tab_pesquisa_2020
				   SET $field='" . $value . "'
				 WHERE id_respondente='" . $this->session->id_respondente_session . "'";

		$this->db->query($sql);

	}

}

?>