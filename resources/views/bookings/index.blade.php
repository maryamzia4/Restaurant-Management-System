@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Bookings</h1>
    <a href="{{ route('bookings.create') }}" class="btn btn-primary">Create Booking</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
    
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Booking Time</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($bookings as $booking)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $booking->name }}</td>
            <td>{{ $booking->email }}</td>
            <td>{{ $booking->phone }}</td>
            <td>{{ $booking->booking_time }}</td>
            <td>
                <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('bookings.show', $booking->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('bookings.edit', $booking->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $bookings->links() !!}
</div>
@endsection
