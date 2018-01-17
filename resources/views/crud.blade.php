@extends('layouts.app')
@section('content')
  

<div class="container">
    <div class="row">
        <div class="display-1">
            <h2>Ieraksti</h2></div>

        @if(session('info'))
        <div class="alert alert-success">
         {{session('info')}}</div>
        @endif
        <br>

        <a href="{{ url('crud/create') }}" class="btn btn-success">Pievienot jaunu resursu</a> 
        <a href="{{ url('crud/create_gramata') }}" class="btn btn-success">Pievienot jaunu grāmatu</a> 
        <a href="{{ url('crud/create_zurnals') }}" class="btn btn-success">Pievienot jaunu žurnālu</a> 
        <br><br>

  <label  class="col-sm-2"><h4>Kārtot pēc: </h4></label>

  <a href="{{ action('ResursiController@home', ['kd'=>'2'] ) }}" type="button" class="btn">Nosaukuma</a>  <a href="{{ action('ResursiController@home', ['kd'=>'3'] ) }}" type="button" class="btn">Datuma</a> 
<br> <br>
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
@endsection
