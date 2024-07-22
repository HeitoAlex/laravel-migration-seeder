@extends('layouts.app')

@section('page-title')

@section('main-content')
    @foreach ( $trains as $train )
        <div class="card" style="width: 18rem;">
            <div class="card-header">
            Company : {{ $train->company }}
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">From: {{ $train->departure_station }} <br> To: {{ $train->arrival_station }}</li>
                <li class="list-group-item">Train departing at {{ $train->departure_time}} <br> Expected arrival at: {{ $train->arrival_time }} </li>
                <li class="list-group-item">Train code n. {{ $train->train_code }}</li>
            </ul>
        </div>
    @endforeach
@endsection
