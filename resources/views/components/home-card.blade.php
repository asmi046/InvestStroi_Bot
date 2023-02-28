<div data-prodid="{{$item->id}}" class="tovar_wrap w-full h-auto p-2 border mb-5 border-solid border-cborder rounded-lg flex flex-col overflow-hidden ssm:w-[48%]">
    <a href="{{route('kvartira', $item->id)}}" class="w-full h-full border-b border-solid border-b-cfill">
        <img class="w-3/4 h-full mx-auto py-5 object-contain" src="{{$item->plan_img}}" alt="">
    </a>
    <h2>{{$item->type}}, {{$item->area}} м²</h2>
    <p>{{$home->addres}}</p>
    <p>Этаж {{$item->flor}}</p>
    <p>Цена: <strong>{{$item->price}} р</strong> </p>
    <div class="w-full flex flex-wrap pt-2 mt-auto">
        <a  class="bg-sred text-white text-center px-5 py-2 rounded-lg text-xs ssm:text-xs xl:text-sm"  href="{{route('kvartira', $item->id)}}">Подробнее</a>
        {{-- <a data-prodid="{{$item->id}}" class="to_favorites w-8 h-8 my-auto ml-auto bg-lbg hover:bg-lbg_h" href=""></a> --}}
        <like-element :elemid="{{$item->id}}" :liked="false" ></like-element>
    </div>
</div>
