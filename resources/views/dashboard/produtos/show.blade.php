@extends('layouts.dashboard')

@section('title', 'Descrição do Produto')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Descrição do produto</h1>
    </div>



    <div class="d-flex gap-5 mt-5">
        <div class="col-4">
            <div class="row">
                <div class=" border-dark shadow border-opacity-50 rounded p-3 mb-3 text-center">
                    <h4 class="text-danger fw-bold">{{ $info->estado->name }}</h4>
                </div>
            </div>
            <div class="row  rounded shadow p-3">
                <div class="col-6 p-3">
                    <h4>CEST</h4>
                    <p class="fs-5 text-secondary">{{ $produtos->cest }}</p>
                </div>
                <div class="col-6 p-3">
                    <h4>NCM</h4>
                    <p class="fs-5 text-secondary">{{ $produtos->ncm }}</p>
                </div>
                <div class="col-12 p-3">
                    <h4>Descrição</h4>
                    <p class="fs-5 text-secondary">{{ $produtos->descricao }}</p>
                </div>
                <div class="col-12 p-3">
                    <h4>Segmento</h4>
                    <p class="fs-5 text-secondary">{{ $produtos->segmento }}</p>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="row align-items-center rounded shadow text-center h-100 p-2 py-5">
                <div class="col-4  ">
                    <h2>{{ $info->aliquota }}%</h2>
                    <p class="fs-5 text-secondary">Alíquota</p>
                </div>
                <div class="col-4 ">
                    <h2>{{ $info->mva }}%</h2>
                    <p class="fs-5 text-secondary">MVA Original:</p>


                </div>
                <div class="col-4">
                    <h2>{{ $info->pauta }}</h2>
                    <p class="fs-5 text-secondary"> Pauta Fiscal</p>
                </div>
                <div class="col-4 offset-4">
                    <p class="fs-5 text-secondary  text-center ">Ajustes:</p>
                    <div class="d-flex justify-content-center ">
                        <h4 class="me-2">{{ $info->ajuste1 }}%</h4>
                        <h4 class="me-2">{{ $info->ajuste2 }}%</h4>
                        <h4 class="me-2">{{ $info->ajuste3 }}%</h4>
                    </div>
                </div>
                <div class="col-5 offset-1">
                    <h2>{{ $info->fcp }}%</h2>
                    <p class="fs-5 text-secondary"> Fundo de Combate a Pobreza</p>
                </div>

                <div class="col-5 ">
                    <h2>{{ $info->protocolo }}</h2>
                    <p class="fs-5 text-secondary">Protocolo / Convênio com</p>
                </div>
            </div>
        </div>
    </div>




















    {{-- <div class="row text-center mt-5">
        <div class="col-12 mb-3 ">
            <h3>{{ $produto->nome_produto }}</h3>
        </div>

        <div class="col-4">
            <h4>CEST:</h4>
            <h5>{{ $produto->cest }}</h5>
        </div>
        <div class="col-4">
            <h4>NCM:</h4>
            <h5>{{ $produto->ncm }}</h5>
        </div>
        <div class="col-4">
            <h4>Segmento:</h4>
            <h5>{{ $produto->segmento }}</h5>
        </div>

        <div class="col-4">
            <h4>Alíquota:</h4>
            <h5>{{ $produto->aliquota }}%</h5>
        </div>
        <div class="col-4">
            <h4>MVA:</h4>
            <h5>{{ $produto->mva }}%</h5>
        </div>
        <div class="col-4">
            <h4>FCP:</h4>
            <h5>{{ $produto->fcp }}%</h5>
        </div>
        <hr>
        <div class="col-12 mb-3">
            <h3>MVA Ajustado</h3>
        </div>
        <div class="col-4">
            <h4>Ajuste 1:</h4>
            <h5> {{ $produto->ajuste1 }}%</h5>
        </div>
        <div class="col-4">
            <h4>Ajuste 2:</h4>
            <h5> {{ $produto->ajuste2 }}%</h5>
        </div>
        <div class="col-4">
            <h4>Ajuste 3:</h4>
            <h5> {{ $produto->ajuste3 }}%</h5>
        </div>
        <div class="col-4">
            <h4>Pauta Fiscal:</h4>
            <h5> {{ $produto->pauta }}</h5>
        </div>
        <div class="col-4">
            <h4>Protocolo / Convênio:</h4>
            <h5> {{ $produto->protocolo }}</h5>
        </div>
        <div class="col-4 mb-3">
            <h4>Estado:</h4>
            <h5> {{ $produto->estados }}</h5>
        </div>
        <hr>
        <div class="col-12 text-center mb-5">
            <h3>Descrição</h3>
            <h5>{{ $produto->descricao }}</h5>
        </div>
        <hr>
    </div> --}}
@endsection
