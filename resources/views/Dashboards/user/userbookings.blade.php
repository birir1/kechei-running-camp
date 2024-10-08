@extends('layouts.app') <!-- Make sure you have a layout file -->

@section('content')
    <h1>Your Bookings</h1>
    
    @if($bookings->isEmpty())
        <p>No bookings found.</p>
    @else
        <table class="table mt-4">
            <thead>
                <tr>
                    <th>Event Name</th>
                    <th>Booking Time</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $booking)
                    <tr>
                        <td>{{ $booking->event->name }}</td> <!-- Assuming event has a 'name' attribute -->
                        <td>{{ $booking->booking_date }}</td>
                        <td>{{ $booking->status }}</td>
                        <td>
                            <a href="{{ route('user.bookings.show', $booking->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('user.bookings.edit', $booking->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('user.bookings.destroy', $booking->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
