@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Packages</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('packages.create') }}" class="btn btn-primary">Create Package</a>

    @if($packages->isEmpty())
        <p>No packages found.</p>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Duration (days)</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($packages as $package)
                    <tr>
                        <td>{{ $package->name }}</td>
                        <td>{{ $package->description }}</td>
                        <td>${{ number_format($package->price, 2) }}</td>
                        <td>{{ $package->duration }}</td>
                        <td>
                            <a href="{{ route('packages.edit', $package) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('packages.destroy', $package) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
