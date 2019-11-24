@extends('layouts.products')

@section('title', '- PC Games')

@section('content')
    <h1 class="d-flex justify-content-center" style="padding-bottom: 3rem;">PC Games</h1>
    @if(isset($pcGames))
        @foreach($pcGames as $pcGame)
            @if($pcGame->game_id % 3 === 0)
                <div class="card bg-light products-right-pc">
                    <a href="/pc/{{ $pcGame->slug }}"><img src="{{ asset($pcGame->image) }}" class="card-img-top" alt="pcgame"></a>
                    <div class="card-body">
                        <h1 class="card-text text-center">{{ $pcGame->name }}</h1>
                        <h3 class="card-text"><b>{{ $pcGame->price }}</b></h3>
                    </div>
                </div>
            @elseif($pcGame->game_id === 37 || 
                    $pcGame->game_id === 40 ||
                    $pcGame->game_id === 43 ||
                    $pcGame->game_id === 46)
                <div class="card bg-light products-center-pc">
                    <a href="/pc/{{ $pcGame->slug }}"><img src="{{ asset($pcGame->image) }}" class="card-img-top" alt="pcgame"></a>
                    <div class="card-body">
                        <h1 class="card-text text-center">{{ $pcGame->name }}</h1>
                        <h3 class="card-text"><b>{{ $pcGame->price }}</b></h3>
                    </div>
                </div>
            @else
                <div class="card bg-light products-left-pc">
                    <a href="/pc/{{ $pcGame->slug }}"><img src="{{ asset($pcGame->image) }}" alt="pcgame"></a>
                    <div class="card-body">
                        <h1 class="card-text text-center">{{ $pcGame->name }}</h1>
                        <h3 class="card-text"><b>{{ $pcGame->price }}</b></h3>
                    </div>
                </div>
            @endif 
        @endforeach 
    @endif
@endsection