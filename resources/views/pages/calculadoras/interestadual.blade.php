@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="text-center my-5">
            <h2 class="text-danger">Simulação Interestadual</h2>
        </div>

        <div class="text-center mb-5">
            <h3>O Remetente é Optante do Simples Nacional?</h3>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="spy" value="option1">
                <label class="form-check-label" for="spy">Sim</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="spn" value="option2">
                <label class="form-check-label" for="spn">Não</label>
            </div>
        </div>

        <div class="tabela">
            <div class="border shadow rounded bg-white p-5">
                <form>
                    <div class="row">
                        <div class="col-12 mb-2">
                            <label for="ipivalue" class="form-label">Alíquota do IPI</label>
                        </div>
                        <div class="col-md-4 col-6  mb-3">
                            <div class="input-group">
                                <input id="ipivalue" class="form-control" type="number" min="0" max="100">
                                <span class="input-group-text">%</span>
                            </div>

                        </div>

                        <div class="col-12 mb-2">
                            <label for="reducao_icms" class="form-label">
                                Redução base de cálculo ICMS
                            </label>
                        </div>

                        <div class="col-md-6 col-6   mb-3">
                            <select name="" id="reducao_icms" class="form-select">
                                <option selected value="0">Sem Redução</option>
                                <option value="1">Com Redução</option>
                            </select>
                        </div>


                        <div class="col-md-4 mb-3 reducao_icms">
                            <div class="input-group">
                                <input id="baseicms" disabled value="0" class="form-control" type="number"
                                    min="0" max="100">
                                <span class="input-group-text">%</span>
                            </div>
                        </div>

                        <div class="col-12 mb-2">
                            <label for="reducao_icmsst" class="form-label">
                                Redução base de cálculo ICMS-ST

                            </label>
                        </div>

                        <div class="col-md-6 mb-3">
                            <select name="" id="reducao_icmsst" class="form-select">
                                <option value="0">Sem Redução</option>
                                <option value="1">Com Redução</option>
                            </select>
                        </div>

                        <div class="col-md-4 mb-3">
                            <div class="input-group">
                                <input disabled id="baseicmsst" value="0" class="form-control" type="number"
                                    min="0" max="100">
                                <span class="input-group-text">%</span>
                            </div>
                        </div>

                        <div class="col-12 my-5 pt-5 border-top">
                            <div class=" row text-start">
                                <div class="col-md-6 mb-3 fw-semibold ">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                    </svg> MVA
                                </div>
                                <div class="col-md-6 mb-3 fw-semibold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                    </svg> FCP
                                </div>
                                <div class="col-md-6 mb-3 fw-semibold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                    </svg> Alíquota ICMS
                                </div>
                                <div class="col-md-6 mb-3 fw-semibold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                    </svg> Alíquota ICMS-ST
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="border shadow rounded bg-white p-5">
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="valor_produto" class="form-label">Valor total dos produtos</label>
                            <div class="input-group">
                                <span class="input-group-text">R$</span>
                                <input id="valor_produto" type="text" value="0" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="valor_seguro" class="form-label">Valor do Seguro</label>
                            <div class="input-group">
                                <span class="input-group-text">R$</span>
                                <input id="valor_seguro" type="text" value="0" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="tipofrete" class="form-label">Tipo de Frete</label>
                            <select name="" id="tipofrete" class="form-select">
                                <option value="0" selected>Sem frete</option>
                                <option value="1">Com frete</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3" id="frete">
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
                            <label for="outros" class="form-label">Outras despesas acessórias</label>
                            <div class="input-group">
                                <span class="input-group-text">R$</span>
                                <input id="outros" type="text" value="0" class="form-control">
                            </div>
                        </div>


                        <div class="col-12 mb-3">
                            <div class="row ">
                                <div class="col-md-6 p-2 border">
                                    Base de cálculo do ICMS <br>
                                    <span>R$ 0,00</span>
                                </div>
                                <div class="col-md-6 p-2 border">
                                    Valor do ICMS <br>
                                    <span>R$0,00</span>
                                </div>
                                <div class="col-md-6 p-2 border">
                                    Base de cálculo do ICMS-ST
                                    <br>
                                    <span>R$ 0,00</span>
                                </div>
                                <div class="col-md-6 p-2 border">
                                    Valor do ICMS-ST <br>
                                    <span>R$0,00</span>
                                </div>
                                <div class="col-md-4 p-2 border">
                                    FCP <br>
                                    <span>0,00%</span>
                                </div>
                                <div class="col-md-4 p-2 border">
                                    Valor do IPI <br>
                                    <span>R$0,00</span>
                                </div>
                                <div class="col-md-4 p-2 border">
                                    Valor da nota total <br>
                                    R$
                                    <span type="text" id="resultado" value="0"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mb-3">
                            <button type="button" id="btn_somar" class="btn btn-outline-info">Somar</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection
