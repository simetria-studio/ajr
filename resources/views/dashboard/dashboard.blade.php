@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')

    <div class="mb-3">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1>Dashboard</h1>
        </div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 ">
            <h3 class="text-danger">Usuários</h3>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-sm table-hover ">
                <thead class="table-danger ">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->id }}</td>
                            <td>{{ $usuario->name }}</td>
                            <td>{{ $usuario->email }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">Nenhum usuário cadastrado</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
          <div>
            <a class="nav-link text-primary" href="{{ route('usuarios') }}">Ir para pagina de usuários</a>
          </div>
        </div>
    </div>


    <div class="mb-3">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
            <h3 class="text-danger">Produtos</h3>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover ">
                <thead class="table-danger">
                    <tr>
                        <th scope="col">Produto</th>
                        <th scope="col">CEST</th>
                        <th scope="col">NCM</th>
                        <th scope="col">Segmento</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($produtos as $produto)
                        <tr>
                            <td>{{ $produto->nome_produto }}</td>
                            <td>{{ $produto->cest }}</td>
                            <td>{{ $produto->ncm }}</td>
                            <td>{{ $produto->segmento }}</td>
                            <td class="d-flex justify-content-around" >
                                <a href="/dashboard/produtos/show/{{ $produto->id }}" class="btn btn-info text-white" type="button">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-eye" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                                        <path
                                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
                                    </svg>
                                </a>
                                <a href="/dashboard/produtos/edit/{{ $produto->id }}" class="btn btn-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd"
                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg>
                                </a>
                                <form action="/dashboard/produtos/{{ $produto->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a type="submit" class=" btn btn-danger">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                          </svg>
                                    </a>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">Nenhum produto cadastrado</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div>
                <a class="nav-link text-primary" href="{{ route('produto.index') }}">Ir para pagina de produtos</a>
            </div>

        </div>
        {{-- <div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">{{ $produto->nome_produto ?? '' }}</h1>
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
                                    <p>Ajuste 1 :</p>
                                    <p>Ajuste 2 :</p>
                                    <p>Ajuste 3 :</p>
                                    <p>Pauta Fiscal :</p>
                                    <p>Protocolo / Convênio :</p>
                                    <p>Estado :</p>
                                </div>
                                <div>
                                    <p id="produto"></p>
                                    <p id="cest"></p>
                                    <p id="ncm"></p>
                                    <p id="segmento"></p>
                                    <p id="descricao"></p>
                                    <p id="aliquota"></p>
                                    <p id="mva"></p>
                                    <p id="fcp"></p>
                                    <p id="ajuste1"></p>
                                    <p id="ajuste2"></p>
                                    <p id="ajuste3"></p>
                                    <p id="pauta"></p>
                                    <p id="protocolo"></p>
                                    <p id="estados"></p>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        </div>


                    </div>
                </div>
            </div>
        </div> --}}
    </div>

@endsection

