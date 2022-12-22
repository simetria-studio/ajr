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
                    <div class="input-group">
                        <input type="text" class="form-control " placeholder="Digite sua CEST/NCM" maxlength="8"
                            size="8">
                        <a href="{{ route('convenio') }}" type="button" class="btn btn-danger">BUSCAR</a>
                    </div>


                    <div class="d-flex my-3 ">
                        <div class="form-check mx-2">
                            <input class="form-check-input" name="busca" type="radio" id="cest" checked>
                            <label class="form-check-label" for="cest">
                                CEST
                            </label>
                        </div>
                        <div class="form-check mx-2">
                            <input class="form-check-input" name="busca" type="radio" id="ncm">
                            <label class="form-check-label" for="ncm">
                                NCM
                            </label>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <style>
            .titulo {
                color: #5ae4a8;
            }
        </style>

    @endsection
