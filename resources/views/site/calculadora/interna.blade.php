@extends('layouts.main')

@section('content')
    <div class="container">
        <!-- Titulo da pagina-->

        <div class="text-center  mb-5">
            <h2 class="pt-5 text-danger">Simulação Interna</h2>
        </div>
        <table class="table table-sm table-striped table-bordered">
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Valor dos produtos</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between">
                            <label for="">R$</label>
                            <input type="text" class="form-control form-control-sm mx-2">
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Valor Original do produto">
                                ?
                            </button>
                        </div>
                    </td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Valor do frete</td>
                    <td>
                        <div class="d-flex align-items-center  justify-content-between">
                            <label for="">R$</label>
                            <input type="text" class="form-control form-control-sm mx-2">
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Valor do frete">
                                ?
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Valor do seguro</td>
                    <td>
                        <div class="d-flex align-items-center  justify-content-between">
                            <label for="">R$</label>
                            <input type="text" class="form-control form-control-sm mx-2">
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Valor do seguro">
                                ?
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Outras despesas acessórias</td>
                    <td>
                        <div class="d-flex align-items-center  justify-content-between">
                            <label for="">R$</label>
                            <input type="text" class="form-control form-control-sm mx-2">
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Outras despesas">
                                ?
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Valor do desconto</td>
                    <td>
                        <div class="d-flex align-items-center  justify-content-between">
                            <label for="">R$</label>
                            <input type="text" class="form-control form-control-sm mx-2">
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Desconto">
                                ?
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td>Subtotal</td>
                    <td>
                        <div class="d-flex align-items-center  justify-content-between">
                            <span>R$ 0,00</span>
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Subtotal">
                                ?
                            </button>
                        </div>

                    </td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Redução de base de cálculo do ICMS</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between">
                            <label for="">%</label>
                            <input type="text" class="form-control form-control-sm mx-2">
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Redução de base de cálculo do ICMS">
                                ?
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Base de cálculo do ICMS</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between">
                            <span>R$ 0,00</span>
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Base de cálculo do ICMS">
                                ?
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>Alíquota do ICMS</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between">
                            <label for="">%</label>
                            <input type="text" class="form-control form-control-sm mx-2">
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Alíquota">
                                ?
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>Valor do ICMS Desonerado</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between">
                            <span>R$ 0,00</span>
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Valor do ICMS Desonerado">
                                ?
                            </button>
                        </div>

                    </td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>Base de cálculo do IPI</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between">
                            <span>R$ 0,00</span>
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Base de cálculo do IPI">
                                ?
                            </button>
                        </div>

                    </td>
                </tr>
                <tr>
                    <th scope="row">11</th>
                    <td>Alíquota do IPI</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between">
                            <label for="">%</label>
                            <input type="text" class="form-control form-control-sm mx-2">
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Alíquota do IPI">
                                ?
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">12</th>
                    <td>Valor do IPI</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between">
                            <span>R$ 0,00</span>
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Valor do IPI">
                                ?
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">13</th>
                    <td>Valor total da operação (antes do cálculo da Substituição Tributária)</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between">
                            <span>R$ 0,00</span>
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Valor total da operação (antes do cálculo da Substituição Tributária)">
                                ?
                            </button>
                        </div>

                    </td>
                </tr>
                <tr>
                    <th scope="row">14</th>
                    <td>MVA</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between">
                            <label for="">%</label>
                            <input type="text" class="form-control form-control-sm mx-2">
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="MVA">
                                ?
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">15</th>
                    <td>Redução de base de cálculo do ICMS-ST</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between">
                            <label for="">%</label>
                            <input type="text" class="form-control form-control-sm mx-2">
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Redução de base de cálculo do ICMS-ST">
                                ?
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">16</th>
                    <td>Base de cálculo do ICMS-ST</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between">
                            <span>R$ 0,00</span>
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Base de cálculo do ICMS-ST">
                                ?
                            </button>
                        </div>

                    </td>
                </tr>
                <tr>
                    <th scope="row">17</th>
                    <td>Alíquota do ICMS-ST</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between">
                            <label for="">%</label>
                            <input type="text" class="form-control form-control-sm mx-2">
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Alíquota do ICMS-ST">
                                ?
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td>Subtotal Substituição Tributária (antes da dedução do ICMS próprio)</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between">
                            <span>R$ 0,00</span>
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Subtotal Substituição Tributária (antes da dedução do ICMS próprio)">
                                ?
                            </button>
                        </div>

                    </td>
                </tr>
                <tr>
                    <th scope="row">18</th>
                    <td>Valor do ICMS-ST</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between">
                            <span>R$ 0,00</span>
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Valor do ICMS-ST">
                                ?
                            </button>
                        </div>

                    </td>
                </tr>
                <tr>
                    <th scope="row">19</th>
                    <td>Valor total da operação (após o cálculo da Substituição Tributária)</td>
                    <td>
                        <div class="d-flex align-items-center justify-content-between">
                            <span>R$ 0,00</span>
                            <button type="button" class="btn btn-duvida bg-secondary mx-2" data-bs-toggle="tooltip"
                                data-bs-placement="top" data-bs-custom-class="custom-tooltip"
                                data-bs-title="Valor total da operação (após o cálculo da Substituição Tributária)">
                                ?
                            </button>
                        </div>

                    </td>
                </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-around">
            <div>
                <button type="button" class="btn btn-primary">Limpar</button>
            </div>
            <div>
                <button type="button" class="btn btn-secondary text-light">Calcular</button>
            </div>
        </div>
    </div>
@endsection
