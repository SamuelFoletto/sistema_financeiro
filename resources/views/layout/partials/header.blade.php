<nav class="navbar navbar-expand-lg navbar-dark"  style="background-color: #00272d;">

    <div class="container-fluid px-3">

        <a class="navbar-brand " href="#">Sistema Financeiro</a>

        <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav w-50 justify-content-evenly">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Financeiro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Relatórios</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Cadastros
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('conta.index')}}">Contas</a></li>
                        <li><a class="dropdown-item" href="{{route('categoria.index')}}">Categorias</a></li>
                        <li><a class="dropdown-item" href="{{route('tipos_pagamentos.index')}}">Tipos de pagamentos</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>
