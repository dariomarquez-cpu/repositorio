<nav class="navbar navbar-dark bg-dark ">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{asset('imagenes/logo.jpg')}}" alt=""
            width="40" height="40" class="d-inline-block align-text-center">
            Repositorio
        </a>

    <ul class="nav nav-pills">
        @if ($usuariosCantidad == 0)
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('register') }}">
                    Register
                </a>
            </li>
        @endif
        @guest
        <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('login') }}">
                Login
            </a>
        </li>
        @endguest
        @auth
            <li class="nav-item">
                <a class="nav-link text-white"
                href="{{ route('documentos.index') }}">
                    Admin
                </a>
            </li>
            <li class="nav-item">
                <form id="logout-form" action="{{ route('logout') }}"
                method="POST" >
                    @csrf
                    <button type="submit" class="btn btn-outline-light">Logout</button>
                </form>
            </li>
        @endauth
    </ul>
    </div>
</nav>


