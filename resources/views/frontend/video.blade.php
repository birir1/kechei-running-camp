@extends('layouts.front')

@section('content')
    <div class="container">
        
        @include("frontend.partials.navbar")
        
        @include("frontend.partials.navbar2")

        @include("frontend.partials.trainingtuitorials")

        @include("frontend.partials.runningmotivation")

        @include("frontend.partials.subscribe")

        @include("frontend.partials.footer")

    </div>
@endsection
