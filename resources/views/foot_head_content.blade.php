<!--Фаил-шаблон для остальных представлений-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!--Bootstrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!--Bootstrap-->

  <style media="screen">
    .header{
      height:120px;
      background-color: rgb(0,255,102);
    }
    .footer {
      height:150px;
      position: absolute;
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: rgb(0,0,153);
    }
  </style>

  <title>Приложение</title>
</head>
<body>

    <div class="header">
      <h1 class="display-1 text-center text-danger">Здесь находится шапка</h1>
    </div>


    <div class="container text-primary"> <!--Секция для контента-->
      <p><br></p>
      @section('content')
      @show
    </div>


    <div class="footer">
      <h1 class="display-1 text-center text-warning">Здесь находится подвал</h1>
    </div>

</body>
</html>
