<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    @stack('css')
    <title>Document</title>
</head>

<body class="grey lighten-1">

    <header>
        <nav>
            <div class="nav-wrapper grey">
                <div class="container">
                    <div class="row">
                        <div class="col s8">
                            Minha Aplicação
                        </div>
                        <div class="col s4 right-align" style="user-select: none">
                            @auth
                            @php
                                $name = explode(" ",Auth::user()->name);
                            @endphp
                                <a class="dropdown-trigger" href="#!" data-target="dropdown2">{{ $name[0]}}
                                    <i class="material-icons right">arrow_drop_down</i>
                                </a>
                                <ul class="dropdown-content" id="dropdown2" tabindex="0">
                                    <li>
                                        <form method="post" action = "/logout">
                                            @csrf
                                            <button style="font-size: 16px;
                                                color: #26a69a;
                                                display: block;
                                                line-height: 22px;
                                                padding: 14px 16px;
                                                border: 0;
                                                background-color: transparent;
                                                width: 100%;
                                                cursor: pointer;">Sair</button>
                                        </form>
                                    </li>
                                </ul>
                            @endauth
                            @guest
                                <ul id="nav-mobile" class="right">
                                    <li>
                                        <a href="{{ Route('login') }}">Entrar</a>
                                    </li>
                                    <li>
                                        <a href="{{ Route('register') }}">Nova Conta</a>
                                    </li>
                                </ul>
                            @endguest

                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </header>

    @yield('content')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.dropdown-trigger');
            var instances = M.Dropdown.init(elems);
        });
    </script>
    @stack('js')

</body>

</html>
