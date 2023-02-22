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

            <a class="menu bg-white w-9 h-9 rounded-full my-auto bg-no-repeat bg-center z-20" style="background-image:url({{asset('img/logo-blue.svg')}})" href="#"></a>
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
                    <span class="text-sred text-xl font-header font-bold mr-3">5 450 0000 ₽</span>
                    <span class="text-cborder mt-auto line-through">6 850 0000 ₽</span>
                </div>
                <div class="w-full text-sm">
                    58 000 за м²
                </div>
            </div>

            <div class="w-full">
                    <div class="w-full border border-cfill rounded-xl p-4 flex flex-wrap">
                        <div class="w-11/12">
                            <h2 class="pt-0">Семейная ипотека</h2>
                        </div>
                        <div class="w-1/12">
                            <span class=" block bg-sred w-5 h-5 rounded-sm"></span>
                        </div>
                    </div>
            </div>

            <div class="w-full py-4 bg-cfill rounded-xl p-3 my-3 flex flex-col">
                <div class="w-full border-b border-b-cborder flex justify-between">
                    <h3 class="font-header">Адрес</h3>
                    <span>ул. Косухина д. 33</span>
                </div>

                <div class="w-full border-b border-b-cborder flex justify-between">
                    <h3 class="font-header">Этаж</h3>
                    <span>7 из 9</span>
                </div>

                <div class="w-full border-b border-b-cborder flex justify-between">
                    <h3 class="font-header">Заселение</h3>
                    <span>4 квартал 2023</span>
                </div>

            </div>
        </div>
  </main>



@endsection
