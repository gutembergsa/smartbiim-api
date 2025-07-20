
<x-base-layout-component>
    <div class="w-full pr-[10px]">
        <p class="text-[#838786] text-[12px] font-[400] my-[40px] flex items-center gap-x-[15px]">
            <a href="/"> Projetos</a> <img class="w-[4px] h-[8px] align-middle" src="{{ asset('icons/vetor-historico-blue-icon.png') }}" alt=""> <a href="/">Nova Aurora Cimentos - MatrizM </a> <img class="w-[4px] h-[8px] align-middle" src="{{ asset('icons/vetor-historico-blue-icon.png') }}" alt=""> Ativos
        </p>
        <livewire:list-resource />  
    </div>
</x-base-layout-component>
