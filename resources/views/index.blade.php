@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    <h1 class="text-center">Benvenuti in Trenitalia</h1>
    
    <div class="container-fluid fs-2">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Agenzia</th>
                    <th scope="col">Partenza da</th>
                    <th scope="col">Arrivo a</th>
                    <th scope="col">Orario di partenza</th>
                    <th scope="col">Orario di arrivo</th>
                    <th scope="col">Numero carrozze</th>
                    <th scope="col">E' in orario?</th>
                    <th scope="col">E' stato cancellato?</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                <tr>
                    <td>{{$train->company}}</td>
                    <td>{{$train->depature_station}}</td>
                    <td>{{$train->arrival_station}}</td>
                    <td>{{$train->departure_time}}</td>
                    <td>{{$train->arrival_time}}</td>
                    <td>{{$train->number_of_carriages}}</td>
                    <td>
                        @if ($train->is_in_time === 1)
                            <span>Sì</span>
                        @else
                            <span>No </span>
                        @endif
                    </td>
                    <td>
    
                        @if ($train->is_canceled === 1)
                            <span>Sì</span>
                        @else
                            <span>No </span>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
@endsection
