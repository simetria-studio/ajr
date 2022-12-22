@extends('layouts.dashboard')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Produtos</h1>
    </div>




    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">Produto</th>
                    <th scope="col">CEST</th>
                    <th scope="col">NCM</th>
                    <th scope="col">Segmento</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produtos as $produto)
                    <tr>
                        <td>{{ $produto->nome_produto }}</td>
                        <td>{{ $produto->cest }}</td>
                        <td>{{ $produto->ncm }}</td>
                        <td>{{ $produto->segmento }}</td>
                        <td><a type="button">Ver mais</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-5">

        <form action="/products" method="POST">
            @csrf
            <div class="row justify-content-center">

                <div class="col-12 col-md-4 mb-3">
                    <div class="form-group">
                        <label for="produto" class="form-label">Nome do Produto</label>
                        <input type="text" id="produto" name="nome_produto" class="form-control">
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label for="cest" class="form-label">CEST</label>
                        <input type="text" id="cest" name="cest" class="form-control">
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label for="ncm" class="form-label">NCM</label>
                        <input type="text" id="ncm" name="ncm" class="form-control">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="segmento" class="form-label">Segmento</label>
                        <input type="text" id="segmento" name="segmento" class="form-control">
                    </div>

                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="descricao" class="form-label">Descrição</label>
                        <input type="text" id="descricao" name="descricao" class="form-control">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label for="aliquota" class="form-label">Alíquota</label>
                        <input type="text" id="aliquota" name="aliquota" class="form-control">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label for="mva" class="form-label">MVA</label>
                        <input type="text" id="mva" name="mva" class="form-control">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="form-group">
                        <label for="fcp" class="form-label">FCP</label>
                        <input type="text" id="fcp" name="fcp" class="form-control">
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="ajustes" class="form-label">Ajustes</label>
                        <input type="text" id="ajustes" name="ajustes" class="form-control">
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="pauta" class="form-label">Pauta Fiscal</label>
                        <input type="text" id="pauta" name="pauta" class="form-control">
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="protocolo" class="form-label">Protocolo / Convênio</label>
                        <input type="text" id="protocolo" name="protocolo" class="form-control">
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="estados" class="form-label">Estado</label>
                        <input type="text" id="estados" name="estados" class="form-control">
                    </div>
                </div>

                <div class="mb-3">
                    <button class="btn btn-lg btn-primary float-end">Cadastrar</button>
                </div>
        </form>

    </div>


    </div>
@endsection
