<?php

namespace App\Livewire\Forms;

use App\Models\Resource;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ResourceForm extends Form
{
    #[Validate('required|min:2')]
    public string $resource_name;

    #[Validate('required|min:2')]
    public string $manufacturer;

    #[Validate('required|min:2')]
    public string $model;

    #[Validate('required|min:1')]
    public int $serial_number;

    #[Validate('required')]
    public string $acquisition_date;

    protected $messages = [
        '*.required' => 'Campo obrigatorio.',
        '*.min' => 'Minimo de :min letras',
    ];

    public function setResource(Resource $resource)
    {
        $this->resource_name = $resource->resource_name;
        $this->manufacturer = $resource->manufacturer;
        $this->model = $resource->model;
        $this->serial_number = $resource->serial_number;
        $this->acquisition_date = $resource->acquisition_date;
    }

}