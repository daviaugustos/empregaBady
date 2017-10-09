$( document ).ready(function() {
    $("#dadosPessoaFisica").hide();
});

$('#radioPessoaFisica').click(function(){
    $("#dadosPessoaFisica").show();
    $("#dadosPessoaJuridica").hide();
});
$('#radioPessoaJuridica').click(function(){
    $("#dadosPessoaJuridica").show();
    $("#dadosPessoaFisica").hide();
});