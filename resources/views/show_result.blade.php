@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-warning">
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
                    
                    <img class="pull-right" src="{{ asset( $resurs->images()['asset_path'].$resurs->images()['image_small'] ) }}" >
                    <p>@lang('messages.pages'): {{ $resurs->lpp}}</p>
                    <p>@lang('messages.format'): {{ $resurs->formats}}</p>
                    <p>@lang('messages.udc'): {{ $resurs->udk}}</p>
                    <p>@lang('messages.atsv'): {{ $resurs->atslegvardi}}</p>

                    @if ($resurs->gramata!=NULL)
                         <p>@lang('messages.res_type'): Grāmata</p>
                         <p>ISBN: {{ $resurs->gramata->ISBN}}</p>
                    @endif
                    @if ($resurs->zurnals!=NULL)
                         <p>@lang('messages.res_type'): Žurnāls</p>
                         <p>ISSN: {{ $resurs->zurnals->ISSN}}</p>
                         <p>Nr.: {{ $resurs->zurnals->nr}}</p>
                    @endif
                    
                  
                  <a href="{{ url('/result') }}"><button class="btn btn-success">@lang('messages.back')</button></a>

                  @if ( !Auth::guest() && Auth::user())
                            <a href="{{ route('sendEmail') }}" class="btn btn-success">@lang('messages.order')</a>
                        @endif

                </div>
                </div>
            </div>
        </div>
    </div>
</div>
              
@include('footer')
@endsection
