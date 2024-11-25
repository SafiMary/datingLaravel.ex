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
    

<x-guest-layout>

    <form class="my-cabinet" method="POST" enctype="multipart/form-data"action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Имя')" />
            <x-text-input id="name" class="row" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="row" />
        </div>

        <!-- Email Address -->
        <div class="row">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="row" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="row" />
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

      
        <!-- Password -->
        <div class="row">
            <x-input-label for="password" :value="__('Пароль')" />

            <x-text-input id="password" class="row"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="row" />
        </div>

        <!-- Confirm Password -->
        <div class="row">
            <x-input-label for="password_confirmation" :value="__('Подтвердите пароль')" />

            <x-text-input id="password_confirmation" class="row"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="row" />
        </div>

        <div class="row">
            <a  href="{{ route('login') }}">
                {{ __('Уже зарегистрированы?') }}
            </a>

            <x-primary-button class="search-button">
                {{ __('Зарегистрироваться') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

@endsection


<script src="/js/app.js"></script>
  </body>
  </html>