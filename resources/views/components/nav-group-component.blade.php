<div class="text-[12px] mb-[10px]">
    <p class="mb-[25px] text-[#989C9B] font-[500]">
       {{ $title }}
    </p>
    <ul class="list-none">
       @foreach ($items as $item)
            <li class="h-auto mb-[25px] flex items-center gap-[15px] font-[500] text-[#6F7372]">
                @if (!empty($item['icon']))
                    <img src="{{ asset('icons/' . $item['icon']) }}" alt="icon" class="">
                @endif
                <span>
                    {{ $item['text'] }}
                </span>
            </li>
       @endforeach
    </ul>
</div>
