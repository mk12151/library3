@extends('layouts.app')
@section('content')
  

<div class="container">
    <div class="row">
      <div class="col-md-6">


            	  <form class="form-horizontal" method="POST" action="{{url('crud/insert_zurnals')}}">
{{csrf_field()}}

        <legend>@lang('messages.add_new_j')</legend>

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

 <button type="submit" class="btn btn-success">@lang('messages.save')</button>
<a href="{{url('crud')}}" class="btn btn-success">@lang('messages.cancel')</a>
</form>

    </div>
</div>
</div>

  @include('footer')
@endsection
