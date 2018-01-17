@extends('layouts.app')
@section('content')
  
  <div class="container">
    <div class="row">
        <div class="display-1">
            <h3>Bibliotēkas katalogs</h3></div>
        <form action="/result">
          <div class="input-group col-xs-4">
            <input type="text" class="form-control " name="nosaukums" placeholder="Nosaukums">
              <div class="input-group-btn">
                <button class="btn btn-success" type="submit">Meklēt</button>
              </div>
          </div>        
        </form> 

        <form action="/result2">
          <input class="btn" type="submit" id="special" value="Izvērstā meklēšana"></form>  
        <br>

        <?php $count=0;?>
          @foreach($resultats as $value) <?php $count++; ?>@endforeach
        <div class="content">
            <?php echo "Rezultāti: ".$count;?>
            <br>
            @if(session('info'))
            <br>
            <div class="alert alert-info">
                {{session('info')}}</div>
            @endif
        </div>
    </div>
      
    <center>    
          <table class="table table-hover">
              <thead>
                <tr>
                  <th>Autors</th>
                  <th>Nosaukums</th>
                  <th>Gads</th>
                  <th>Lpp</th>
                  <th>Formāts</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                 @foreach($resultats as $value)
                    <tr>
                      <td>{{$value->autors}}</td>
                      <td>{{$value->nosaukums}}</td>
                      <td>{{$value->gads}}</td>
                      <td>{{$value->lpp}}</td>
                      <td>{{$value->formats}}</td>
                      <td>
                        <a href="{{ url('result', $value->id) }}">
                        <button class="btn btn-success">Skatīt</button></a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
    </center>  
  </div>
@include('footer')       
@endsection