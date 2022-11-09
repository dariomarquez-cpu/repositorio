@extends('layout')

@section('content')
<div class="container">
    <form class="bg-white shadow rounded py-3 px-4" action="{{route('documentos.store')}}" method="POST" enctype="multipart/form-data">
    @include('documentos._form',
        ['btnTexto'=>'Guardar','btnClass'=>'btn btn-success'])
    </form>
</div>
@endsection
