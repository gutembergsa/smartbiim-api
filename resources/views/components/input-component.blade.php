@props(['inputName', 'label' => null, 'type' => 'text', 'grid'])

<div class="col-span-{{ $grid }}">
    @if ($label)
        <label for="{{ $inputName }}" class="block text-sm font-[600] text-[12px] text-[#6F7372] mb-[8px]">
            {{ $label }}
        </label>
    @endif

    <input
        type="{{ $type }}"
        id="{{ $inputName }}"
        name="{{ $inputName }}"
        {{ $attributes->merge([
            'class' => 'w-full h-[40px] px-3 py-2 border-1 border-[#00050480] rounded-[3.5px] bg-[#FAFAFA] disabled:bg-[#C5C7C6] placeholder:text-[14px] placeholder:font-[400]'
        ]) }}
    />

    @error("form.".$inputName)
        <p class="text-red-500 text-[12px] mt-1">{{ $message }}</p>
    @enderror
</div>