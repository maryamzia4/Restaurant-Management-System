@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Booking</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('bookings.update', $booking->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" value="{{ $booking->name }}" class="form-control" placeholder="Name">
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="text" name="email" value="{{ $booking->email }}" class="form-control" placeholder="Email">
        </div>

        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" name="phone" value="{{ $booking->phone }}" class="form-control" placeholder="Phone">
        </div>

        <div class="form-group">
            <label for="booking_time">Booking Time:</label>
            <input type="datetime-local" name="booking_time" value="{{ $booking->booking_time }}" class="form-control" placeholder="Booking Time">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
