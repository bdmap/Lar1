<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @extends('layouts.layout')

    @section('head')
        <title>Регистрация</title>
    @endsection

  </head>
  <body>
@section('content')
    <div class="content">

        <div class="head" id="register">Регистрация</div>
        <form action="{{ route('userCreate') }}" method="post">
            <input
                type="text"
                placeholder="Имя"
                name="name"
            />
            <input
                type="text"
                placeholder="Фамилия"
                name="surname"
            />
            <input
                type="text"
                placeholder="Отчество"
                name="patronymic"
            />
            <input
                type="text"
                placeholder="Логин"
                name="login"
            />
            <input
                type="email"
                placeholder="Email"
                name="email"
            />
            <input
                type="password"
                placeholder="Пароль"
                name="password"
            />
            <input
                type="password"
                placeholder="Повтор пароля"
                name="password_repeat"
            />
            <div class="part">
                <input type="checkbox" name="rules" required />
                <p>Согласие с правилами регистрации</p>
            </div>

            {{--      Если есть ошибки      --}}
            @if ($errors->any())
                {{--      Выводим массив ошибок через цикл      --}}
                @foreach($errors->all() as $error)
                    {{ $error }} <br>
                @endforeach
            @endif

            <button type="submit">Зарегистрироваться</button>
        </form>

    </div>
@endsection

  </body>
</html>
