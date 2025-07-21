<div class="p-4 max-w-xl mx-auto">
    <form class="grid grid-cols-2 gap-[15px]" wire:submit="save">
        <x-input-component
            :grid="2"
            inputName="id_data"
            label="Nome do Ativo"
            value="{{ $resource->id }}"
            disabled
        />
        <x-input-component
            :grid="2"
            inputName="resource_name"
            label="ID"
            wire:model="form.resource_name"
        />
        <x-input-component
            :grid="2"
            inputName="manufacturer"
            label="Fabricante"
            wire:model="form.manufacturer"

        />
        <div class="col-span-1 max-[768px]:col-span-2">
            <x-input-component
                :grid="2"
                inputName="model"
                label="Modelo"                
                wire:model="form.model"
            />
        </div>
        <div class="col-span-1 max-[768px]:col-span-2">
            <x-input-component
                :grid="2"
                type="number"
                label="Número de Série"
                inputName="serial_number"
                wire:model="form.serial_number"
            />
        </div>
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
            <span class="absolute top-[34px] left-[10px] text-[14px] text-[#00050480]">{{strlen($form->acquisition_date) ? str_replace('-', '/', $form->acquisition_date) : "Digite aqui" }}</span>
        </div>
        <div class="col-span-2">
            <x-button-component icon="arrow-right.png" type="submit" text="Avançar" />
        </div>
    </form>
</div>
