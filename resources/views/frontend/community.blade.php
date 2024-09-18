@extends('layouts.front')

@section('content')
    <div class="container">
        
        @include("frontend.partials.navbar")
        
        @include("frontend.partials.navbar2")

        @include("frontend.partials.athletes")

        @include("frontend.partials.eventsgallery")

        @include("frontend.partials.testimonials")

        @include("frontend.partials.footer")

    </div>
@endsection
