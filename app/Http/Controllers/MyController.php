<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use DB;

class MyController extends Controller
{

  public function create(){ //Форма
    return view('create');
  }

  public function success(){ //Добавление машины успешно
    return view('success');
  }

  public function index(){ //Получение всех данных из таблицы cars.
    $cars = App\Car::all();
    return view('cars', compact('cars'));
  }

  public function show($id){ //Показать выбранную машину отдельно
    if(is_numeric($id)){
      $car = App\Car::find($id);
      return view('car', compact('car'));
    }
    else{
      abort(404, 'Not a number'); // Возможно не лучшая функция для выведения кода ошибки. 
    }
  }

  public function delete($id){ //Удаление машины по нажатию кнопки
    $number = App\Car::find($id);
    DB::table('cars')->where('id', '=', $number->id)->delete();
    return view('delete', compact('number'));
  }

  public function insert(Request $request){ //Сам обработчик добавления машины в БД
     $i = 0; //Флаг
     $name = $request->input('car_name');
     $model = $request->input('car_model');
     $regNum = $request->input('car_reg');
     $sel1 = DB::table('cars')->select('id', 'name', 'model', 'reg')->where('name' , '=', $name)->get(); //Пытался создать запрос при помощи or.
      $sel2 = DB::table('cars')->select('id', 'name', 'model', 'reg')->where('model' , '=', $model)->get(); //Не вышло
       $sel3 = DB::table('cars')->select('id', 'name', 'model', 'reg')->where('reg' , '=', $regNum)->get(); //На данный момент сделал 3 переменные
     foreach ($sel1 as $car){ //Проверяем введеное название
       $i++;
       $id = $car->id; //Поймаем id уже существующей машины
     }
     foreach ($sel2 as $car){ //Модель
       $i++;
       $id = $car->id;
     }
     foreach ($sel3 as $car){ //Регистрационный номер
       $i++;
       $id = $car->id;
     }
     if ($i == 0) { //Цикл ни разу не сработал. Машины в БД нет. Добавляем.
       DB::insert('insert into cars (name, model, reg) values(?,?,?)',[$name, $model, $regNum]);
       return view('success');
     }
     else { //Цикл сработал. Данная машина уже есть
       $car = App\Car::find($id);
       return view('car', compact('car')); //Показываем машину с повторяющимися данными
       abort(200, 'Такая машина уже существует');
     }
  }

} //Конец MyController
