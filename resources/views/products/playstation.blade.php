@extends('layouts.app')

@section('title', '- Playstation Games')

@section('content')
    <h1 class="d-flex justify-content-center" style="padding-bottom: 3rem;">Playstation Games</h1>
    <hr style="width: 90%;" class="mt-1 mb-5">
    @if(isset($playstationGames))
        @foreach($playstationGames as $playstationGame)
            @if($playstationGame->game_id % 3 === 0)
                <div class="products-right-playstation text-right card">
                    <a href="/playstation/{{ $playstationGame->slug }}"><img src="{{ asset($playstationGame->image) }}" class="card-img-top" alt="playstationgame"></a>
                    <div class="card-body">
                        <h2 class="card-text text-center">{{ $playstationGame->name }}</h2>
                        <h4 class="price card-text">£{{ $playstationGame->price }}</h4>
                    </div>
                </div>
            @elseif($playstationGame->game_id === 2 or 
                    $playstationGame->game_id === 5 or
                    $playstationGame->game_id === 8 or
                    $playstationGame->game_id === 11)
                <div class="products-center-playstation text-right card">
                    <a href="/playstation/{{ $playstationGame->slug }}"><img src="{{ asset($playstationGame->image) }}" class="card-img-top" alt="playstationgame"></a>
                    <div class="card-body">
                        <h2 class="card-text text-center">{{ $playstationGame->name }}</h2>
                        <h4 class="price card-text">£{{ $playstationGame->price }}</h4>
                    </div>
                </div>
            @else
                <div class="products-left-playstation text-left card">
                    <a href="/playstation/{{ $playstationGame->slug }}"><img src="{{ asset($playstationGame->image) }}" alt="playstationgame"></a>
                    <div class="card-body">
                        <h2 class="card-text text-center">{{ $playstationGame->name }}</h2>
                        <h4 class="price card-text">£{{ $playstationGame->price }}</h4>
                    </div>
                </div>
            @endif 
        @endforeach 
    @endif
@endsection