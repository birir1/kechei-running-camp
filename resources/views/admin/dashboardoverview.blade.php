@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4>Total Users</h4>
                    <p>{{ $totalUsers ?? '0' }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4>Total Events</h4>
                    <p>{{ $totalEvents ?? '0' }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
