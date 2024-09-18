@extends('layouts.front')

@section('content')
    <div class="container">
        
        @include("frontend.partials.navbar")
        
        @include("frontend.partials.navbar2")

        @include("frontend.partials.generalquestions")

        @include("frontend.partials.campspecifics")

        @include("frontend.partials.stillhavequestions")

        @include("frontend.partials.footer")

    </div>
@endsection
