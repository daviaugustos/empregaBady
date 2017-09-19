$("#chkPrimeiroEmprego").on('click', function(){
    let verificaPrimeiroEmprego = $('#chkPrimeiroEmprego').is(":checked");
    if(verificaPrimeiroEmprego){
        $("#historicoProfissionalEmpresas").hide();
    } else {
        $("#historicoProfissionalEmpresas").show();
    }
});