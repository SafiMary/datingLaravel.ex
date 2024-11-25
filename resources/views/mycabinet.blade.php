
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
    
<!-- Session Status -->
<x-auth-session-status class="row" :status="session('status')" />
  
            <form class="my-cabinet"  action="{{ route('mycabinet') }}" method="post" enctype="multipart/form-data">
                @csrf
            
                <div class="row-nik-info">
            
                   <!-- Аватарка -->
                   <img class="rounded-circle" src="{{  asset('/storage/'. $user->avatar) }}" />
                    <!-- Никнейм -->
                    <div class="row">    
                    <h1 class="nik">{{$user->name}}</h1> 
                    <p class="card-text">Возраст: {{$user->age}}</p>
                    <p class="card-text">Город: {{$user->city}}</p>
                    <p class="card-text">Пол: {{$user->sex}}</p>  
                    </div>
                </div>


               
                <div class="row">
                    <h1 class="page-title">Загрузите ваше фото, для удобного поиска</h1>
                    <input type="file" name="avatar" accept="image/*" >
                </div>
                <div class="row2">
                    <button type="submit" class="button-my-cabinet">Загрузить</button>
                </div>
            </form>

    

            @endsection
  </body>
  </html>