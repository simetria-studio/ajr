@extends('layouts.main')


@section('banner')
    @parent
@stop

@section('content')
    <div class="container ">
        <div class="row">
            <div class="my-2 text-center titulo">
                <h1>SUBSTITUIÇÃO TRIBUTÁRIA</h1>
            </div>
            <div class="col-6 mx-auto alert alert-danger mb-5 text-center" role="alert">
                <h5 class="">
                    Pesquise se há a aplicação da substituição tributária para o seu produto no Estado de destino
                </h5>
            </div>
            <div class="col-12 d-flex justify-content-center mb-5 ">
                <div class="d-flex flex-wrap justify-content-center  ">

                    <form action="/convenio" method="GET">
                        <div class="input-group col-4">
                            <input type="text" class="form-control" name="search" placeholder="Digite sua CEST/NCM">
                            <button type="submit" class="btn btn-danger">BUSCAR</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <style>
            .titulo {
                color: #5ae4a8;
            }
        </style>

    @endsection
