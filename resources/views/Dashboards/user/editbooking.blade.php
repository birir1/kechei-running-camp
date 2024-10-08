@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Booking</h1>
    
    <form action="{{ route('user.bookings.update', $booking->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="user_id" class="form-label">User ID</label>
            <input type="text" name="user_id" class="form-control" value="{{ $booking->user_id }}" required>
        </div>

        <div class="mb-3">
            <label for="event_id" class="form-label">Event</label>
            <select name="event_id" class="form-control" required>
                @foreach($events as $event)
                    <option value="{{ $event->id }}" {{ $event->id == $booking->event_id ? 'selected' : '' }}>{{ $event->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="booking_date" class="form-label">Booking Date</label>
            <input type="date" name="booking_date" class="form-control" value="{{ $booking->booking_date }}" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" class="form-control">
                <option value="pending" {{ $booking->status == 'pending' ? 'selected' : '' }}>Pending</option>
                <option value="confirmed" {{ $booking->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                <option value="canceled" {{ $booking->status == 'canceled' ? 'selected' : '' }}>Canceled</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="comments" class="form-label">Comments</label>
            <textarea name="comments" class="form-control" rows="3">{{ $booking->comments }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Booking</button>
    </form>
</div>
@endsection
