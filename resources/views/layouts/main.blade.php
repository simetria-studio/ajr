<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJR Sistemas</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand logo border  border-danger rounded-circle rounded-xl bg-danger text-center "
                    href="{{ url('/') }}">AJR</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item dropdown">
                            <a class="nav-link text-primary   dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Simulador de Cálculo Substituição
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item " href="{{ route('icms-interna') }}">Simulação Interna</a>
                                </li>
                                <li><a class="dropdown-item " href="{{ route('icms-interestadual') }}">Simulação
                                        Interestadual</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="#">Simulador de de Cálculo do Diferencial de Alíquotas</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="#">Tributação de ICMS por NCM</a>
                        </li>
                    </ul>

                    <div>
                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <a href="{{ url('/dashboard') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">
                                        {{ Auth::user()->name }}</a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="text-sm text-gray-700 dark:text-gray-500 underline">Entrar</a>

                                @endauth
                            </div>
                        @endif
                    </div>

                </div>
            </div>
        </nav>
    </header>

    @section('banner')
        <div class="container-fluid mb-2">
            <div class="row">
                <div class="col-12 p-0 banner-principal bg-secondary bg-opacity-25">

                    <div class="text-center">
                        <h1 class="mb-5">
                            Substituição <span class="text-danger">Tributária </span>
                        </h1>

                        @yield('button')

                        {{-- <a type="button" href="{{ route('substituicao-tributaria') }}"
                            class=" btn btn-danger shadow btn-lg">Acesse
                            Agora
                        </a>  --}}



                    </div>
                </div>
            </div>
        </div>
    @show


    <main>
        @yield('content')
    </main>


    @section('footer')
        <footer class="py-3 my-4">
            <div class="container">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <li class="nav-item"><a href="{{ url('/') }}" class="nav-link px-2 text-muted">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Suporte</a></li>
                    <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Contato</a></li>
                </ul>
                <p class="text-center text-muted">&copy; 2022 Ajr Sistemas</p>
            </div>

        </footer>
    @show



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI="
        crossorigin="anonymous"></script>
    <script src="{{ url('js/script.js') }}"></script>

</body>

</html>
