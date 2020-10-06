<?php 

class Pesquisa_model extends CI_Model{

	public function get_pesquisa(){

		$sql = "SELECT * 
				  FROM tab_pesquisa_2020
				 WHERE id_respondente='" . $this->session->id_respondente_session . "'";

		return $this->db->query($sql)->result_object()[0];		

	}

	public function gravar_campo($post){

		$type  = $post["type"];
		$field = $post["field"];
		$value = $post["value"];

		if($type == "decimal"){

			$value = getDecimal($value);

		}

		$sql = "UPDATE tab_pesquisa_2020
				   SET $field='" . $value . "'
				 WHERE id_respondente='" . $this->session->id_respondente_session . "'";

		$this->db->query($sql);

	}

	public function gravar_campo_dinamico($post){

		$type  = $post["type"];
		$field = $post["field"];
		$value = $post["value"];
		$cargo = $post["cargo"];

		if($type == "decimal"){

			$value = getDecimal($value);

		}

		$sql = "UPDATE tab_pesquisa_2020_cargo
				   SET $field='" . $value . "'
				 WHERE id_pesquisa='" . $this->session->id_pesquisa_session . "'
				   AND id_cargo='" . $cargo . "'";

		$this->db->query($sql);

	}

	public function gravar_campo_check_cargo($post){

		$checked = $post["checked"];
		$cargo   = $post["cargo"];

		if($checked == 'S'){

			$sql = "INSERT INTO tab_pesquisa_2020_cargo (id_pesquisa, id_cargo, vr_salario_fixo_mensal, qt_salarios_ano)
						 VALUES (" . $this->session->id_pesquisa_session . ", " . $cargo . ", '', '')";

		}else{

			$sql = "DELETE 
					  FROM tab_pesquisa_2020_cargo
					 WHERE id_pesquisa='" . $this->session->id_pesquisa_session . "'
					   AND id_cargo='" . $cargo . "'";

		}

		$this->db->query($sql);

	}

	public function gravar_campo_check_beneficio($post){

		$checked    = $post["checked"];
		$beneficio  = $post["beneficio"];
		$tipo_cargo = $post["tipo_cargo"];

		if($checked == 'S'){

			$sql = "INSERT INTO tab_pesquisa_2020_beneficio (id_pesquisa, id_beneficio, tp_cargo)
						 VALUES (" . $this->session->id_pesquisa_session . ", " . $beneficio . ", '" . $tipo_cargo . "')";
		
		}else if($checked == 'T'){

			$sql = "DELETE 
					  FROM tab_pesquisa_2020_beneficio
					 WHERE id_pesquisa='" . $this->session->id_pesquisa_session . "'
					   AND tp_cargo='" . $tipo_cargo . "'";

		}else{

			$sql = "DELETE 
					  FROM tab_pesquisa_2020_beneficio
					 WHERE id_pesquisa='" . $this->session->id_pesquisa_session . "'
					   AND id_beneficio='" . $beneficio . "'
					   AND tp_cargo='" . $tipo_cargo . "'";

		}

		$this->db->query($sql);

	}

	public function insert_set_pesquisa(){

		$sql = "SELECT * 
				  FROM tab_pesquisa_2020
				 WHERE id_respondente='" . $this->session->id_respondente_session . "'";

		$obj = $this->db->query($sql)->result_object();		

		if(count($obj) == 0){

			$sql = "INSERT INTO tab_pesquisa_2020 (id_respondente) VALUES ('" . $this->session->id_respondente_session . "')";

			if($this->db->query($sql)){

				return $this->db->insert_id();

			}

		}else{

			return $obj[0]->id_pesquisa;

		}
		

	}

	public function get_totais_por_grupos(){
		$sql = "select count(vr_faturamento_2019) as total,  case 
		when vr_faturamento_2019 >= 900000.01 then 'I' 
		when vr_faturamento_2019 >= 150000.01 AND vr_faturamento_2019 <= 900000.00 then 'II'
		when IFNULL(vr_faturamento_2019,0) >= 0.00 AND IFNULL(vr_faturamento_2019,0) <= 150000.00 then 'III'
		 end grupo 
		from tab_pesquisa_2020 
		where fl_pesquisa_finalizada = 1
		group by ( case 
		when vr_faturamento_2019 >= 900000.01 then 'I' 
		when vr_faturamento_2019 >= 150000.01 AND vr_faturamento_2019 <= 900000.00 then 'II'
		when IFNULL(vr_faturamento_2019,0) >= 0.00 AND IFNULL(vr_faturamento_2019,0) <= 150000.00 then 'III'
		 end )";
		 return $this->db->query($sql)->result_object();		
	}
	public function get_empresas_participante(){
		$sql = "select nm_nome_empresa
		from tab_pesquisa_2020 
		where fl_pesquisa_finalizada = 1";
		return $this->db->query($sql)->result_object();
	}

	public function get_participantes_por_pais(){
		$sql = "select nm_nacionalidade, count(nm_nacionalidade) total
		from tab_pesquisa_2020 
		where fl_pesquisa_finalizada = 1 and not isnull(nm_nacionalidade)
		group by nm_nacionalidade";
		return $this->db->query($sql)->result_object();
	}
	public function get_faturamento_bruto(){
		$sql = "select round(sum( IFNULL(vr_faturamento_2018,0) ),2) as total2018,
		round(sum( IFNULL(vr_faturamento_2019,0)),2) as total2019,
		round(((sum(IFNULL(vr_faturamento_2019,0)) - sum(IFNULL(vr_faturamento_2018,0)))/sum(IFNULL(vr_faturamento_2018,0))) *100,2) percentagem,
		case 
		when vr_faturamento_2019 >= 900000.01 then 'I' 
		when vr_faturamento_2019 >= 150000.01 AND vr_faturamento_2019 <= 900000.00 then 'II'
		when IFNULL(vr_faturamento_2019,0) >= 0.00 AND IFNULL(vr_faturamento_2019,0) <= 150000.00 then 'III'
		 end grupo 
		from tab_pesquisa_2020 
		where fl_pesquisa_finalizada = 1 
		group by ( case 
		when vr_faturamento_2019 >= 900000.01 then 'I' 
		when vr_faturamento_2019 >= 150000.01 AND vr_faturamento_2019 <= 900000.00 then 'II'
		when IFNULL(vr_faturamento_2019,0) >= 0.00 AND IFNULL(vr_faturamento_2019,0) <= 150000.00 then 'III'
		 end )";
		return $this->db->query($sql)->result_object();
	}
	public function get_numero_funcionarios(){
		$sql = "select sum( IFNULL(nr_total_colaboradores_2018,0) ) as total2018,
		sum( IFNULL(nr_total_colaboradores_2019,0)) as total2019,
		round(((sum(IFNULL(nr_total_colaboradores_2019,0)) - sum(IFNULL(nr_total_colaboradores_2018,0)))/sum(IFNULL(nr_total_colaboradores_2018,0))) *100,0) percentagem,
		case 
		when vr_faturamento_2019 >= 900000.01 then 'I' 
		when vr_faturamento_2019 >= 150000.01 AND vr_faturamento_2019 <= 900000.00 then 'II'
		when IFNULL(vr_faturamento_2019,0) >= 0.00 AND IFNULL(vr_faturamento_2019,0) <= 150000.00 then 'III'
		 end grupo 
		from tab_pesquisa_2020 
		where fl_pesquisa_finalizada = 1 
		group by ( case 
		when vr_faturamento_2019 >= 900000.01 then 'I' 
		when vr_faturamento_2019 >= 150000.01 AND vr_faturamento_2019 <= 900000.00 then 'II'
		when IFNULL(vr_faturamento_2019,0) >= 0.00 AND IFNULL(vr_faturamento_2019,0) <= 150000.00 then 'III'
		 end )";
		return $this->db->query($sql)->result_object();
	}
	public function get_excutivos() {
		$sql = "select round(sum( IFNULL(nr_posicao_executivos_2018_diretoria+nr_posicao_executivos_2018_gerencia,0) ),2) as total2018,
		round(sum( IFNULL(nr_posicao_executivos_2019_diretoria+nr_posicao_executivos_2019_gerencia,0)),2) as total2019,
		IFNULL(round(((sum(IFNULL(nr_posicao_executivos_2019_diretoria+nr_posicao_executivos_2019_gerencia,0)) - sum(IFNULL(nr_posicao_executivos_2018_diretoria+nr_posicao_executivos_2018_gerencia,0)))/sum(IFNULL(nr_posicao_executivos_2018_diretoria+nr_posicao_executivos_2018_gerencia,0))) *100,0),0) percentagem,
		case 
		when vr_faturamento_2019 >= 900000.01 then 'I' 
		when vr_faturamento_2019 >= 150000.01 AND vr_faturamento_2019 <= 900000.00 then 'II'
		when IFNULL(vr_faturamento_2019,0) >= 0.00 AND IFNULL(vr_faturamento_2019,0) <= 150000.00 then 'III'
		 end grupo
		from tab_pesquisa_2020 as a
		where fl_pesquisa_finalizada = 1 
		group by ( case 
		when vr_faturamento_2019 >= 900000.01 then 'I' 
		when vr_faturamento_2019 >= 150000.01 AND vr_faturamento_2019 <= 900000.00 then 'II'
		when IFNULL(vr_faturamento_2019,0) >= 0.00 AND IFNULL(vr_faturamento_2019,0) <= 150000.00 then 'III'
		 end )
		";
		 return $this->db->query($sql)->result_object();
	}
	public function get_expatriados_brasil() {
		$sql = "select round(sum( IFNULL(nr_expatriados_brasil_2018,0) ),2) as total2018,
		round(sum( IFNULL(nr_expatriados_brasil_2019,0)),2) as total2019,
		IFNULL(round(((sum(IFNULL(nr_expatriados_brasil_2019,0)) - sum(IFNULL(nr_expatriados_brasil_2018,0)))/sum(IFNULL(nr_expatriados_brasil_2018,0))) *100,0),0) percentagem,
		case 
		when vr_faturamento_2019 >= 900000.01 then 'I' 
		when vr_faturamento_2019 >= 150000.01 AND vr_faturamento_2019 <= 900000.00 then 'II'
		when IFNULL(vr_faturamento_2019,0) >= 0.00 AND IFNULL(vr_faturamento_2019,0) <= 150000.00 then 'III'
		 end grupo
		from tab_pesquisa_2020 as a
		where fl_pesquisa_finalizada = 1 
		group by ( case 
		when vr_faturamento_2019 >= 900000.01 then 'I' 
		when vr_faturamento_2019 >= 150000.01 AND vr_faturamento_2019 <= 900000.00 then 'II'
		when IFNULL(vr_faturamento_2019,0) >= 0.00 AND IFNULL(vr_faturamento_2019,0) <= 150000.00 then 'III'
		 end )
		";
		 return $this->db->query($sql)->result_object();
	}
	public function get_expatriados_exterior() {
		$sql = "select round(sum( IFNULL(nr_executivos_exterior_2018,0) ),2) as total2018,
		round(sum( IFNULL(nr_executivos_exterior_2019,0)),2) as total2019,
		IFNULL(round(((sum(IFNULL(nr_executivos_exterior_2019,0)) - sum(IFNULL(nr_executivos_exterior_2018,0)))/sum(IFNULL(nr_executivos_exterior_2018,0))) *100,0),0) percentagem,
		case 
		when vr_faturamento_2019 >= 900000.01 then 'I' 
		when vr_faturamento_2019 >= 150000.01 AND vr_faturamento_2019 <= 900000.00 then 'II'
		when IFNULL(vr_faturamento_2019,0) >= 0.00 AND IFNULL(vr_faturamento_2019,0) <= 150000.00 then 'III'
		 end grupo
		from tab_pesquisa_2020 as a
		where fl_pesquisa_finalizada = 1 
		group by ( case 
		when vr_faturamento_2019 >= 900000.01 then 'I' 
		when vr_faturamento_2019 >= 150000.01 AND vr_faturamento_2019 <= 900000.00 then 'II'
		when IFNULL(vr_faturamento_2019,0) >= 0.00 AND IFNULL(vr_faturamento_2019,0) <= 150000.00 then 'III'
		 end )
		";
		 return $this->db->query($sql)->result_object();
	}
	public function get_mudancas_remuneracao_presidencias() {
		$sql = "select if(nm_remuneracao_salario_presidencia = '', 'Não respondeu', nm_remuneracao_salario_presidencia) nm_remuneracao_salario_presidencia, 
		round(count(nm_remuneracao_salario_presidencia) * 100 / (SELECT count(nm_remuneracao_salario_presidencia) FROM tab_pesquisa_2020 where fl_pesquisa_finalizada = 1  and nm_remuneracao_salario_presidencia is not null ),2) total
		from tab_pesquisa_2020
		where fl_pesquisa_finalizada = 1  and nm_remuneracao_salario_presidencia is not null  
		group by nm_remuneracao_salario_presidencia";
		 return $this->db->query($sql)->result_object();
	}

	public function get_mudancas_beneficios_presidencias() {
		$sql = "select if(nm_remuneracao_beneficios_presidencia = '', 'Não respondeu', nm_remuneracao_beneficios_presidencia) nm_remuneracao_beneficios_presidencia, 
		round(count(nm_remuneracao_beneficios_presidencia) * 100 / (SELECT count(nm_remuneracao_beneficios_presidencia) FROM tab_pesquisa_2020 where fl_pesquisa_finalizada = 1  and nm_remuneracao_beneficios_presidencia is not null ),2) total
		from tab_pesquisa_2020
		where fl_pesquisa_finalizada = 1  and nm_remuneracao_beneficios_presidencia is not null  
		group by nm_remuneracao_beneficios_presidencia";
		return $this->db->query($sql)->result_object();
	}
	public function get_mudancas_remuneracao_diretorias() {
		$sql = "select if(nm_remuneracao_salario_diretoria = '', 'Não respondeu', nm_remuneracao_salario_diretoria) nm_remuneracao_salario_diretoria, 
		round(count(nm_remuneracao_salario_diretoria) * 100 / (SELECT count(nm_remuneracao_salario_diretoria) FROM tab_pesquisa_2020 where fl_pesquisa_finalizada = 1  and nm_remuneracao_salario_diretoria is not null ),2) total
		from tab_pesquisa_2020
		where fl_pesquisa_finalizada = 1  and nm_remuneracao_salario_diretoria is not null  
		group by nm_remuneracao_salario_diretoria";
		 return $this->db->query($sql)->result_object();
	}

	public function get_mudancas_beneficios_diretorias() {
		$sql = "select if(nm_remuneracao_beneficios_diretoria = '', 'Não respondeu', nm_remuneracao_beneficios_diretoria) nm_remuneracao_beneficios_diretoria, 
		round(count(nm_remuneracao_beneficios_diretoria) * 100 / (SELECT count(nm_remuneracao_beneficios_diretoria) FROM tab_pesquisa_2020 where fl_pesquisa_finalizada = 1  and nm_remuneracao_beneficios_diretoria is not null ),2) total
		from tab_pesquisa_2020
		where fl_pesquisa_finalizada = 1  and nm_remuneracao_beneficios_diretoria is not null  
		group by nm_remuneracao_beneficios_diretoria";
		return $this->db->query($sql)->result_object();
	}
	public function get_mudancas_remuneracao_gerencias() {
		$sql = "select if(nm_remuneracao_salario_gerencia = '', 'Não respondeu', nm_remuneracao_salario_gerencia) nm_remuneracao_salario_gerencia, 
		round(count(nm_remuneracao_salario_gerencia) * 100 / (SELECT count(nm_remuneracao_salario_gerencia) FROM tab_pesquisa_2020 where fl_pesquisa_finalizada = 1  and nm_remuneracao_salario_gerencia is not null ),2) total
		from tab_pesquisa_2020
		where fl_pesquisa_finalizada = 1  and nm_remuneracao_salario_gerencia is not null  
		group by nm_remuneracao_salario_gerencia";
		 return $this->db->query($sql)->result_object();
	}

	public function get_mudancas_beneficios_gerencias() {
		$sql = "select if(nm_remuneracao_beneficios_gerencia = '', 'Não respondeu', nm_remuneracao_beneficios_gerencia) nm_remuneracao_beneficios_gerencia, 
		round(count(nm_remuneracao_beneficios_gerencia) * 100 / (SELECT count(nm_remuneracao_beneficios_gerencia) FROM tab_pesquisa_2020 where fl_pesquisa_finalizada = 1  and nm_remuneracao_beneficios_gerencia is not null ),2) total
		from tab_pesquisa_2020
		where fl_pesquisa_finalizada = 1  and nm_remuneracao_beneficios_gerencia is not null  
		group by nm_remuneracao_beneficios_gerencia";
		return $this->db->query($sql)->result_object();
	}
}

?>