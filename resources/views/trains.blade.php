@extends('layout/main-layout')

@section('content')

<div class="container my-2">

    @foreach($trainsList as $singleTrain)
        
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h5>{{$singleTrain['train_code']}}</h5>
            <span>per: <strong class="px-2">{{$singleTrain['last_station']}}</strong> </span>
        </div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>

    @endforeach

</div>

    
@endsection
