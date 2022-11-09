
@csrf
<h1 class="display-5">Documento</h1>
<div class="mb-3">
    <label for="imagen" class="form-label">Portada</label>
    <input name="imagen" type="file" name="imagen" type="text"
           class="form-control @error('imagen') is-invalid  @enderror" id="imagen" value="{{old('imagen',$documento->portada)}}">

    @include('documentos._error',['nombre'=>'imagen'])
    @isset($documento->portada)
        <img src="{{asset($documento->portada)}}" width="300px">
    @endisset
</div>
<div class="mb-3">
    <label for="titulo" class="form-label">Título</label>
    <input name="titulo" type="text"
           class="form-control @error('titulo') is-invalid  @enderror" id="titulo" placeholder="Ej. Introduccion a la programación" value="{{old('titulo',$documento->titulo)}}">
    @include('documentos._error',['nombre'=>'titulo'])
</div>
<div class="mb-3">
    <label for="autor" class="form-label">Autor</label>
    <input name="autor" type="text" class="form-control @error('autor') is-invalid  @enderror" id="autor" placeholder="Ej. Dario Marquez" value="{{old('autor',$documento->autor)}}">
    @include('documentos._error',['nombre'=>'autor'])
</div>
<div class="mb-3">
    <label for="descripcion" class="form-label">Descripción</label>
    <textarea name="descripcion" class="form-control @error('descripcion') is-invalid  @enderror" id="descripcion" rows="3">{{old('descripcion',$documento->descripcion)}}</textarea>
    @include('documentos._error',['nombre'=>'descripcion'])
</div>
<div class="mb-3">
    <label for="archivo" class="form-label">Archivo</label>
    <input type="file" name="archivo" class="form-control @error('archivo') is-invalid @enderror" id="archivo" value="{{old('archivo',$documento->archivo)}}">
    @include('documentos._error',['nombre'=>'archivo'])
    @isset($documento->ubicacion)
    <div class="mt-1">
        <a href="{{asset($documento->ubicacion)}}" class="btn btn-danger">pdf</a>
    </div>
    @endisset
</div>
<hr>
<div class="mb-3">
    <button type="submit" class="{{$btnClass}}">{{$btnTexto}}</button>
    <a href="{{route('documentos.index')}}" class="btn btn-danger">Cancelar</a>
</div>

