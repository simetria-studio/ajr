@extends('layouts.dashboard')

@section('title', 'Criar Produto')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Cadastrar um Produtos</h2>
    </div>

    <div class=" col-6 offset-2 my-5">
        <form action="{{ route('info.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-6 mb-3">
                    <div class="form-group">
                        <label for="estados" class="form-label">Produto</label>
                        <select class="form-select" aria-label="Default select example" name="produto_id">
                            <option selected>Selecione o produto</option>
                            @foreach ($produtos as $produto)
                            <option value="{{ $produto->id }}">{{ $produto->nome_produto }}</option>
                            @endforeach

                          </select>
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

                <div class="col-4 mb-3">
                    <div class="form-group">
                        <label for="ajuste1" class="form-label">MVA Ajustado 1</label>
                        <input type="number" id="ajuste1" name="ajuste1" class="form-control">
                    </div>
                </div>
                <div class="col-4 mb-3">
                    <div class="form-group">
                        <label for="ajuste2" class="form-label">MVA Ajustado 2</label>
                        <input type="number" id="ajuste2" name="ajuste2" class="form-control">
                    </div>
                </div>
                <div class="col-4 mb-3">
                    <div class="form-group">
                        <label for="ajuste3" class="form-label">MVA Ajustado 3</label>
                        <input type="number" id="ajuste3" name="ajuste3" class="form-control">
                    </div>
                </div>

                <div class="col-4 mb-3">
                    <div class="form-group">
                        <label for="pauta" class="form-label">Pauta Fiscal</label>
                        <input type="text" id="pauta" name="pauta" class="form-control">
                    </div>
                </div>

                <div class="col-4 mb-3">
                    <div class="form-group">
                        <label for="protocolo" class="form-label">Protocolo / Convênio</label>
                        <input type="text" id="protocolo" name="protocolo" class="form-control">
                    </div>
                </div>

                <div class="col-4 mb-3">
                    <div class="form-group">
                        <label for="estados" class="form-label">Estado</label>
                        <select class="form-select" aria-label="Default select example" name="estado_id">
                            <option selected>Selecione o estado</option>
                            @foreach ($estados as $estado)
                            <option value="{{ $estado->id }}">{{ $estado->name }}</option>
                            @endforeach

                          </select>
                    </div>
                </div>


                <div class="mb-3">
                    <button class="btn btn-lg btn-success float-end">Cadastrar</button>
                </div>
            </div>
        </form>

    </div>
@endsection
