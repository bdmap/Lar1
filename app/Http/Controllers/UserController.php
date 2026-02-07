<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Validator;


class UserController extends Controller
{
    // регистрация
    public function register() {
        return view('register'); // вернем шаблон с регистрацией
    }

    // авторизация
    public function login() {
        return view('login'); // вернем шаблон с авторизацией
    }

// обработка авторизации
public function auth(Request $request) {
    $fields = Validator::make($request->all(),[ // валидация, 1 аргументом поля, которые были получены из html формы, 2 аргументом описание правил для этих полей
        'login' => 'required', // обязательное поле
        'password' => 'required', // обязательное поле
    ]);
    if ($fields->fails()) { // есть ли ошибки валидации
        return redirect(url()->previous()) // вернуться на прошлую страницу
        ->withErrors($fields); // вернуть ошибки валидации
    }

    $user = User::where('login', '=', $request->login) // вызываем модель User и пишем условия для выбора записи
    ->where('password', $request->password) // можно 2 аргумент не передавать "=", это будет значить, что по дефолту ларавел будет подставлять =, если вам нужно <, > и тд то нужно передавать 2 аргумент
    ->first(); //вернет объект, тобишь одну запись

    if (!$user) {   // если объект пустой
        return redirect(url()->previous()) // перенаправление на прошлую страницу
        ->withErrors(['error' => 'Неверный логин или пароль']); // кастомная ошибка
    }

    Auth::login($user); // создаем сессию, передав туда нашу найденную запись, объект
    return redirect(route('index')); // перенаправление на главную страницу
}

// обработка регистрации
public function userCreate(Request $request) {
    $data = $request->all();
    $fields = Validator::make($data,[
        'name' => 'required|regex:/^[a-zA-Z0-9\-]+$/i',
        'surname' => 'required|regex:/^[a-zA-Z0-9\-]+$/i',
        'patronymic' => 'nullable|regex:/^[a-zA-Z0-9\-]+$/i',
        'login' => 'required|regex:/^[a-zA-Z0-9\-]+$/i|unique:user,login',
        'email' => 'required|email|unique:user,email',
        'password' => 'required|min:6',
        'password_repeat' => 'required',
    ]);
    if ($fields->fails()) {
        return redirect(url()->previous())
            ->withErrors($fields);
    }
    if ($data['password'] !== $data['password_repeat']) {
        return redirect(url()->previous())
            ->withErrors(['error' => 'Пароли не совпадают']);
    }
    
    // Добавляем id_role = 1 (обычный пользователь)
    $data['id_role'] = 1;
    
    User::create($data);
    return redirect(route('login'))
        ->with(['msg' => 'Успешная регистрация']);
}

// обработка выхода
public function logout() {
    if (Auth::check()) Auth::logout(); // если сессия есть, то стираем
    return redirect(route('login')); // перенаправление на страницу авторизации
}

}