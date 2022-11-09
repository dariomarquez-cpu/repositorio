@extends('layout')

@section('content')
    <div class="container">
        <div class="bg-white shadow rounded py-3 px-4">
            <h1 class="display-5">Documento</h1>
            <hr>
            <div class="mb-3 row">
                <label for="portada" class="col-sm-2 col-form-label"><b>Portada:</b></label>
                <div class="col-sm-10">
                    <img src="{{asset($documento->portada)}}" width="100px">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="titulo" class="col-sm-2 col-form-label"><b>Titulo:</b></label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext"
                    id="titulo" value="{{$documento->titulo}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="autor" class="col-sm-2 col-form-label"><b>Autor:</b></label>
                <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" id="titulo" value="{{$documento->autor}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="descripcion" class="col-sm-2 col-form-label">
                    <b>Descripción:</b>
                </label>
                <div class="col-sm-10">
                    <textarea readonly class="form-control-plaintext" rows="2">
                        {{$documento->descripcion}}
                    </textarea>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="archivo" class="col-sm-2 col-form-label"><b>Archivo:</b></label>
                <div class="col-sm-10">
                    <a href="{{asset($documento->ubicacion)}}" class="btn btn-danger">pdf</a>
                </div>
            </div>
            <hr>
            <div class="mb-3">
                <a href="{{route('documentos.index')}}" class="btn btn-success">Volver</a>
            </div>
        </div>
    </div>
@endsection
