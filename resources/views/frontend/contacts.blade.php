@extends('layouts.front')

@section('content')
    <div class="container">
        
        @include("frontend.partials.navbar")
        
        @include("frontend.partials.navbar2")

        @include("frontend.partials.reachout")

        @include("frontend.partials.findushere")

        @include("frontend.partials.customersupport")

        @include("frontend.partials.footer")

    </div>
@endsection
