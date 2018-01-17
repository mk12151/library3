@extends('layouts.app')
@section('content')



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h4>Izvērstā meklēšana  </h4>
                </div>
               

                <div class="panel-body">
                    <form method="GET" action="{{ url('advanced') }}">

                      {{csrf_field()}}

                         <h4>Atrast pēc: </h4>
  <div class="form-group">
    <label for="exampleFormControlInput1">Autora</label>
    <input type="text" class="form-control" name="autors" id="exampleFormControlInput1" placeholder="Vārds, Uzvārds">
  </div>


<div class="form-group">
    <label for="exampleFormControlInput1">Nosaukuma</label>
    <input type="text" class="form-control" name="nosaukums" id="exampleFormControlInput1" placeholder="Nosaukums">
  </div>

<div class="form-group">
    <label for="exampleFormControlInput1">Atslēgvārda</label>
    <input type="text" class="form-control" name="atslegvardi" id="exampleFormControlInput1" placeholder="Atslēgvārds">
  </div>

<div class="form-group">
   <label for="exampleFormControlInput1">Gads no</label>
    <input type="text" class="form-control" name="gads_no" id="exampleFormControlInput1" placeholder="no">
  </div>

<div class="form-group">
  <label for="exampleFormControlInput1">Gads līdz</label>
    <input type="text" class="form-control" name="lidz" id="exampleFormControlInput1" placeholder="līdz">
  </div>               

                  <input type="submit" value="Meklēt" class="btn btn-success"> 
                    </form>   
                    <br>
                    <a href="{{ url('/') }}"><button class="btn btn-success">Atpakaļ</button></a>

                     

                    </div>

                </div>

                
            </div>
        </div>
    </div>

@include('footer')
@endsection