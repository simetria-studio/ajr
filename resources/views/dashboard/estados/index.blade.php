@extends('layouts.dashboard')

@section('title', 'Cadastrar Estado')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>Lista de estados</h2>
    </div>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            <p>{{ session('success') }}</p>
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead class="table-danger">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Code</th>
                    <th scope="col">País</th>

                </tr>
            </thead>
            <tbody>
                @forelse ($estados as $estado)
                    <tr>
                        <td>{{ $estado->id }}</td>
                        <td>{{ $estado->name }}</td>
                        <td>{{ $estado->code }}</td>
                        <td>{{ $estado->country_code }}</td>

                    </tr>
                @empty
                    <tr>
                        <td colspan="5">Nenhum estado cadastrado</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{-- {{ $produtos->links() }} --}}

    </div>

@endsection
