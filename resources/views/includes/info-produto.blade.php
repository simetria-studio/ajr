
<div class="d-flex">
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
                    <a href="{{ route('icms-interna') }}"
                        class="btn btn-outline-danger mx-2 shadow">
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
