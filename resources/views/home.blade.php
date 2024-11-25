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
    
      <!-- список зарегистрированных пользователей витрина -->
    
      <div class="page-content container">
      <main class="main">
      <h1 class="page-title">Рекомендации для вас</h1>
        @foreach($user_list as $user)
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
      <aside class="sidebar">

      <a href="#">
          <img src="img/love.jpg" alt="love: home" class="banner-image" />
        </a>

       
        <hr color="#E5E5E5" />
        <footer class="footer">
          <p class="footer-text">© Потеряшки.ru, 2024 г.</p>
          <ul class="footer-menu">
            <li class="footer-menu-item">
              <a href="#" class="footer-text">Политика конфиденциальности</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-text">Обработка данных</a>
            </li>
          </ul>
          <ul class="footer-menu">
            <li class="footer-menu-item">
              <a href="#" class="footer-link">Реклама на сайте</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-link">Вакансии</a>
            </li>
            <li class="footer-menu-item">
              <a href="#" class="footer-link">Помощь</a>
            </li>
          </ul>
        </footer>
      </aside>
    </div>
  
  
  
    
    <script src="js/main.js"></script>
   
  </body>
</html>
 @endsection