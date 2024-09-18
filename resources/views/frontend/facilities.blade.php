@extends('layouts.front')

@section('content')
    <div class="container">
        
        @include("frontend.partials.navbar")
        
        @include("frontend.partials.navbar2")

        @include("frontend.partials.trainingground")

        @include("frontend.partials.accomodationdetails")

        @include("frontend.partials.facilityhighlight")

        @include("frontend.partials.footer")

    </div>
@endsection
