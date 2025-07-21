<div class="flex justify-between mb-[25px]">
    <div class="flex flex-row justify-between items-center gap-[20px]">
        <a href="{{ $url }}">
            <img class="w-[11px] h-[11px] cursor-pointer" src="{{ asset('images/vetor-img.png') }}" alt="img">
        </a>
        <p class="text-[24px] font-[600] text-[#6F7372]">{{ $title }}</p>
    </div>
    <div class="cursor-pointer w-[56px] h-[56px] flex justify-center items-center rounded-[10px] bg-[#C5E2FD]">
        <img class="w-[20px] h-[20px]" src="{{ asset('icons/question-blue-icon.png') }}" alt="icon">
    </div>
</div>