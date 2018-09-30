<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model//Создал модель вместе с конструктором. Не пригодилась. Может и можно было оптимизировать код с ее помощью. Зато к БД удобнее обращаться в конструкторе
{
    public static function one($num){
      return static::where('id', $num)->get();
    }
}
