@extends('layouts.app')
@section('content')

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
                         <p>ISBN: {{ $resurs->gramata->ISBN}}</p>
                    @endif
                    @if ($resurs->zurnals!=NULL)
                         <p>Meteriāla veids: Žurnāls</p>
                         <p>ISSN: {{ $resurs->zurnals->ISSN}}</p>
                         <p>nr: {{ $resurs->zurnals->nr}}</p>
                    @endif
                  
                  <a href="{{ url('/result') }}"><button class="btn btn-success">Atpakaļ</button></a>

                  @if ( !Auth::guest() && Auth::user())
                            <a href="{{ route('sendEmail') }}" class="btn btn-success">Pasūtīt</a>
                        @endif

                </div>
                </div>
            </div>
        </div>
    </div>
</div>
              
@include('footer')
@endsection
