<div>
    <div class="col-span-2 relative" @click="$refs.acquisitionInput.showPicker()()">
        <x-input-component
            :grid="2"
            label={{$label}}
            inputName={{$inputName}}
            class={{$class}}
            wire:model.live={{$model}}
            x-ref={{$refName}}
        />
        <span class="absolute top-[34px] left-[15px] text-[#00050480]">{{strlen($datevalue) ? str_replace('-', '/', $datevalue) : "Digite aqui" }}</span>
    </div>
    <div class="col-span-2">
        <x-button-component icon="arrow-right.png" type="submit" text="Avançar" :width="14" :height="14" />
    </div>
</div>
