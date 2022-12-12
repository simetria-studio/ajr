function somar() {
    const aliquota = document.querySelector("#aliquota").value;
    const icms = document.querySelector("#icms").value;
    const icmsSt = document.querySelector("#icmsSt").value;
    var produto = document.getElementById("produto").value;
    var seguro = document.getElementById("seguro").value;
    var frete = document.getElementById("valor-frete").value;
    var desconto = document.getElementById("desconto").value;
    var outros = document.getElementById("outros").value;
    var resultado = document.getElementById("resultado");
    var ipi = document.getElementById("ipi");
    var resultadoicms = document.getElementById("resultadoicms");
    var resultadoicmsst = document.getElementById("resultadoicmsst");

    valorTotal =
        (parseFloat(aliquota) * parseFloat(produto)) / 100 +
        (parseFloat(icms) * parseFloat(produto)) / 100 +
        (parseFloat(icmsSt) * parseFloat(produto)) / 100 +
        parseFloat(produto) +
        parseFloat(seguro) +
        parseFloat(frete) -
        parseFloat(desconto) +
        parseFloat(outros);

    resultado.innerHTML = valorTotal;

    resultadoIpi = (parseFloat(aliquota) * parseFloat(produto)) / 100;
    resultadosicms = (parseFloat(icms) * parseFloat(produto)) / 100;
    resultadosicmsst = (parseFloat(icmsSt) * parseFloat(produto)) / 100;

    ipi.innerHTML = resultadoIpi;
    resultadoicms.innerHTML = resultadosicms;
    resultadoicmsst.innerHTML = resultadosicmsst;
}

// $(document).on("blur", "#aliquota", function () {
//     console.log($(this).val());
// });


//CALCULAORA DE ICMS EM JQUERY

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
    } else {
        $("#baseicms").prop("disabled", false);
    }
});

$("#reducao_icmsst").click(() => {
    var selectReducaov2 = $("#reducao_icmsst").val();
    if (selectReducaov2 == 0) {
        $("#baseicmsst").prop("disabled", true);
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
