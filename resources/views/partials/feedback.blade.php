<?php
$getfeedback = DB::select('select * from feedbacks order by id desc limit 1');
?>

@dd($getfeedback);

@foreach ($getfeedback as $item)
<div class="testi bg-[#F6F6F6] rounded-[30px] pl-10 pt-5 pb-10 pr-10">
    <div class="flex py-5">
        <div class="">
            <img src="{{ ('img/michael.png') }}" alt="" width="40px">
        </div>
        <div class="pl-5">
            <h6 class="font-bold">{{ $item->name }}</h6>
            <p class="text-gray-800 text-sm">{{ $item->role }}</p>
        </div>
    </div>
    <div>
        <p class="max-w-[450px] text-gray-800 my-7">{{ $item->feedback }}</p>
        <img src="{{ ('img/stars.png') }}" alt="">
    </div>
    <img src="{{ ('img/quotes.png') }}" alt="" class="w-[60px] right-10 absolute top-[50px]">
    <a href="#"><img src="{{ ('img/right-arrow.p') }}ng" alt="" class="ease-in-out duration-300  hover:scale-125 hover:drop-shadow-lg -right-3 absolute top-[158px]"></a>

</div>
@endforeach
