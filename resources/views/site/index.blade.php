@extends('layouts.main')

@section('banner')
    @parent
@section('button')
    <a type="button" href="{{ route('substituicao-tributaria') }}" class=" btn btn-primary shadow btn-lg">Acesse
        Agora
    </a>
@stop
@endsection

@section('content')
<div class="container">
    <div class="img">
        <img src="{{ asset('img/baner3.jpg') }}" class="img">
    </div>
    <div class="destaques">
        <p>Últimos Destaques Fiscais:</p>
    </div>
    <div class='wrapcube'>
        <div class='cube' id='a'>
            <div class='side front'><a href="{{ route('estados') }}">Substituição Tributária</a></div>
            <div class='side left'></div>
            <div class='side right'></div>
            <div class='side back'></div>
            <div class='side top'></div>
            <div class='side bottom'></div>
        </div>
        <div class='cube' id='b'>
            <div class='side front'>Diferencial de Alíquotas</div>
            <div class='side left'></div>
            <div class='side right'></div>
            <div class='side back'></div>
            <div class='side top'></div>
            <div class='side bottom'></div>
        </div>
        <div class='cube' id='c'>
            <div class='side front'>HOVER ME</div>
            <div class='side left'></div>
            <div class='side right'></div>
            <div class='side back'></div>
            <div class='side top'></div>
            <div class='side bottom'></div>
        </div>
        <div class='cube' id='d'>
            <div class='side front'>HOVER ME</div>
            <div class='side left'></div>
            <div class='side right'></div>
            <div class='side back'></div>
            <div class='side top'></div>
            <div class='side bottom'></div>
        </div>
        <div class='cube' id='e'>
            <div class='side front'>HOVER ME</div>
            <div class='side left'></div>
            <div class='side right'></div>
            <div class='side back'></div>
            <div class='side top'></div>
            <div class='side bottom'></div>
        </div>
        <div class='cube' id='f'>
            <div class='side front'>HOVER ME</div>
            <div class='side left'></div>
            <div class='side right'></div>
            <div class='side back'></div>
            <div class='side top'></div>
            <div class='side bottom'></div>
        </div>
        <div class='cube' id='g'>
            <div class='side front'>HOVER ME</div>
            <div class='side left'></div>
            <div class='side right'></div>
            <div class='side back'></div>
            <div class='side top'></div>
            <div class='side bottom'></div>
        </div>
    </div>
</div>
@endsection
