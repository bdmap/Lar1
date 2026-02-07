<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'user'; // указываем название таблицы

    protected $primaryKey = 'id_user'; //указываем первичный ключ

    public $timestamps = false; // использовать ли created_at и updated_at в таблице, по умолчанию true, если у вас нету этих полей в таблице, то ставьте на false

    protected $fillable = [ // перечисляем поля нашей таблицы
        'id_user',
        'id_role',
        'name',
        'surname',
        'patronymic',
        'login',
        'email',
        'password',
    ];

    protected $hidden = [ // перечисляем поля нашей таблицы, которые будут скрыты для фронта, пишем только password
        'password',
    ];

    // проверка на админа
    public function isAdmin() {
        if ($this->id_role === 2) return true; // если текущая созданная модель с одной записью, где поле id_role === 2, то возвращаем true
        return false; // иначе false
    }

}
