@extends('layouts.app2')
@section('content')
  
    <div class="container">
        <div class="row">
            <br><br><br><br>
            <div class="display-1 text-center">
                <h1>Bibliotēkas katalogs</h1></div>
            <br><br>

            <div class="col-sm-2"></div>
            <div class="col-sm-8">

                <form action="/result">
                        <div class="input-group">
                            <input type="text" class="form-control" name="nosaukums" placeholder="Nosaukums">
                                <div class="input-group-btn">
                                    <button class="btn btn-success" type="submit">Meklēt</button>
                                </div>
                        </div>        
                </form> 
                <br>
                <form action="/result2">
                        <input  class="btn" type="submit" id="special" value="Izvērstā meklēšana"></form>

            </div>
            <div class="col-sm-2"></div>
        </div>
    </div>

  @include('footer')   
@endsection