
@extends('layouts.header')


<html lang="ru">
<head>
@section('head')
 @section('title')
@endsection
</head>
  <body>
   @section('header')
    @parent
    
<!-- Форма поиска  -->

<!-- Session Status -->
<x-auth-session-status class="row" :status="session('status')" />
  
            <form class="my-cabinet"  action="{{ route('search') }}" method="post" enctype="multipart/form-data">
                @csrf
            
                 <div class="row">
                    <h1 class="page-title">Введите данные для поиска</h1>
                </div>
 <!-- Возраст -->
 <div class="row">
            <x-input-label for="age" :value="__('Возраст')" />
            <select class="select-age" name="age" >
                            @foreach ($ageList as $el)
                                <option value="{{$el}}">{{$el}}</option>
                            @endforeach
                        </select>
        </div>
        <!-- Пол -->
        <div class="row">
        <x-input-label for="city" :value="__('Пол')" />
        <select class="select-sex" name="sex">
                            @foreach ($sexList as $el)
                                <option value="{{$el}}">{{$el}}</option>
                            @endforeach
                        </select>
        </div>
        <!-- Город -->
        <div class="row">
            <x-input-label for="city" :value="__('Город')" />
            <select class="select-city" name="city">
                            @foreach ($cityList as $el)
                                <option value="{{$el}}">{{$el}}</option>
                            @endforeach
                        </select>
        </div>

              
                <div class="row2">
                    <button type="submit" class="button-my-cabinet">Искать</button>
                </div>


               


            </form>

            





            @endsection
  </body>
  </html>