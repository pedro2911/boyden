<?php

	// --- AUXILIARES -------------------------------------------------------------------------------- //
		 
		 function sendMail($nome_destino, $email_destino, $nome_remetente, $email_remetente, $assunto, $mensagem){
		      
		      include_once(APPPATH."libraries/PHPMailer/PHPMailerAutoload.php");
/*
            	$username =  "contato@eganet.com.br";
		        $password = "Company1@";
		        $host = "mail.eganet.com.br";
            	$port = "587";
*/

            	$username 	= $_SESSION["EMAIL_USUARIO"];
		        $password 	= $_SESSION["EMAIL_SENHA"];
		        $host 		= $_SESSION["EMAIL_HOST"];
            	$port 		= $_SESSION["EMAIL_PORTA"];
		        
		      // ----------------------------------------------------------------------------
		      
		      $mail = new PHPMailer();

		      $mail->IsSMTP();

		      $mail->setLanguage('br');
		      //$mail->SMTPSecure = 'ssl';

		      $mail->Host = $host;
		      $mail->SMTPDebug = 0;
		      $mail->SMTPAuth = true;
		      $mail->Port = $port;

		      $mail->Username = $username; // USUÁRIO DO SMTP DEDICADO
		      $mail->Password = $password; // SENHA DO SMTP DEDICADO
		      $mail->Subject = utf8_decode($assunto);
		      
		      //$mail->SetFrom($email_remetente, $nome_remetente);
		      $mail->SetFrom("contato@eganet.com.br", $nome_remetente);
		      //$mail->addReplyTo($email_reply); //quando não tem Replyto é adotado o SetFrom para resposta

		      $mail->MsgHTML(utf8_decode($mensagem));

		      $mail->AddAddress(trim(strtolower($email_destino)), $nome_destino);
		      
		      if (!$mail->send()) {
		          return array(false, $mail->ErrorInfo);
		      } else {
		          return array(true);
		      }


		 }
		 
		 function listarPasta($dir, $pasta=null){
		  
		  $d = opendir($dir);
		  $i = 0;
		  $nome = readdir($d);
		
		  while( $nome != false ){
		
			if(is_dir($nome) && ($pasta != '') && ($nome != '.')){
		      $pastas[$i] = $nome;
			  $i++;
			}
			
			$nome = readdir($d);
			
		  }
		
		  return $pastas;
		}
		
		function SureRemoveDir($dir, $DeleteMe) {
	
		  if(!$dh = opendir($dir)) return;
		
		  while (($obj = readdir($dh))) {
	 	    if($obj=='.' || $obj=='..') continue;
			
		    if(!unlink($dir.'/'.$obj)) SureRemoveDir($dir.'/'.$obj, true);
		  }
		
		  if($DeleteMe){

		    closedir($dh);
		    rmdir($dir);

		  }
		}
		
		function listarArquivos($dir){

		  $d = opendir($dir);
		  $i = 0;
		  $nome = readdir($d);
		
		  while( $nome != false ){
			if(!is_dir($nome) && ($nome != 'Thumbs.db') ){
		      $arquivos[$i] = $nome;
			  $i++;
			}					
			$nome = readdir($d);
		  }
		  
		  return $arquivos;
		}
		
		function save_error($error, $sql = null) {

			$_SESSION["error_report"] = $error;

			$CI = get_instance();

			$CI->load->model('erro_model');

			$CI->erro_model->insert($error, $CI->uri->uri_string, $sql);


			$mensagem  = "FLEET: Problemas";
			$mensagem .= " Telefone: " . getTelefone($_SESSION["usuario_nr_celular"]);
			$mensagem .= " Usuario: " . $_SESSION["usuario_nm_usuario"];
			$mensagem .= " Login: " . $_SESSION["usuario_id_cpf_cnpj_usuario"];
			$mensagem .= " Erro na Aplicação: " . $CI->uri->uri_string;

			$lista = explode(",", $_SESSION["TELEFONE_SUPORTE"]);

			for ($i=0; $i < count($lista); $i++) { 
				
				enviar_sms($lista[$i], $mensagem);

			}

		}

		function get_info_empresa($id_empresa) {

			$CI = get_instance();

			$CI->load->model('empresa_model');

			$objR = $CI->empresa_model->detalhe($id_empresa);

			return $objR;

		}

		function get_include_contents($filename, $ar) {
			
		  if (is_file($filename)) {
		    ob_start();
		  
		    $pars = array();
		    $pars = $ar;
		  
		    include $filename;
		    $contents = ob_get_contents();
		    ob_end_clean();
		    return $contents;
		  }
		  return false;
		}	
		 
		 
		 
		function permalink($str, $enc = "UTF-8"){

			$arr = array('.','´','`','¨','^','~','$','!',',',';',':','?',

			'[','@','#','%','&','*','(',')','_','+','{','}','<','>','/',

			'=','º','ª','¹','²','³','£','¢','¬','§',']','"','”','“','–',"'");

			$str = str_replace($arr, '-', $str);

			

			$acentos = array(

			'A' => '/À|Á|Â|Ã|Ä|Å/',

			'a' => '/à|á|â|ã|ä|å/',

			'C' => '/Ç/',

			'c' => '/ç/',

			'E' => '/È|É|Ê|Ë/',

			'e' => '/è|é|ê|ë/',

			'I' => '/Ì|Í|Î|Ï/',

			'i' => '/ì|í|î|ï/',

			'N' => '/Ñ/',

			'n' => '/ñ/',

			'O' => '/Ò|Ó|Ô|Õ|Ö/',

			'o' => '/ò|ó|ô|õ|ö/',

			'U' => '/Ù|Ú|Û|Ü/',

			'u' => '/ù|ú|û|ü/',

			'Y' => '/Ý/',

			'y' => '/ý|ÿ/',

			'a.' => '/ª/',

			'-' => '/ |"|ˆ|´|•|“|”|–/',

			'o.' => '/º/'

			);

			$res = preg_replace($acentos, array_keys($acentos),	$str);

			$res = str_replace('----', '-', $res);

			$res = str_replace('---', '-', $res);

			$res = str_replace('--', '-', $res);

			

			$exp = strrev($res);

			$exp = substr($exp, 0, 1);

			if($exp == '-') $res = substr($res, 0, (strlen($res)-1));

			

			$res = str_replace('----', '-', $res);

			$res = str_replace('---', '-', $res);

			$res = str_replace('--', '-', $res);

			

			return strtolower($res);

		}
		 
		 
		 
		// --- FACILIDADES ------------------------------------------------------------- //

 		function getSimNao($x){
		  
		  if($x==1 || $x=="S")
		    return "Sim";
		  if($x==0 || $x=="N")
		    return "N&atilde;o";

		}

		function getNumeros($var){
  		  return preg_replace("/\D/i", '', $var);
 		}

 		function getSelected($valor, $opt){
		  if($valor == $opt)
		    return "selected";
		}

		function getChecked($valor, $array){
		  if(in_array($valor, $array))
		    return "checked";
		}
		 
		function getDataArquivo($arquivo){
		  return date ("d/m/Y H:i:s", filemtime($arquivo)); 
		}
	 
		function goPage($page){
		  echo "<script>window.location='" . $page . "'</script>";
		}
		 
 		function getFormatNumber($valor){
 			if($valor > 0){
		  		return number_format($valor, 2, ",", ".");
 			}
 			return "0,00";
		}

		function getExtension($arquivo, $tipo='.*'){ // MELHORAR
		 
	       preg_match("/\.(" . $tipo . "){1}$/i", $arquivo, $ext);

		   return $ext[1];
		}


		// --- DATAS -------------------------------------------------------------------------------------- //
		
		function formatMySql($dt) {
		  $dt = explode("/", $dt);
          return $dt[2] . "-" . $dt[1] . "-" . $dt[0];
        }
			
		function formatHtml($dt) {
		  if($dt && $dt != "0000-00-00"){
	        $listDt = explode(" ", $dt);
		    $dt = explode("-", $listDt[0]);
		    return $dt[2] . "/" . $dt[1] . "/" . $dt[0];
		  }
		}
		
		function formatHtmlHour($dt) {
		  if($dt && $dt != "0000-00-00 00:00:00"){
	        $listDt = explode(" ", $dt);
		    $dt = explode("-", $listDt[0]);
		    return $dt[2] . "/" . $dt[1] . "/" . $dt[0] . " " . $listDt[1];
		  }
		}
		
		function formatHour($dt) {
		  if($dt && $dt != "0000-00-00 00:00:00"){
	        $listDt = explode(" ", $dt);
		    return substr($listDt[1], 0, 5);
		  }
		}
		
		function getDecimal($valor){
		  return str_replace(",", ".", str_replace(".", "", $valor));
		}
			
		function getDataCompleta($data){
				
				$list = explode(" ", $data);
				
				list($ano, $mes, $dia) = explode("-", $list[0]);

				$mes = getMes($mes);
				
				return "$dia de $mes de $ano";

		}

		function getMesAbreviado($dt){

			list($data, $horario) = explode(" ", $dt);

			list($ano, $mes, $dia) = explode("-", $data);

			return substr(getMes($mes), 0, 3);

		}

		function fc_tira_especiais($str){

		  if($str){

		  $base = "\"'@|&/º_:,;.+-=*()#><01234567890abcdefghijklmnopqrstuvxywzABCDEFGHIJKLMNOPQRSTUVXYWZáàãâÁÀÃÂéêÉÊíÍóõôÓÕÔúÚçÇ";  

		  $str_out = "";

		  $acentos = array(
		      'A' => '/Ä|Å/',
		      'a' => '/ä|å/',
		      'E' => '/È|Ë/',
		      'e' => '/è|ë/',
		      'I' => '/Ì|Ï/',
		      'i' => '/ì|ï/',
		      'N' => '/Ñ/',
		      'n' => '/ñ/',
		      'O' => '/Ò|Ö/',
		      'o' => '/ò|ö/',
		      'U' => '/Ù|Ü/',
		      'u' => '/ù|ü/',
		      'Y' => '/Ý/',
		      'y' => '/ý|ÿ/',
		      'a.' => '/ª/',
		      '-' => '/–|–/',
		      '.' => '/º/'
		      );

		      $str = preg_replace($acentos, array_keys($acentos), $str);

		  for ($i=0; $i < strlen($str); $i++) { 

		    if($str[$i] == "/"){
		      $str_out .= $str[$i];
		    }else{
		      $pattern = '/' . $str[$i] . '/';

		      if (preg_match($pattern, $base)) {
		        $str_out .= $str[$i];
		      }else{
		        $str_out .= " ";
		      }
		    }    
		    
		  }

		  $str_out = str_replace("  ", " ", $str_out);
		  $str_out = str_replace("  ", " ", $str_out);
		  $str_out = str_replace("'", "", $str_out);
		  $str_out = str_replace('"', "", $str_out);

		  return $str_out;

		  }

		  return "";

		}
		
		function getSemana($semana){
			switch ($semana) {
				
				case 0: $semana = "Domingo"; break;
				case 1: $semana = "Segunda-feira"; break;
				case 2: $semana = "Ter&ccedil;a-feira"; break;
				case 3: $semana = "Quarta-feira"; break;
				case 4: $semana = "Quinta-feira"; break;
				case 5: $semana = "Sexta-feira"; break;
				case 6: $semana = "S&aacute;bado"; break;
				
				}
				return $semana;
		}
		
		function getMes($mes){
		  switch ($mes){
				
				case 1: $mes = "Janeiro"; break;
				case 2: $mes = "Fevereiro"; break;
				case 3: $mes = "Mar&ccedil;o"; break;
				case 4: $mes = "Abril"; break;
				case 5: $mes = "Maio"; break;
				case 6: $mes = "Junho"; break;
				case 7: $mes = "Julho"; break;
				case 8: $mes = "Agosto"; break;
				case 9: $mes = "Setembro"; break;
				case 10: $mes = "Outubro"; break;
				case 11: $mes = "Novembro"; break;
				case 12: $mes = "Dezembro"; break;
				
				}

			return $mes;
		}


		// --- MASCARAS ------------------------------------------------------------------------------------ //

		function mask($val, $mask){
			 
		   $val = getNumeros($val);
			 
		   $maskared = '';
		   $k = 0;
		   if($mask == 'tel'){
			$cont = strlen($val);
			if($cont == 11){$mask = "(##) #####-####";}
			else{$mask = "(##) ####-####";}
		   }
		   
		   for($i = 0; $i<=strlen($mask)-1; $i++){
		 	 if($mask[$i] == '#'){
		 	   if(isset($val[$k]))
		 	     $maskared .= $val[$k++];
		 	 }else{
		 	   if(isset($mask[$i]))
		 	     $maskared .= $mask[$i];
		 	 }
		   }
		   return $maskared;
		}

	    function getTelefone($x){
	    	if($x) return mask($x, 'tel');
	    	return "";
		 }
		 
		 function getMaskCep($x){
			 return mask($x, '#####-###');
		 }

		 function getMaskHorario($x){
		 	if($x){
			 return mask($x, '##:##');
		 	}

		 	return "";
		 }

		 function get_cnae($x){
			 return mask($x, '####-#/##');
		 }
	   
	    function getCpfCnpj($x){

	      if($x){

	   	    $x = getNumeros($x);

	   	    if(strlen($x) == 11){
  	          return mask($x, "###.###.###-##");
	   	    }else if(strlen($x) == 14){
	          return mask($x, '##.###.###/####-##');
	   	    }else{
	   	      return $x;
	   	    }

	      }

	   }

	   function cutValue($valor){

		  if($valor > 0){

		    $list = explode(".", $valor);

		    if($list[1]){
		      return $list[0] . "." . substr($list[1], 0, 2);
		    }else{
		      return $valor;
		    }
		  

		  }

		  return "0.00";

		}

		function getImageOrIcon($arquivo){

			$extensao = getExtension($arquivo);

			$array_icones = array("doc", "docx", "pdf");

			if(in_array($extensao, $array_icones)){

				return base_url("assets/images/".$extensao.".png");

			}else{

				return base_url($arquivo);

			}


		}

		function soma_horarios($horario1, $horario2){

			list($hora1, $minuto1) = explode(":", $horario1);
			list($hora2, $minuto2) = explode(":", $horario2);

			$total_hora   = $hora1+$hora2;
			$total_minuto = $minuto1+$minuto2;

			if($total_minuto > 59){
				$total_hora++;
				$total_minuto = $total_minuto - 60;
			}

			if($total_hora > 23){
				$total_hora = $total_hora - 24;
			}

			return str_pad($total_hora, 2, "0", STR_PAD_LEFT) . ":" . str_pad($total_minuto, 2, "0", STR_PAD_LEFT);

		}

		function converte_horario_minutos($horario){

			list($hora, $minuto) = explode(":", $horario);

			$minutos_hora = $hora * 60;

			return $minuto + $minutos_hora;

		}

		function soma_minutos_horario($horario, $minutos){

		  list($horario_hora, $horario_minuto) = explode(":", $horario);

		  $total_minuto = $horario_minuto+$minutos;

		  if($total_minuto > 59){

		  	// HORAS ---
		    $acrescimo_hora = number_format($total_minuto / 60);
		    $hora_final     = $horario_hora + $acrescimo_hora;

		    if($hora_final > 23){
			  $hora_final = $hora_final-24;
			}

			// MINUTOS ---
			$minuto_final = $total_minuto - ($acrescimo_hora*60);

		  }else{

		  	// HORAS ---
		  	$hora_final = $horario_minuto;

		  	// MINUTOS ---
		    $minuto_final = $total_minuto;

		  }

		  return str_pad($hora_final, 2, "0", STR_PAD_LEFT) . ":" . str_pad($minuto_final, 2, "0", STR_PAD_LEFT);

		}

		function formatDateNF($dt){

		   list($ano, $mes, $dia) = explode("-", $dt);

		   return $ano . "-" . $mes . "-" . $dia;

		 }

		 function ps($info){

		 	echo "<pre>";print_r($info);die;

		 }

		 function enviar_sms($numero, $mensagem){

		 	if(ENVIRONMENT == "production"){
		 		
		 		$login = $_SESSION["LOGIN_SMS"];
			 	$token = $_SESSION["TOKEN_SMS"];

			 	$msg = urlencode($mensagem);
				$send = file_get_contents("http://painel.kingsms.com.br/kingsms/api.php?acao=sendsms&login=$login&token=$token&numero=$numero&msg=$msg");
				
				return $send;
			}

			return true;

		 }

		 function init_parametros(){

		 	$CI = get_instance();

			$CI->load->model('parametro_model');

			$rowP = $CI->parametro_model->get_parametros();

   			for ($i=0; $i < count($rowP); $i++) { 
				
				$_SESSION[$rowP[$i]->cd_parametro] = $rowP[$i]->vr_param_char . 
													 $rowP[$i]->vr_param_int . 
													 $rowP[$i]->vr_param_dec . 
													 $rowP[$i]->vr_param_dt;
   				
   			}

		 }


		function atualiza_ultima_posicao(){

			$CI = get_instance();

		// ----------------------------------------------------------------------
		// INICIA OS PARAMETROS e MODELS
		// ----------------------------------------------------------------------

			$RASTREADOR_CHAVE_API 	    = $_SESSION["RASTREADOR_CHAVE_API"];
			$RASTREADOR_USUARIO_MASTER	= $_SESSION["RASTREADOR_USUARIO_MASTER"];
			$RASTREADOR_SENHA_MASTER 	= $_SESSION["RASTREADOR_SENHA_MASTER"];


			$CI->load->model('veiculo_model');
			$CI->load->model('ultima_posicao_veiculo_model');


		// -----------------------------------------------------------------------------
		// CONSOME O SERVIÇO => Veículos última posição (getClientVehicles)
		// CRIA ARRAY COM TODOS OS VEÍCULOS
		// CRIA ARRAY COM A LATITUDE E LONGITUDE SETANDO A CHAVE COM A PLACA DO VEÍCULO
		// -----------------------------------------------------------------------------

			$url = 'http://ap3.stc.srv.br/integration/prod/ws/getClientVehicles';

			$headers = array (
			        'Content-Type:application/json'
			);

			$fields = '{
					     "key":  "' . $RASTREADOR_CHAVE_API . '",
					     "user": "' . $RASTREADOR_USUARIO_MASTER . '",
					     "pass": "' . $RASTREADOR_SENHA_MASTER . '"
					   }';

			$ch = curl_init ();

			curl_setopt ( $ch, CURLOPT_URL, $url );
			curl_setopt ( $ch, CURLOPT_POST, true );
			curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );
			curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
			curl_setopt ( $ch, CURLOPT_POSTFIELDS, $fields );

			$result = curl_exec ( $ch );
			
			curl_close ( $ch );
			
			$array = json_decode($result);



			if($array->success > 0){

				$data = $array->data;

				if(count($data) > 0){

					for ($i=0; $i < count($data); $i++) { 

						$array_placas[] = $data[$i]->plate;
						$array_localizacao[$data[$i]->plate] = array("latitude"  => $data[$i]->latitude,
																	"longitude" => $data[$i]->longitude);

					}

				}


				$lista_placas = implode("', '", $array_placas);

				$lista_placas = "'" . $lista_placas . "'";


			// ----------------------------------------------------------------------
			// SELECIONA OS VEÍCULOS COM SUAS RESPECTIVAS EMPRESAS
			// ----------------------------------------------------------------------


				$objVE = $CI->veiculo_model->get_veiculo_empresa($lista_placas);

				for ($i=0; $i < count($objVE); $i++) { 

					$CI->ultima_posicao_veiculo_model->atualiza_ultima_posicao($objVE[$i], $array_localizacao[$objVE[$i]->cd_placa]);

				}


			}else{

				//echo $array->msg;die;

			}

		}


		 function enviar_notificacao($deviceID, $titulo, $mensagem){

			$url = 'https://fcm.googleapis.com/fcm/send';

			$fields = '{ "notification": {
					    "title": "' . $titulo .'",
					    "text": "'.$mensagem.'"
					  },
					  "data":{
					    "click_action": "FLUTTER_NOTIFICATION_CLICK",
					    "nome":"",
					    "sobrenome": ""
					  },
					  "to" : "' . $deviceID . '"
					}';

			//"click_action": "OPEN_ACTIVITY_1"

			$headers = array (
			        'Authorization:key=' . $_SESSION["CHAVE_SERVIDOR_FCM"],
			        'Content-Type:application/json'
			);

			$ch = curl_init ();
			curl_setopt ( $ch, CURLOPT_URL, $url );
			curl_setopt ( $ch, CURLOPT_POST, true );
			curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );
			curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
			curl_setopt ( $ch, CURLOPT_POSTFIELDS, $fields );

			$result = curl_exec ( $ch );
			
			//echo $result;

			curl_close ( $ch );

		}