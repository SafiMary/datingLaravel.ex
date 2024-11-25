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
    <form class="my-cabinet"  method="POST" action="{{ route('password.store') }}">
        @csrf

        <!-- Password Reset Token -->
        <input type="hidden" name="token" value="{{ $request->route('token') }}">

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="row" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="row" />
        </div>

        <!-- Password -->
        <div class="row">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="row" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="row" />
        </div>

        <!-- Confirm Password -->
        <div class="row">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="row"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="row" />
        </div>

        <div class="row">
            <x-primary-button  class="search-button">
                {{ __('Сбросить пароль') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>


@endsection
  </body>
  </html>