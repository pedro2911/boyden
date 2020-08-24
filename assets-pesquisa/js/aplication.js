$(".mask_real_milhao").maskMoney({allowZero: true, prefix:'R$ ', suffix:'', allowNegative: true, thousands:'.', decimal:',', affixesStay: false, precision: 0});
$(".mask_real").maskMoney({allowZero: true, prefix:'R$ ', suffix:'', allowNegative: true, thousands:'.', decimal:',', affixesStay: false});
$(".mask_porcentagem").maskMoney({allowZero: true, prefix:'', suffix:'', allowNegative: false, thousands:'.', decimal:',', affixesStay: true});
$(".mask_porcentagem_sinal").maskMoney({allowZero: true, prefix:'', suffix:'%', allowNegative: false, thousands:'.', decimal:',', affixesStay: true});

function Mascara(o,f){

  v_obj = o;
  v_fun = f;

  setTimeout("execmascara()", 1);

}
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
function Integer(v){

  return v.replace(/\D/g,"");

}
function execmascara(){

  v_obj.value = v_fun(v_obj.value);
    
}