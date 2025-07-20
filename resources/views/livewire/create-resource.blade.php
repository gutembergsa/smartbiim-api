
<form class="grid grid-cols-2 gap-[15px]" wire:submit="save">
    <x-input-component
        :grid="2"
        label="Nome do Ativo"
        inputName="resource_name"
        placeholder="Digite aqui"
        wire:model.live="form.resource_name"
    />
    <x-input-component
        :grid="2"
        label="Fabricante"
        inputName="manufacturer"
        placeholder="Digite aqui"
        wire:model.live="form.manufacturer"
    />
    <x-input-component
        :grid="1"
        label="Modelo"
        inputName="model"
        placeholder="Digite aqui"
        wire:model.live="form.model"
    />
    <x-input-component
        :grid="1"
        label="Número de Série"
        type="number"
        inputName="serial_number"
        placeholder="Digite aqui"
        wire:model.live="form.serial_number"
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
        <span class="absolute top-[34px] left-[15px] text-[#00050480]">{{strlen($form->acquisition_date) ? str_replace('-', '/', $form->acquisition_date) : "Digite aqui" }}</span>
    </div>
    <div class="col-span-2">
        <x-button-component icon="arrow-right.png" type="submit" text="Avançar" :width="14" :height="14" />
    </div>
</form>