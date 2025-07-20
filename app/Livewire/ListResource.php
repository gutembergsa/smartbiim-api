<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Resource;
use Illuminate\Support\Facades\Log;

class ListResource extends Component
{

    public function remove($id)
    {
        $result = Resource::findOrFail($id)->delete();

        Log::info($result);

        toastr()->success('Recurso Removido.', [], 'Sucesso');

        return $result;
    }

    public function render()
    {
        $resources = Resource::all();

        Log::info($resources);

        return view('livewire.list-resource', [
            'resources' => $resources,
        ]);
    }
    
}
