@php
    $history = [
        ['title' => 'Projetos', 'url' => '/'],
        ['title' => 'Nova Aurora Cimentos - Matriz', 'url' => '/'],
        ['title' => 'Ativos', 'url' => '/'],
        ['title' => 'Editar ativo', 'url' => '/'.$id.'/update'],
    ];
@endphp
<x-base-layout-component>
    <div class="">
        <x-history-header-component :history="$history"/>

        <x-title-with-return-component title="Editar Ativo {{$id}}" url="/"/>

        <div class="grid gap-y-[25px]">
            <x-card-form-component title="Detalhe de ativos">
                <livewire:update-resource id="{{ $id }}" />  
            </x-card-form-component>

            <x-exemple-cards-component />
        </div>
    </div>
</x-base-layout-component>
