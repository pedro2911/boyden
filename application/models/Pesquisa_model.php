<?php 

class Pesquisa_model extends CI_Model{

	public function get_pesquisa(){

		$sql = "SELECT * 
				  FROM tab_pesquisa_2020
				 WHERE id_respondente='" . $this->session->id_respondente_session . "'";

		return $this->db->query($sql)->result_object()[0];		

	}

	public function get_existe_pesquisa($id_respondente){

		$sql = "SELECT IF(COUNT(*) > 0, id_pesquisa, 0) as id_pesquisa
				  FROM tab_pesquisa_2020
				 WHERE id_respondente='" . $id_respondente . "'";

		$obj = $this->db->query($sql)->result_object()[0];

		return $obj->id_pesquisa;

	}

	public function insert_planilha($sql){

		$this->db->query($sql);

		return $this->db->insert_id();

	}

	public function update_planilha($sql){

		$this->db->query($sql);

	}

	public function get_export_pesquisa(){

		$sql = "SELECT nm_nome_empresa,
					   vr_faturamento_2018,
					   vr_faturamento_2019,
					   nr_total_colaboradores_2018,
					   nr_total_colaboradores_2019 
				  FROM tab_pesquisa_2020
				 WHERE fl_pesquisa_finalizada=1";

		return $this->db->query($sql)->result_object();

	}

	public function finalizar_pesquisa(){

		$sql = "UPDATE tab_pesquisa_2020
				   SET fl_pesquisa_finalizada='1',
				       dt_resposta=NOW()
				 WHERE id_respondente='" . $this->session->id_respondente_session . "'";

		return $this->db->query($sql);		

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
	public $value=[
		'I'   => ["maior"=>1000000000.01],
		'II'  => ["maior"=>150000000.01,"menor"=>1000000000.00],
		'III' => ["menor"=>150000000.00]
	];
		
	public function get_totais_por_grupos(){
		$sql = "select count(vr_faturamento_2019) as total,  case 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['I']['maior']." then 'I' 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['II']['maior']." AND (vr_faturamento_2019+vr_outros_valores) <= ".$this->value['II']['menor']." then 'II'
		when IFNULL((vr_faturamento_2019+vr_outros_valores),0) >= 0.00 AND IFNULL((vr_faturamento_2019+vr_outros_valores),0) <= ".$this->value['III']['menor']." then 'III'
		 end grupo 
		from tab_pesquisa_2020 
		where fl_pesquisa_finalizada = 1
		group by grupo";
		 return $this->db->query($sql)->result_object();		
	}
	public function get_empresas_participante(){
		$sql = "select nm_nome_empresa
		from tab_pesquisa_2020 
		where fl_pesquisa_finalizada = 1
		order by nm_nome_empresa";
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
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['I']['maior']." then 'I' 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['II']['maior']." AND (vr_faturamento_2019+vr_outros_valores) <= ".$this->value['II']['menor']." then 'II'
		when IFNULL((vr_faturamento_2019+vr_outros_valores),0) >= 0.00 AND IFNULL((vr_faturamento_2019+vr_outros_valores),0) <= ".$this->value['III']['menor']." then 'III'
		 end grupo 
		from tab_pesquisa_2020 
		where fl_pesquisa_finalizada = 1 
		group by grupo";
		return $this->db->query($sql)->result_object();
	}
	public function get_numero_funcionarios(){
		$sql = "select sum( IFNULL(nr_total_colaboradores_2018,0) ) as total2018,
		sum( IFNULL(nr_total_colaboradores_2019,0)) as total2019,
		round(((sum(IFNULL(nr_total_colaboradores_2019,0)) - sum(IFNULL(nr_total_colaboradores_2018,0)))/sum(IFNULL(nr_total_colaboradores_2018,0))) *100,0) percentagem,
		case 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['I']['maior']." then 'I' 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['II']['maior']." AND (vr_faturamento_2019+vr_outros_valores) <= ".$this->value['II']['menor']." then 'II'
		when IFNULL((vr_faturamento_2019+vr_outros_valores),0) >= 0.00 AND IFNULL((vr_faturamento_2019+vr_outros_valores),0) <= ".$this->value['III']['menor']." then 'III'
		 end grupo 
		from tab_pesquisa_2020 
		where fl_pesquisa_finalizada = 1 
		group by grupo";
		return $this->db->query($sql)->result_object();
	}
	public function get_excutivos() {
		$sql = "select round(sum( IFNULL(nr_posicao_executivos_2018_diretoria+nr_posicao_executivos_2018_gerencia,0) ),2) as total2018,
		round(sum( IFNULL(nr_posicao_executivos_2019_diretoria+nr_posicao_executivos_2019_gerencia,0)),2) as total2019,
		IFNULL(round(((sum(IFNULL(nr_posicao_executivos_2019_diretoria+nr_posicao_executivos_2019_gerencia,0)) - sum(IFNULL(nr_posicao_executivos_2018_diretoria+nr_posicao_executivos_2018_gerencia,0)))/sum(IFNULL(nr_posicao_executivos_2018_diretoria+nr_posicao_executivos_2018_gerencia,0))) *100,0),0) percentagem,
		case 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['I']['maior']." then 'I' 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['II']['maior']." AND (vr_faturamento_2019+vr_outros_valores) <= ".$this->value['II']['menor']." then 'II'
		when IFNULL((vr_faturamento_2019+vr_outros_valores),0) >= 0.00 AND IFNULL((vr_faturamento_2019+vr_outros_valores),0) <= ".$this->value['III']['menor']." then 'III'
		 end grupo
		from tab_pesquisa_2020 as a
		where fl_pesquisa_finalizada = 1 
		group by grupo
		";
		 return $this->db->query($sql)->result_object();
	}
	public function get_expatriados_brasil() {
		$sql = "select round(sum( IFNULL(nr_expatriados_brasil_2018,0) ),2) as total2018,
		round(sum( IFNULL(nr_expatriados_brasil_2019,0)),2) as total2019,
		IFNULL(round(((sum(IFNULL(nr_expatriados_brasil_2019,0)) - sum(IFNULL(nr_expatriados_brasil_2018,0)))/sum(IFNULL(nr_expatriados_brasil_2018,0))) *100,0),0) percentagem,
		case 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['I']['maior']." then 'I' 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['II']['maior']." AND (vr_faturamento_2019+vr_outros_valores) <= ".$this->value['II']['menor']." then 'II'
		when IFNULL((vr_faturamento_2019+vr_outros_valores),0) >= 0.00 AND IFNULL((vr_faturamento_2019+vr_outros_valores),0) <= ".$this->value['III']['menor']." then 'III'
		 end grupo
		from tab_pesquisa_2020 as a
		where fl_pesquisa_finalizada = 1 
		group by grupo
		";
		 return $this->db->query($sql)->result_object();
	}
	public function get_expatriados_exterior() {
		$sql = "select round(sum( IFNULL(nr_executivos_exterior_2018,0) ),2) as total2018,
		round(sum( IFNULL(nr_executivos_exterior_2019,0)),2) as total2019,
		IFNULL(round(((sum(IFNULL(nr_executivos_exterior_2019,0)) - sum(IFNULL(nr_executivos_exterior_2018,0)))/sum(IFNULL(nr_executivos_exterior_2018,0))) *100,0),0) percentagem,
		case 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['I']['maior']." then 'I' 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['II']['maior']." AND (vr_faturamento_2019+vr_outros_valores) <= ".$this->value['II']['menor']." then 'II'
		when IFNULL((vr_faturamento_2019+vr_outros_valores),0) >= 0.00 AND IFNULL((vr_faturamento_2019+vr_outros_valores),0) <= ".$this->value['III']['menor']." then 'III'
		 end grupo
		from tab_pesquisa_2020 as a
		where fl_pesquisa_finalizada = 1 
		group by grupo
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
	public function get_beneficios() {
		$sql = "SELECT nm_beneficio, count(a.id_beneficio) total, tp_cargo, fl_classificacao FROM boyden.tab_pesquisa_2020_beneficio as a  
		inner join tab_beneficio as b on
			a.id_beneficio = b.id_beneficio 
		inner join tab_pesquisa_2020 as c on
			a.id_pesquisa = c.id_pesquisa
		WHERE c.fl_pesquisa_finalizada = 1
		group by tp_cargo, fl_classificacao, a.id_beneficio
		order by tp_cargo,nm_beneficio;";
		return $this->db->query($sql)->result_object();
	}
	public function get_total_por_cargo(){
		$sql="SELECT tp_cargo, count(c.id_cargo) total  FROM tab_pesquisa_2020 as a
		INNER JOIN tab_pesquisa_2020_cargo as b ON a.id_pesquisa=b.id_pesquisa 
		INNER JOIN tab_cargo as c ON b.id_cargo=c.id_cargo 
		WHERE a.fl_pesquisa_finalizada = 1 
		GROUP BY c.tp_cargo";
		return $this->db->query($sql)->result_object();
	}
	public function get_previdencia() {
		$sql = "SELECT count(ifnull(fl_empresa_previdencia_privada,'Não')) total,ifnull(fl_empresa_previdencia_privada,'Não') fl_empresa_previdencia_privada FROM tab_pesquisa_2020 group by fl_empresa_previdencia_privada";
		return $this->db->query($sql)->result_object();
	}
	public function get_previdencia_percentual() {
		$sql = "SELECT 
		count(IFNULL(pc_maxima_contribuicao_presidente,0)) total, 'PRESIDENTE' tipo,
		( case 
		when IFNULL(pc_maxima_contribuicao_presidente,0) < 4 then 4 
		when IFNULL(pc_maxima_contribuicao_presidente,0) >= 4 AND IFNULL(pc_maxima_contribuicao_presidente,0) < 6 then 6
		when IFNULL(pc_maxima_contribuicao_presidente,0) >= 6 AND IFNULL(pc_maxima_contribuicao_presidente,0) < 8 then 8
		when IFNULL(pc_maxima_contribuicao_presidente,0) >= 8  then 10
		 end ) grupo
		FROM tab_pesquisa_2020 
		WHERE fl_pesquisa_finalizada = 1
		 group by grupo
		UNION
		SELECT 
		count(IFNULL(pc_maxima_contribuicao_diretor,0)) total, 'DIRETOR' tipo,
		( case 
		when IFNULL(pc_maxima_contribuicao_diretor,0) < 4 then 4 
		when IFNULL(pc_maxima_contribuicao_diretor,0) >= 4 AND IFNULL(pc_maxima_contribuicao_diretor,0) < 6 then 6
		when IFNULL(pc_maxima_contribuicao_diretor,0) >= 6 AND IFNULL(pc_maxima_contribuicao_diretor,0) < 8 then 8
		when IFNULL(pc_maxima_contribuicao_diretor,0) >= 8  then 10
		 end ) grupo
		FROM tab_pesquisa_2020 
		WHERE fl_pesquisa_finalizada = 1
		 group by grupo
		 UNION
		 SELECT 
		count(IFNULL(pc_maxima_contribuicao_gerente,0)) total, 'GERENTE' tipo,
		( case 
		when IFNULL(pc_maxima_contribuicao_gerente,0) < 4 then 4 
		when IFNULL(pc_maxima_contribuicao_gerente,0) >= 4 AND IFNULL(pc_maxima_contribuicao_gerente,0) < 6 then 6
		when IFNULL(pc_maxima_contribuicao_gerente,0) >= 6 AND IFNULL(pc_maxima_contribuicao_gerente,0) < 8 then 8
		when IFNULL(pc_maxima_contribuicao_gerente,0) >= 8  then 10
		 end ) grupo
		FROM tab_pesquisa_2020 
		WHERE fl_pesquisa_finalizada = 1
		 group by grupo
		";
		return $this->db->query($sql)->result_object();
	}
	public function get_previdencia_multiplos() {
		$sql = "SELECT
		count(IFNULL(nr_multiplo_contribuicao_presidente,0)) total, 'PRESIDENTE' tipo,
		( case 
			when IFNULL(nr_multiplo_contribuicao_presidente,0) <=1 then 1 
			when IFNULL(nr_multiplo_contribuicao_presidente,0) >1 AND IFNULL(nr_multiplo_contribuicao_presidente,0) <= 2 then 2
			when IFNULL(nr_multiplo_contribuicao_presidente,0) > 2  then 3
			end ) grupo
		FROM tab_pesquisa_2020 
		WHERE fl_pesquisa_finalizada = 1
		group by grupo
		UNION
		SELECT 
		count(IFNULL(nr_multiplo_contribuicao_diretor,0)) total, 'DIRETOR' tipo,
		( case 
			when IFNULL(nr_multiplo_contribuicao_diretor,0) <=1 then 1 
			when IFNULL(nr_multiplo_contribuicao_diretor,0) >1 AND IFNULL(nr_multiplo_contribuicao_diretor,0) <= 2 then 2
			when IFNULL(nr_multiplo_contribuicao_diretor,0) > 2  then 3
		 end ) grupo
		FROM tab_pesquisa_2020 
		WHERE fl_pesquisa_finalizada = 1
		 group by grupo
		 UNION
		 SELECT 
		count(IFNULL(nr_multiplo_contribuicao_gerente,0)) total, 'GERENTE' tipo,
		( case 
			when IFNULL(nr_multiplo_contribuicao_gerente,0) <=1 then 1 
			when IFNULL(nr_multiplo_contribuicao_gerente,0) >1 AND IFNULL(nr_multiplo_contribuicao_gerente,0) <= 2 then 2
			when IFNULL(nr_multiplo_contribuicao_gerente,0) > 2  then 3
		 end ) grupo
		FROM tab_pesquisa_2020 
		WHERE fl_pesquisa_finalizada = 1
		 group by grupo
		";
		return $this->db->query($sql)->result_object();
	}
	public function get_incentivos() {
		$sql = "SELECT 'PRESIDENTE' cargo, 'STOCK' tipo, ifnull(fl_stock_option_presidente,'N') valor, count(ifnull(fl_stock_option_presidente,'N'))total,  ( 
		case 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['I']['maior']." then 'I' 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['II']['maior']." AND (vr_faturamento_2019+vr_outros_valores) <= ".$this->value['II']['menor']." then 'II'
		when IFNULL((vr_faturamento_2019+vr_outros_valores),0) >= 0.00 AND IFNULL((vr_faturamento_2019+vr_outros_valores),0) <= ".$this->value['III']['menor']." then 'III'
		 end ) grupo
		FROM tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		group by  ifnull(fl_stock_option_presidente,'N'), grupo
		UNION
		SELECT 'DIRETOR' cargo, 'STOCK' tipo, ifnull(fl_stock_option_diretor,'N') valor, count(ifnull(fl_stock_option_diretor,'N'))total,  ( case 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['I']['maior']." then 'I' 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['II']['maior']." AND (vr_faturamento_2019+vr_outros_valores) <= ".$this->value['II']['menor']." then 'II'
		when IFNULL((vr_faturamento_2019+vr_outros_valores),0) >= 0.00 AND IFNULL((vr_faturamento_2019+vr_outros_valores),0) <= ".$this->value['III']['menor']." then 'III'
		 end ) grupo
		FROM tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		group by  ifnull(fl_stock_option_diretor,'N'), grupo
		 UNION
		SELECT 'GERENTE' cargo, 'STOCK' tipo, ifnull(fl_stock_option_gerente,'N') valor, count(ifnull(fl_stock_option_gerente,'N'))total,  ( case 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['I']['maior']." then 'I' 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['II']['maior']." AND (vr_faturamento_2019+vr_outros_valores) <= ".$this->value['II']['menor']." then 'II'
		when IFNULL((vr_faturamento_2019+vr_outros_valores),0) >= 0.00 AND IFNULL((vr_faturamento_2019+vr_outros_valores),0) <= ".$this->value['III']['menor']." then 'III'
		 end ) grupo
		FROM tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		group by  ifnull(fl_stock_option_gerente,'N'), grupo
		 UNION
		 SELECT 'PRESIDENTE' cargo, 'PHANTON' tipo, ifnull(fl_phantom_option_presidente,'N') valor, count(ifnull(fl_phantom_option_presidente,'N'))total,  ( case 
		 when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['I']['maior']." then 'I' 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['II']['maior']." AND (vr_faturamento_2019+vr_outros_valores) <= ".$this->value['II']['menor']." then 'II'
		when IFNULL((vr_faturamento_2019+vr_outros_valores),0) >= 0.00 AND IFNULL((vr_faturamento_2019+vr_outros_valores),0) <= ".$this->value['III']['menor']." then 'III'
		 end ) grupo
		FROM tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		group by  ifnull(fl_phantom_option_presidente,'N'), grupo
		UNION
		SELECT 'DIRETOR' cargo, 'PHANTON' tipo, ifnull(fl_phantom_option_diretor,'N') valor, count(ifnull(fl_phantom_option_diretor,'N'))total,  ( case 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['I']['maior']." then 'I' 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['II']['maior']." AND (vr_faturamento_2019+vr_outros_valores) <= ".$this->value['II']['menor']." then 'II'
		when IFNULL((vr_faturamento_2019+vr_outros_valores),0) >= 0.00 AND IFNULL((vr_faturamento_2019+vr_outros_valores),0) <= ".$this->value['III']['menor']." then 'III'
		 end ) grupo
		FROM tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		group by  ifnull(fl_phantom_option_diretor,'N'), grupo
		 UNION
		SELECT 'GERENTE' cargo, 'PHANTON' tipo, ifnull(fl_phantom_option_gerente,'N') valor, count(ifnull(fl_phantom_option_gerente,'N'))total,  ( case 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['I']['maior']." then 'I' 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['II']['maior']." AND (vr_faturamento_2019+vr_outros_valores) <= ".$this->value['II']['menor']." then 'II'
		when IFNULL((vr_faturamento_2019+vr_outros_valores),0) >= 0.00 AND IFNULL((vr_faturamento_2019+vr_outros_valores),0) <= ".$this->value['III']['menor']." then 'III'
		 end ) grupo
		FROM tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		group by  ifnull(fl_phantom_option_gerente,'N'), grupo
		 UNION 
		 SELECT 'PRESIDENTE' cargo, 'EVOLUCAO' tipo, ifnull(fl_evolucao_presidente,'N') valor, count(ifnull(fl_evolucao_presidente,'N'))total,  ( case 
		 when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['I']['maior']." then 'I' 
		 when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['II']['maior']." AND (vr_faturamento_2019+vr_outros_valores) <= ".$this->value['II']['menor']." then 'II'
		 when IFNULL((vr_faturamento_2019+vr_outros_valores),0) >= 0.00 AND IFNULL((vr_faturamento_2019+vr_outros_valores),0) <= ".$this->value['III']['menor']." then 'III'
		 end ) grupo
		FROM tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		group by  ifnull(fl_evolucao_presidente,'N'), grupo
		UNION
		SELECT 'DIRETOR' cargo, 'EVOLUCAO' tipo, ifnull(fl_evolucao_diretor,'N') valor, count(ifnull(fl_evolucao_diretor,'N'))total,  ( case 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['I']['maior']." then 'I' 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['II']['maior']." AND (vr_faturamento_2019+vr_outros_valores) <= ".$this->value['II']['menor']." then 'II'
		when IFNULL((vr_faturamento_2019+vr_outros_valores),0) >= 0.00 AND IFNULL((vr_faturamento_2019+vr_outros_valores),0) <= ".$this->value['III']['menor']." then 'III'
		 end ) grupo
		FROM tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		group by  ifnull(fl_evolucao_diretor,'N'), grupo
		 UNION
		SELECT 'GERENTE' cargo, 'EVOLUCAO' tipo, ifnull(fl_evolucao_gerente,'N') valor, count(ifnull(fl_evolucao_gerente,'N'))total,  ( case 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['I']['maior']." then 'I' 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['II']['maior']." AND (vr_faturamento_2019+vr_outros_valores) <= ".$this->value['II']['menor']." then 'II'
		when IFNULL((vr_faturamento_2019+vr_outros_valores),0) >= 0.00 AND IFNULL((vr_faturamento_2019+vr_outros_valores),0) <= ".$this->value['III']['menor']." then 'III'
		 end ) grupo
		FROM tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		group by  ifnull(fl_evolucao_gerente,'N'),grupo
		  UNION 
		 SELECT 'PRESIDENTE' cargo, 'OUTROS' tipo, ifnull(fl_outros_presidente,'N') valor, count(ifnull(fl_outros_presidente,'N'))total,  ( case 
		 when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['I']['maior']." then 'I' 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['II']['maior']." AND (vr_faturamento_2019+vr_outros_valores) <= ".$this->value['II']['menor']." then 'II'
		when IFNULL((vr_faturamento_2019+vr_outros_valores),0) >= 0.00 AND IFNULL((vr_faturamento_2019+vr_outros_valores),0) <= ".$this->value['III']['menor']." then 'III'
		 end ) grupo
		FROM tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		group by  ifnull(fl_outros_presidente,'N'), grupo
		UNION
		SELECT 'DIRETOR' cargo, 'OUTROS' tipo, ifnull(fl_outros_diretor,'N') valor, count(ifnull(fl_outros_diretor,'N'))total,  ( case 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['I']['maior']." then 'I' 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['II']['maior']." AND (vr_faturamento_2019+vr_outros_valores) <= ".$this->value['II']['menor']." then 'II'
		when IFNULL((vr_faturamento_2019+vr_outros_valores),0) >= 0.00 AND IFNULL((vr_faturamento_2019+vr_outros_valores),0) <= ".$this->value['III']['menor']." then 'III'
		 end ) grupo
		FROM tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		group by  ifnull(fl_outros_diretor,'N'), grupo
		 UNION
		SELECT 'GERENTE' cargo, 'OUTROS' tipo, ifnull(fl_outros_gerente,'N') valor, count(ifnull(fl_outros_gerente,'N'))total,  ( case 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['I']['maior']." then 'I' 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['II']['maior']." AND (vr_faturamento_2019+vr_outros_valores) <= ".$this->value['II']['menor']." then 'II'
		when IFNULL((vr_faturamento_2019+vr_outros_valores),0) >= 0.00 AND IFNULL((vr_faturamento_2019+vr_outros_valores),0) <= ".$this->value['III']['menor']." then 'III'
		 end ) grupo
		FROM tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		group by  ifnull(fl_outros_gerente,'N'), grupo";
		return $this->db->query($sql)->result_object();
	}
	public function get_medidas_pandemia() {
		$sql = "SELECT case when fl_reducao_ne <> 'S' or isnull(fl_reducao_ne) then 'N' when fl_reducao_ne = 'S' then 'S' END valor, count(fl_reducao_ne) total, 'Redução de jornada de trabalho (e salário)' texto, 'ne' tipo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		GROUP BY fl_reducao_ne
		UNION
		SELECT case when fl_reducao_dc <> 'S' or isnull(fl_reducao_dc) then 'N' when fl_reducao_dc = 'S' then 'S' END valor, count(fl_reducao_dc) total, 'Redução de jornada de trabalho (e salário)' texto, 'dc' tipo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		GROUP BY fl_reducao_dc
		UNION
		SELECT case when fl_ferias_ne <> 'S' or isnull(fl_ferias_ne) then 'N' when fl_ferias_ne = 'S' then 'S' END valor, count(fl_ferias_ne) total, 'Férias coletivas' texto , 'ne' tipo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		GROUP BY fl_ferias_ne
		UNION
		SELECT case when fl_ferias_dc <> 'S' or isnull(fl_ferias_dc) then 'N' when fl_ferias_dc = 'S' then 'S' END valor, count(fl_ferias_dc) total, 'Férias coletivas' texto , 'dc' tipo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		GROUP BY fl_ferias_dc
		UNION
		SELECT case when fl_desligamento_ne <> 'S' or isnull(fl_desligamento_ne) then 'N' when fl_desligamento_ne = 'S' then 'S' END valor, count(fl_desligamento_ne) total, 'Desligamento de colaboradores (além das demissões planejadas)' texto , 'ne' tipo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		GROUP BY fl_desligamento_ne
		UNION
		SELECT case when fl_desligamento_dc <> 'S' or isnull(fl_desligamento_dc) then 'N' when fl_desligamento_dc = 'S' then 'S' END valor, count(fl_desligamento_dc) total, 'Desligamento de colaboradores (além das demissões planejadas)' texto , 'dc' tipo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		GROUP BY fl_desligamento_dc
		UNION
		SELECT case when fl_suspensao_ne <> 'S' or isnull(fl_suspensao_ne) then 'N' when fl_suspensao_ne = 'S' then 'S' END valor, count(fl_suspensao_ne) total, 'Suspensão e/ou reduão de beneficios (p.ex. vale refeição, vale combustíve!)' texto , 'ne' tipo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		GROUP BY fl_suspensao_ne
		UNION
		SELECT case when fl_suspensao_dc <> 'S' or isnull(fl_suspensao_dc) then 'N' when fl_suspensao_dc = 'S' then 'S' END valor, count(fl_suspensao_dc) total, 'Suspensão e/ou reduão de beneficios (p.ex. vale refeição, vale combustíve!)' texto , 'dc' tipo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		GROUP BY fl_suspensao_dc
		UNION
		SELECT case when fl_oferecimento_ne <> 'S' or isnull(fl_oferecimento_ne) then 'N' when fl_oferecimento_ne = 'S' then 'S' END valor, count(fl_oferecimento_ne) total, 'Oferecimento de apoio adicional ao colaborador (apoio psicológico e outras atividades relacionadas ao hem estar' texto , 'ne' tipo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		GROUP BY fl_oferecimento_ne
		UNION
		SELECT case when fl_oferecimento_dc <> 'S' or isnull(fl_oferecimento_dc) then 'N' when fl_oferecimento_dc = 'S' then 'S' END valor, count(fl_oferecimento_dc) total, 'Oferecimento de apoio adicional ao colaborador (apoio psicológico e outras atividades relacionadas ao hem estar' texto , 'dc' tipo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		GROUP BY fl_oferecimento_dc
		UNION
		SELECT case when fl_hiring_ne <> 'S' or isnull(fl_hiring_ne) then 'N' when fl_hiring_ne = 'S' then 'S' END valor, count(fl_hiring_ne) total, 'Hiring freeze (suspensão de contrataçõoes)' texto , 'ne' tipo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		GROUP BY fl_hiring_ne
		UNION
		SELECT case when fl_hiring_dc <> 'S' or isnull(fl_hiring_dc) then 'N' when fl_hiring_dc = 'S' then 'S' END valor, count(fl_hiring_dc) total, 'Hiring freeze (suspensão de contrataçõoes)' texto , 'dc' tipo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		GROUP BY fl_hiring_dc
		UNION
		SELECT case when fl_investimentos_ne <> 'S' or isnull(fl_investimentos_ne) then 'N' when fl_investimentos_ne = 'S' then 'S' END valor, count(fl_investimentos_ne) total, 'Investimentos adicionais em equipes de transformacção digital' texto , 'ne' tipo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		GROUP BY fl_investimentos_ne
		UNION
		SELECT case when fl_investimentos_dc <> 'S' or isnull(fl_investimentos_dc) then 'N' when fl_investimentos_dc = 'S' then 'S' END valor, count(fl_investimentos_dc) total, 'Investimentos adicionais em equipes de transformacção digital' texto , 'dc' tipo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		GROUP BY fl_investimentos_dc
		UNION
		SELECT case when fl_introducao_ne <> 'S' or isnull(fl_introducao_ne) then 'N' when fl_introducao_ne = 'S' then 'S' END valor, count(fl_introducao_ne) total, 'Introdução de política de home office' texto , 'ne' tipo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		GROUP BY fl_introducao_ne
		UNION
		SELECT case when fl_introducao_dc <> 'S' or isnull(fl_introducao_dc) then 'N' when fl_introducao_dc = 'S' then 'S' END valor, count(fl_introducao_dc) total, 'Introdução de política de home office' texto , 'dc' tipo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		GROUP BY fl_introducao_dc
		UNION
		SELECT case when fl_manutencao_ne <> 'S' or isnull(fl_manutencao_ne) then 'N' when fl_manutencao_ne = 'S' then 'S' END valor, count(fl_manutencao_ne) total, 'Manutenção do regime de home office sem alterações' texto , 'ne' tipo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		GROUP BY fl_manutencao_ne
		UNION
		SELECT case when fl_manutencao_dc <> 'S' or isnull(fl_manutencao_dc) then 'N' when fl_manutencao_dc = 'S' then 'S' END valor, count(fl_manutencao_dc) total, 'Manutenção do regime de home office sem alterações' texto , 'dc' tipo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		GROUP BY fl_manutencao_dc
		UNION
		SELECT case when fl_ampliacao_ne <> 'S' or isnull(fl_ampliacao_ne) then 'N' when fl_ampliacao_ne = 'S' then 'S' END valor, count(fl_ampliacao_ne) total, 'Ampliação do regime de home office' texto , 'ne' tipo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		GROUP BY fl_ampliacao_ne
		UNION
		SELECT case when fl_ampliacao_dc <> 'S' or isnull(fl_ampliacao_dc) then 'N' when fl_ampliacao_dc = 'S' then 'S' END valor, count(fl_ampliacao_dc) total, 'Ampliação do regime de home office' texto , 'dc' tipo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		GROUP BY fl_ampliacao_dc
		UNION
		SELECT case when fl_reducao2_ne <> 'S' or isnull(fl_reducao2_ne) then 'N' when fl_reducao2_ne = 'S' then 'S' END valor, count(fl_reducao2_ne) total, 'Redução do regime de home office' texto , 'ne' tipo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		GROUP BY fl_reducao2_ne
		UNION
		SELECT case when fl_reducao2_dc <> 'S' or isnull(fl_reducao2_dc) then 'N' when fl_reducao2_dc = 'S' then 'S' END valor, count(fl_reducao2_dc) total, 'Redução do regime de home office' texto , 'dc' tipo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		GROUP BY fl_reducao2_dc
		UNION
		SELECT case when fl_implantacao_1_ne <> 'S' or isnull(fl_implantacao_1_ne) then 'N' when fl_implantacao_1_ne = 'S' then 'S' END valor, count(fl_implantacao_1_ne) total, 'Implantação de regime de home office integral para 2021 (para parte dos colaboradores)' texto , 'ne' tipo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		GROUP BY fl_implantacao_1_ne
		UNION
		SELECT case when fl_implantacao_1_dc <> 'S' or isnull(fl_implantacao_1_dc) then 'N' when fl_implantacao_1_dc = 'S' then 'S' END valor, count(fl_implantacao_1_dc) total, 'Implantação de regime de home office integral para 2021 (para parte dos colaboradores)' texto , 'dc' tipo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		UNION
		SELECT case when fl_implantacao_2_ne <> 'S' or isnull(fl_implantacao_2_ne) then 'N' when fl_implantacao_2_ne = 'S' then 'S' END valor, count(fl_implantacao_2_ne) total, 'Implantação de regime de home office integral para 2021 (para a totalidade dos colaboradores)' texto , 'ne' tipo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		GROUP BY fl_implantacao_1_ne
		UNION
		SELECT case when fl_implantacao_2_dc <> 'S' or isnull(fl_implantacao_2_dc) then 'N' when fl_implantacao_2_dc = 'S' then 'S' END valor, count(fl_implantacao_2_dc) total, 'Implantação de regime de home office integral para 2021 (para a totalidade dos colaboradores)' texto , 'dc' tipo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		GROUP BY fl_implantacao_2_dc
		UNION
		SELECT case when fl_implantacao_2_ne <> 'S' or isnull(fl_implantacao_3_ne) then 'N' when fl_implantacao_3_ne = 'S' then 'S' END valor, count(fl_implantacao_3_ne) total, 'Implantação de regime de home office parcial para 2021 (para parte dos colaboradores)' texto , 'ne' tipo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		GROUP BY fl_implantacao_3_ne
		UNION
		SELECT case when fl_implantacao_3_dc <> 'S' or isnull(fl_implantacao_3_dc) then 'N' when fl_implantacao_3_dc = 'S' then 'S' END valor, count(fl_implantacao_3_dc) total, 'Implantação de regime de home office parcial para 2021 (para parte dos colaboradores)' texto , 'dc' tipo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		GROUP BY fl_implantacao_3_dc
		UNION
		SELECT case when fl_implantacao_4_ne <> 'S' or isnull(fl_implantacao_4_ne) then 'N' when fl_implantacao_4_ne = 'S' then 'S' END valor, count(fl_implantacao_4_ne) total, 'Implantação de regime de home office parcial para 2021 (para a totalidade dos colaboradores)' texto , 'ne' tipo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		GROUP BY fl_implantacao_4_ne
		UNION
		SELECT case when fl_implantacao_4_dc <> 'S' or isnull(fl_implantacao_4_dc) then 'N' when fl_implantacao_4_dc = 'S' then 'S' END valor, count(fl_implantacao_4_dc) total, 'Implantação de regime de home office parcial para 2021 (para a totalidade dos colaboradores)' texto , 'dc' tipo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		GROUP BY fl_implantacao_4_dc
		UNION
		SELECT case when fl_mudancas_ne <> 'S' or isnull(fl_mudancas_ne) then 'N' when fl_mudancas_ne = 'S' then 'S' END valor, count(fl_mudancas_ne) total, 'Sem mudanças previstas do regime de home office atual para 2021' texto , 'ne' tipo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		GROUP BY fl_mudancas_ne
		UNION
		SELECT case when fl_mudancas_dc <> 'S' or isnull(fl_mudancas_dc) then 'N' when fl_mudancas_dc = 'S' then 'S' END valor, count(fl_mudancas_dc) total, 'Sem mudanças previstas do regime de home office atual para 2021' texto , 'dc' tipo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		GROUP BY fl_mudancas_dc;";
		return $this->db->query($sql)->result_object();
	}
	public function get_bonus(){
		$sql="SELECT round(((max(pc_alvo_presidencia)-min(pc_alvo_presidencia))*0.25)+min(pc_alvo_presidencia),2) quartil_1,
		round(((max(pc_alvo_presidencia)-min(pc_alvo_presidencia))*0.5)+min(pc_alvo_presidencia),2) mediana,
		round(((max(pc_alvo_presidencia)-min(pc_alvo_presidencia))*0.75)+min(pc_alvo_presidencia),2)  quartil_3,
		'META' tipo,'Presidência' cargo,
		case 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['I']['maior']." then 'I' 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['II']['maior']." AND (vr_faturamento_2019+vr_outros_valores) <= ".$this->value['II']['menor']." then 'II'
		when IFNULL((vr_faturamento_2019+vr_outros_valores),0) >= 0.00 AND IFNULL((vr_faturamento_2019+vr_outros_valores),0) <= ".$this->value['III']['menor']." then 'III'
		 end grupo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		group by grupo
		UNION
		SELECT round(((max(pc_maximo_presidencia)-min(pc_maximo_presidencia))*0.25)+min(pc_maximo_presidencia),2) quartil_1,
		round(((max(pc_maximo_presidencia)-min(pc_maximo_presidencia))*0.5)+min(pc_maximo_presidencia),2) mediana,
		round(((max(pc_maximo_presidencia)-min(pc_maximo_presidencia))*0.75)+min(pc_maximo_presidencia),2)  quartil_3,
		'MAXIMO' tipo, 'Presidência' cargo,
		case 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['I']['maior']." then 'I' 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['II']['maior']." AND (vr_faturamento_2019+vr_outros_valores) <= ".$this->value['II']['menor']." then 'II'
		when IFNULL((vr_faturamento_2019+vr_outros_valores),0) >= 0.00 AND IFNULL((vr_faturamento_2019+vr_outros_valores),0) <= ".$this->value['III']['menor']." then 'III'
		 end grupo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		group by grupo
		UNION
		SELECT round(((max(pc_efetivamente_pago_presidencia)-min(pc_efetivamente_pago_presidencia))*0.25)+min(pc_efetivamente_pago_presidencia),2) quartil_1,
		round(((max(pc_efetivamente_pago_presidencia)-min(pc_efetivamente_pago_presidencia))*0.5)+min(pc_efetivamente_pago_presidencia),2) mediana,
		round(((max(pc_efetivamente_pago_presidencia)-min(pc_efetivamente_pago_presidencia))*0.75)+min(pc_efetivamente_pago_presidencia),2)  quartil_3,
		'PAGO' tipo, 'Presidência' cargo,
		case 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['I']['maior']." then 'I' 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['II']['maior']." AND (vr_faturamento_2019+vr_outros_valores) <= ".$this->value['II']['menor']." then 'II'
		when IFNULL((vr_faturamento_2019+vr_outros_valores),0) >= 0.00 AND IFNULL((vr_faturamento_2019+vr_outros_valores),0) <= ".$this->value['III']['menor']." then 'III'
		 end grupo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		group by grupo
			 
		/*DIRETOR*/
		UNION 
		SELECT round(((max(pc_alvo_diretoria)-min(pc_alvo_diretoria))*0.25)+min(pc_alvo_diretoria),2) quartil_1,
		round(((max(pc_alvo_diretoria)-min(pc_alvo_diretoria))*0.5)+min(pc_alvo_presidencia),2) mediana,
		round(((max(pc_alvo_diretoria)-min(pc_alvo_presidencia))*0.75)+min(pc_alvo_diretoria),2)  quartil_3,
		'META' tipo,'Diretoria' cargo,
		case 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['I']['maior']." then 'I' 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['II']['maior']." AND (vr_faturamento_2019+vr_outros_valores) <= ".$this->value['II']['menor']." then 'II'
		when IFNULL((vr_faturamento_2019+vr_outros_valores),0) >= 0.00 AND IFNULL((vr_faturamento_2019+vr_outros_valores),0) <= ".$this->value['III']['menor']." then 'III'
		 end grupo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		group by grupo
		UNION
		SELECT round(((max(pc_maximo_diretoria)-min(pc_maximo_diretoria))*0.25)+min(pc_maximo_diretoria),2) quartil_1,
		round(((max(pc_maximo_diretoria)-min(pc_maximo_diretoria))*0.5)+min(pc_maximo_diretoria),2) mediana,
		round(((max(pc_maximo_diretoria)-min(pc_maximo_diretoria))*0.75)+min(pc_maximo_diretoria),2)  quartil_3,
		'MAXIMO' tipo, 'Diretoria' cargo,
		case 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['I']['maior']." then 'I' 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['II']['maior']." AND (vr_faturamento_2019+vr_outros_valores) <= ".$this->value['II']['menor']." then 'II'
		when IFNULL((vr_faturamento_2019+vr_outros_valores),0) >= 0.00 AND IFNULL((vr_faturamento_2019+vr_outros_valores),0) <= ".$this->value['III']['menor']." then 'III'
		 end grupo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		group by grupo
		UNION
		SELECT round(((max(pc_efetivamente_pago_diretoria)-min(pc_efetivamente_pago_diretoria))*0.25)+min(pc_efetivamente_pago_diretoria),2) quartil_1,
		round(((max(pc_efetivamente_pago_diretoria)-min(pc_efetivamente_pago_diretoria))*0.5)+min(pc_efetivamente_pago_diretoria),2) mediana,
		round(((max(pc_efetivamente_pago_diretoria)-min(pc_efetivamente_pago_diretoria))*0.75)+min(pc_efetivamente_pago_diretoria),2)  quartil_3,
		'PAGO' tipo, 'Diretoria' cargo,
		case 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['I']['maior']." then 'I' 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['II']['maior']." AND (vr_faturamento_2019+vr_outros_valores) <= ".$this->value['II']['menor']." then 'II'
		when IFNULL((vr_faturamento_2019+vr_outros_valores),0) >= 0.00 AND IFNULL((vr_faturamento_2019+vr_outros_valores),0) <= ".$this->value['III']['menor']." then 'III'
		 end grupo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		group by grupo
			
		/*GERENTE*/
		UNION 
		SELECT round(((max(pc_alvo_gerencia)-min(pc_alvo_gerencia))*0.25)+min(pc_alvo_gerencia),2) quartil_1,
		round(((max(pc_alvo_gerencia)-min(pc_alvo_gerencia))*0.5)+min(pc_alvo_gerencia),2) mediana,
		round(((max(pc_alvo_gerencia)-min(pc_alvo_gerencia))*0.75)+min(pc_alvo_gerencia),2)  quartil_3,
		'META' tipo,'Gerência' cargo,
		case 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['I']['maior']." then 'I' 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['II']['maior']." AND (vr_faturamento_2019+vr_outros_valores) <= ".$this->value['II']['menor']." then 'II'
		when IFNULL((vr_faturamento_2019+vr_outros_valores),0) >= 0.00 AND IFNULL((vr_faturamento_2019+vr_outros_valores),0) <= ".$this->value['III']['menor']." then 'III'
		 end grupo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		group by grupo
		UNION
		SELECT round(((max(pc_maximo_gerencia)-min(pc_maximo_gerencia))*0.25)+min(pc_maximo_gerencia),2) quartil_1,
		round(((max(pc_maximo_gerencia)-min(pc_maximo_gerencia))*0.5)+min(pc_maximo_gerencia),2) mediana,
		round(((max(pc_maximo_gerencia)-min(pc_maximo_gerencia))*0.75)+min(pc_maximo_gerencia),2)  quartil_3,
		'MAXIMO' tipo, 'Gerência' cargo,
		case 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['I']['maior']." then 'I' 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['II']['maior']." AND (vr_faturamento_2019+vr_outros_valores) <= ".$this->value['II']['menor']." then 'II'
		when IFNULL((vr_faturamento_2019+vr_outros_valores),0) >= 0.00 AND IFNULL((vr_faturamento_2019+vr_outros_valores),0) <= ".$this->value['III']['menor']." then 'III'
		 end grupo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		group by grupo
		UNION
		SELECT round(((max(pc_efetivamente_pago_gerencia)-min(pc_efetivamente_pago_gerencia))*0.25)+min(pc_efetivamente_pago_gerencia),2) quartil_1,
		round(((max(pc_efetivamente_pago_gerencia)-min(pc_efetivamente_pago_gerencia))*0.5)+min(pc_efetivamente_pago_gerencia),2) mediana,
		round(((max(pc_efetivamente_pago_gerencia)-min(pc_efetivamente_pago_gerencia))*0.75)+min(pc_efetivamente_pago_gerencia),2)  quartil_3,
		'PAGO' tipo, 'Gerência' cargo,
		case 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['I']['maior']." then 'I' 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['II']['maior']." AND (vr_faturamento_2019+vr_outros_valores) <= ".$this->value['II']['menor']." then 'II'
		when IFNULL((vr_faturamento_2019+vr_outros_valores),0) >= 0.00 AND IFNULL((vr_faturamento_2019+vr_outros_valores),0) <= ".$this->value['III']['menor']." then 'III'
		 end grupo
		FROM boyden.tab_pesquisa_2020
		WHERE fl_pesquisa_finalizada = 1
		group by grupo";
		return $this->db->query($sql)->result_object();
	}
	public function get_tabela_salariais(){
		$sql= "SELECT round(((max(vr_salario_fixo_mensal)-min(vr_salario_fixo_mensal))*0.25)+min(vr_salario_fixo_mensal),2) quartil_1,
		round(((max(vr_salario_fixo_mensal)-min(vr_salario_fixo_mensal))*0.5)+min(vr_salario_fixo_mensal),2) mediana,
		round(((max(vr_salario_fixo_mensal)-min(vr_salario_fixo_mensal))*0.75)+min(vr_salario_fixo_mensal),2)  quartil_3,
		case 
		when tp_cargo = 'PRESIDENTE' or tp_cargo = 'DIRETOR' THEN 'PRESIDENTE_DIRETOR'
		when tp_cargo = 'GERENTE' THEN tp_cargo
		END tp_cargo, LOWER(nm_cargo) nm_cargo,
		case 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['I']['maior']." then 'I' 
		when (vr_faturamento_2019+vr_outros_valores) >= ".$this->value['II']['maior']." AND (vr_faturamento_2019+vr_outros_valores) <= ".$this->value['II']['menor']." then 'II'
		when IFNULL((vr_faturamento_2019+vr_outros_valores),0) >= 0.00 AND IFNULL((vr_faturamento_2019+vr_outros_valores),0) <= ".$this->value['III']['menor']." then 'III'
		 end grupo
		FROM boyden.tab_pesquisa_2020 as a
		INNER JOIN boyden.tab_pesquisa_2020_cargo as b ON a.id_pesquisa=b.id_pesquisa
		INNER JOIN boyden.tab_cargo as c ON b.id_cargo=c.id_cargo AND c.fl_relatorio = 'S'
		WHERE fl_pesquisa_finalizada = 1
		group by nm_cargo, grupo
		order by grupo,tp_cargo DESC, nm_cargo DESC";
		return $this->db->query($sql)->result_object();

	}

}

?>