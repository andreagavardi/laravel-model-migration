@extends('layout.app')
@section('title','Home-Viaggi')

@section('main_content')
<div class="container">
    <div class="tours">
        @foreach($tours as $tour)
        <div class="tour">
            <img src="{{$tour->poster}}" alt="">
            <h3>{{$tour->title}}</h3>
            <div class="tour_details">
                <div class="dep">
                    <i class="far fa-calendar-alt"></i>
                    <span>{{$tour->departure_on}}</span> >>
                    <span>{{$tour->return_on}}</span>
                </div>
                <div class="tour_dep">
                    <i class="fas fa-plane-departure"></i>
                    <span>Voli da: {{$tour->departure_airport}}</span>
                </div>
                <div class="tour_desc">
                    <p>{{$tour->desc}}</p>
                </div>
                <div class="tour_price">
                    <span class="price">{{$tour->price}}</span>
                    <span>€/persona</span>
                    <a href="#">Prenota</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
