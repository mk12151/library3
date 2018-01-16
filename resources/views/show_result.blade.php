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
             @if ($resurs->autors==NULL && $resurs->gads==NULL)
                    <h4>{{ $resurs->nosaukums }}  </h4>
             @endif

             @if ($resurs->autors!=NULL && $resurs->gads!=NULL)
              <h4> {{$resurs->autors}}, {{ $resurs->gads}}. {{ $resurs->nosaukums }}  </h4>
            @endif

             @if ($resurs->autors==NULL && $resurs->gads!=NULL)
              <h4>{{ $resurs->nosaukums }}, {{ $resurs->gads}}</h4>
            @endif

             @if ($resurs->autors!=NULL && $resurs->gads==NULL)
              <h4> {{$resurs->autors}}, {{ $resurs->nosaukums }}  </h4>
            @endif



                </div>
               

                <div class="panel-body">
                    <p>Lappaspuses: {{ $resurs->lpp}}</p>
                    <p>Formāts: {{ $resurs->formats}}</p>
                    <p>UDK: {{ $resurs->udk}}</p>
                    <p>Atslēgvārdi: {{ $resurs->atslegvardi}}</p>

                    



             @if ($resurs->gramata!=NULL)
             <p>Meteriāla veids: Grāmata</p>
             <p>ISBN: {{ $resurs->gramata->ISBN}}</p>       @endif
              @if ($resurs->zurnals!=NULL)
             <p>Meteriāla veids: Žurnāls</p>
             <p>ISSN: {{ $resurs->zurnals->ISSN}}</p>
             <p>nr: {{ $resurs->zurnals->nr}}</p>
                  @endif
                  

                  <a href="{{ url('/result') }}"><button class="btn btn-success">Atpakaļ</button></a>
                </div>
           
                    

                </div>

                
            </div>
        </div>
    </div>
</div>
              

</body>
</html>

