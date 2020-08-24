$(".campo_cpf_cnpj").blur(function(){

  var cpf_cnpj = $(this).val().replace(/[^0-9]+/g, '');

  if(cpf_cnpj.length == 0){

    $(".botao_salvar").attr("disabled", false);
    
  }else if(cpf_cnpj.length == 11){

    if(!isCpf(cpf_cnpj)){
        
      $(this).focus();

      $(".botao_salvar").attr("disabled", true);

        toastr.error("CPF Inválido!", "CPF / CNPJ");

    }else{
      $(".botao_salvar").attr("disabled", false);
    }

  }else if(cpf_cnpj.length == 14){

    if(!isCnpj(cpf_cnpj)){
        
      $(this).focus();

        $(".botao_salvar").attr("disabled", true);

        toastr.error("CNPJ Inválido!", "CPF / CNPJ");
        return false;

    }else{
      $(".botao_salvar").attr("disabled", false);
    }

  }else{

    toastr.error("CPF / CNPJ Inválido!", "CPF / CNPJ");
    $(".botao_salvar").attr("disabled", true);

  }



});

function isCpf(cpf) {
    
    var v = [];

  //Calcula o primeiro dígito de verificação.
    v[0] = 1 * cpf[0] + 2 * cpf[1] + 3 * cpf[2];
    v[0] += 4 * cpf[3] + 5 * cpf[4] + 6 * cpf[5];
    v[0] += 7 * cpf[6] + 8 * cpf[7] + 9 * cpf[8];
    v[0] = v[0] % 11;
    v[0] = v[0] % 10;

    //Calcula o segundo dígito de verificação.
    v[1] = 1 * cpf[1] + 2 * cpf[2] + 3 * cpf[3];
    v[1] += 4 * cpf[4] + 5 * cpf[5] + 6 * cpf[6];
    v[1] += 7 * cpf[7] + 8 * cpf[8] + 9 * v[0];
    v[1] = v[1] % 11;
    v[1] = v[1] % 10;

    //Retorna Verdadeiro se os dígitos de verificação são os esperados.
            
    if ((v[0] != cpf[9]) || (v[1] != cpf[10])) {
      return false;
    }else if (cpf[0] == cpf[1] && cpf[1] == cpf[2] && cpf[2] == cpf[3] && cpf[3] == cpf[4] && cpf[4] == cpf[5] && cpf[5] == cpf[6] && cpf[6] == cpf[7] && cpf[7] == cpf[8] && cpf[8] == cpf[9] && cpf[9] == cpf[10])
    {
      return false;
    }else{
      return true;
    }

}

function isCnpj(cnpj) {

	var erro = true;
    
	if (cnpj == "00000000000000" ||
          cnpj == "11111111111111" ||
          cnpj == "22222222222222" ||
          cnpj == "33333333333333" ||
          cnpj == "44444444444444" ||
          cnpj == "55555555555555" ||
          cnpj == "66666666666666" ||
          cnpj == "77777777777777" ||
          cnpj == "88888888888888" ||
          cnpj == "99999999999999")
          erro = false;

      // Valida DVs
      tamanho = cnpj.length - 2
      numeros = cnpj.substring(0, tamanho);
      digitos = cnpj.substring(tamanho);
      soma = 0;
      pos = tamanho - 7;
      for (i = tamanho; i >= 1; i--) {
          soma += numeros.charAt(tamanho - i) * pos--;
          if (pos < 2)
              pos = 9;
      }
      resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
      if (resultado != digitos.charAt(0))
          erro = false;

      tamanho = tamanho + 1;
      numeros = cnpj.substring(0, tamanho);
      soma = 0;
      pos = tamanho - 7;
      for (i = tamanho; i >= 1; i--) {
          soma += numeros.charAt(tamanho - i) * pos--;
          if (pos < 2)
              pos = 9;
      }
      resultado = soma % 11 < 2 ? 0 : 11 - soma % 11;
      if (resultado != digitos.charAt(1))
          erro = false;

      return erro;

}