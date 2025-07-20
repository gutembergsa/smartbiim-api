@php
    $spanClass = $icon ? 'align-super' : '';
    $style =  "w-[95px] h-[28px] rounded-[3px] text-[12px] font-semibold " .  ($outlined ? "bg-[#FFF] border-[#388DDD] text-[#388DDD]" : "text-[#F0F8FF] bg-[#388DDD]")
@endphp
<button 
    x-on:click="{{ $click }}" 
    {{ $attributes->merge([
        'class' => $icon ? ($style . ' align-super flex items-center gap-[10px]') : $style
    ]) }}
>
        <span class="pointer-events-none font-[600]">{{ $text }}</span> 

        @if ($icon)
            <img src="{{ asset('icons/' . $icon) }}" alt="icon" class="w-[{{ $width ?? 20 }}px] h-[{{ $height ?? 20 }}px]">
        @endif

</button>
