@extends('layouts.all')

@php
    $title = "Благодарим за обращение";
    $description = "Выберай из понравившихся квартир ту которая подходит именно тебе.";
@endphp

@section('title', $title)
@section('description', $description)

@section('content')
    <header class="relative flex border-gray-300 text-white text-2xl flex-col bg-sblue font-header bg-center bg-cover" style="background-image:url({{asset('img/hbg.webp')}})">
        <div class="w-full h-full bg-black bg-opacity-50 absolute left-0 top-0 z-10"></div>
        <div class="container mx-auto px-4 py-4 flex justify-between">
            <div class="logo m-auto ml-0 flex z-20">
                <h1 class="">Благодарим <br/>за обращение</h1>
            </div>

            <a class="menu bg-white w-9 h-9 rounded-full my-auto bg-no-repeat bg-center z-20" style="background-image:url({{asset('img/logo-blue.svg')}})" href="#"></a>
        </div>

        <div class="hdecor w-full h-5 bg-white rounded-t-xl z-20"></div>
    </header>

    <main class="h-auto mb-20" id="global_app">
        <div class="container mx-auto px-4">

        </div>
    </main>



@endsection
