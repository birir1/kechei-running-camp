@extends('layouts.front')

@section('title', 'Packages Page')

@section('content')
    <div class="container">
        
        @include("frontend.partials.navbar")
        
        @include("frontend.partials.navbar2")

        @include("frontend.partials.packages")

        @include("frontend.partials.footer")

    </div>
@endsection
