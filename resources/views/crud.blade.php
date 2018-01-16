<!doctype html>
<html>
 <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
<body>

        @include('header')
  

<div class="container">
    <div class="row">
        
<legend>Ieraksti</legend>

@if(session('info'))
<div class="alert alert-success">
 {{session('info')}}</div>
@endif

<br>

<a href="{{ url('crud/create') }}" class="btn btn-success">Pievienot jaunu resursu</a> 
<a href="{{ url('crud/create_gramata') }}" class="btn btn-success">Pievienot jaunu grāmatu</a> 
<a href="{{ url('crud/create_zurnals') }}" class="btn btn-success">Pievienot jaunu žurnālu</a> 

<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nosaukums</th>
      <th>Autors</th>
      <th>Gads</th>
    </tr>
  </thead>
  <tbody>
    @if(count($article)>0)
    @foreach($article->all() as $article)

    <tr>

      <td>{{$article->id}}</td>
      <td>{{$article->nosaukums}}</td>
      <td>{{$article->autors}}</td>
      <td>{{$article->gads}}</td>
      <td>
            <a href='{{ url("result/{$article->id}") }}' class="btn btn-primary">Skatīt</a> |
            <a href='{{ url("crud/update/{$article->id}") }}' class="btn btn-success">Rediģēt</a> |
            <a href='{{ url("crud/delete/{$article->id}") }}' class="btn btn-danger">Dzēst</a>
      </td>
    </tr>

     @endforeach
        @endif
  </tbody>
</table> 



    </div>
</div>




        @include('footer')


</body>
</html>

