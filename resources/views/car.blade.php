@extends('foot_head_content')

@section('content')
<h1><a href="/cars" >Вернутся на главную</a></h1>
<hr>
  <h1>

      <h1 class="text-center">Идентификатор: {{ $car->id }}</h1>
      <h1 class="text-center">Название: {{ $car->name }}</h1>
      <h1 class="text-center">Модель: {{ $car->model }}</h1>
      <h1 class="text-center">Регистрационный номер: {{ $car->reg }}</h1>

  </h1>
@endsection
