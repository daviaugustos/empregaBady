$(document).ready(function(){
    $('#dataExpedicao').mask('00/00/0000');
    $('#dataNascimento').mask('00/00/0000');
    $('#dataAdmissao1').mask('00/00/0000');
    $('#dataSaida1').mask('00/00/0000');
    $('#dataAdmissao2').mask('00/00/0000');
    $('#dataSaida2').mask('00/00/0000');
    $('#dataAdmissao3').mask('00/00/0000');
    $('#dataSaida3').mask('00/00/0000');
    $('#cpf').mask('000.000.000-00');
    $('#telefone').mask('(00) 0000-0000');
    $('#celular').mask('(00) 00000-0000');
    $('#enderecoCep').mask('00000-000');
});

$("#chkPrimeiroEmprego").on('click', function(){
    let verificaPrimeiroEmprego = $('#chkPrimeiroEmprego').is(":checked");
    if(verificaPrimeiroEmprego){
        $("#historicoProfissionalEmpresas").hide();
    } else {
        $("#historicoProfissionalEmpresas").show();
    }
});