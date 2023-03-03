@extends('layouts.all')

@php
    $title = $info->type." ".$info->area."м²";
    $description = "Купить квартиру: ".$title." в доме ".$info->home_info->addres;
@endphp

@section('title', $title)
@section('description', $description)

@section('content')
    <header class="relative flex border-gray-300 text-white text-2xl flex-col bg-sblue font-header bg-center bg-cover" style="background-image:url({{asset('img/hbg.webp')}})">
        <div class="w-full h-full bg-black bg-opacity-50 absolute left-0 top-0 z-10"></div>
        <div class="container mx-auto px-4 py-4 flex justify-between">
            <div class="logo m-auto ml-0 flex flex-col z-20">
                <h1 class="">{{$info->type}} {{$info->area}}м²</h1>
                <p class="font-normal font-sans">{{$info->home_info->addres}}</p>
                <p class="font-normal font-sans">{{$info->flor}} этаж</p>
            </div>

            <x-logo></x-logo>
        </div>

        <div class="hdecor w-full h-5 bg-white rounded-t-xl z-20"></div>
    </header>

    <main class="h-auto mb-20" id="global_app">
        <div class="container mx-auto px-4">
            <swiper
                :slides-per-view="1"
                :pagination="true"
                :modules="modules"
            >
                <swiper-slide class="rounded-xl overflow-hidden"><img class="h-72 w-full object-contain sm:h-[500px]" src="{{$info->plan_img}}" alt=""></swiper-slide>
                <swiper-slide class="rounded-xl overflow-hidden"><img class="h-72 w-full object-contain sm:h-[500px]" src="{{$info->home_1_img}}" alt=""></swiper-slide>
                <swiper-slide class="rounded-xl overflow-hidden"><img class="h-72 w-full object-contain sm:h-[500px]" src="{{$info->home_2_img}}" alt=""></swiper-slide>
            </swiper>

            <div class="w-full bg-cfill rounded-xl p-3 my-3 flex flex-col">
                <div class="w-full flex font-header">
                    <span class="text-sred text-xl font-header font-bold mr-3">{{ number_format($info->price, 2, ".", " ") }} ₽</span>
                    <span class="text-cborder mt-auto line-through">{{ number_format((float)($info->price*1.15), 2, ".", " ") }} ₽</span>
                </div>
                <div class="w-full text-sm">
                    {{ number_format($info->price_metr, 2, ".", " ") }} за м²
                </div>
            </div>

            <calc-blk :homeprice="{{$info->price}}" :kvartirainfo="'{{$info->number.', '.$info->type.' '.$info->area.'м²'}}'"></calc-blk>

            <div class="w-full py-4 bg-cfill rounded-xl px-5 my-3 flex flex-col">
                <x-param-blk :name="'Тип '" :value="$info->type"></x-param-blk>
                <x-param-blk :name="'Номер квартиры'" :value="$info->number"></x-param-blk>
                <x-param-blk :name="'Площадь (общая)'" :value="$info->area"></x-param-blk>
                <x-param-blk :name="'Площадь (жилая)'" :value="$info->area_live"></x-param-blk>
                <x-param-blk :name="'Этаж'" :value="$info->flor.' из '.$info->home_info->flors"></x-param-blk>
                <x-param-blk :name="'Количество комнат'" :value="$info->rooms"></x-param-blk>
                <x-param-blk :name="'Вид из окна'" :value="$info->view"></x-param-blk>
                <x-param-blk :name="'Подезд'" :value="$info->podezd"></x-param-blk>
                <x-param-blk :name="'Заселение'" :value="'3 квартал 2024'"></x-param-blk>

            </div>
        </div>
  </main>



@endsection
