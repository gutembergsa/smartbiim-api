<div class="p-4 max-w-xl mx-auto">
    <h2 class="text-xl font-bold mb-4">Editar Recurso</h2>
    <form class="grid grid-cols-2 gap-[15px]" wire:submit="save">
        <x-input-component
            :grid="2"
            inputName="id_data"
            value="{{ $resource->id }}"
            disabled
        />
        <x-input-component
            :grid="2"
            inputName="resource_name"
            wire:model="form.resource_name"
        />
        <x-input-component
            :grid="2"
            inputName="manufacturer"
            wire:model="form.manufacturer"

        />
        <x-input-component
            :grid="1"
            inputName="model"
            wire:model="form.model"
        />
        <x-input-component
            :grid="1"
            type="number"
            inputName="serial_number"
            wire:model="form.serial_number"
        />
        <div class="col-span-2 relative" @click="$refs.acquisitionInput.showPicker()()">
            <x-input-component
                :grid="2"
                label="Data de Aquisição"
                type="date"
                inputName="acquisition_date"
                class="cursor-pointer"
                placeholder=" "
                wire:model.live="form.acquisition_date"
                x-ref="acquisitionInput"
            />
            <span class="absolute top-[34px] left-[10px] text-[#00050480]">{{strlen($form->acquisition_date) ? str_replace('-', '/', $form->acquisition_date) : "Digite aqui" }}</span>
        </div>
        <div class="col-span-2">
            <x-button-component icon="arrow-right.png" type="submit" text="Avançar" />
        </div>
    </form>
</div>
