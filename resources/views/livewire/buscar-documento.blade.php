<div>
    <div class="container mb-3">
        <div class="mb-3">
            <div class="form-outline">
                <input wire:model="buscar" type="buscar" id="form1"
                class="form-control form-control-lg" placeholder="Buscar"
                aria-label="Search" />
            </div>
        </div>

        <div class="row">
            @foreach ($documentos as $documento )
            <div class="col-md-3">
                <div class="card p-3 mb-2" >
                    <img src="{{asset($documento->portada)}}"
                    class="card-img-top" alt="portada">
                    <h5 class="card-title">{{$documento->titulo}}</h5>
                    <p class="card-text">{{$documento->descripcion}}</p>
                    <h6>{{$documento->autor}}</h6>
                    <a href="{{asset($documento->ubicacion)}}"
                    class="btn btn-danger">pdf</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>



