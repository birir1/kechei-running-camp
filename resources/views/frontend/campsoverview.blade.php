@extends('layouts.front')

@section('content')
    <div class="container">
        
        @include("frontend.partials.navbar")
        
        @include("frontend.partials.navbar2")

        @include("frontend.partials.trainingprograms")

        @include("frontend.partials.recentcamps")

        @include("frontend.partials.whyjoinus")

        @include("frontend.partials.footer")

    </div>
@endsection
