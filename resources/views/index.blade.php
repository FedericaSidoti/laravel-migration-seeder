@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <h1>Homepage</h1>
    @foreach ($trains as $train)
        <p>{{$train->company}}</p>
        <p>{{$train->departure_station}}</p>
        <p>{{$train->arrival_station}}</p>
        <p>{{$train->departure_time}}</p>
        <p>{{$train->arrival_time}}</p>
        <p>{{$train->number_of_carriages}}</p>
        <p>Il treno è in orario?</p>
        @if ($train->is_in_time === 1)
            <span>Sì</span>
        @else
            <span>No </span>
        @endif
        <p>Il treno è stato cancellato?</p>
        
        @if ($train->is_canceled === 1)
            <span>Sì</span>
        @else
            <span>No </span>
        @endif
    @endforeach
    
@endsection
