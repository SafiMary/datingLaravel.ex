
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
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Это безопасная область приложения. Пожалуйста, подтвердите свой пароль, прежде чем продолжить.') }}
    </div>

    <form  class="my-cabinet" method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <x-input-label for="password" :value="__('Пароль')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end mt-4">
            <x-primary-button class="search-button">
                {{ __('Подтверждаю') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

@endsection
  </body>
  </html>
