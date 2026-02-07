<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @extends('layouts.layout')

    @section('head')
        <title>Авторизация</title>
    @endsection
  </head>
  <body>
@section('content')
    <div class="content">

        <div class="head" id="login">Вход</div>
        <form action="{{ route('auth') }}" method="post">
            <input type="text" placeholder="Логин" name="login" />
            <input
                type="password"
                placeholder="Пароль"
                name="password"
            />

            {{--      Если есть ошибки      --}}
            @if ($errors->any())
                {{--      Выводим массив ошибок через цикл      --}}
                @foreach($errors->all() as $error)
                    {{ $error }} <br>
                @endforeach
            @endif

            {{--        сообщение переданное на эту страницу через with() в контроллере    --}}
            {{ session('msg') }}

            <button type="submit">Войти</button>
        </form>

    </div>
@endsection

  </body>
</html>
