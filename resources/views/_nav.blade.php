<nav class="navbar navbar-light ">
    <div class="container-fluid">
        <a class="nav-link" href="{{route('home')}}">
            <img src="{{asset('imagenes/logo.jpg')}}" alt=""
            width="30" height="30" class="d-inline-block align-text-center">
            {{-- {{config('app.name')}} --}}
            Catalogo
        </a>

    <ul class="nav nav-pills">
        @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">
                Login
            </a>
        </li>
        @endguest
        @auth
            <li class="nav-item">
                <a class="nav-link" href="{{ route('documentos.index') }}">
                    Admin
                </a>
            </li>

            <li class="nav-item">
                <form id="logout-form" action="{{ route('logout') }}"
                method="POST" >
                    @csrf

                    <button type="submit" class="nav-link">Logout</button>
                </form>
            </li>
        @endauth
    </ul>

</div>
</nav>
