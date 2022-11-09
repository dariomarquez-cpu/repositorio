<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Repositorio Digital</title>

        {{-- Hoja de estilo Bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        @livewireStyles
        <script src="https://kit.fontawesome.com/c6a6ebc6e3.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="d-flex flex-column justify-content-between"
        style="height:100vh">

            <header>
                <!-- Barra de navegacion -->
                @include('_nav')
                <hr>
            </header>

            <main class="py-3">
                <!-- Contenido -->
                @yield('content')
            </main>

            <footer class="bg-white text-center text-black-50 py-3 shadow">
                {{config('app.name')}} Copyright {{date('Y')}}
            </footer>

        </div>

        {{-- Javascript Bootstrap --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        @livewireScripts
    </body>
</html>
