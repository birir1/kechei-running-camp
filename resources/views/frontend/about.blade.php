@extends('layouts.front')

@section('content')
    <div class="container">
        
        @include("frontend.partials.navbar")
        
        @include("frontend.partials.navbar2")

        {{-- @include("frontend.partials.landing") --}}

        @include("frontend.partials.history")

        @include("frontend.partials.footer")

    </div>
@endsection
