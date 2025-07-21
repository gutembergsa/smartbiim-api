
@php
    $history = [
        ['title' => 'Projetos', 'url' => '/'],
        ['title' => 'Nova Aurora Cimentos - Matriz', 'url' => '/'],
        ['title' => 'Ativos', 'url' => '/'],
    ];
@endphp

<x-base-layout-component>
    <div class="w-full">
        <x-history-header-component :history="$history"/>
        <livewire:list-resource />  
    </div>
</x-base-layout-component>
