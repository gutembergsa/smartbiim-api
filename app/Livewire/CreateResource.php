<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Log;
use App\Livewire\Forms\ResourceForm;
use Illuminate\Support\Facades\DB;
use App\Models\Resource;
use Carbon\Carbon;

class CreateResource extends Component
{
    public ResourceForm $form; 


    public function mount()
    {
        $this->form->acquisition_date = "";
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);   
    }

    public function save()
    {
        $this->validate();    

        $data = $this->form->all(); 
        $data['acquisition_date'] = Carbon::parse($data['acquisition_date']);
        $result = Resource::create($data);

        toastr()->success('Recurso Salvo.', [], 'Sucesso');

        return $result;
    }

    public function render()
    {
        return view('livewire.create-resource', [
            'form' => $this->form,
        ]);
    }
}
