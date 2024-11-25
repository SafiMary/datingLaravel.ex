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
    <div class="row">
        {{ __('Спасибо за регистрацию! Прежде чем начать, не могли бы вы подтвердить свой адрес электронной почты, нажав на ссылку, которую мы только что отправили вам по электронной почте? Если вы не получили письмо, мы с радостью отправим вам другое.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="row">
            {{ __('Новая ссылка для подтверждения была отправлена ​​на адрес электронной почты, который вы указали при регистрации.') }}
        </div>
    @endif

    <div class="row">
        <form  class="my-cabinet"  method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button class="search-button">
                    {{ __('Повторно отправить письмо с подтверждением') }}
                </x-primary-button>
            </div>
        </form>

        <form  class="my-cabinet" method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="search-button">
                {{ __('Выйти') }}
            </button>
        </form>
    </div>
</x-guest-layout>


@endsection
  </body>
  </html>