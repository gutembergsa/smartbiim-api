<button 
    x-on:click="{{ $click }}" 
    type="{{ $type }}"
    {{ $attributes->merge([
        'class' => "rounded-[3px] text-[12px] text-[#F0F8FF] font-semibold bg-transparent"
    ]) }}
>
        @if ($icon)
            <img src="{{ asset('icons/' . $icon) }}" alt="icon" class="w-[{{ $width ?? 13 }}px] h-[{{ $height ?? 13 }}px]">
        @endif

</button>
