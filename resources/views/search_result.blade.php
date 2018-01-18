@extends('layouts.app')
@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h4>@lang('messages.adv_ser')</h4>
                </div>
               

                <div class="panel-body">
                    <form method="GET" action="{{ url('advanced') }}">

                      {{csrf_field()}}

                         <h4>@lang('messages.ser_by'): </h4>
  <div class="form-group">
    <label for="exampleFormControlInput1">@lang('messages.author')</label>
    <input type="text" class="form-control" name="autors" id="exampleFormControlInput1" placeholder="@lang('messages.nam_surn')">
  </div>


<div class="form-group">
    <label for="exampleFormControlInput1">@lang('messages.title')</label>
    <input type="text" class="form-control" name="nosaukums" id="exampleFormControlInput1" placeholder="@lang('messages.title')">
  </div>

<div class="form-group">
    <label for="exampleFormControlInput1">@lang('messages.atsv')</label>
    <input type="text" class="form-control" name="atslegvardi" id="exampleFormControlInput1" placeholder="@lang('messages.atsv')">
  </div>

<div class="form-group">
   <label for="exampleFormControlInput1">@lang('messages.year_from')</label>
    <input type="text" class="form-control" name="gads_no" id="exampleFormControlInput1" placeholder="@lang('messages.year_from')">
  </div>

<div class="form-group">
  <label for="exampleFormControlInput1">@lang('messages.year_to')</label>
    <input type="text" class="form-control" name="lidz" id="exampleFormControlInput1" placeholder="@lang('messages.year_to')">
  </div>               

                  <input type="submit" value="@lang('messages.search')" class="btn btn-success"> 
                    </form>   
                    <br>
                    <a href="{{ url('/') }}"><button class="btn btn-success">@lang('messages.back')</button></a>

                     

                    </div>

                </div>

                
            </div>
        </div>
    </div>

@include('footer')
@endsection