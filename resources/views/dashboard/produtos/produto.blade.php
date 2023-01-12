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
                @forelse ($produtos as $produto)
                    <tr>

                        <td>{{ $produto->nome_produto }}</td>
                        <td>{{ $produto->cest }}</td>
                        <td>{{ $produto->ncm }}</td>
                        <td>{{ $produto->segmento }}</td>
                        <td class="action">
                            <a data-id="{{ $produto->id }}" class="btn btn-info text-white edit " type="button"
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
                @empty
                    <tr>
                        <td colspan="5">Nenhum produto cadastrado</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

    </div>
    <div>
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
    </div>

@endsection
@section('js')

    <script>
        $(".edit").click(function() {
            var id = $(this).data('id');
            $.ajax({
                url: '/dashboard/produtos/' + id,
                type: 'GET',
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    $("#exampleModalLabel").html(data.nome_produto);
                    $("#produto").html(data.nome_produto);
                    $("#cest").html(data.cest);
                    $("#ncm").html(data.ncm);
                    $("#segmento").html(data.segmento);
                    $("#descricao").html(data.descricao);
                    $("#aliquota").html(data.aliquota);
                    $("#mva").html(data.mva);
                    $("#fcp").html(data.fcp);
                    $("#ajuste1").html(data.ajuste1);
                    $("#ajuste2").html(data.ajuste2);
                    $("#ajuste3").html(data.ajuste3);
                    $("#pauta").html(data.pauta);
                    $("#protocolo").html(data.protocolo);
                    $("#estados").html(data.estados);
                }
            });
        });
    </script>

@endsection
