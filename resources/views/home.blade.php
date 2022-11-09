@extends('layout')

@section('content')
    @livewire('buscar-documento')
    <div class="d-flex justify-content-center">
        {{$documentos->links()}}
    </div>
@endsection
