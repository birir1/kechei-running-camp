@extends('layouts.front')

@section('content')
    <div class="container">
        
        @include("frontend.partials.navbar")
        
        @include("frontend.partials.navbar2")

        @include("frontend.partials.milestones")

        @include("frontend.partials.howwestarted")

        @include("frontend.partials.significantevents")

        @include("frontend.partials.footer")

    </div>
@endsection
