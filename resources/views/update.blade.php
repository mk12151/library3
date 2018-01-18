@extends('layouts.app')
@section('content')
  

<div class="container">
    <div class="row">
     
     <div class="col-sm-2"></div>
     <div class="col-sm-8">
        
       
              <div class="display-1">
                <h2> @lang('messages.edit_rec')</h2></div>
                <br>
    
              @if(count($errors)>0)
              @foreach($errors->all() as $error)
                @if($error)
                <div class="alert alert-danger">
                {{$error}}</div>
                @endif
              @endforeach
              @endif

               <form class="form-horizontal" method="POST" action="{{url('crud/edit', array($article->id)) }}">
            {{csrf_field()}}


<div class="form-group">
  <label class="control-label" for="focusedInput">@lang('messages.author')</label>
  <input name="autors" value="<?php echo $article->autors ?>" class="form-control" id="focusedInput" placeholder="Autors" type="text">
</div>

<div class="form-group">
  <label class="control-label" for="focusedInput">@lang('messages.year')</label>
  <input name="gads" value="<?php echo $article->gads ?>" class="form-control" id="focusedInput" placeholder="Gads" type="text">
</div>

<div class="form-group">
  <label class="control-label" for="focusedInput">@lang('messages.title')</label>
  <input name="nosaukums" value="<?php echo $article->nosaukums ?>" class="form-control" id="focusedInput" type="text">
</div>


<div class="form-group">
  <label class="control-label" for="focusedInput">@lang('messages.format')</label>
  <input name="formats" value="<?php echo $article->formats ?>" class="form-control" id="focusedInput" type="text">
</div>

<div class="form-group">
  <label class="control-label" for="focusedInput">@lang('messages.udc')</label>
  <input name="udk" value="<?php echo $article->udk ?>" class="form-control" id="focusedInput" type="text">
</div>

<div class="form-group">
  <label class="control-label" for="focusedInput">@lang('messages.atsv')</label>
  <input name="atslegvardi" value="<?php echo $article->atslegvardi ?>"class="form-control" id="focusedInput" type="text">
</div>

<div class="form-group">
  <label class="control-label" for="focusedInput">@lang('messages.pages')</label>
  <input name="lpp" value="<?php echo $article->lpp ?>" class="form-control" id="focusedInput" type="text">
</div>

@if($article->gramata!=NULL)
<div class="form-group">
  <label class="control-label" for="focusedInput">ISBN</label>
  <input name="gramata" value="<?php echo $article->gramata->ISBN ?>" class="form-control" id="focusedInput" type="text">
  </div>
@endif

 @if($article->zurnals!=NULL)
<div class="form-group">
  <label class="control-label" for="focusedInput">ISSN</label>
  <input name="zurnals"  value="<?php echo $article->zurnals->ISSN ?>" class="form-control" id="focusedInput" type="text">
</div>

<div class="form-group">
  <label class="control-label" for="focusedInput">@lang('messages.j_nr').</label>
  <input name="nr"  value="<?php echo $article->zurnals->nr ?>" class="form-control" id="focusedInput" type="text">
</div>
 @endif


 <button type="submit" class="btn btn-success">@lang('messages.edit')</button>
<a href="{{url('crud')}}" class="btn btn-success">@lang('messages.cancel')</a>
</form>


  </div>
            <div class="col-sm-2"></div>


    </div>
</div>
</div>

@include('footer')
@endsection

