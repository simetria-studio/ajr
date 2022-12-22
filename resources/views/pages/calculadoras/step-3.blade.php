@extends('layouts.main')

@section('banner')
    @parent
@stop

@section('content')
    <div class="container">
        <div class="row my-5">
            <div class="col-4">
                <div class="border  border-dark border-opacity-50 rounded text-center p-3 mb-3 shadow">
                    <span class="fw-semibold">Você está visualizando</span>
                    <h4 class="fw-bold text-danger">Acre</h4>
                </div>
                <div class="mb-3 shadow">
                    <div class="border  border-danger text-center bg-danger bg-opacity-50 p-3 rounded-top">
                        <span class="text-dark fw-semibold fs-5">Informações conforme <br> Convênio ICMS 142/2018</span>
                    </div>
                    <div class="info border border-top-0 border-dark border-opacity-50  d-flex">
                        <div class="border w-50 p-3  ">
                            <span class="lh-1 fw-bold fs-5">CEST</span> <br>
                            <span class="fs-6 fw-semibold">00.000.01</span>
                        </div>
                        <div class="border w-50 p-3 ">
                            <span class="lh-1 fw-bold fs-5">NCM</span> <br>
                            <span class="fs-6 fw-semibold">0000.00.01</span>
                        </div>
                    </div>
                    <div class="p-3 border border-dark border-opacity-50 border-top-0 ">
                        <h5>Descrição</h5>
                        <p class="lh-sm">Açucar refinado, em embalagens de conteúdo superior a 2 kg e inferior ou igual a 5
                            kg</p>
                    </div>
                    <div class="p-3 border border-dark border-opacity-50 border-top-0 rounded-bottom">
                        <h5>Segmento</h5>
                        <p class="lh-sm">Produto alimentícios</p>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="p-1 text-center border rounded-top  border-dark border-opacity-50 ">
                    <span>
                        Os Estados a seguir são apenas os que constam com alguma previsão de substituíção tributária acerca
                        do produto selecionado.
                    </span>
                </div>
                <div class="p-3 text-center border border-dark border-opacity-50 border-top-0 border-bottom-0">
                   
                    <span type="button" class="badge rounded-pill text-bg-danger active">Acre</span>

                    <span type="button" class="badge rounded-pill bg-danger bg-opacity-50 text-dark text-opacity-50">
                        Alagoas
                    </span>

                    <span type="button" class="badge rounded-pill bg-danger bg-opacity-50 text-dark text-opacity-50">
                        Alagoas
                    </span>

                    <span type="button" class="badge rounded-pill bg-danger bg-opacity-50 text-dark text-opacity-50">
                        Alagoas
                    </span>

                    <span type="button" class="badge rounded-pill bg-danger bg-opacity-50 text-dark text-opacity-50">
                        Alagoas
                    </span>

                    <span type="button" class="badge rounded-pill bg-danger bg-opacity-50 text-dark text-opacity-50">
                        Alagoas
                    </span>

                    <span type="button" class="badge rounded-pill bg-danger bg-opacity-50 text-dark text-opacity-50">
                        Alagoas
                    </span>

                    <span type="button" class="badge rounded-pill bg-danger bg-opacity-50 text-dark text-opacity-50">
                        Alagoas
                    </span>

                    <span type="button" class="badge rounded-pill bg-danger bg-opacity-50 text-dark text-opacity-50">
                        Alagoas
                    </span>

                    <span type="button" class="badge rounded-pill bg-danger bg-opacity-50 text-dark text-opacity-50">
                        Alagoas
                    </span>

                    <span type="button" class="badge rounded-pill bg-danger bg-opacity-50 text-dark text-opacity-50">
                        Alagoas
                    </span>

                    <span type="button" class="badge rounded-pill bg-danger bg-opacity-50 text-dark text-opacity-50">
                        Alagoas
                    </span>

                    <span type="button" class="badge rounded-pill bg-danger bg-opacity-50 text-dark text-opacity-50">
                        Alagoas
                    </span>

                    <span type="button" class="badge rounded-pill bg-danger bg-opacity-50 text-dark text-opacity-50">
                        Alagoas
                    </span>

                    <span type="button" class="badge rounded-pill bg-danger bg-opacity-50 text-dark text-opacity-50">
                        Alagoas
                    </span>
                </div>
                <div class="p-3 border border-dark border-opacity-50 shadow rounded-bottom">
                    <div class="d-flex">
                        <div class="w-50  d-flex">
                            <div class="p-3">
                                <div class="text-center mb-3">
                                    <h3 class="lh-1">17%</h3>
                                    <span>Alíquota</span>
                                </div>
                                <div class="text-center">
                                    <h3 class="lh-1">0%</h3>
                                    <span class="fs-6">Fundo de Combate a <br> Pobreza</span>
                                </div>
                            </div>
                            <div class="p-3">
                                <div class="text-center mb-3">
                                    <h3 class="lh-1">45,00%</h3>
                                    <span>MVA Original</span>
                                </div>
                                <div class="text-center mb-2">
                                    <span>Ajustes:</span>
                                    <div class="d-flex ">
                                        <div class="px-2">
                                            <h6>67,71%</h6>
                                            <span>4%</span>
                                        </div>
                                        <div class="px-2">
                                            <h6>67,71%</h6>
                                            <span>4%</span>
                                        </div>
                                        <div class="px-2">
                                            <h6>67,71%</h6>
                                            <span>4%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-50">
                            <div class="p-3">
                                <div class="text-center mb-4">
                                    <h5>Pauta Fiscal</h5>
                                    <span>Este produto não possui pauta fiscal.</span>
                                </div>
                                <div class="text-center mb-5">
                                    <h5> Protocolos/Convênios com </h5>
                                    <p>
                                        não há protocolos deste item em operações destinadas ao estado selecionado.
                                    </p>
                                </div>
                                <div class="text-center mb-4">
                                    <h4 class="text-danger">Simulações de cálculo</h4>
                                    <div class="d-flex justify-content-between">
                                        <a href="{{ route('icms-interna') }}" class="btn btn-outline-danger mx-2 shadow">
                                            Simulação Interna
                                        </a>
                                        <a href="{{ route('icms-interestadual') }}" class="btn btn-danger mx-2 shadow">
                                            Simulação Interestadual
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .badge:hover {
            background: #dc3545 !important;
            color: white !important;
        }
    </style>
@endsection
