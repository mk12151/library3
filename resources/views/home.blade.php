@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                     @foreach($errors->all() as $message)
                        <p class="has-error">{{ $message }}</p>
                    @endforeach

                   <h4>@lang('messages.auhorized'), {{ Auth::user()->name }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@include('footer')
@endsection
