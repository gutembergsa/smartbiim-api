<?php
namespace App\Livewire;

use Carbon\Carbon;

use Livewire\Component;
use App\Models\Resource;
use App\Livewire\Forms\ResourceForm;

class UpdateResource extends Component
{
    public Resource $resource;
    public ResourceForm $form; 

    public function mount($id)
    {
        $this->resource = Resource::findOrFail($id);
        $this->resource->acquisition_date = explode(" ", $this->resource->acquisition_date)[0];
        $this->form->setResource($this->resource);
    }

    public function save()
    {
        $this->validate();    
        $data = $this->form->all(); 
        $data['acquisition_date'] = Carbon::parse($data['acquisition_date']);
        $result = $this->resource->update($data);
        if ($result) {
            toastr()->success('Recurso Atualizado.', [], 'Sucesso');
            $this->redirect('/'); 
        }
        else {
            toastr()->error('Probleam ao atualizar.', [], 'Ops');
        }

    }

    public function render()
    {
        return view('livewire.update-resource', [
            'resource' => $this->resource,
        ]);
    }
}
