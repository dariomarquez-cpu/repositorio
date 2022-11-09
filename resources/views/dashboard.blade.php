@extends('layout')

@section('content')
<div class="container">
    @include('documentos._session')
    <div class="card">
    <div class="card-header">
            Listado de documentos
            <a href="{{route('documentos.create')}}"
                class="btn btn-sm btn-primary">
                <i class="fa-solid fa-plus"></i>
             </a>
    </div>
    <div class="body">
            <table class="table">
               <thead>
                    <tr>
                        <th>id</th>
                        <th>titulo</th>
                        <th>autor</th>
                        <th>acciones</th>
                    </tr>
               </thead>
               <tbody>

                        @forelse ($documentos as $documento)
                        <tr>
                            <td>{{ $documento->id }}</td>
                            <td>{{ $documento->titulo }}</td>
                            <td>{{ $documento->autor }}</td>
                            <td>
                                <form action="{{route('documentos.destroy',$documento->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <a href="{{route('documentos.show',$documento->id)}}" class="btn btn-sm btn-info">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                    <a href="{{route('documentos.edit',$documento->id)}}" class="btn btn-sm btn-warning">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>
                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            <p>Sin documentos</p>
                        @endforelse

               </tbody>
            </table>
    </div>
    <div class="card-footer">
        {{ $documentos->links() }}
    </div>
    </div>
</div>
@endsection
