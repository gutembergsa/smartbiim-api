<x-base-layout-component>
<div class="w-full pr-[10px]">
    <p class="text-[#838786] text-[12px] font-[400] my-[40px] flex items-center gap-x-[15px]">
        <a href="/"> Projetos</a> <img class="w-[4px] h-[8px] align-middle" src="{{ asset('icons/vetor-historico-blue-icon.png') }}" alt=""> <a href="/">Nova Aurora Cimentos - MatrizM </a> <img class="w-[4px] h-[8px] align-middle" src="{{ asset('icons/vetor-historico-blue-icon.png') }}" alt=""> <a href="/">Ativos</a> <img class="w-[4px] h-[8px] align-middle" src="{{ asset('icons/vetor-historico-blue-icon.png') }}" alt=""> Editar Ativo
    </p>


    <div class="flex justify-between mb-[25px]">
        <div class="flex flex-row justify-between items-center gap-[20px]">
            <a href="/">
                <img class="w-[11px] h-[11px] cursor-pointer" src="{{ asset('images/vetor-img.png') }}" alt="img">
            </a>
            <p class="text-[24px] font-[600] text-[#6F7372]">Novo Ativo</p>
        </div>
        <div class="cursor-pointer w-[56px] h-[56px] flex justify-center items-center rounded-[10px] bg-[#C5E2FD]">
            <img class="w-[16px] h-[16px]" src="{{ asset('icons/question-blue-icon.png') }}" alt="icon">
        </div>
    </div>
    

    <div class="grid gap-y-[25px]">
        <x-card-form-component title="Detalhe de ativos">
            <livewire:create-resource/>
        </x-card-form-component>

        <x-card-form-component class="grid gap-y-[10px]" title="Informações Técnicas">
            <div class="grid gap-y-[20px]">
                <x-base-content-group-component
                    title="Componentes"
                    subtitle="Adicione campos para especificar componentes importantes do ativo."
                    button-label="Adicionar campo"
                />
                <x-base-content-group-component
                    title="Procedimento Operacional"
                    subtitle="Adicione campos para especificar os procedimentos operacionais do ativo."
                    button-label="Adicionar campo"
                />
                <x-base-content-group-component
                    title="Segurança"
                    subtitle="Adicione campos para especificar observações de segurança do ativo."
                    button-label="Adicionar campo"
                />
                <x-button-component type="button" text="Avançar" icon="arrow-right.png"  />
            </div>
        </x-card-form-component>

        <x-card-form-component title="IoT">
            <div class="grid gap-y-[20px]">
                <x-base-content-group-component
                    title="Componentes"
                    subtitle="Adicione campos para especificar componentes importantes do ativo."
                    button-label="Adicionar campo"
                />
                <x-base-content-group-component
                    title="Procedimento Operacional"
                    subtitle="Adicione campos para especificar os procedimentos operacionais do ativo."
                    button-label="Adicionar campo"
                />
                <x-base-content-group-component
                    title="Segurança"
                    subtitle="Adicione campos para especificar observações de segurança do ativo."
                    button-label="Adicionar campo"
                />
                <x-button-component type="button" text="Avançar" icon="arrow-right.png"  />
            </div>
        </x-card-form-component>
    </div>
</div>
</x-base-layout-component>
