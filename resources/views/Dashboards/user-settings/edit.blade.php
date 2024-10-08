@extends('layouts.app')

@section('content')
<div class="container">
    <h1>User Settings</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('user.settings.update') }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $user->email) }}" required>
        </div>

        <div class="form-group">
            <label for="password">New Password (leave blank if not changing)</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirm New Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
        </div>
        <div class="form-group">
            <label for="notifications">Receive Notifications</label>
            <select name="notifications" id="notifications" class="form-control">
                <option value="1" {{ $user->notifications ? 'selected' : '' }}>Yes</option>
                <option value="0" {{ !$user->notifications ? 'selected' : '' }}>No</option>
            </select>
        </div>
        

        <button type="submit" class="btn btn-primary">Update Settings</button>
    </form>
</div>
@endsection
