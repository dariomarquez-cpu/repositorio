@if (session('crear'))
    <div class="alert alert-success alert-dismissible fade show"
    role="alert">
        {{ session('crear') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert"
        aria-label="Close"></button>
    </div>
@else
    @if (session('editar'))
        <div class="alert alert-warning alert-dismissible fade show"
        role="alert">
            {{ session('editar') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"
            aria-label="Close"></button>
        </div>
    @else
        @if (session('eliminar'))
            <div class="alert alert-danger alert-dismissible fade show"
            role="alert">
                {{ session('eliminar') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"
                aria-label="Close"></button>
            </div>
        @endif
    @endif
@endif
