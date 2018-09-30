@extends('foot_head_content')

@section('content')
<h1><a href="/cars" >Вернутся на главную</a></h1>
<hr>

  <form action="/insert" method="post">
    {{ csrf_field() }} <!--Я не стал углублятся в действия данной защиты,но без этой строчки отказывается работать-->
    <div class="form-group">
      <label for="carName">Название машины</label>
      <input type="text" class="form-control" id="carName" aria-describedby="carAria" placeholder="Название" name="car_name">
      <small id="carAria" class="form-text text-muted">Не более миллиарда знаков</small>
    </div>
    <div class="form-group">
      <label for="carModel">Модель машины</label>
      <input type="text" class="form-control" id="carModel" placeholder="Модель" aria-describedby="modelAria" name="car_model">
      <small id="modelAria" class="form-text text-muted">Не более триллиарда знаков</small>
    </div>
    <div class="form-group">
      <label for="carReg">Регистрационный номер машины</label>
      <input type="text" class="form-control" id="carReg" placeholder="Модель" aria-describedby="regAria" name="car_reg">
      <small id="regAria" class="form-text text-muted">Не более 100 знаков</small>
    </div>
    <button type="submit" class="btn btn-primary">Сохранить</button>
  </form>

@endsection
