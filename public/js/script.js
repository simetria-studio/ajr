//CALCULAORA DE ICMS

//SOMA
$("#btn_somar").click(() => {
    let valor_produto = parseInt($("#valor_produto").val());
    let valor_seguro = parseInt($("#valor_seguro").val());
    let valor_frete = parseInt($("#valor_frete").val());
    let desconto = parseInt($("#desconto").val());
    let outros = parseInt($("#outros").val());
    let ipivalue = parseInt($("#ipivalue").val());
    let baseicms = parseInt($("#baseicms").val());
    let baseicmsst = parseInt($("#baseicmsst").val());

    let soma =
        (ipivalue * valor_produto) / 100 +
        (baseicms * valor_produto) / 100 +
        (baseicmsst * valor_produto) / 100 +
        valor_produto +
        valor_seguro +
        valor_frete -
        desconto +
        outros;
    $("#resultado").html(soma);
});

//VERIFICAÇÃO DE INPUT E SELECT

$("#reducao_icms").click(() => {
    var selectReducao = $("#reducao_icms").val();
    if (selectReducao == 0) {
        $("#baseicms").prop("disabled", true);
        $("#valor_frete").val("0");
    } else {
        $("#baseicms").prop("disabled", false);
    }
});

$("#reducao_icmsst").click(() => {
    var selectReducaov2 = $("#reducao_icmsst").val();
    if (selectReducaov2 == 0) {
        $("#baseicmsst").prop("disabled", true);
        $("#valor_frete").val("0");
    } else {
        $("#baseicmsst").prop("disabled", false);
    }
});

$("#tipofrete").click(() => {
    var selectValor = $("#tipofrete").val();
    if (selectValor == 0) {
        $("#valor_frete").prop("disabled", true);
        $("#valor_frete").val("0");
        
        
    } else {
        $("#valor_frete").prop("disabled", false);
    }
    
});
