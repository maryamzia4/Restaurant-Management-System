@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Show Booking</h1>

    <div class="form-group">
        <strong>Name:</strong>
        {{ $booking->name }}
    </div>
    <div class="form-group">
        <strong>Email:</strong>
        {{ $booking->email }}
    </div>
    <div class="form-group">
        <strong>Phone:</strong>
        {{ $booking->phone }}
    </div>
    <div class="form-group">
        <strong>Booking Time:</strong>
        {{ $booking->booking_time }}
    </div>
</div>
@endsection
