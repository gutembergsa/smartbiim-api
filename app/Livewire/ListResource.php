<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Resource;

class ListResource extends Component
{

    public function remove($id)
    {
        $result = Resource::findOrFail($id)->delete();
        toastr()->success('Recurso Removido.', [], 'Sucesso');
        return $result;
    }

    public function render()
    {
        $resources = Resource::all();
        return view('livewire.list-resource', [
            'resources' => $resources,
        ]);
    }
    
}
