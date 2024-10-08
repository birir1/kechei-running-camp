@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Notification Settings</h1>
    <form action="{{ route('admin.settings.notifications') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="email_notifications">Email Notifications</label>
            <select name="email_notifications" class="form-control">
                <option value="enabled" {{ Auth::user()->email_notifications == 'enabled' ? 'selected' : '' }}>Enabled</option>
                <option value="disabled" {{ Auth::user()->email_notifications == 'disabled' ? 'selected' : '' }}>Disabled</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update Notifications</button>
    </form>
</div>
@endsection
