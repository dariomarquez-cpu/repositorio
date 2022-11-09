@extends('layout')

@section('content')
<div class="container">
    <form class="bg-white shadow rounded py-3 px-4"
        action="{{route('documentos.update',$documento->id)}}"
        method="POST" enctype="multipart/form-data">
        @method('put')
        @include('documentos._form',['btnTexto'=>'Actualizar','btnClass'=>'btn btn-warning'])
    </form>
</div>
@endsection
