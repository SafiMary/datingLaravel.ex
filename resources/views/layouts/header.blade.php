
<html lang="ru">
<head>
    @section('head') 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
  
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="shortcat icon" type="image/png" href="{{ asset('logo.png')}}"/>
    <link rel="shortcat icon" type="image/png" href="{{ asset('user.jpg')}}"/>
    <link rel="shortcat icon" type="image/png" href="{{ asset('love.jpg')}}"/>
    @show
  </head>

    <header class="header container">
       @section('header')
       <!-- логотип сайта -->
      <div class="navbar">
        <a href="/">
          <img src="img/logo.png" alt="logo: home" class="logo-image" />
        </a>
        
       <!-- меню сайта -->
        <div class="navbar-panel">
          <nav class="navbar-menu">
            <ul class="menu">
              <li class="menu-item">
              @guest
              @if (Route::has('register'))
              <a href="#" class="button button-link">Моя страница</a>
              </li>
              <li class="menu-item">
              <a href="#" class="button button-link">Поиск</a>
              @endif
              @else
                 <!-- ссылка в личный кабинет -->
                 <a class="button button-link" href="{{ route('mycabinet') }}">{{ __('Моя страница') }}</a>
                     </li>
              <li class="menu-item">
              <a class="button button-link" href="{{ route('search') }}">{{ __('Поиск') }}</a>
              </li>
                 @endguest
            </ul>
          </nav>
          <div class="button-group">
             <!-- ссылки справа -->
      
            @guest
               <!-- ссылка для входа -->
                    <a class="button button-link" href="{{ route('login') }}">{{ __('Вход') }}</a>
               
                @if (Route::has('register'))
                     <!-- ссылка для регистрации -->
                        <a class="button button-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                    
                @endif
            @else
              
                    <a class="button button-link" href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        {{ __('Выход') }} <!-- ссылка выхода -->
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
            
            @endguest
           
        </div>
    </nav>

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible mt-4" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Закрыть">
                <span aria-hidden="true">&times;</span>
            </button>
            {{ $message }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible mt-4" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Закрыть">
                <span aria-hidden="true">&times;</span>
            </button>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
           
        </div>
    @endif

          </div>
        </div>
            <!-- название сайта -->
        <div>
        <h1 class="header_logo">Потеряшки.ru</h1>
      </div>
      
       <!-- /.navbar-panel -->
      <div class="search-panel">
        <input type="search" class="search-input" placeholder="Поиск" />
        <button class="search-button">
          <span class="search-button-text">Найти</span>
        </button>
      </div>
    
    </header>

          @show
          
          
    

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>
   
  </body>
</html>
    

     