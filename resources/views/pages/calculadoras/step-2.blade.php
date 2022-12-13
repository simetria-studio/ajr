@extends('layouts.main')

@section('banner')
    @parent
@stop

@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center g-2">
            <div class="col-6 text-center my-4">
                <div class="alert alert-primary">
                    Escolha qual item se enquadra a descrição e segmento do seu produto ou faça uma nova pesquisa
                </div>
            </div>

            <div class="text-center">
                <h4>Itens do Convênio</h4>
            </div>
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>CEST</th>
                        <th>NCM</th>
                        <th>Descrição</th>
                        <th>Segmento</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>00000001</th>
                        <th>00000001</th>
                        <th>Açucar refinado em embalagem de conteúdo superior a 5kg </th>
                        <th>Produto Alimentícios</th>
                        <th><button class="btn btn-primary">escolher</button></th>
                    </tr>
                    <tr>
                        <th>00000001</th>
                        <th>00000001</th>
                        <th>Açucar refinado em embalagem de conteúdo superior a 5kg </th>
                        <th>Produto Alimentícios</th>
                        <th><button class="btn btn-primary">escolher</button></th>
                    </tr>

                </tbody>
            </table>

        </div>




    </div>
@endsection
