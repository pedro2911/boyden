<?php 

class Pesquisa_cargo_model extends CI_Model{

	public function get_cargos(){

		$sql = "SELECT tpc.id_cargo,
					   tpc.vr_salario_fixo_mensal,
					   tpc.qt_salarios_ano,
					   tc.tp_cargo
				  
				  FROM tab_pesquisa_2020_cargo tpc

			INNER JOIN tab_pesquisa_2020 tp
					ON tp.id_pesquisa=tpc.id_pesquisa

			INNER JOIN tab_cargo tc
					ON tc.id_cargo=tpc.id_cargo

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