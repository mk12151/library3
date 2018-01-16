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


</style>

    </head>
<body>

    
        @include('header')
  



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h4>Izvērstā meklēšana  </h4>
                </div>
               

                <div class="panel-body">
                    <form action="/result">
                         <h4>Atrast pēc: </h4>
  <div class="form-group">
    <label for="exampleFormControlInput1">Autora</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Vārds, Uzvārds">
  </div>


<div class="form-group">
    <label for="exampleFormControlInput1">Nosaukuma</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nosaukums">
  </div>

<div class="form-group">
    <label for="exampleFormControlInput1">Atslēgvārda</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Atslēgvārds">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">ISBN</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ISBN">
  </div>

  <div class="form-group">
    <label for="exampleFormControlInput1">ISSN</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ISSN">
  </div>

<div class="form-group">
   <label for="exampleFormControlInput1">Gads no</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="no">
  </div>

<div class="form-group">
  <label for="exampleFormControlInput1">Gads līdz</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="līdz">
  </div>               

                  <input type="submit" value="Meklēt" class="btn btn-success">
                    </form>   
                    <br>

                    <a href="{{ url('index.php') }}"><button class="btn btn-success">Atpakaļ</button></a>

                    </div>

                </div>

                
            </div>
        </div>
    </div>

     @include('footer')
       




</body>

</html>

