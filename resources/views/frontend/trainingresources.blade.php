@extends('layouts.front')

@section('content')
    <div class="container">
        
        @include("frontend.partials.navbar")
        
        @include("frontend.partials.navbar2")

        @include("frontend.partials.nutritionplans")

        @include("frontend.partials.trainingguide")

        @include("frontend.partials.experttips")

        @include("frontend.partials.footer")

    </div>
@endsection
