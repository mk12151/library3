<!doctype html>
<html>
 <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
<style type="text/css">



     input[type=text], select {
    width: 50%;
    padding: 10px 20px;
    margin: 8px 1px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;}

    input[type=submit] {
    width: 10%;
    background-color: #4CAF50;
    color: white;
    padding: 10px 1px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;}
    .containers{
        margin-top:10vh;
        margin-left:15vh;
        display:inline-block;
        width:150vh;
        font-weight: bold;
    }
    .content{
        margin-left:40vh;
        margin-top:5vh;
        display:inline-block;
        width:90vh;
        font-weight: bold;
        line-height: 2em;
    }

    #special {
    width: 20%;
    background-color: #bbbbbb;
    color: white;
    padding: 10px 20px;
    margin: 1px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: left;
}
#special:hover{
    background-color: #3d3d3d;
}
input[type=submit]:hover {
    background-color: #307033;
}

button[type=button]:hover{
    color:#f44336;
}
button[type=button] {
   
    background-color: #ffffff;
    padding: 0px 0px;
    margin-left:20px;
    border: none;
    color:#3d3d3d;
    font-weight: bold;
    cursor: pointer;}
}



</style>

    </head>
<body>

    
        @include('header')
  



           <div class="containers"> 
<div class="title">Bibliotēkas katalogs </div>
<form action="/result">
  <div>   <input type="text" id="mySearch" name="search" placeholder="Nosaukums...">
          <input type="submit" value="Meklēt"> </div></form>
<form action="/result2"><input type="submit" id="special" value="Izvērstā meklēšana"></form>      
</div>

        <?php $count=-1;?>
         @foreach($data as $value) <?php $count++; ?>@endforeach

<div class="content">
         <?php echo "Rezultāti: ".$count;?>
         <br>
         <label  class="col-sm-2 col-form-label">Kārtot pēc</label><button type="button">Datuma</button>   <button type="button">Nosaukuma</button> </div>



<center>
            
<div class="container">      
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
       @foreach($data as $value)
                     <tr>
                            <td>{{$value->autors}}</td>
                            <td>{{$value->nosaukums}}</td>
                            <td>{{$value->gads}}</td>
                            <td>{{$value->lpp}}</td>
                            <td>{{$value->formats}}</td>
                            <td><a href="{{ url('result', $value->id) }}"><button class="btn btn-success">Skatīt</button></a></td>
                    </tr>
                      @endforeach
    </tbody>
  </table>
</div>


          </center>  
@include('footer')
              

</body>
</html>

