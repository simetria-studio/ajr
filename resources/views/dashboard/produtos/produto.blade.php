@extends('layouts.dashboard')

@section('title', 'Produtos')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Produtos</h2>
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
                        <td class="action">
                            <a href="/dashboard/{{ $produto->id }}" class="btn btn-info text-white " type="button"
                                data-bs-toggle="modal" data-bs-target="#exampleModal">Ver mais
                            </a>
                            <a href="/dashboard/produtos/edit/{{ $produto->id }}" class="btn btn-secondary">Editar</a>
                            <form action="/dashboard/produtos/{{ $produto->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Deletar</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $produto->nome_produto }}</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="d-flex justify-content-around">
                            <div>
                                <p>Produto :</p>
                                <p>CEST :</p>
                                <p>NCM :</p>
                                <p>Segmento :</p>
                                <p>Descrição :</p>
                                <p>Alíquota :</p>
                                <p>MVA :</p>
                                <p>FCP :</p>
                                <p>Ajustes :</p>
                                <p>Pauta Fiscal :</p>
                                <p>Protocolo / Convênio :</p>
                                <p>Estado :</p>
                            </div>
                            <div>
                                <p>{{ $produto->nome_produto }}</p>
                                <p>{{ $produto->cest }}</p>
                                <p>{{ $produto->ncm }}</p>
                                <p>{{ $produto->segmento }}</p>
                                <p>{{ $produto->descricao }}</p>
                                <p>{{ $produto->aliquota }}</p>
                                <p>{{ $produto->mva }}</p>
                                <p>{{ $produto->fcp }}</p>
                                <p>{{ $produto->ajustes }}</p>
                                <p>{{ $produto->pauta }}</p>
                                <p>{{ $produto->protocolo }}</p>
                                <p>{{ $produto->estados }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection
