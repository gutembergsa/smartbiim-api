<div x-data="{ expanded: false }" class="max-w-[568px] w-full px-[24px] py-[16px] bg-white border-1 border-[#C5E2FD] rounded-[10px] max-[900px]:max-w-unset max-[900px]:w-auto">
    <div class="flex justify-between">
        <p class="text-[16px] font-[700] text-[#6F7372]">{{ $title }}</p>
        <div :class="{ 'rotate-180': expanded }">
            <x-button-icon-component click="expanded = ! expanded" class="cursor-pointer" icon="vetor-boxes-icon.png" type="button" text="toggle" :width="5" :height="10"  />
        </div>
    </div>
    <div  x-show="expanded" class="mt-[30px]">
        {{ $slot }}
    </div>
</div>