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
                <h1 class="">Подбор <br/>квартир</h1>
            </div>

            <x-logo></x-logo>
        </div>

        <div class="hdecor w-full h-5 bg-white rounded-t-xl z-20"></div>
    </header>

    <main class="h-auto mb-20" id="global_app">

        <div class="container mx-auto px-4">
            <flat-search></flat-search>

            <form class="flex flex-wrap"  action="">
                <div class="flex-1">
                    <custom-select :selected="'{{request()->input('home')}}'" :label="'Выберите дом'" :list='@json($all_home->toArray())' :field="'addres'" :name="'home'"></custom-select>
                    <custom-select :selected="'{{request()->input('kvartira')}}'" :label="'Количество комнат'" :list='@json($kvtype->toArray())' :field="'type'" :name="'kvartira'"></custom-select>
                </div>
                <div class="flex flex-col ml-2">
                    <button class="bg-sred text-white px-3 py-1 rounded-md min-h-[40px] mb-3" type="submit">Выбрать</button>
                    <a href="{{route('home')}}" class="bg-sblue text-white px-3 py-1 rounded-md min-h-[40px] text-center leading-[32px]" type="submit">Сброс</a>
                </div>

            </form>

            <div class="flex flex-wrap justify-between">
                @foreach ($kvartirs as $item)
                @php
                    $fav = ($favorites->contains("product_sku", $item->id))?1:0;
                @endphp

                    <x-home-card :item="$item" :home="$selecthome" :infavorites="$fav"></x-home-card>
                @endforeach


            </div>
        </div>
  </main>



@endsection
