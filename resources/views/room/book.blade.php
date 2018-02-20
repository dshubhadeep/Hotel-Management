@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <a href="/home" class="btn btn-default">Go Back</a>

        <h2 align="center">Book Room</h2><br><br>
    </div>
        <div class="col-md-8 col-md-offset-2">

            @include('messages')

            <div class="panel panel-default">
                <div class="panel-body">
                    {!! Form::open(['action' => 'RoomController@book', 'method' => 'POST']) !!}
                        <!-- Room Type -->
                        <div class="form-group">
                            {{Form::label('type', 'Room Type', array('class' => 'control-label'))}} <br>
                            {{Form::radio('type', 'Del')}} Deluxe <br>
                            {{Form::radio('type', 'SupDel')}} Super Deluxe <br>
                            {{Form::radio('type', 'Suite')}} Suite
                        </div>
                        <!--  Room choice  -->
                        <div class="form-group">
                            {{Form::label('choice', 'Room Choice', array('class' => 'control-label'))}} <br>
                            {{Form::radio('choice', 'ac')}} A/C <br>
                            {{Form::radio('choice', 'nac')}} Non A/C <br>
                        </div>
                        <!-- Room view -->
                        <div class="form-group">
                            {{Form::label('view', 'Room View', array('class' => 'control-label'))}} <br>
                            {{Form::radio('view', 'garden')}} Garden View <br>
                            {{Form::radio('view', 'mountain')}} Mountain View <br>
                        </div>
                        <!-- Check In -->
                        <div class="form-group">
                            {{Form::label('checkIn', 'Check In', array('class' => 'control-label'))}} <br>
                            {{Form::date('checkIn')}} <br>
                        </div>
                        <!-- Check In -->
                        <div class="form-group">
                            {{Form::label('checkOut', 'Check Out', array('class' => 'control-label'))}} <br>
                            {{Form::date('checkOut')}} <br>
                        </div>
                        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection