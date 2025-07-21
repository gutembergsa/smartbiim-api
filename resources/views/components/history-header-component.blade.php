<p class="text-[#838786] text-[12px] font-[400] my-[40px] flex items-center gap-x-[15px]">
    @foreach ($history as $historyData)
        <a href={{ $historyData['url'] }}> {{ $historyData['title'] }}</a> 
            @if (!$loop->last)
                <img class="w-[4px] h-[8px] align-middle" src="{{ asset('icons/vetor-historico-blue-icon.png') }}" alt="arrow">
            @endif
    @endforeach
</p>