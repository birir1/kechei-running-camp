@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Booking</h1>

    <form action="{{ route('user.bookings.update', $booking) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="event_id">Select Event</label>
            <select name="event_id" id="event_id" class="form-control" required>
                @foreach($events as $event)
                    <option value="{{ $event->id }}" {{ $event->id == $booking->event_id ? 'selected' : '' }}>
                        {{ $event->title }}
                    </option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="booking_time">Booking Time</label>
            <input type="datetime-local" name="booking_time" id="booking_time" class="form-control" value="{{ \Carbon\Carbon::parse($booking->booking_time)->format('Y-m-d\TH:i') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Booking</button>
    </form>
</div>
@endsection
