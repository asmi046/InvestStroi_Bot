<div class="w-full h-auto p-2 border mb-5 border-solid border-cborder rounded-lg flex flex-col overflow-hidden ssm:w-[48%]">
    <a href="{{route('kvartira')}}" class="w-full h-full border-b border-solid border-b-cfill">
        <img class="w-3/4 h-full mx-auto py-5 object-contain" src="{{$item->home_1_img}}" alt="">
    </a>
    <h2>{{$item->type}}, {{$item->area}} м²</h2>
    <p>{{$home->addres}}</p>
    <p>Этаж {{$item->flor}}</p>
    <p>Цена: <strong>5 450 0000 р</strong> </p>
    <div class="w-full flex flex-wrap pt-2 mt-auto">
        <a  class="bg-sred text-white text-center px-5 py-2 rounded-lg text-sm ssm:text-xs sm:text-sm"  href="{{route('kvartira')}}">Подробнее</a>
        <a class="w-8 h-8 my-auto ml-auto bg-lbg hover:bg-lbg_h" href=""></a>
    </div>
</div>
