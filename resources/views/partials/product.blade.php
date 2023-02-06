<?php
$getData = DB::select('select * from products order by id desc limit 3');
?>

@foreach ($getData as $item)
<article class="ease-in-out duration-300 card flex flex-col items-left px-[35px] py-[20] relative  hover:-translate-y-1 hover:scale-105 hover:drop-shadow-xl pop">
    <img src="{{ ($item->img_name) }}" alt="" class="rounded-lg">
    <p class="text-green-400 pt-10">{{$item->location}}</p>
    <h4 class="text-2xl font-bold py-5">{{$item->name}}</h4>
    <h4 class="text-gray-400"><span class="text-2xl font-bold text-black"> {{$item->price}} USD /</span> Night</h4>
</article>
@endforeach
