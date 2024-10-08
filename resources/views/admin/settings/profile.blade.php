@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Profile Settings</h1>
    <form action="{{ route('admin.settings.profile') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ Auth::user()->email }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Profile</button>
    </form>
</div>
@endsection
