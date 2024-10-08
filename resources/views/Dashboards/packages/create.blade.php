@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Package</h1>

    <form action="{{ route('packages.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Package Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="price">Price ($)</label>
            <input type="number" name="price" id="price" class="form-control" required step="0.01" min="0">
        </div>

        <div class="form-group">
            <label for="duration">Duration (days)</label>
            <input type="number" name="duration" id="duration" class="form-control" required min="1">
        </div>

        <button type="submit" class="btn btn-primary">Create Package</button>
    </form>
</div>
@endsection
