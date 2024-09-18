@extends('layouts.front')

@section('content')
    <div class="container">
        
        @include("frontend.partials.navbar")
        
        @include("frontend.partials.navbar2")

        @include("frontend.partials.healthandfitness")

        @include("frontend.partials.trainingtips")

        @include("frontend.partials.runningstories")

        @include("frontend.partials.footer")

    </div>
@endsection
