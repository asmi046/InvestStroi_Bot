@extends('layouts.all')

@php
    $title = "Главная";
    $description = "Выберите необходимые параметры Вашей будущей квартиры";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')
    <header class="relative flex border-gray-300 text-white text-2xl flex-col bg-sblue font-header bg-center bg-cover" style="background-image:url({{asset('img/hbg.webp')}})">
        <div class="w-full h-full bg-black bg-opacity-50 absolute left-0 top-0 z-10"></div>
        <div class="container mx-auto px-4 py-4 flex justify-between">
            <div class="logo m-auto ml-0 flex z-20">
                <p class="">Подбор <br/>квартир</p>
            </div>

            <a class="menu bg-white w-9 h-9 rounded-full my-auto bg-no-repeat bg-center z-20" style="background-image:url({{asset('img/logo-blue.svg')}})" href="#"></a>
        </div>

        <div class="hdecor w-full h-5 bg-white rounded-t-xl z-20"></div>
    </header>

    <main class="h-10" id="global_app">
        <div class="container mx-auto px-4">
            <form action="">
                <custom-select :label="'Выберите дом'" :list="['Дом 1','Дом 3', 'Дом 2']" ></custom-select>
                <custom-select :label="'Количество комнат'" :list="['1','2', '3']" ></custom-select>
            </form>

            <div class="flex flex-wrap justify-between">
                @for ($i =0; $i<12; $i++)
                    <x-home-card></x-home-card>
                @endfor
            </div>
        </div>
  </main>

  <div class="fixed flex-wrap left-0 bottom-0 w-full h-16 bg-white borderShadow flex justify-between text-cborder px-1 py-2 xl:px-4">

        <x-botom-menu-punkt :msg="'Поделиться'" :icon="'bg-shreBg'" :icon_h="'group-hover:bg-shreBg_h'"></x-botom-menu-punkt>
        <x-botom-menu-punkt :msg="'Позвонить'" :icon="'bg-callBg'" :icon_h="'group-hover:bg-callBg_h'"></x-botom-menu-punkt>
        <x-botom-menu-punkt :msg="'Написать'" :icon="'bg-msgBg'" :icon_h="'group-hover:bg-msgBg_h'"></x-botom-menu-punkt>
        <x-botom-menu-punkt :msg="'Избраное'" :icon="'bg-likeBg'" :icon_h="'group-hover:bg-likeBg_h'"></x-botom-menu-punkt>
        <x-botom-menu-punkt :msg="'Подбор'" :icon="'bg-searchBg'" :icon_h="'group-hover:bg-searchBg_h'"></x-botom-menu-punkt>

  </div>
@endsection
