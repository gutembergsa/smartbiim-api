<div class="p-4" x-data="{ showModal: false, modalData: null }" wire:ignore.self>
    <div class="flex justify-between mb-[40px]">
        <div class="flex flex-row justify-between items-center gap-[20px]">
            {{-- <img class="w-[11px] h-[11px]" src="{{ asset('images/vetor-img.png') }}" alt="img"> --}}
            <p class="text-[24px] font-[600] text-[#6F7372]">Ativos Cadastrados</p>
        </div>
        <a href="/create">
            <x-button-component                             
                {{-- :click="'window.location.href=\'/create\';'" --}}
                text="Novo Ativo" 
            />
        </a>
    </div>

    <ul class="space-y-3">
        <table class="border-collapse w-full">
            <tr class="bg-[#F0F8FF] h-[32px] pb-[40px]">
                <th class="text-[12px] text-[#373A39] font-[500] pl-[10px] text-left">Nome do Ativo</th>
                <th class="text-[12px] text-[#373A39] font-[500] text-left" >Fabricante</th>
                <th class="text-[12px] text-[#373A39] font-[500] text-left" >Modelo</th>
                <th class="text-[12px] text-[#373A39] font-[500] text-left" >Número de Série</th>
                <th class="text-[12px] text-[#373A39] font-[500] text-left" >Data de Aquisição</th>
                <th class="text-[12px] text-[#373A39] font-[500] text-left" ></th>
            </tr>
            <tr class="h-[32px]">
            </tr>
            @foreach ($resources as $resource)
                <tr class="bg-[#F0F8FF80] h-[64px]">
                    <td class="text-[12px] text-[#838786] font-[500] border-b-[1px] border-b-[#F0F8FF] pl-[10px]">{{ $resource->resource_name }}</td>
                    <td class="text-[12px] text-[#838786] font-[500] border-b-[1px] border-b-[#F0F8FF]" >{{ $resource->manufacturer }}</td>
                    <td class="text-[12px] text-[#838786] font-[500] border-b-[1px] border-b-[#F0F8FF]">{{ $resource->model }}</td>
                    <td class="text-[12px] text-[#838786] font-[500] border-b-[1px] border-b-[#F0F8FF]">{{ $resource->serial_number }}</td>
                    <td class="text-[12px] text-[#838786] font-[500] border-b-[1px] border-b-[#F0F8FF]">{{ $resource->acquisition_date }}</td>
                    <td class=" text-[12px] text-[#838786] font-[500] border-b-[1px] border-b-[#F0F8FF] pr-[5px]">
                        <x-button-icon-component  
                            icon="pen-icon.png"
                            class="h-[32px]"
                            :click="'window.location.href=\'/' . $resource->id . '/update\''"
                        />
                        <x-button-icon-component 
                            :click="'showModal = true; modalData = { id: ' . $resource->id . ', name: \'' . $resource->resource_name . '\' }'"
                            class="h-[32px]"
                            icon="erase-icon.png" 
                        />
                    </td>
                </tr>
            @endforeach
        </table>
        
        <div
            x-show="showModal"
            @click.outside="showModal = false"
            class="fixed inset-[0px] flex items-center justify-center w-[100%] h-[100%] bg-[#000000CC] rounded-[4px]"
        >
            <div class="flex flex-col items-center justify-center bg-[#FFF] p-[10px] rounded-[5px] max-w-[300px] w-[100%] h-[200px]">
                <h2 class="text-lg font-semibold mb-3">Remover Ativo</h2>
                <p><strong>ID:</strong> <span x-text="modalData?.id"></span></p>
                <p><strong>Nome:</strong> <span x-text="modalData?.name"></span></p>
                <div class="flex gap-[20px] mt-[20px]">
                    <x-button-component text="Remover" :click="'$wire.remove(modalData.id); showModal = false;'" class="mt-4 px-4 py-2 bg-gray-300 rounded" />
                    <x-button-component text="Fechar" :click="'showModal = false'" class="mt-4 px-4 py-2 bg-gray-300 rounded" />
                </div>
            </div>
        </div>
        
        {{-- @foreach ($resources as $resource)
            <li class="p-3 border rounded shadow-sm">
                <p><strong>Arquivo:</strong> {{ $resource->file_name }}</p>
                <p><strong>Fabricante:</strong> {{ $resource->manufacturer }}</p>
                <p><strong>Modelo:</strong> {{ $resource->model }}</p>
                <p><strong>Nº de Série:</strong> {{ $resource->serial_number }}</p>
                <p><strong>Data de Aquisição:</strong> {{ $resource->acquisition_date }}</p>
            </li>
        @endforeach --}}
    </ul>
</div>
