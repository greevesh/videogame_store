@extends('layouts.products')

@section('title', '- PC Games')

<script src="https://js.stripe.com/v3/"></script>

@section('content')
    <h1 class="d-flex justify-content-center" style="padding-bottom: 3rem;">PC Games</h1>
    <hr style="width: 90%;" class="mt-1 mb-5">
    @if(isset($pcGames))
        @foreach($pcGames as $pcGame)
            @if($pcGame->game_id % 3 === 0)
                <div class="products-right-pc text-right card">
                    <a href="/playstation/{{ $pcGame->slug }}"><img src="{{ asset($pcGame->image) }}" class="card-img-top" alt="playstationgame"></a>
                    <div class="card-body">
                        <h2 class="card-text text-center">{{ $pcGame->name }}</h2>
                        <h4 class="price card-text">£{{ $pcGame->price }}</h4>
                    </div>
                </div>
            @elseif($pcGame->game_id === 38 || 
                    $pcGame->game_id === 41 ||
                    $pcGame->game_id === 44 ||
                    $pcGame->game_id === 47)
                <div class="products-center-pc text-right card" >
                    <a href="/playstation/{{ $pcGame->slug }}"><img src="{{ asset($pcGame->image) }}" class="card-img-top" alt="playstationgame"></a>
                    <div class="card-body">
                        <h2 class="card-text text-center">{{ $pcGame->name }}</h2>
                        <h4 class="price card-text">£{{ $pcGame->price }}</h4>
                    </div>
                </div>
            @else
                <div class="products-left-pc text-left card">
                    <a href="/playstation/{{ $pcGame->slug }}"><img src="{{ asset($pcGame->image) }}" alt="playstationgame"></a>
                    <div class="card-body">
                        <h2 class="card-text text-center">{{ $pcGame->name }}</h2>
                        <h4 class="price card-text">£{{ $pcGame->price }}</h4>
                    </div>
                </div>
            @endif 
        @endforeach 
    @endif
@endsection