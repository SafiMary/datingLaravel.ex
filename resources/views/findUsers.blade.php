 
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

<div class="page-content container">
      <main class="main">
      <h1 class="page-title">Вот что удалось найти</h1>
 
 <!-- Список найденных пользователей-->
                            
	
 @foreach($findUserList as $user)
        <div class="cards">
          <div class="card">
      
                    <img class="rounded-circle" src="{{  asset('/storage/'. $user->avatar) }}" />
                   
            <div class="card-header">
              <a href="single.html" class="card-link">
                <h3 class="card-title">{{$user->name}}</h3>
              </a>
           </div>
           <p class="card-text">Возраст:{{$user->age}}</p>
            <p class="card-text">{{$user->city}}</p>
            <p class="card-text">{{$user->sex}}</p>
            </div>
          
         @endforeach
         </main>

         @endsection
  </body>
  </html>