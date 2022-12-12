@extends('layouts.main')

@section('content')
    <div class="container">
        <!-- Titulo da pagina-->

        <div class="text-center  mb-5">
            <h2 class="pt-5 text-danger">Simulação Interna</h2>
        </div>

        <div class=" tabela ">
            <!-- Tabela Esquerda -->
            <div class=" p-3  mb-5 border shadow rounded bg-white">
                <form>
                    <div class="row  p-3 ">

                        <!-- Mensagem de aviso -->

                        {{-- <div class="alert alert-danger col-12">
                            Quando os centavos forem múltiplos de 10, favor informar o zero (0); exemplo: 99,9 informar 99,90
                        </div> --}}

                        <!--Campos/inputs-->

                        <div class="col-12 mb-3">
                            <label for="ipivalue" class="form-label"> Alíquota do IPI </label>
                        </div>
                        <div class="col-md-4 col-6 mb-3">
                            <div class="input-group">
                                <input id="ipivalue" class="form-control" type="number" value="5" min="0"
                                    max="100">
                                <span class="input-group-text">%</span>
                            </div>
                        </div>

                        <div class="col-12 mb-2">
                            <label for="reducao_icms" class="form-label"> Redução base de Cálculo ICMS </label>
                        </div>
                        <div class="col-md-6 col-6 mb-3">
                            <select class="form-select" id="reducao_icms">
                                <option selected value="0">Sem redução</option>
                                <option value="1">Com redução</option>
                            </select>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="input-group">
                                <input id="baseicms" disabled value="0" class="form-control" type="number"
                                    min="0" max="100">
                                <span class="input-group-text">%</span>
                            </div>
                        </div>


                        <div class="col-12 mb-2">
                            <label for="reducao_icmsst" class="form-label">Redução base de Cálculo ICMS-ST</label>
                        </div>
                        <div class="col-6 mb-3">
                            <select class="form-select" id="reducao_icmsst">
                                <option selected value="0">Sem redução</option>
                                <option value="1">Com redução</option>
                            </select>
                        </div>
                        <div class="col-6 mb-5">
                            <div class="input-group">
                                <input disabled id="baseicmsst" value="0" class="form-control" type="number"
                                    min="0" max="100">
                                <span class="input-group-text">%</span>
                            </div>
                        </div>

                        <div class="col-12 my-3 py-3 border-top">
                            <div class="row text-start">
                                <div class="col-6 mb-3 fw-semibold ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                    </svg> MVA <br> <span class="fw-normal">45,00%</span>
                                </div>
                                <div class="col-6 mb-3 fw-semibold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                    </svg> FCP <br> <span class="fw-normal">0,00%</span>
                                </div>
                                <div class="col-6 mb-3 fw-semibold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                    </svg> Alíquota ICMS <br> <span class="fw-normal">17,00%</span>
                                </div>
                                <div class="col-6 mb-3 fw-semibold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                    </svg> Alíquota ICMS-ST <br> <span class="fw-normal">17,00%</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <!-- Tabela Esquerda -->
            <div class=" p-3  mb-5 border shadow rounded bg-white">
                <!--Inputs de valores reais-->
                <form>
                    <div class="row  p-3    ">
                        <div class="col-md-6 mb-3">
                            <label for="valor_produto" class="form-label">Valor total do produto</label>
                            <div class="input-group">
                                <span class="input-group-text">R$</span>
                                <input id="valor_produto" type="text" value="0" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="valor_seguro" class="form-label">Valor do seguro</label>
                            <div class="input-group">
                                <span class="input-group-text">R$</span>
                                <input id="valor_seguro" type="text" value="0" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="tipofrete" class="form-label">Tipo de frete</label>
                            <select id="tipofrete" class="form-select">
                                <option value="0" selected>Sem frete</option>
                                <option value="1">Com frete</option>
                            </select>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="valor_frete" class="form-label">Valor do Frete</label>
                            <div class="input-group">
                                <span class="input-group-text">R$</span>
                                <input id="valor_frete" disabled type="text" value="0" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="desconto" class="form-label">Desconto</label>
                            <div class="input-group">
                                <span class="input-group-text">R$</span>
                                <input id="desconto" type="text" value="0" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="outros" class="form-label">Outras despesas</label>
                            <div class="input-group">
                                <span class="input-group-text">R$</span>
                                <input id="outros" type="text" value="0" class="form-control">
                            </div>
                        </div>

                        <!-- Resultados -->

                        <div class="col-md-6 p-2 border">
                            Base de Cálculo do ICMS <br>
                            <span>R$ 0,00</span>
                        </div>


                        <div class="col-md-6 p-2 border">
                            Valor do ICMS <br>
                            <span>R$ 0,00</span>
                        </div>

                        <div class="col-md-6 p-2 border">
                            Base de Cálculo do ICMS ST
                            <br>
                            <span>R$ 0,00</span>
                        </div>

                        <div class="col-md-6 p-2 border">
                            Valor do ICMS-ST<br>
                            <span>R$ 0,00</span>
                        </div>

                        <div class="col-md-4 p-2 border">
                            FCP <br>
                            <span>R$ 0,00</span>
                        </div>

                        <div class="col-md-4 p-2 border">
                            Valor do IPI<br>
                            <p>R$ <span id="ipi"></span></p>
                        </div>

                        <div class="col-md-4 p-2 border">
                            Valor da nota total <br>
                            R$ <span id="resultado"></span>
                        </div>

                        <div class="col-12 my-3">
                            <button type="button" id="btn_somar" class="btn btn-outline-info float-end">Somar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
