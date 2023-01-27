@extends('layouts.dashboard')

@section('title', 'Editar' )

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h2 class="">Alterar informações do produto</h2>
</div>

<div class="col-6 offset-2  my-5">
    <form action="/dashboard/produtos/update/{{$info->produto->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12 mb-3">
                <div class="form-group">
                    <label for="produto" class="form-label">Nome do Produto</label>
                    <input type="text" id="produto" name="nome_produto" value="{{ $info->produto->nome_produto }}" class="form-control">
                </div>
            </div>

         <div class="col-6 mb-3">
                <div class="form-group">
                    <label for="estado_id" class="form-label">Estado</label>
                    <select class="form-select" aria-label="Default select example" id="estado_id" name="estado_id">
                        <option  selected>Selecione o estado</option>
                        @foreach ($estados as $estado)
                            <option   value="{{ $estado->id }}">{{ $estado->name }}</option>
                        @endforeach

                    </select>
                </div>
            </div>

            <div class="col-6 mb-3">
                <div class="form-group">
                    <label for="segmento" class="form-label">Segmento</label>
                    <input type="text" id="segmento" name="segmento" value="{{ $info->produto->segmento }}" class="form-control">
                </div>
            </div>

            <div class="col-6 mb-3">
                <div class="form-group">
                    <label for="cest" class="form-label">CEST</label>
                    <input type="text" id="cest" name="cest" value="{{ $info->produto->cest }}" class="form-control">
                </div>
            </div>

            <div class="col-6 mb-3">
                <div class="form-group">
                    <label for="ncm" class="form-label">NCM</label>
                    <input type="text" id="ncm" name="ncm" value="{{ $info->produto->ncm }}" class="form-control">
                </div>
            </div>



            <div class="col-6 mb-3">
                <div class="form-group">
                    <label for="aliquota" class="form-label">Alíquota</label>
                    <input type="text" id="aliquota" name="aliquota" value="{{ $info->aliquota }}" class="form-control">
                </div>
            </div>

            <div class="col-6 mb-3">
                <div class="form-group">
                    <label for="fcp" class="form-label">FCP</label>
                    <input type="text" id="fcp" name="fcp" value="{{ $info->fcp }}" class="form-control">
                </div>
            </div>
            <div class="col-3 mb-3">
                <div class="form-group">
                    <label for="mva" class="form-label">MVA Original</label>
                    <input type="text" id="mva" name="mva" value="{{ $info->mva }}" class="form-control">
                </div>
            </div>
            <div class="col-3 mb-3">
                <div class="form-group">
                    <label for="ajuste1" class="form-label">Ajustes</label>
                    <input type="text" id="ajuste1" name="ajuste1" value="{{ $info->ajuste1 }}" class="form-control">
                </div>
            </div>
            <div class="col-3 mb-3">
                <div class="form-group">
                    <label for="ajuste2" class="form-label">Ajustes</label>
                    <input type="text" id="ajuste2" name="ajuste2" value="{{ $info->ajuste2 }}" class="form-control">
                </div>
            </div>
            <div class="col-3 mb-3">
                <div class="form-group">
                    <label for="ajuste3" class="form-label">Ajustes</label>
                    <input type="text" id="ajuste3" name="ajuste3" value="{{ $info->ajuste3 }}" class="form-control">
                </div>
            </div>
            <div class="col-6 mb-3">
                <div class="form-group">
                    <label for="pauta" class="form-label">Pauta Fiscal</label>
                    <input type="text" id="pauta" name="pauta" value="{{ $info->pauta }}" class="form-control">
                </div>
            </div>
            <div class="col-6 mb-3">
                <div class="form-group">
                    <label for="protocolo" class="form-label">Protocolo / Convênio</label>
                    <input type="text" id="protocolo" name="protocolo" value="{{ $info->protocolo }}" class="form-control">
                </div>
            </div>





            <div class="col-12 mb-3">
                <div class="form-group">
                    <label for="descricao" class="form-label">Descrição</label>
                    <textarea type="text" rows="5" id="descricao" name="descricao"  class="form-control">{{ $info->produto->descricao }}</textarea>
                </div>
            </div>

            <div class="mb-3">
                <button type="submit" class="btn btn-lg btn-info text-white float-end">Alterar</button>
            </div>
        </div>
    </form>
</div>
@endsection
