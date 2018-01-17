@extends('layouts.app')
@section('content')
  

<div class="container">
    <div class="row">

      <div class="col-sm-2"></div>
            <div class="col-sm-8">
        
      
       <div class="display-1">
            <h3>Izveidot jaunu ierakstu</h3></div>
              <br>
        @if(count($errors)>0)
        @foreach($errors->all() as $error)
          @if($error)
          <div class="alert alert-danger">
          {{$error}}</div>
          @endif
        @endforeach
        @endif

<form class="form-horizontal" method="POST" action="{{action('ResursiController@store')}}">
          {{csrf_field()}}

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
            <div class="col-sm-2"></div>
</div>
</div>
@include('footer')
@endsection