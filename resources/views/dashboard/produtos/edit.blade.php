@extends('layouts.dashboard')

@section('title', 'Editar' )

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2 class="text-secondary">Alterar informações do produto</h2>
</div>

<div class="col-6 offset-3  my-5">
    <form action="/dashboard/produtos/update/{{$produto->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-6 mb-3">
                <div class="form-group">
                    <label for="produto" class="form-label">Nome do Produto</label>
                    <input type="text" id="produto" name="nome_produto" value="{{ $produto->nome_produto }}" class="form-control">
                </div>
            </div>

            <div class="col-6 mb-3">
                <div class="form-group">
                    <label for="cest" class="form-label">CEST</label>
                    <input type="text" id="cest" name="cest" value="{{ $produto->cest }}" class="form-control">
                </div>
            </div>

            <div class="col-6 mb-3">
                <div class="form-group">
                    <label for="ncm" class="form-label">NCM</label>
                    <input type="text" id="ncm" name="ncm" value="{{ $produto->ncm }}" class="form-control">
                </div>
            </div>

            <div class="col-6 mb-3">
                <div class="form-group">
                    <label for="segmento" class="form-label">Segmento</label>
                    <input type="text" id="segmento" name="segmento" value="{{ $produto->segmento }}" class="form-control">
                </div>

            </div>
            <div class="col-6 mb-3">
                <div class="form-group">
                    <label for="descricao" class="form-label">Descrição</label>
                    <input type="text" id="descricao" name="descricao" value="{{ $produto->descricao }}" class="form-control">
                </div>
            </div>
            <div class="col-6 mb-3">
                <div class="form-group">
                    <label for="aliquota" class="form-label">Alíquota</label>
                    <input type="text" id="aliquota" name="aliquota" value="{{ $produto->aliquota }}" class="form-control">
                </div>
            </div>
            <div class="col-6 mb-3">
                <div class="form-group">
                    <label for="mva" class="form-label">MVA</label>
                    <input type="text" id="mva" name="mva" value="{{ $produto->mva }}" class="form-control">
                </div>
            </div>
            <div class="col-6 mb-3">
                <div class="form-group">
                    <label for="fcp" class="form-label">FCP</label>
                    <input type="text" id="fcp" name="fcp" value="{{ $produto->fcp }}" class="form-control">
                </div>
            </div>
            <div class="col-6 mb-3">
                <div class="form-group">
                    <label for="ajuste1" class="form-label">Ajustes</label>
                    <input type="text" id="ajuste1" name="ajuste1" value="{{ $produto->ajuste1 }}" class="form-control">
                </div>
            </div>
            <div class="col-6 mb-3">
                <div class="form-group">
                    <label for="ajuste2" class="form-label">Ajustes</label>
                    <input type="text" id="ajuste2" name="ajuste2" value="{{ $produto->ajuste2 }}" class="form-control">
                </div>
            </div>
            <div class="col-6 mb-3">
                <div class="form-group">
                    <label for="ajuste3" class="form-label">Ajustes</label>
                    <input type="text" id="ajuste3" name="ajuste3" value="{{ $produto->ajuste3 }}" class="form-control">
                </div>
            </div>
            <div class="col-6 mb-3">
                <div class="form-group">
                    <label for="pauta" class="form-label">Pauta Fiscal</label>
                    <input type="text" id="pauta" name="pauta" value="{{ $produto->pauta }}" class="form-control">
                </div>
            </div>
            <div class="col-6 mb-3">
                <div class="form-group">
                    <label for="protocolo" class="form-label">Protocolo / Convênio</label>
                    <input type="text" id="protocolo" name="protocolo" value="{{ $produto->protocolo }}" class="form-control">
                </div>
            </div>
            <div class="col-6 mb-3">
                <div class="form-group">
                    <label for="estados" class="form-label">Estado</label>
                    <input type="text" id="estados" name="estados" value="{{ $produto->estados }}" class="form-control">
                </div>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-lg btn-info text-white float-end">Alterar</button>
            </div>
        </div>
    </form>
</div>
@endsection
