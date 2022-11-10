<nav class="navbar navbar-dark bg-dark ">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{asset('imagenes/logo.jpg')}}" alt=""
            width="40" height="40" class="d-inline-block align-text-center">
            {{-- {{config('app.name')}} --}}
            Catalogo
        </a>

    <ul class="nav nav-pills">
        @guest
        <li class="nav-item">
            <a class="nav-link text-white" href="{{ route('login') }}">
                Login
            </a>
        </li>
        @endguest
        @auth
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('documentos.index') }}">
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


