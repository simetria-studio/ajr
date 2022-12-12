@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="text-center  mb-5">
            <h2 class="pt-5 text-danger">Simulação Interna</h2>
        </div>
        <div class=" tabela ">
            <div class=" p-3  mb-5 border shadow rounded bg-white">
                <div class="row  p-3 ">
                    <div class="alert alert-danger col-12">
                        Quando os centavos forem múltiplos de 10, favor informar o zero (0); exemplo: 99,9 informar 99,90
                    </div>


                    <div class="col-12 mb-3">
                        Alíquota do IPI
                    </div>
                    <div class="col-5 mb-3">
                        <div class="input-group">
                            <input class="form-control" id="aliquota" name="aliquota" value="5" min="0"
                                max="100" type="number" size="10" maxlength="3">
                            <span class="input-group-text">%</span>
                        </div>
                    </div>

                    <div class="col-12 mb-2">
                        Redução base de Cálculo ICMS
                    </div>
                    <div class="col-6 mb-3">
                        <select class="form-select" name="" id="">
                            <option value="">Sem redução</option>
                            <option value="">Com redução</option>
                        </select>
                    </div>
                    <div class="col-6 mb-3">
                        <div class="input-group">
                            <input class="form-control" type="number" id="icms" value="12" min="0"
                                max="100" maxlength="3">
                            <span class="input-group-text">%</span>
                        </div>
                    </div>


                    <div class="col-12 mb-2">
                        Redução base de Cálculo ICMS-ST
                    </div>

                    <div class="col-6 mb-3">
                        <select class="form-select" name="" id="">
                            <option value="">Sem redução</option>
                            <option value="">Com redução</option>
                        </select>
                    </div>
                    <div class="col-6 mb-5">
                        <div class="input-group">
                            <input class="form-control" type="number" id="icmsSt" value="0" min="0"
                                max="100" maxlength="3">
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                   
                    <div class="col-12 my-3 py-3 border-top">
                        <div class="row text-start">
                            <div class="col-6 mb-3 fw-semibold ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                </svg> MVA <br> <span class="fw-normal">45,00%</span> </div>
                            <div class="col-6 mb-3 fw-semibold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                </svg> FCP <br> <span class="fw-normal">0,00%</span> </div>
                            <div class="col-6 mb-3 fw-semibold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                </svg> Alíquota ICMS <br> <span class="fw-normal">17,00%</span> </div>
                            <div class="col-6 mb-3 fw-semibold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16"
                                    height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                </svg> Alíquota ICMS-ST <br> <span class="fw-normal">17,00%</span> </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" p-3  mb-5 border shadow rounded bg-white">
                <!--Inputs de valores reais-->
                <div class="row  p-3    ">
                    <div class="col-6 mb-3">
                        <label class="form-label" for="produto">Valor total do produto</label>
                        <div class="input-group">
                            <span class="input-group-text">R$</span>
                            <input id="produto" required value="0" class="form-control" type="text">
                        </div>
                    </div>

                    <div class="col-6 mb-3">
                        <label class="form-label" for="seguro">Valor do seguro</label>
                        <div class="input-group">
                            <span class="input-group-text">R$</span>
                            <input id="seguro" required value="0" class="form-control" type="text">
                        </div>
                    </div>

                    <div class="col-6 mb-3">
                        <label for="" class="form-label">Tipo de frete</label>
                        <select name="" id="" class="form-select">
                            <option value="0">Com frete</option>
                            <option value="1">Sem frete</option>
                        </select>
                    </div>

                    <div class="col-6 mb-3">
                        <label class="form-label" for="valor-frete">Valor do Frete</label>
                        <div class="input-group">
                            <span class="input-group-text">R$</span>
                            <input id="valor-frete" required value="0" class="form-control" type="text">
                        </div>
                    </div>

                    <div class="col-6 mb-3">
                        <label class="form-label" for="desconto">Desconto</label>
                        <div class="input-group">
                            <span class="input-group-text">R$</span>
                            <input id="desconto" required value="0" class="form-control" type="text">
                        </div>
                    </div>

                    <div class="col-6 mb-5">
                        <label for="outros" class="form-label">Outras despesas acessórias</label>
                        <div class="input-group">
                            <span class="input-group-text">R$</span>
                            <input id="outros" required value="0" type="text" class="form-control">
                        </div>
                    </div>
                    <!-- Resultados -->

                    <div class="col-6 mb-3">
                        Base de Cálculo do ICMS <br>
                        <span>R$ 0,00</span>
                    </div>


                    <div class="col-6 mb-3">
                        Valor do ICMS <br>
                        <p>R$<span id="resultadoicms"></span></p>
                    </div>
                    <div class="col-6 mb-3">
                        Base de Cálculo do ICMS ST.
                        <br>
                        <span>R$ 0,00</span>

                    </div>
                    <div class="col-6 mb-3">
                        Valor do ICMS-ST<br>
                        <p>
                            R$ <span id="resultadoicmsst"></span>
                        </p>
                    </div>


                    <div class="col-4 mb-3">
                        FCP <br>
                        <span>R$ 0,00</span>
                    </div>

                    <div class="col-4 mb-3">
                        Valor do IPI<br>
                        <p>R$ <span id="ipi"></span></p>
                    </div>

                    <div class="col-4 mb-4">
                        Valor da nota <br>
                        <p>R$ <span id="resultado"></span></p>
                    </div>

                    <div class="col-12">
                        <button class="btn btn-success text-white float-end" onclick="somar()">Somar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

