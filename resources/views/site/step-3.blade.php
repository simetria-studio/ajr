@extends('layouts.main')
@section('banner')
    @parent
@stop
@section('content')
    <div class="container">
        <div class="row my-5">

            <div class="col-4">
                <div class="border estado  border-dark border-opacity-50 rounded text-center p-3 mb-3 shadow">
                    <span class="fw-semibold">Você está visualizando</span>
                    <h4 class="fw-bold text-danger estados">{{ $info->estado->name ?? '' }}</h4>
                </div>
                <div class="mb-3 shadow">
                    <div class="border  border-danger text-center bg-danger bg-opacity-50 p-3 rounded-top">
                        <span class="text-dark fw-semibold fs-5">Informações conforme <br> Convênio ICMS
                            142/2018</span>
                    </div>
                    <div class="border border-dark text-center  border-opacity-50  ">
                        <div class="border w-100 p-2 ">
                            <h4>{{ $produto->nome_produto }}</h4>
                        </div>
                    </div>
                    <div class="info border border-top-0 border-dark border-opacity-50  d-flex">
                        <div class="border w-50 p-3  ">
                            <span class="lh-1 fw-bold fs-5">CEST</span> <br>
                            <span class="fs-6 fw-semibold">{{ $produto->cest ?? '' }}</span>
                        </div>
                        <div class="border w-50 p-3 ">
                            <span class="lh-1 fw-bold fs-5">NCM</span> <br>
                            <span class="fs-6 fw-semibold">{{ $produto->ncm }}</span>
                        </div>
                    </div>
                    <div class="p-3 border border-dark border-opacity-50 border-top-0 ">
                        <h5>Descrição</h5>
                        <p class="lh-sm">{{ $produto->descricao }}</p>
                    </div>
                    <div class="p-3 border border-dark border-opacity-50 border-top-0 rounded-bottom">
                        <h5>Segmento</h5>
                        <p class="lh-sm">{{ $produto->segmento }}</p>
                    </div>
                </div>
            </div>
            <div class="col-8">
                <div class="p-1 text-center border rounded-top  border-dark border-opacity-50 ">
                    <span>
                        Você pode visualizar tambem as informações de outros estados
                    </span>
                </div>
                <div class="p-3 text-center border border-dark border-opacity-50 border-top-0 border-bottom-0">
                    @foreach ($estados as $estado)
                        <button data-produto="{{ $produto->id }}" data-estado="{{ $estado->id }}" type="button"
                            class="badge select-estado rounded-pill text-bg-danger active mb-1">{{ $estado->name }}
                        </button>
                    @endforeach
                </div>

                <div class="p-3 border border-dark border-opacity-50 shadow rounded-bottom pai">
                    <div class="d-flex info">
                        <div class="w-50  d-flex">
                            <div class="p-3">
                                <div class="text-center mb-3">
                                    <h3 class="lh-1">{{ $info->aliquota }}%</h3>
                                    <span>Alíquota</span>
                                </div>
                                <div class="text-center">
                                    <h3 class="lh-1">{{ $info->fcp }}%</h3>
                                    <span class="fs-6">Fundo de Combate a <br> Pobreza</span>
                                </div>
                            </div>
                            <div class="p-3">
                                <div class="text-center mb-3">
                                    <h3 class="lh-1">{{ $info->mva }}%</h3>
                                    <span>MVA Original</span>
                                </div>
                                <div class="text-center mb-2">
                                    <span>Ajustes:</span>
                                    <div class="d-flex ">
                                        <div class="px-2">
                                            <h6>{{ $info->ajuste1 }}%</h6>
                                        </div>
                                        <div class="px-2">
                                            <h6>{{ $info->ajuste2 }}%</h6>
                                        </div>
                                        <div class="px-2">
                                            <h6>{{ $info->ajuste3 }}%</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-50">
                            <div class="p-3">
                                <div class="text-center mb-4">
                                    <h5>Pauta Fiscal</h5>
                                    <span class="fw-3">{{ $info->pauta }} R$</span>
                                </div>
                                <div class="text-center mb-5">
                                    <h5> Protocolos/Convênios com </h5>
                                    <p>{{ $produto->protocolo }}</p>
                                </div>
                                <div class="text-center mb-4">
                                    <h4 class="text-danger">Simulações de cálculo</h4>
                                    <div class="d-flex justify-content-between">
                                        <a href="{{ route('icms-interna') }}" class="btn btn-outline-danger mx-2 shadow">
                                            Simulação Interna
                                        </a>
                                        <a href="{{ route('icms-interestadual') }}" class="btn btn-danger mx-2 shadow">
                                            Simulação Interestadual
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <style>
        .badge:hover {
            background: #dc3545 !important;
            color: white !important;
        }
    </style>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('.select-estado').click(function() {
                var produto = $(this).data('produto');
                var estado = $(this).data('estado');
                $('.estados').empty();
                $.ajax({
                    url: "{{ route('info.produto.render') }}",
                    type: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                        produto: produto,
                        estado: estado
                    },
                    success: function(data) {
                        console.log(data);
                        $('.estados').append(`<span>${data[0].info['estado'].name}</span>`);
                        $('.pai').html(data[0].view);

                    },
                    error: function(error) {
                        $('.pai').empty();
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Esse estado não possuí este produto, você pode consultar em outros estados!',

                        })
                    }
                });
            });

        });
    </script>
    <style>
        .badge {
            outline: none;
            border: 2px solid #dc3545;
        }
    </style>
@endsection
