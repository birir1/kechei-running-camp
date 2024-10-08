{{-- resources/views/user/training-plans.blade.php --}}

@extends('layouts.app')

@section('title', 'Training Plans')

@section('content')
<div class="sidebar" style="width: 250px; height: 100vh; background-color: #143009; padding: 20px; color: #eeb601; font-family: 'Times New Roman', Times, serif; position: fixed;">
    <ul style="list-style-type: none; padding: 0;">
        <li style="padding: 10px 0;">
            <a href="{{ route('user.userprofile') }}" style="text-decoration: none; color: #eeb601;">User Profile</a>
        </li>
        <li style="padding: 10px 0;">
            <a href="{{ route('user.trainingplans') }}" style="text-decoration: none; color: #eeb601;">Training Plans</a>
        </li>
        <li style="padding: 10px 0;">
            <a href="{{ route('user.userevents') }}" style="text-decoration: none; color: #eeb601;">Events</a>
        </li>
        <li style="padding: 10px 0;">
            <a href="{{ route('user.userbookings') }}" style="text-decoration: none; color: #eeb601;">Bookings</a>
        </li>
        <li style="padding: 10px 0;">
            <a href="{{ route('user.userpackages') }}" style="text-decoration: none; color: #eeb601;">Packages</a>
        </li>
        <li style="padding: 10px 0;">
            <a href="{{ route('user.usersettings') }}" style="text-decoration: none; color: #eeb601;">Settings</a>
        </li>
        <li style="padding: 10px 0;">
            <a href="/Logout" style="text-decoration: none; color: #eeb601;">Logout</a>
        </li>
    </ul>
</div>

<div class="container" style="margin-left: 270px; padding: 20px;">
    <h2 style="color: #143009;">Training Plans</h2>

    <!-- Form to Add New Training Plan -->
    <form action="{{ route('training-plans.store') }}" method="POST">
        @csrf
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="title" style="color: #143009;">Training Plan Title:</label>
            <input type="text" id="title" name="title" required class="form-control" style="width: 300px;" />
        </div>
        <div class="form-group" style="margin-bottom: 20px;">
            <label for="description" style="color: #143009;">Description:</label>
            <textarea id="description" name="description" required class="form-control" rows="4" style="width: 300px;"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" style="background-color: #143009; border: none;">Add Training Plan</button>
    </form>

    <hr />

    <!-- Existing Training Plans List -->
    <h3 style="color: #143009;">Existing Training Plans</h3>
    <ul style="list-style-type: none; padding: 0;">
        @foreach($trainingPlans as $plan)
            <li style="padding: 10px 0; border-bottom: 1px solid #eeb601;">
                <h4 style="margin: 0; color: #eeb601;">{{ $plan->title }}</h4>
                <p style="margin: 5px 0; color: #fff;">{{ $plan->description }}</p>
                <a href="{{ route('training-plans.edit', $plan->id) }}" style="text-decoration: none; color: #eeb601;">Edit</a>
                <form action="{{ route('training-plans.destroy', $plan->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="background: none; border: none; color: #eeb601; cursor: pointer;">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</div>
@endsection

@section('scripts')
<script>
    // Any custom JavaScript can go here
</script>
@endsection
