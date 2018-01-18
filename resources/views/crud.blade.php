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

        <a href="{{ url('crud/create') }}" class="btn btn-success">@lang('messages.add_new_rec')</a> 
        <a href="{{ url('crud/create_gramata') }}" class="btn btn-success">@lang('messages.add_new_b')</a> 
        <a href="{{ url('crud/create_zurnals') }}" class="btn btn-success">@lang('messages.add_new_j')</a> 
        <br><br>

  <label  class="col-sm-2"><h4>@lang('messages.order_by'): </h4></label>

  <a href="{{ action('ResursiController@home', ['kd'=>'2'] ) }}" type="button" class="btn">@lang('messages.title1')</a>  <a href="{{ action('ResursiController@home', ['kd'=>'3'] ) }}" type="button" class="btn">@lang('messages.year1')</a> 
<br> <br>
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>ID</th>
      <th>@lang('messages.title')s</th>
      <th>@lang('messages.author')</th>
      <th>@lang('messages.year')</th>
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
            <a href='{{ url("result/{$article->id}") }}' class="btn btn-primary">@lang('messages.view')</a> |
            <a href='{{ url("crud/update/{$article->id}") }}' class="btn btn-success">@lang('messages.edit')</a> |
            <a href='{{ url("crud/delete/{$article->id}") }}' class="btn btn-danger">@lang('messages.delete')</a>
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
