@extends('layouts.app')
@section('content')
  

<div class="container">
    <div class="row">

      <div class="col-sm-2"></div>
            <div class="col-sm-8">
        
      
       <div class="display-1">
            <h3>@lang('messages.add_new_rec')</h3></div>
              <br>
        @if(count($errors)>0)
        @foreach($errors->all() as $error)
          @if($error)
          <div class="alert alert-danger">
          {{$error}}</div>
          @endif
        @endforeach
        @endif

<form file="true" class="form-horizontal" method="POST" action="{{action('ResursiController@store')}}" enctype="multipart/form-data">
  <input name="_token" type="hidden" value="somelongrandom string">

          {{csrf_field()}}

<div class="form-group">
  <label class="control-label" for="focusedInput">@lang('messages.author')</label>
  <input name="autors" class="form-control" id="focusedInput" placeholder="@lang('messages.author')" type="text">
</div>

<div class="form-group">
  <label class="control-label" for="focusedInput">@lang('messages.year')</label>
  <input name="gads" class="form-control" id="focusedInput" placeholder="@lang('messages.year')" type="text">
</div>

<div class="form-group">
  <label class="control-label" for="focusedInput">@lang('messages.title')</label>
  <input name="nosaukums" class="form-control" id="focusedInput" placeholder="@lang('messages.title')" type="text">
</div>


<div class="form-group">
  <label class="control-label" for="focusedInput">@lang('messages.format')</label>
  <input name="formats" class="form-control" id="focusedInput" placeholder="@lang('messages.format')" type="text">
</div>

<div class="form-group">
  <label class="control-label" for="focusedInput">@lang('messages.udc')</label>
  <input name="udk" class="form-control" id="focusedInput" placeholder="@lang('messages.udc')" type="text">
</div>

<div class="form-group">
  <label class="control-label" for="focusedInput">@lang('messages.atsv')</label>
  <input name="atslegvardi" class="form-control" id="focusedInput" placeholder="@lang('messages.atsv')" type="text">
</div>

<div class="form-group">
  <label class="control-label" for="focusedInput">@lang('messages.pages')</label>
  <input name="lpp" class="form-control" id="focusedInput" placeholder="@lang('messages.pages')" type="text">
</div>


<div class="form-group">
  <label class="control-label" for="focusedInput">ISBN</label>
  <input name="gramata" class="form-control" id="focusedInput" placeholder="ISBN" type="text">
</div>

<div class="form-group">
  <label class="control-label" for="focusedInput">ISSN</label>
  <input name="zurnals" class="form-control" id="focusedInput" placeholder="ISSN" type="text">
</div>


     <div class="form-group{{ $errors->has('image_small') ? ' has-error' : '' }}">     
          <label for="image_small" class="btn">@lang('messages.image')
                    <input class="btn btn-md"  name="image_small" type="file">
                                @if ($errors->has('image_small'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image_small') }}</strong>
                                    </span>
                                @endif                    
                    </label>
                    </div>

        
 <input type="submit" class="btn btn-success" value="@lang('messages.save')">
<a href="{{url('crud')}}" class="btn btn-success">@lang('messages.cancel')</a>
</form>
        

          </div>
            <div class="col-sm-2"></div>
</div>
</div>
@include('footer')
@endsection