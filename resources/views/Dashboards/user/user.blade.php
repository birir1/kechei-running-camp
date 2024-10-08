{{-- @extends('layouts.app')

@section('content')
    <!-- Include Sidebar -->
    @include('includes.usersidebar')

    <!-- Main Content Area -->
    <div class="main-content" style="margin-left: 270px; padding: 40px;">
        <div class="container-fluid">
            <h3>User Dashboard</h3>
            
            <!-- Yield different sections like user profile, training plans, etc. -->
            @yield('dashboard-content')
        </div>
    </div>
@endsection --}}



@extends('layouts.app')

@section('content')
    <!-- Include Sidebar -->
    @include('includes.usersidebar')

    <!-- Main Content Area -->
    <div class="main-content" style="margin-left: 270px; padding: 40px;">
        <div class="container-fluid">
            <h3>User Dashboard</h3>

            <!-- Yield different sections like user profile, training plans, etc. -->
            @yield('dashboard-content')

            <!-- Current Posted Events Section -->
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
        </div>
    </div>
@endsection
