/**
 *	Neon Main JavaScript File
 *
 *	Theme by: www.laborator.co
 **/
(function($, window, undefined){

"use strict";

$(document).ready(function(){

	if($.isFunction($.fn.timepicker))
		{
			$(".timepicker").each(function(i, el)
			{
				var $this = $(el),
					opts = {
						template: attrDefault($this, 'template', false),
						showSeconds: attrDefault($this, 'showSeconds', false),
						defaultTime: attrDefault($this, 'defaultTime', 'current'),
						showMeridian: attrDefault($this, 'showMeridian', true),
						minuteStep: attrDefault($this, 'minuteStep', 15),
						secondStep: attrDefault($this, 'secondStep', 15)
					},
					$n = $this.next(),
					$p = $this.prev();

				$this.timepicker(opts);

				if($n.is('.input-group-addon') && $n.has('a'))
				{
					$n.on('click', function(ev)
					{
						ev.preventDefault();

						$this.timepicker('showWidget');
					});
				}

				if($p.is('.input-group-addon') && $p.has('a'))
				{
					$p.on('click', function(ev)
					{
						ev.preventDefault();

						$this.timepicker('showWidget');
					});
				}
			});
		}

// AÇÃO DE BOTÕES

$(".div_registro").click();

$('.botao-incluir').click(function(){

  window.location = "../form/" + $(this).attr("data-control");

});

$('.botao-cancelar').click(function(){

	window.location = "../grid/" + $(this).attr("data-control");    

});

$('.botao-alterar').click(function(){

    $("#codigo").val($(this).attr("data-id"));
    $("#codigo2").val($(this).attr("data-id-2"));
    $("#codigo3").val($(this).attr("data-id-3"));

    $("#formulario").attr('action', '../form/' + $(this).attr('data-control'));
    $("#formulario").submit();

});

$('.botao-limpar-pagamento').click(function(){

	swal({   
        title: "Limpar Pagamento?",
        text: "ATENÇÃO: Você tem certeza que deseja zerar este pagamento?",   
        type: "error",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",   
        confirmButtonText: "Sim, confirmar!",   
        cancelButtonText: "Não, cancelar!",   
        closeOnConfirm: false,   
        closeOnCancel: false 
    }).then(result => {
      if (result.value) {

      	$("#codigo").attr("disabled", false);
	    $("#formulario").attr('action', '../form/' + $(this).attr('data-control') + '/limpar_pagamento');
	    $("#formulario").submit();

      }
    });

});

$('.botao-excluir').click(function(){
    swal({   
        title: "Confirmar Exclusão?",   
        text: "ATENÇÃO: Você não poderá recuperar este registro!",   
        type: "error",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",   
        confirmButtonText: "Sim, confirmar!",   
        cancelButtonText: "Não, cancelar!",   
        closeOnConfirm: false,   
        closeOnCancel: false 
    }).then(result => {
      if (result.value) {
        $("#excluir").val($(this).attr("data-id"));
        $("#excluir2").val($(this).attr("data-id-2"));
        $("#excluir3").val($(this).attr("data-id-3"));
        $("#formulario").attr('action', $(this).attr('data-control') + '/excluir');
        $("#formulario").submit();
      }
    });
});

$('.botao-cancelar-receita').click(function(){

    swal({   
        title: "Confirmar Cancelamento?",   
        text: "ATENÇÃO: Você não poderá mais utilizar este Lançamento!",   
        type: "error",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",   
        confirmButtonText: "Sim, confirmar!",   
        cancelButtonText: "Não, cancelar!",   
        closeOnConfirm: false,   
        closeOnCancel: false 
    }).then(result => {
      if (result.value) {
        $("#codigo").val($(this).attr("data-id"));
        $("#formulario").attr('action', $(this).attr('data-control') + '/cancelar/1');
        $("#formulario").submit();
      }
    });
});

$('.botao-cancelar-receita-cobranca').click(function(){

    swal({   
        title: "Cancelar Cobrança?",   
        text: "ATENÇÃO: Você não poderá mais utilizar esta Cobrança!",   
        type: "error",   
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",   
        confirmButtonText: "Sim, confirmar!",   
        cancelButtonText: "Não, cancelar!",   
        closeOnConfirm: false,   
        closeOnCancel: false 
    }).then(result => {
      if (result.value) {

      	swal({   
	        title: "Cancelar Lançamento?",   
	        text: "ATENÇÃO: Deseja cancelar também o Lançamento?",   
	        type: "error",   
	        showCancelButton: true,   
	        confirmButtonColor: "#DD6B55",   
	        confirmButtonText: "Sim, cancelar as duas operações!",   
	        cancelButtonText: "Não, cancelar apenas a cobrança!",   
	        closeOnConfirm: false,   
	        closeOnCancel: false 
	    }).then(result => {
	      
	      if (result.value) {
          	$("#formulario").attr('action', $(this).attr('data-control') + '/cancelar/1');
	      }else{
          	$("#formulario").attr('action', $(this).attr('data-control') + '/cancelar');	      	
	      }

	      $("#codigo").val($(this).attr("data-id"));
          $("#formulario").submit();

	    });

      }
    });
});




$('.botao-receber').click(function(){
	
	var id_div = $(this).attr("data-div");
	var id_receita = $(this).attr("data-id");
	var vr_receita = $(this).attr("data-valor");

	$("#id_receita").val(id_receita);
	$("#vr_pago").val(vr_receita);

	jQuery("#"+id_div).modal('show', {backdrop: 'static'});

});

$('.botao-pagar').click(function(){
	
	var id_div = $(this).attr("data-div");

	var id_despesa = $(this).attr("data-id");
	var vr_despesa = $(this).attr("data-valor");

	$("#id_despesa").val(id_despesa);
	$("#vr_pago").val(vr_despesa);

	jQuery("#"+id_div).modal('show', {backdrop: 'static'});

});

$('.botao-negociar-receita').click(function(){
	
	var id_div = $(this).attr("data-div");

	var id_receita = $(this).attr("data-id");

	$("#id_receita_negociar").val(id_receita);

	jQuery("#"+id_div).modal('show', {backdrop: 'static'});

});

$('.botao-negociar-despesa').click(function(){
	
	var id_div = $(this).attr("data-div");

	var despesa = $(this).attr("data-id");

	$("#id_despesa_negociar").val(despesa);

	jQuery("#"+id_div).modal('show', {backdrop: 'static'});

});

$('.gravar-recebimento').click(function(){

	$.ajax({
      url: $(this).attr('data-control') + '/receber',
      type: 'post',
      data: {
          id_receita: $("#id_receita").val(),
          vr_pago: $("#vr_pago").val(),
          dt_pagamento: $("#dt_pagamento").val(),
          id_banco: $("#id_banco").val(),
          id_forma_pagamento: $("#id_forma_pagamento").val()
      },
      success: function( data ) {

      	$(".fecha-receber").click();

      	if(data != ""){

		    swal({   
		        title: "Recebimento de Receita",   
		        html: data,   
		        type: "warning",
		        showCancelButton: false,
		        confirmButtonColor: "#DD6B55",   
		        confirmButtonText: "OK, Obrigado!",   
		        cancelButtonText: "Não, cancelar!",   
		        closeOnConfirm: false,   
		        closeOnCancel: false 
		    }).then(result => {
		      location.reload();
		    });

      	}else{

      		swal({   
		        title: "Recebimento de Receita",   
		        html: "Recebimento efetuado com sucesso!",   
		        type: "success",
		        showCancelButton: false,
		        confirmButtonColor: "#32CD32",   
		        confirmButtonText: "OK, Obrigado!",   
		        cancelButtonText: "Não, cancelar!",   
		        closeOnConfirm: false,   
		        closeOnCancel: false 
		    }).then(result => {
		      location.reload();
		    });

      	}

      }

	});

});

$('.botao-transferencia').click(function(){

	var confirm = false;

	swal({   

        title: "Transferência para Conta Bancária",   
        html: "ATENÇÃO: Se o valor transferido for menor do que R$ 250,00 será cobrado uma taxa de transferencia no valor de R$ 5,00. Deseja confirmar a transferencia?",   
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",   
        confirmButtonText: "Sim",   
        cancelButtonText: "Não, cancelar!",   
        closeOnConfirm: false,   
        closeOnCancel: false 

	}).then(result => {
      if (result.value) {

      	$.ajax({

	      url: $(this).attr('data-control') + '/transferir',
	      type: 'post',
	      data: {
	          id_banco:    $(this).attr("data-banco"),
	          vr_retirada: $("#vr_retirada_"+$(this).attr("data-banco")).val()
	      },

	      success: function( data ) {

	      	if(data != ""){

			    swal({   
			        title: "Transferência para Conta Bancária",   
			        html: data,   
			        type: "warning",
			        showCancelButton: false,
			        confirmButtonColor: "#DD6B55",   
			        confirmButtonText: "OK, Obrigado!",   
			        cancelButtonText: "Não, cancelar!",   
			        closeOnConfirm: false,   
			        closeOnCancel: false 
			    }).then(result => {
			      
			    });

	      	}else{

	      		swal({   
			        title: "Transferência para Conta Bancária",   
			        html: "Transferência SOLICITADA com sucesso!",   
			        type: "success",
			        showCancelButton: false,
			        confirmButtonColor: "#32CD32",   
			        confirmButtonText: "OK, Obrigado!",   
			        cancelButtonText: "Não, cancelar!",   
			        closeOnConfirm: false,   
			        closeOnCancel: false 
			    }).then(result => {
			      location.reload();
			    });

	      	}

	      }

		});


      }

  });


    

});

$('.gravar-negociar-receita').click(function(){

	$.ajax({
      url: $(this).attr('data-control') + '/negociar',
      type: 'post',
      data: {
          id_receita: $("#id_receita_negociar").val(),
          nr_receita: $("#nr_receita").val(),
          cd_dia_vencimento: $("#cd_dia_vencimento").val()
      },
      success: function( data ) {

      	$(".fecha-receita-negociar").click();

      	if(data != ""){

		    swal({   
		        title: "Negociação de Receita",   
		        html: data,   
		        type: "warning",
		        showCancelButton: false,
		        confirmButtonColor: "#DD6B55",   
		        confirmButtonText: "OK, Obrigado!",   
		        cancelButtonText: "Não, cancelar!",   
		        closeOnConfirm: false,   
		        closeOnCancel: false 
		    }).then(result => {
		      location.reload();
		    });

      	}else{

      		swal({   
		        title: "Negociação de Receita",   
		        html: "Negociação efetuada com sucesso!",   
		        type: "success",
		        showCancelButton: false,
		        confirmButtonColor: "#32CD32",   
		        confirmButtonText: "OK, Obrigado!",   
		        cancelButtonText: "Não, cancelar!",   
		        closeOnConfirm: false,   
		        closeOnCancel: false 
		    }).then(result => {
		      location.reload();
		    });

      	}

      }

	});

});

$('.botao-reenviar-cobranca').click(function(){

	$.ajax({
      url: $(this).attr('data-control') + '/reenviar_cobranca',
      type: 'post',
      data: {
          id_receita: $(this).attr("data-id")
      },
      success: function( data ) {

      	//alert(data);

      	//$(".fecha-receita-negociar").click();

      	if(data != ""){

		    swal({   
		        title: "Reenvio de Cobrança",   
		        html: data,   
		        type: "warning",
		        showCancelButton: false,
		        confirmButtonColor: "#DD6B55",   
		        confirmButtonText: "OK, Obrigado!",   
		        cancelButtonText: "Não, Cancelar!",   
		        closeOnConfirm: false,   
		        closeOnCancel: false 
		    }).then(result => {
		      location.reload();
		    });

      	}else{

      		swal({   
		        title: "Reenvio de Cobrança",   
		        html: "Reenvio de Cobrança Efetuado com Sucesso!",   
		        type: "success",
		        showCancelButton: false,
		        confirmButtonColor: "#32CD32",   
		        confirmButtonText: "OK, Obrigado!",   
		        cancelButtonText: "Não, Cancelar!",   
		        closeOnConfirm: false,   
		        closeOnCancel: false 
		    }).then(result => {
		      location.reload();
		    });

      	}

      }

	});

});

$('.botao-reenviar-recibo').click(function(){

	$.ajax({
      url: $(this).attr('data-control') + '/reenviar_recibo',
      type: 'post',
      data: {
          id_receita: $(this).attr("data-id")
      },
      success: function( data ) {

      	//alert(data);

      	//$(".fecha-receita-negociar").click();

      	if(data != ""){

		    swal({   
		        title: "Reenvio de Recibo",   
		        html: data,   
		        type: "warning",
		        showCancelButton: false,
		        confirmButtonColor: "#DD6B55",   
		        confirmButtonText: "OK, Obrigado!",   
		        cancelButtonText: "Não, Cancelar!",   
		        closeOnConfirm: false,   
		        closeOnCancel: false 
		    }).then(result => {
		      location.reload();
		    });

      	}else{

      		swal({   
		        title: "Reenvio de Recibo",   
		        html: "Reenvio de Recibo Efetuado com Sucesso!",   
		        type: "success",
		        showCancelButton: false,
		        confirmButtonColor: "#32CD32",   
		        confirmButtonText: "OK, Obrigado!",   
		        cancelButtonText: "Não, Cancelar!",   
		        closeOnConfirm: false,   
		        closeOnCancel: false 
		    }).then(result => {
		      location.reload();
		    });

      	}

      }

	});

});

$('.botao-reenviar-nota-fiscal').click(function(){

	$.ajax({
      url: $(this).attr('data-control') + '/reenviar_nota_fiscal',
      type: 'post',
      data: {
          id_nota_fiscal_servico: $(this).attr("data-id")
      },
      success: function( data ) {

      	//alert(data);

      	//$(".fecha-receita-negociar").click();

      	if(data != ""){

		    swal({   
		        title: "Reenvio de Nota Fiscal",   
		        html: data,   
		        type: "warning",
		        showCancelButton: false,
		        confirmButtonColor: "#DD6B55",   
		        confirmButtonText: "OK, Obrigado!",   
		        cancelButtonText: "Não, Cancelar!",   
		        closeOnConfirm: false,   
		        closeOnCancel: false 
		    }).then(result => {
		      location.reload();
		    });

      	}else{

      		swal({   
		        title: "Reenvio de Nota Fiscal",   
		        html: "Reenvio de Nota Fiscal Efetuado com Sucesso!",   
		        type: "success",
		        showCancelButton: false,
		        confirmButtonColor: "#32CD32",   
		        confirmButtonText: "OK, Obrigado!",   
		        cancelButtonText: "Não, Cancelar!",   
		        closeOnConfirm: false,   
		        closeOnCancel: false 
		    }).then(result => {
		      location.reload();
		    });

      	}

      }

	});

});



$('.botao-aprovacao-contrato').click(function(){

	var id_contrato = $(this).attr("data-id");
	var cd_status = $(this).attr("data-status");

	$(".div_contrato_"+id_contrato).fadeOut('fast', function(){
		$(this).fadeIn('fast', function(){
			$(this).slideUp('fast');
		});
	});

	$.ajax({
      url: 'aprovacao_contrato',
      type: 'post',
      data: {
          id_contrato: id_contrato,
          cd_status:   cd_status
      },
      success: function( data ) {

      	//alert(data);

      	if(data != ""){

      		toastr.error(data, "Aprovação de Contrato");

      	}else{

      		$(".div_contrato_"+id_contrato).slideUp('slow');

      		if(cd_status == "A"){
      		
      			toastr.success("Contrato APROVADO com Sucesso!", "Aprovação de Contrato");

      		}else{

      			toastr.success("Contrato REPROVADO com Sucesso!", "Aprovação de Contrato");

      		}


      	}

      }

	});

});

$('.botao-editar-contrato').click(function(){

    $("#codigo").val($(this).attr("data-id"));

    $("#formulario").attr('action', '../../form/contrato');
    $("#formulario").submit();

});



$('.gravar-negociar-despesa').click(function(){

	$.ajax({
      url: $(this).attr('data-control') + '/negociar',
      type: 'post',
      data: {
          id_despesa: $("#id_despesa_negociar").val(),
          nr_despesa: $("#nr_despesa").val(),
          cd_dia_vencimento: $("#cd_dia_vencimento").val()
      },
      success: function( data ) {

      	$(".fecha-despesa-negociar").click();

      	if(data != ""){

		    swal({   
		        title: "Negociação de Despesa",   
		        html: data,   
		        type: "warning",
		        showCancelButton: false,
		        confirmButtonColor: "#DD6B55",   
		        confirmButtonText: "OK, Obrigado!",   
		        cancelButtonText: "Não, cancelar!",   
		        closeOnConfirm: false,   
		        closeOnCancel: false 
		    }).then(result => {
		      location.reload();
		    });

      	}else{

      		swal({   
		        title: "Negociação de Despesa",   
		        html: "Negociação efetuada com sucesso!",   
		        type: "success",
		        showCancelButton: false,
		        confirmButtonColor: "#32CD32",   
		        confirmButtonText: "OK, Obrigado!",   
		        cancelButtonText: "Não, cancelar!",   
		        closeOnConfirm: false,   
		        closeOnCancel: false 
		    }).then(result => {
		      location.reload();
		    });

      	}

      }

	});

});


$('.gravar-pagamento').click(function(){

	$.ajax({
      url: $(this).attr('data-control') + '/pagar',
      type: 'post',
      data: {
          id_despesa: $("#id_despesa").val(),
          vr_pago: $("#vr_pago").val(),
          dt_pagamento: $("#dt_pagamento").val(),
          id_banco: $("#id_banco").val(),
          id_forma_pagamento: $("#id_forma_pagamento").val()
      },
      success: function( data ) {

      	$(".fecha-pagar").click();

      	if(data != ""){

		    swal({   
		        title: "Pagamento de Despesa",   
		        html: data,   
		        type: "warning",
		        showCancelButton: false,
		        confirmButtonColor: "#DD6B55",   
		        confirmButtonText: "OK, Obrigado!",   
		        cancelButtonText: "Não, cancelar!",   
		        closeOnConfirm: false,   
		        closeOnCancel: false 
		    }).then(result => {
		      location.reload();
		    });

      	}else{

      		swal({   
		        title: "Pagamento de Despesa",   
		        html: "Pagamento efetuado com sucesso!",   
		        type: "success",
		        showCancelButton: false,
		        confirmButtonColor: "#32CD32",   
		        confirmButtonText: "OK, Obrigado!",   
		        cancelButtonText: "Não, cancelar!",   
		        closeOnConfirm: false,   
		        closeOnCancel: false 
		    }).then(result => {
		      location.reload();
		    });

      	}

      }

	});

});

$('.botao-cancelar-nfse').click(function(){
    swal({   
        title: "Cancelar NFSe?",   
        text: "ATENÇÃO: Você não poderá recuperar este RPS!",   
        type: "warning",
        showCancelButton: true,   
        confirmButtonColor: "#DD6B55",   
        confirmButtonText: "Sim, confirmar!",   
        cancelButtonText: "Não, cancelar!",   
        closeOnConfirm: false,   
        closeOnCancel: false 
    }).then(result => {
      if (result.value) {
        $("#codigo").val($(this).attr("data-id"));
        $("#formulario").attr('action', $(this).attr('data-control') + '/cancelar');
        $("#formulario").submit();
      }
    });
});

$('.botao-alterar, .botao-excluir, .botao-incluir, .botao-cancelar-nfse, .botao-receber, .botao-pagar').css( 'cursor', 'pointer' );

// VALIDAÇÃO DO FORMULÁRIO

$("#formulario").validationEngine();


// MASCARAS --------------

$(".mask_quantidade").maskMoney({prefix:'', suffix:'', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
$(".mask_quantidade_3").maskMoney({prefix:'', suffix:'', allowNegative: true, thousands:'.', decimal:',', affixesStay: false, precision: 3});
$(".mask_real").maskMoney({prefix:'R$ ', suffix:'', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
$(".mask_porcentagem").maskMoney({prefix:'', suffix:'%', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
$(".mask_ddi").maskMoney({prefix:'+', suffix:'', allowNegative: true, thousands:'', decimal:'', affixesStay: false});

// CEP ---------------------------

$(".nr_cep").change(function(){

  var nr_cep = $(this).val();
  var rand = $(this).attr("data-rand");
  var base_url = $(this).attr("data-url");

  if(nr_cep != ''){

	$.ajax({
	  url: base_url+"form/empresa/cep",
	  async: true,
	  type: 'POST',
	  dataType: 'json',
	  data: {cep:nr_cep},
	
	  success: function(res, textStatus) {

	  $(".nm_endereco"+rand).val("");
	  $(".nm_bairro"+rand).val("");
	  $(".nm_cidade"+rand).val("");
	  $(".sg_uf"+rand).val("");
	  $(".nm_complemento"+rand).val("");
	  $(".cd_municipio"+rand).val("");

	  	if(res.status > 0){

			$(".nm_endereco"+rand).val(res.logradouro);
			$(".nm_bairro"+rand).val(res.bairro);
			$(".nm_cidade"+rand).val(res.cidade);
		    $(".sg_uf"+rand).val(res.uf);
			$(".nm_complemento"+rand).val(res.complemento);
		    $(".cd_municipio"+rand).val(res.cd_uf+res.cd_municipio);

	  	}

	  },

	  error: function(xhr,er) {
		$('#mensagem').html('Erro!');
	  }


	});
	 
	//event.preventDefault();

  }
});

$("[data-mask]").each(function(i, el){
	var $this = $(el),
		mask = $this.data('mask').toString(),
		opts = {
			numericInput: attrDefault($this, 'numeric', false),
			radixPoint: attrDefault($this, 'radixPoint', ''),
			rightAlignNumerics: attrDefault($this, 'numericAlign', 'left') == 'right'
		},
		placeholder = attrDefault($this, 'placeholder', ''),
		is_regex = attrDefault($this, 'isRegex', '');


	if(placeholder.length)
	{
		opts[placeholder] = placeholder;
	}

	switch(mask.toLowerCase())
	{
		case "phone":
			mask = "(999) 999-9999";
			break;

		case "currency":
		case "cpf":

		mask = "999.999.999-99";
		break;

		case "cnpj":

		mask = "99.999.999/9999-99";
		break;

		case "ddi":

		mask = "+999";
		break;

		case "hora":

		mask = "99:99";
		break;


		case "cnae":

		mask = "9999-9/99";
		break;

		case "cep":

		mask = "99999-999";
		break;

		case "rcurrency":

			var sign = attrDefault($this, 'sign', '$');;

			mask = "999,999,999.99";

			if($this.data('mask').toLowerCase() == 'rcurrency')
			{
				mask += ' ' + sign;
			}
			else
			{
				mask = sign + ' ' + mask;
			}

			opts.numericInput = true;
			opts.rightAlignNumerics = false;
			opts.radixPoint = '.';
			break;

		case "email":
			mask = 'Regex';
			opts.regex = "[a-zA-Z0-9._%-]+@[a-zA-Z0-9-\.]+\\.[a-zA-Z]{2,4}";
			break;

		case "fdecimal":
			mask = 'decimal';
			$.extend(opts, {
				autoGroup		: true,
				groupSize		: 2,
				radixPoint		: attrDefault($this, 'rad', '.'),
				groupSeparator	: attrDefault($this, 'dec', '.')
			});
	}

	if(is_regex)
	{
		opts.regex = mask;
		mask = 'Regex';
	}

	$this.inputmask(mask, opts);
});

});


})(jQuery, window);




function Telefone(v) {  
        
  v = v.replace(/\D/g,"");
  v = v.replace(/^(\d\d)(\d)/g,"($1) $2");
  
  if(v.length > 13){
    v = v.replace(/(\d{5})(\d)/,"$1-$2"); //coloca hífen entre o quinto e o sexto dígitos
  }else{
    v = v.replace(/(\d{4})(\d)/,"$1-$2"); //coloca hífen entre o quarto e o quinto dígitos
  }
  return v;

}

function Mascara(o,f){

    v_obj = o;
    v_fun = f;

    setTimeout("execmascara()", 1);

}
function Integer(v){

    return v.replace(/\D/g,"");

}
function Data(v){

    v = v.replace(/\D/g,"");
    v = v.replace(/(\d{2})(\d)/,"$1/$2");
    v = v.replace(/(\d{2})(\d)/,"$1/$2");

    return v;

}
function execmascara(){

    v_obj.value = v_fun(v_obj.value);
    
}