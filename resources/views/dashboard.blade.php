@extends('layout.layout')

@section('content')
    <div class="row">
        <!-- sidebar left column -->
        <div class="col-xs-12 col-sm-3">
            <p>Left Column (3 units)</p>
        </div>

        <!-- post column -->
        <div class="col-xs-12 col-sm-6">
            @include('shared.success_message')
            @include('shared.post_form')
            @include('shared.post_card')
        </div>

         <!-- sidebar right column -->
        <div class="col-xs-12 col-sm-3">
            <p>Right Column (3 units)</p>
        </div>
    </div>
@endsection