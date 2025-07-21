@php
    $history = [
        ['title' => 'Projetos', 'url' => '/'],
        ['title' => 'Nova Aurora Cimentos - Matriz', 'url' => '/'],
        ['title' => 'Ativos', 'url' => '/'],
        ['title' => 'Novo ativo', 'url' => '/create'],
    ];
@endphp
<x-base-layout-component>
    <div class="w-full pr-[10px]">
        <x-history-header-component :history="$history"/>

        <x-title-with-return-component title="Novo Ativo" url="/"/>

        <div class="grid gap-y-[25px]">
            <x-card-form-component title="Detalhe de ativos">
                <livewire:create-resource/>
            </x-card-form-component>

            <x-exemple-cards-component />
        </div>
    </div>
</x-base-layout-component>
