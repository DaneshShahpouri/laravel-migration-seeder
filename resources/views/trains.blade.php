@extends('layout/main-layout')

@section('content')

<div class="container my-2">

    @foreach($trainsList as $singleTrain)
        
    <div class="card">
        <div class="card-header d-flex justify-content-between {{$singleTrain['is_delete'] == 1 ? 'bg-warning' :  ($singleTrain['is_delete'] === 0 ? 'bg-primary' : 'bg-secondary')}}">
            <h5 class="text-white">{{$singleTrain['train_code']}}</h5>
            <span class="text-white">per: <strong class="px-2">{{isset($singleTrain['last_station']) ? $singleTrain['last_station'] : '?' }}</strong> </span>
        </div>
        <div class="card-body">
            <div class="arrivals d-flex">
                <span class="card-title">In arrivo da:</span> 
                <strong class="px-2">{{isset($singleTrain['first_station']) ? $singleTrain['first_station'] : '?' }}</strong>
            </div>

            <div class="deatils d-flex">
                <div class="container my-3">
                    <span class="card-title">Partenza:</span> 
                    <strong class="px-2">{{isset($singleTrain['departure_time']) ? substr($singleTrain['departure_time'], 0,5) : '?' }}</strong>
                    <strong class="px-2">{{isset($singleTrain['departure_date']) ? $singleTrain['departure_date'] : '' }}</strong>
                </div>

        
                <div class="container my-3">
                    <span class="card-title">Arrivo previsto:</span> 
                    <strong class="px-2">{{isset($singleTrain['arrival_time']) ? substr($singleTrain['arrival_time'], 0,5) : '?' }}</strong>
                    <strong class="px-2">{{isset($singleTrain['arrival_date']) ? $singleTrain['arrival_date'] : '' }}</strong>
                </div>
            </div>

            <div class="container d-flex flex-colum">
                <div class="container-fluid">
                    <i class="fa-solid fa-train"></i>
                    <span>{{isset($singleTrain['wagons_number']) ? $singleTrain['wagons_number'] : '?' }}</span>
                </div>
            </div>

            <div class="container d_flex">
                <span class="{{$singleTrain['is_delete'] == 1 ? 'text-warning' :  ($singleTrain['is_delete'] === 0 ? 'text-primary' : '')  }}">{{$singleTrain['is_delete'] == 1 ? 'CANCELLATO' : ($singleTrain['is_delete'] === 0 ? 'DISPONIBILE' : 'INCOGNITO') }}</span>
            </div>

        
        </div>
      </div>

    @endforeach

</div>
    
@endsection