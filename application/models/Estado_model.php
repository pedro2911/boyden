<?php 

class Estado_model extends CI_Model{

	public function listar_combo($sg_uf = null){

		$objE = $this->db->get("tb_estado")->result_object();

		for ($i=0; $i < count($objE); $i++) { 

			$selected = "";

			if($sg_uf == $objE[$i]->id_estado) $selected = "selected";

			$options .= "<option value='" . $objE[$i]->id_estado . "' $selected>" . $objE[$i]->nm_estado . "</option>";
		}

		return $options;

	}

}

?>