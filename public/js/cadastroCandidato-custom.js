$(document).ready(function(){
    $('#txtDataExpedicao').mask('00/00/0000');
    $('#txtDataNascimento').mask('00/00/0000');
    $('#txtDataAdmissao1').mask('00/00/0000');
    $('#txtDataSaida1').mask('00/00/0000');
    $('#txtDataAdmissao2').mask('00/00/0000');
    $('#txtDataSaida2').mask('00/00/0000');
    $('#txtDataAdmissao3').mask('00/00/0000');
    $('#txtDataSaida3').mask('00/00/0000');
    $('#txtCpf').mask('000.000.000-00');
    $('#txtTelefone').mask('(00) 0000-0000');
    $('#txtCelular').mask('(00) 00000-0000');
    $('#txtEnderecoCep').mask('00000-000');
});

$("#chkPrimeiroEmprego").on('click', function(){
    let verificaPrimeiroEmprego = $('#chkPrimeiroEmprego').is(":checked");
    if(verificaPrimeiroEmprego){
        $("#historicoProfissionalEmpresas").hide();
    } else {
        $("#historicoProfissionalEmpresas").show();
    }
});