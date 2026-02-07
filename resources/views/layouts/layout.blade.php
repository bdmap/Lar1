<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    @yield('head')
</head>
<body>
    <header>
        <div class="top">
            <div class="row">
                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo" />
                <a href="/">
                    <h1>Brawl Club</h1>
                </a>
            </div>
            <h2>Слоган Компании</h2>
        </div>
        <div class="content">
            <ul>
                <li><a href="{{ route('index') }}">О нас</a></li>
                <li><a href="#">Каталог</a></li>
                <li><a href="{{ route('where') }}">Где нас найти?</a></li>
                @guest() {{-- Если это гость --}}
                    <li>
                        <a href="{{ route('login') }}"><button>Вход</button></a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}"><button>Регистрация</button></a>
                    </li>
                @endguest
                    @auth() {{-- Если это авторизированный пользователь --}}
                        <li><a href="{{ route('basket') }}">Корзина</a></li>
                        <li><a href="{{ route('orders') }}">Заказы</a></li>
                    @if(auth()->user()->isAdmin())  {{-- Если это авторизированный пользователь с админкой --}}
                        <li><a href="#">Админ панель</a></li>
                    @endif
                        <li><a href="{{ route('logout') }}">Выход</a></li>
                @endauth
            </ul>

        </div>
    </header>

    <div class="message"></div>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="footer">
            Все права защищены мной | 2006
        </div>
    </footer>
</body>
</html>