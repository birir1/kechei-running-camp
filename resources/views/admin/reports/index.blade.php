@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Event Reports</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Event ID</th>
                <th>Event Title</th>
                <th>Start Date</th>
                <th>End Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <td>{{ $event->id }}</td>
                    <td>{{ $event->title }}</td>
                    <td>{{ $event->start_date }}</td>
                    <td>{{ $event->end_date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
