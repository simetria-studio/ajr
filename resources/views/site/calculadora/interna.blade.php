@extends('layouts.main')

@section('content')
    <div class="container">
        <!-- Titulo da pagina-->

        <div class="text-center  mb-5">
            <h2 class="pt-5 text-danger">Simulação Interna</h2>
        </div>


        <table class="table table-sm table-striped table-bordered">
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Valor dos produtos</td>
                    <td>

                        <div class="d-flex align-items-center justify-content-between">
                            <label for="">R$</label>
                            <input type="number" class="form-control form-control-sm mx-2" id="valor_produto" value="0">
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Valor Original do produto">
                                ?
                            </button>
                        </div>
                    </td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Valor do frete</td>
                    <td>
                        <div class="d-flex align-items-center  justify-content-between">
                            <label for="">R$</label>
                            <input type="number" class="form-control form-control-sm mx-2" id="valor_frete" value="0">
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Valor do frete">
                                ?
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Valor do seguro</td>
                    <td>
                        <div class="d-flex align-items-center  justify-content-between">
                            <label for="">R$</label>
                            <input type="number" class="form-control form-control-sm mx-2" id="valor_seguro"
                                value="0">
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Valor do seguro">
                                ?
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Outras despesas acessórias</td>
                    <td>
                        <div class="d-flex align-items-center  justify-content-between">
                            <label for="">R$</label>
                            <input type="number" class="form-control form-control-sm mx-2" id="outros" value="0">
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Outras despesas">
                                ?
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Valor do desconto</td>
                    <td>
                        <div class="d-flex align-items-center  justify-content-between">
                            <label for="">R$</label>
                            <input type="number" class="form-control form-control-sm mx-2" id="desconto" value="0">
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Desconto">
                                ?
                            </button>
                        </div>
                    </td>
                </tr>
                {{-- Subtotal do produto  --}}
                <tr>
                    <th scope="row"></th>
                    <td>Subtotal</td>
                    <td>
                        <div class="d-flex align-items-center  justify-content-between">
                            R$ <span id="subtotal">0,00</span>
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Subtotal">
                                ?
                            </button>
                        </div>

                    </td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Redução de base de cálculo do ICMS</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between">
                            <label for="">%</label>
                            <input type="text" class="form-control form-control-sm mx-2" id="reducao_base"
                                value="0">
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Redução de base de cálculo do ICMS">
                                ?
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Base de cálculo do ICMS</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between">
                            R$<span id="base_calculo_icms"> 0,00</span>
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Base de cálculo do ICMS">
                                ?
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>Alíquota do ICMS</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between">
                            <label for="">%</label>
                            <input type="text" class="form-control form-control-sm mx-2" id="aliquota_icms"
                                value="0">
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Alíquota">
                                ?
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>Valor do ICMS Desonerado</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between">
                            R$  <span id="icms_desonerado"> 0,00</span>
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Valor do ICMS Desonerado">
                                ?
                            </button>
                        </div>

                    </td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>Base de cálculo do IPI</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between">
                            R$ <span id="base_ipi"> 0,00</span>
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Base de cálculo do IPI">
                                ?
                            </button>
                        </div>

                    </td>
                </tr>
                <tr>
                    <th scope="row">11</th>
                    <td>Alíquota do IPI</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between">
                            <label for="">%</label>
                            <input type="text" class="form-control form-control-sm mx-2" id="aliquota_ipi"
                                value="0">
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Alíquota do IPI">
                                ?
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">12</th>
                    <td>Valor do IPI</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between">
                            R$  <span id="valor_ipi"> 0,00</span>
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Valor do IPI">
                                ?
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">13</th>
                    <td>Valor total da operação (antes do cálculo da Substituição Tributária)</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between">
                            R$ <span id="total_sem_st"> 0,00</span>
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Valor total da operação (antes do cálculo da Substituição Tributária)">
                                ?
                            </button>
                        </div>

                    </td>
                </tr>
                <tr>
                    <th scope="row">14</th>
                    <td>MVA</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between">
                            <label for="">%</label>
                            <input type="text" class="form-control form-control-sm mx-2" id="mva"
                                value="0">
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="MVA">
                                ?
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">15</th>
                    <td>Redução de base de cálculo do ICMS-ST</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between">
                            <label for="">%</label>
                            <input type="text" class="form-control form-control-sm mx-2" id="reducao_icmsst"
                                value="0">
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Redução de base de cálculo do ICMS-ST">
                                ?
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">16</th>
                    <td>Base de cálculo do ICMS-ST</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between">
                            R$<span id="base_calculo_icmsst"> 0,00</span>
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Base de cálculo do ICMS-ST">
                                ?
                            </button>
                        </div>

                    </td>
                </tr>
                <tr>
                    <th scope="row">17</th>
                    <td>Alíquota do ICMS-ST</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between">
                            <label for="">%</label>
                            <input type="text" class="form-control form-control-sm mx-2" id="aliquota_icmsst"
                                value="0">
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Alíquota do ICMS-ST">
                                ?
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td>Subtotal Substituição Tributária (antes da dedução do ICMS próprio)</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between">
                            <span>R$ 0,00</span>
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Subtotal Substituição Tributária (antes da dedução do ICMS próprio)">
                                ?
                            </button>
                        </div>

                    </td>
                </tr>
                <tr>
                    <th scope="row">18</th>
                    <td>Valor do ICMS-ST</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between">
                            <span>R$ 0,00</span>
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Valor do ICMS-ST">
                                ?
                            </button>
                        </div>

                    </td>
                </tr>
                <tr>
                    <th scope="row">19</th>
                    <td>Valor total da operação (após o cálculo da Substituição Tributária)</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between">
                            R$ <span id="resultado">00,00</span>
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Valor total da operação (após o cálculo da Substituição Tributária)">
                                ?
                            </button>
                        </div>

                    </td>
                </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-around">
            <div>
                <button type="button" id="btn_limpar" class="btn btn-primary">Limpar</button>
            </div>
            <div>
                <button type="button" id="btn_somar" class="btn btn-secondary text-light">Calcular</button>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $('[data-bs-toggle="tooltip"]').tooltip();

        $('#btn_somar').click(function() {
            var valor_produto = parseFloat($('#valor_produto').val());
            var valor_frete = parseFloat($('#valor_frete').val());
            var valor_seguro = parseFloat($('#valor_seguro').val());
            var outros = parseFloat($('#outros').val());
            var desconto = parseFloat($('#desconto').val());
            var reducao_base = parseFloat($('#reducao_base').val());
            var aliquota_icms = parseFloat($('#aliquota_icms').val());
            var aliquota_ipi = parseFloat($('#aliquota_ipi').val());
            var mva = parseFloat($('#mva').val());
            var reducao_icmsst = parseFloat($('#reducao_icmsst').val());
            var aliquota_icmsst = parseFloat($('#aliquota_icmsst').val());


            var base_calculo_icms = valor_produto + valor_frete + valor_seguro + outros - desconto -
                (valor_produto * reducao_base / 100);
            var resultado = valor_produto + valor_frete + valor_seguro + outros - desconto -
                (valor_produto * reducao_base / 100) +
                (valor_produto * aliquota_icms / 100) +
                (valor_produto * aliquota_ipi / 100) +
                (valor_produto * mva / 100) -
                (valor_produto * reducao_icmsst / 100) +
                (valor_produto * aliquota_icmsst / 100);
            var subtotal = valor_produto + valor_frete + valor_seguro + outros - desconto;
            var icms_desonerado = base_calculo_icms * reducao_base / 100;
            var base_ipi = valor_produto + valor_frete + valor_seguro + outros - desconto;
            var valor_ipi = base_ipi * aliquota_ipi / 100;
            var total_sem_st = valor_produto + valor_frete + valor_seguro + outros - desconto +
                (valor_produto * aliquota_icms / 100) +
                (valor_produto * aliquota_ipi / 100);
            var base_calculo_icmsst = base_calculo_icms * (reducao_icmsst / 100)+ base_calculo_icms * (mva / 100);
            var aliquota_icmsst = (base_calculo_icms + base_calculo_icmsst) * aliquota_icmsst / 100;
            $('#base_calculo_icms').text(base_calculo_icms);
            $('#subtotal').text(subtotal);
            $('#resultado').text(resultado);
            $('#icms_desonerado').text(icms_desonerado);
            $('#base_ipi').text(base_ipi);
            $('#valor_ipi').text(valor_ipi);
            $('#total_sem_st').text(total_sem_st);
            $('#base_calculo_icmsst').text(base_calculo_icmsst);
        });
        $('#btn_limpar').click(function() {
            $('#valor_produto').val('0');
            $('#valor_frete').val('0');
            $('#valor_seguro').val('0');
            $('#outros').val('0');
            $('#reducao_base').val('0');
            $('#aliquota_icms').val('0');
            $('#aliquota_ipi').val('0');
            $('#mva').val('0');
            $('#reducao_icmsst').val('0');
            $('#aliquota_icmsst').val('0');
            $('#resultado').text('0');
        });
    </script>
@endsection
