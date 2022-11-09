<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Documento;

class BuscarDocumento extends Component
{
    public $buscar = '';

    public function render()
    {
        $buscar = '%'.$this->buscar.'%';

        $documentos = Documento::where('titulo','LIKE',$buscar)
                     ->orWhere('autor','LIKE',$buscar)
                     ->orderBy('id','DESC')
                     ->get();

        return view('livewire.buscar-documento',compact('documentos'));
    }
}
