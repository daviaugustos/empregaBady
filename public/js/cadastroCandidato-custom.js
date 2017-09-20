$(document).ready(function(){
    $('#txtDataExpedicao').mask('00/00/0000');
    $('#txtDataNascimento').mask('00/00/0000');
    $('#txtDataAdmissao1').mask('00/00/0000');
    $('#txtDataSaida1').mask('00/00/0000');
    $('#txtDataAdmissao2').mask('00/00/0000');
    $('#txtDataSaida2').mask('00/00/0000');
    $('#txtDataAdmissao3').mask('00/00/0000');
    $('#txtDataSaida3').mask('00/00/0000');  
});

$("#chkPrimeiroEmprego").on('click', function(){
    let verificaPrimeiroEmprego = $('#chkPrimeiroEmprego').is(":checked");
    if(verificaPrimeiroEmprego){
        $("#historicoProfissionalEmpresas").hide();
    } else {
        $("#historicoProfissionalEmpresas").show();
    }
});