@extends('layouts.front')

@section('title', 'About Page')

@section('content')
    <div class="container">
        
        @include("frontend.partials.navbar")
        
        @include("frontend.partials.navbar2")

        @include("frontend.partials.history")

        @include("frontend.partials.ourcouches")

        @include("frontend.partials.footer")

    </div>
@endsection
