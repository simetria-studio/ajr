@extends('layouts.dashboard')

@section('title', 'Cadastrar Estado')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Cadastrar estados</h2>
    </div>


    <div class=" col-6 offset-2 my-5">
        <form action="{{ route('estados.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-4 mb-3">
                    <div class="form-group">
                        <label for="estado" class="form-label">Nome do estado:</label>
                        <input type="text" id="estado" name="name" class="form-control" required>
                    </div>
                </div>

                <div class="col-2 mb-3">
                    <div class="form-group uppercase">
                        <label for="code" class="form-label">Code</label>
                        <input type="text" id="code" name="code" class="form-control uppercase" required
                            maxlength="2">
                    </div>
                </div>

                <div class="col-2 mb-3">
                    <div class="form-group">
                        <label for="pais" class="form-label ">País</label>
                        <input type="text" id="pais" name="country_code" class="form-control uppercase" required
                            maxlength="2">
                    </div>
                </div>

                <div class="col-4 mb-3 mt-4">
                    <button class="btn btn-lg btn-success btn-cadastrar ">Cadastrar</button>
                </div>
            </div>
        </form>

    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('.uppercase').keyup(function() {
                this.value = this.value.toLocaleUpperCase();
            });
        });


    </script>
@endsection
