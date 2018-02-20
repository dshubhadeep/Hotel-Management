@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <a href="/home" class="btn btn-default">Go Back</a>
        <h2 align="center">Reciepts</h2><br><br>
    </div>
    @if(count($bills) > 0)
        <table class="table table-striped">
            <tr>
                <th>Booking ID</th>
                <th>Room No.</th>
                <th>Tariff</th>
                <th>Check In</th>
                <th>Check Out</th>
            </tr>
            @foreach($bills as $bill)
            <tr>
                <td>{{$bill->bookingId}}</td>
                <td>{{$bill->roomNo}}</td>
                <td>{{$bill->cost}}</td>
                <td>{{$bill->checkIn}}</td>
                <td>{{$bill->checkOut}}</td>
            </tr>
            @endforeach
        </table>
    @else
        <p class="text-center">No reciepts found</p>
    @endif
</div>
@endsection