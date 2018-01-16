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
        
        <form class="form-horizontal" method="POST" action="{{action('ResursiController@store')}}">
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
  <label class="control-label" for="focusedInput">Autors</label>
  <input name="autors" class="form-control" id="focusedInput" placeholder="Autors" type="text">
</div>

<div class="form-group">
  <label class="control-label" for="focusedInput">Gads</label>
  <input name="gads" class="form-control" id="focusedInput" placeholder="Gads" type="text">
</div>

<div class="form-group">
  <label class="control-label" for="focusedInput">Nosaukums</label>
  <input name="nosaukums" class="form-control" id="focusedInput" placeholder="Nosaukums" type="text">
</div>


<div class="form-group">
  <label class="control-label" for="focusedInput">Formāts</label>
  <input name="formats" class="form-control" id="focusedInput" placeholder="Formāts" type="text">
</div>

<div class="form-group">
  <label class="control-label" for="focusedInput">UDK</label>
  <input name="udk" class="form-control" id="focusedInput" placeholder="UDK" type="text">
</div>

<div class="form-group">
  <label class="control-label" for="focusedInput">Atslēgvārdi</label>
  <input name="atslegvardi" class="form-control" id="focusedInput" placeholder="Atslēgvārdi" type="text">
</div>

<div class="form-group">
  <label class="control-label" for="focusedInput">Lappuses</label>
  <input name="lpp" class="form-control" id="focusedInput" placeholder="Lpp" type="text">
</div>


<div class="form-group">
  <label class="control-label" for="focusedInput">Gramatas ISBN</label>
  <input name="gramata" class="form-control" id="focusedInput" placeholder="ISBN" type="text">
</div>

<div class="form-group">
  <label class="control-label" for="focusedInput">Zurnala ISSN</label>
  <input name="zurnals" class="form-control" id="focusedInput" placeholder="ISSN" type="text">
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

