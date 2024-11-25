
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
    

<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
<x-guest-layout>
    <div class="row">
        {{ __('Забыли пароль? Без проблем. Просто сообщите нам свой адрес электронной почты, и мы вышлем вам ссылку для сброса пароля, которая позволит вам выбрать новый.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="row" :status="session('status')" />

    <form  class="my-cabinet"   method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="row" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="row" />
        </div>

        <div class="row">
            <x-primary-button  class="search-button">
                {{ __('Ссылка для сброса пароля') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>


@endsection
  </body>
  </html>