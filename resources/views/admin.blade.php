@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Administratora logs</div>
                <div class="panel-body">
                    @if(session()->has('message'))
                        {{ session()->get('message') }}
                    @endif                    
                    <ul class="list">
                       <li><a href="{{ url('crud') }}">Visi Iearksiti</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection