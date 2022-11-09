@extends('layout')

@section('content')
    <form action="{{route('labs.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="imagen" class="form-label">Portada</label>
            <input type="file" name="imagen" type="text" class="form-control" id="imagen">
        </div>
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input name="titulo" type="text" class="form-control" id="titulo" placeholder="Ej. Introduccion a la programación">
        </div>
        <div class="mb-3">
            <label for="autor" class="form-label">Autor</label>
            <input name="autor" type="text" class="form-control" id="autor" placeholder="Ej. Dario Marquez">
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" class="form-control" id="descripcion" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="archivo" class="form-label">Archivo</label>
            <input type="file" name="archivo" type="text" class="form-control" id="archivo">
        </div>
        <div class="mb-3">
            <button type="submit" class="form-control btn btn-success">Guardar</button>
        </div>
    </form>
@endsection
