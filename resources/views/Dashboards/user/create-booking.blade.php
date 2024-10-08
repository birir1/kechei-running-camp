@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Booking</h1>

    <form action="{{ route('user.bookings.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="event_id">Select Event</label>
            <select name="event_id" id="event_id" class="form-control" required>
                <option value="">Choose an event</option>
                @foreach($events as $event)
                    <option value="{{ $event->id }}">{{ $event->title }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="booking_time">Booking Time</label>
            <input type="datetime-local" name="booking_time" id="booking_time" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Create Booking</button>
    </form>
</div>
@endsection
