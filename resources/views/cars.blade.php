<!--Это фаил,который выводит названия всех машин в базе данных-->

@extends('foot_head_content')


@section('content')

  <h1><a href="create">Добавить новую машину</a></h1>
  <hr>

   <table class="table">
     <thead>
       <tr>
         <th scope="col">Имя</th>
         <th scope="col">Модель</th>
         <th scope="col">Регистрационный номер</th>
         <th scope="col">Действие</th>
       </tr>
     </thead>
     <tbody>
       @foreach ($cars as $car) <!--Вывод информации из БД в таблицу-->
         <tr>
           <th scope="row"><a href="cars/{{ $car->id }}"> {{ $car->name }} </a></th>
           <th>{{ $car->model }}</th>
           <th>{{ $car->reg }}</th>
           <th><button class="btn" onclick="location.href='delete/{{ $car->id }}'"> Delete </button></th><!--Я извиняюсь за onclick,но в данной программе делать отдельный скрип ради 3-х слов...-->
         </tr>
       @endforeach
     </tbody>
   </table>

@endsection
