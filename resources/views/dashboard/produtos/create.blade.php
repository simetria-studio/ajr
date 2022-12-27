@extends('layouts.dashboard')

@section('title', 'Criar Produto')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Cadastrar um Produtos</h2>
    </div>

    <div class="col-6 offset-2  my-5">
        <form action="/dashboard/produtos" method="POST">
            @csrf
            <div class="row">
                <div class="col-6 mb-3">
                    <div class="form-group">
                        <label for="produto" class="form-label">Nome do Produto</label>
                        <input type="text" id="produto" name="nome_produto" class="form-control" required
                            placeholder="Nome ou tipo de produto">
                    </div>
                </div>

                <div class="col-6 mb-3">
                    <div class="form-group">
                        <label for="segmento" class="form-label">Segmento</label>
                        <input type="text" id="segmento" name="segmento" class="form-control" required
                            placeholder="Segmento">
                    </div>
                </div>

                <div class="col-6 mb-3">
                    <div class="form-group">
                        <label for="cest" class="form-label">CEST</label>
                        <input type="text" id="cest" name="cest" class="form-control cest" required
                            placeholder="00.000.00">
                    </div>
                </div>

                <div class="col-6 mb-3">
                    <div class="form-group">
                        <label for="ncm" class="form-label ">NCM</label>
                        <input type="text" id="ncm" name="ncm" class="form-control ncm" required
                            placeholder="0000.00.00">
                    </div>
                </div>


                <div class="col-12 mb-3">
                    <div class="form-group">
                        <label for="descricao" class="form-label">Descrição</label>
                        <textarea name="descricao" id="descricao" name="descricao" class="form-control" required
                        placeholder="Breve descrição do produto"></textarea>
                    </div>
                </div>

                <div class="col-4 mb-3">
                    <div class="form-group">
                        <label for="aliquota" class="form-label ">Alíquota</label>
                        <div class="input-group">
                            <input type="number" id="aliquota" name="aliquota" min="0" max="100" required
                                class="form-control aliquota">
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                </div>

                <div class="col-4 mb-3">
                    <div class="form-group">
                        <label for="mva" class="form-label">MVA</label>
                        <div class="input-group">
                            <input type="number" id="mva" name="mva" class="form-control mva" required>
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                </div>

                <div class="col-4 mb-3">
                    <div class="form-group">
                        <label for="fcp" class="form-label">FCP</label>
                        <div class="input-group">
                            <input type="number" id="fcp" name="fcp" class="form-control fcp" required>
                            <span class="input-group-text">%</span>
                        </div>
                    </div>
                </div>

                <div class="col-6 mb-3">
                    <div class="form-group">
                        <label for="ajustes" class="form-label">Ajustes</label>
                        <input type="text" id="ajustes" name="ajustes" class="form-control">
                    </div>
                </div>

                <div class="col-6 mb-3">
                    <div class="form-group">
                        <label for="pauta" class="form-label">Pauta Fiscal</label>
                        <input type="text" id="pauta" name="pauta" class="form-control">
                    </div>
                </div>

                <div class="col-6 mb-3">
                    <div class="form-group">
                        <label for="protocolo" class="form-label">Protocolo / Convênio</label>
                        <input type="text" id="protocolo" name="protocolo" class="form-control">
                    </div>
                </div>

                <div class="col-6 mb-3">
                    <div class="form-group">
                        <label for="estados" class="form-label">Estado</label>
                        <input type="text" id="estados" name="estados" class="form-control">
                    </div>
                </div>

                <div class="mb-3">
                    <button class="btn btn-lg btn-success float-end">Cadastrar</button>
                </div>
            </div>
        </form>
    </div>
@endsection
