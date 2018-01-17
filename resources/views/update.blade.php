@extends('layouts.app')
@section('content')
  

<div class="container">
    <div class="row">
     
     <div class="col-sm-2"></div>
     <div class="col-sm-8">
        
       
              <div class="display-1">
                <h2> Izveidot jaunu ierakstu</h2></div>
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
  <label class="control-label" for="focusedInput">Autors</label>
  <input name="autors" value="<?php echo $article->autors ?>" class="form-control" id="focusedInput" placeholder="Autors" type="text">
</div>

<div class="form-group">
  <label class="control-label" for="focusedInput">Gads</label>
  <input name="gads" value="<?php echo $article->gads ?>" class="form-control" id="focusedInput" placeholder="Gads" type="text">
</div>

<div class="form-group">
  <label class="control-label" for="focusedInput">Nosaukums</label>
  <input name="nosaukums" value="<?php echo $article->nosaukums ?>" class="form-control" id="focusedInput" type="text">
</div>


<div class="form-group">
  <label class="control-label" for="focusedInput">Formāts</label>
  <input name="formats" value="<?php echo $article->formats ?>" class="form-control" id="focusedInput" type="text">
</div>

<div class="form-group">
  <label class="control-label" for="focusedInput">UDK</label>
  <input name="udk" value="<?php echo $article->udk ?>" class="form-control" id="focusedInput" type="text">
</div>

<div class="form-group">
  <label class="control-label" for="focusedInput">Atslēgvārdi</label>
  <input name="atslegvardi" value="<?php echo $article->atslegvardi ?>"class="form-control" id="focusedInput" type="text">
</div>

<div class="form-group">
  <label class="control-label" for="focusedInput">Lappuses</label>
  <input name="lpp" value="<?php echo $article->lpp ?>" class="form-control" id="focusedInput" type="text">
</div>

@if($article->gramata!=NULL)
<div class="form-group">
  <label class="control-label" for="focusedInput">Gramatas ISBN</label>
  <input name="gramata" value="<?php echo $article->gramata->ISBN ?>" class="form-control" id="focusedInput" type="text">
  </div>
@endif

 @if($article->zurnals!=NULL)
<div class="form-group">
  <label class="control-label" for="focusedInput">Zurnala ISSN</label>
  <input name="zurnals"  value="<?php echo $article->zurnals->ISSN ?>" class="form-control" id="focusedInput" type="text">
</div>

<div class="form-group">
  <label class="control-label" for="focusedInput">Zurnala Nr</label>
  <input name="nr"  value="<?php echo $article->zurnals->nr ?>" class="form-control" id="focusedInput" type="text">
</div>
 @endif


 <button type="submit" class="btn btn-success">Rediģēt</button>
<a href="{{url('crud')}}" class="btn btn-success">Atcelt</a>
</form>


  </div>
            <div class="col-sm-2"></div>


    </div>
</div>
</div>

@include('footer')
@endsection

