@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Booking Details</h1>
    
    <p><strong>Event Name:</strong> {{ $booking->event->name }}</p> <!-- Assuming event has a 'name' attribute -->
    <p><strong>Booking Time:</strong> {{ $booking->booking_date }}</p>
    <p><strong>Status:</strong> {{ $booking->status }}</p>
    <p><strong>Comments:</strong> {{ $booking->comments }}</p>

    <a href="{{ route('user.bookings.edit', $booking->id) }}" class="btn btn-warning">Edit Booking</a>
    <form action="{{ route('user.bookings.destroy', $booking->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete Booking</button>
    </form>
    <a href="{{ route('user.bookings') }}" class="btn btn-secondary">Back to Bookings</a>
</div>
@endsection
