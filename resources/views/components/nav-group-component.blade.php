<div class="text-[12px] mb-[10px] max-[900px]:mb-[0px] max-[900px]:not-last:mb-[60px] ">
    <p class="mb-[25px] text-[#989C9B] font-[500] max-[900px]:hidden">
       {{ $title }}
    </p>
    <ul class="list-none">
       @foreach ($items as $item)
            <li class="h-auto mb-[25px] flex items-center max-[900px]:justify-center gap-[15px] font-[500] text-[#6F7372] last:mb-[0px]">
                @if (!empty($item['icon']))
                    <img src="{{ asset('icons/' . $item['icon']) }}" alt="icon" class="">
                @endif
                <span class="max-[900px]:hidden">
                    {{ $item['text'] }}
                </span>
            </li>
       @endforeach
    </ul>
</div>
