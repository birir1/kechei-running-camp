<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
</head>
<body>
    <h1>Welcome, {{ $user->name }}</h1>

    <h2>Your Dashboard</h2>
    
    <!-- Other dashboard content can go here -->

    <h2>Current Posted Events</h2>

    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Event Date</th>
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
                        <td>{{ $event->admin->name }}</td>
                        <td>{{ $event->created_at->format('d-m-Y') }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</body>
</html>