@extends('layouts.main')

@section('banner')
    @parent
@stop
@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-6 text-center my-4">
                <div class="alert alert-danger">
                    Escolha qual item se enquadra a descrição e segmento do seu produto ou faça uma nova pesquisa
                </div>
            </div>
            <div class="text-center">
                <h4>Itens do Convênio</h4>
            </div>
            <table class="table table-bordered table-hover">
                <thead class="table-danger">
                    <tr>
                        <th>CEST</th>
                        <th>NCM</th>
                        <th>Descrição</th>
                        <th>Segmento</th>
                        <th>Estado</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($info as $i)
                        <tr>
                            <td>{{ $i->produto->cest }}</td>
                            <td>{{ $i->produto->ncm }}</td>
                            <td>{{ $i->produto->descricao }}</td>
                            <td>{{ $i->produto->segmento }}</td>
                            <td>{{ $i->estado->name }}</td>
                            <td>
                                <a href="/convenio/detalhes/{{ $i->produto->id }}" class="btn btn-danger">escolher</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">
                                Nenhum item encontrado,
                                <a class="text-danger" href="{{ route('substituicao-tributaria') }}">voltar</a>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $info->links() }}
        </div>
    </div>
@endsection
