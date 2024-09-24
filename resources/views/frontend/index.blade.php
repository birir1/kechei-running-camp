@extends('layouts.front')

@section('title', 'Home Page')

@section('content')
    <div class="container">
        
        @include("frontend.partials.navbar")
        
        @include("frontend.partials.navbar2")

        @include("frontend.partials.landing")

        @include("frontend.partials.experience")

        @include("frontend.partials.vidsec")

        @include("frontend.partials.why")

        @include("frontend.partials.footer")

    </div>
@endsection
