<header class="col-span-2 text-info">
    <div class="navbar bg-base-100 shadow-sm">
        <div class="navbar-start">
            <a class="font-bold ml-5 text-xl">Redac</a>
        </div>

        <div class="navbar-center">
            <nav>
                <ul class="menu menu-horizontal px-1">
                    <li><a>Salas</a></li>
                    <li><a>Atividades</a></li>
                    <li><a>forum</a></li>
                </ul>
            </nav>
        </div>

        <div class="navbar-end">
            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </div>
                <nav>
                    <ul tabindex="-1"
                        class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
                        <li><a>Perfil</a></li>
                        <li><a>Configurações</a></li>
                        <li><a href="{{ route('logout') }}">Deslogar</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
