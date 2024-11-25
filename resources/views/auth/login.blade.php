
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
    <!-- Session Status -->
    <x-auth-session-status class="row" :status="session('status')" />

    <form  class="my-cabinet" method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="row">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="row" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="row"  />
        </div>

        <!-- Password -->
        <div class="row">
            <x-input-label for="password" :value="__('Пароль')" />

            <x-text-input id="password" class="row" 
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="row"  />
        </div>

        <!-- Remember Me -->
        <div class="checkbox">
            <label for="remember_me"  >
                <input id="remember_me" type="checkbox" name="remember">
                <span >{{ __('Запомнить меня') }}</span>
            </label>
        </div>

        <div class="row" >
            @if (Route::has('password.request'))
                <a class="row"  href="{{ route('password.request') }}">
                    {{ __('Забыли пароль?') }}
                </a>
            @endif

            <x-primary-button class="search-button" >
                {{ __('Авторизоваться') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>


@endsection
  </body>
  </html>