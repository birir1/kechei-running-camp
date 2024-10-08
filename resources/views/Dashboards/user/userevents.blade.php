@extends('layouts.userdashboard')

@section('content')
    <h2>Upcoming Events</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Date</th>
                <th>Posted By</th>
                <th>Posted At</th>
            </tr>
        </thead>
        <tbody>
            @if ($events->isEmpty())
                <tr>
                    <td colspan="5">No current events available.</td>
                </tr>
            @else
                @foreach ($events as $event)
                    <tr>
                        <td>{{ $event->title }}</td>
                        <td>{{ $event->description }}</td>
                        <td>{{ $event->event_date->format('d-m-Y H:i') }}</td>
                        <td>{{ $event->posted_by }}</td>
                        <td>{{ $event->created_at->format('d-m-Y H:i') }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection
