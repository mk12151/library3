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
      <div class="col-md-6">


            	  <form class="form-horizontal" method="POST" action="{{url('crud/insert_zurnals')}}">
{{csrf_field()}}

        <legend>Izveidot jaunu ierakstu</legend>

@if(count($errors)>0)
@foreach($errors->all() as $error)
  @if($error)
  <div class="alert alert-danger">
  {{$error}}</div>
  @endif
@endforeach
@endif
        

<div class="form-group">
  <label class="control-label" for="disabledInput">ISSN</label>
  <input name="ISSN" class="form-control" id="disabledInput" placeholder="ISSN" type="text">
</div>

<div class="form-group">
  <label class="control-label" for="disabledInput">Nr</label>
  <input name="nr" class="form-control" id="disabledInput" placeholder="Nr" type="text">
</div>

 <button type="submit" class="btn btn-success">Saglabāt</button>
<a href="{{url('crud')}}" class="btn btn-success">Atcelt</a>
</form>

    </div>
</div>
</div>

        @include('footer')


</body>
</html>

