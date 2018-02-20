@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h2 align="center">Welcome, {{Auth::user()->name}}</h2><br><br>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            @include('messages')

            <div class="panel panel-default">
                <div class="panel-heading text-center">Dashboard</div>

                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="/bookroom">Book room</a></li>
                        <li class="list-group-item"><a href="/view">View Reciepts</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
