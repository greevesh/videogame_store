@extends('layouts.app')

@section('title', '- PC Games')

@section('content')
    <h1 class="d-flex justify-content-center" style="padding-bottom: 3rem;">PC Games</h1>
    <hr style="width: 90%;" class="mt-1 mb-5">
    @if(isset($pcGames))
        @foreach($pcGames as $pcGame)
            @if($pcGame->game_id % 3 == 0)
                <div class="products-right-pc text-right card">
                    <a href="/pc/{{ $pcGame->slug }}"><img src="{{ asset($pcGame->image) }}" class="card-img-top" alt="playstationgame"></a>
                    <div class="card-body">
                        <h2 class="pc-name card-text text-center">{{ $pcGame->name }}</h2>
                        <h4 class="price card-text">£{{ $pcGame->price }}</h4>
                    </div>
                </div>
            @elseif($pcGame->game_id == 38 or 
                    $pcGame->game_id == 41 or
                    $pcGame->game_id == 44 or
                    $pcGame->game_id == 47)
                <div class="products-center-pc text-right card" >
                    <a href="/pc/{{ $pcGame->slug }}"><img src="{{ asset($pcGame->image) }}" class="card-img-top" alt="playstationgame"></a>
                    <div class="card-body">
                        <h2 class="pc-name card-text text-center">{{ $pcGame->name }}</h2>
                        <h4 class="price card-text">£{{ $pcGame->price }}</h4>
                    </div>
                </div>
            @else
                <div class="products-left-pc text-left card">
                    <a href="/pc/{{ $pcGame->slug }}"><img class="products-left-pc-img" src="{{ asset($pcGame->image) }}" alt="playstationgame"></a>
                    <div class="card-body">
                        <h2 class="pc-name card-text text-center">{{ $pcGame->name }}</h2>
                        <h4 class="price card-text">£{{ $pcGame->price }}</h4>
                    </div>
                </div>
            @endif 
        @endforeach 
    @endif
@endsection